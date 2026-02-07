<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Dompdf\Dompdf;
use Dompdf\Options;

class LogoController extends Controller
{
    public function index()
    {
        if (!session('logo_access')) {
            return view('logo.password');
        }
        
        return view('logo.downloader');
    }
    
    public function login(Request $request)
    {
        $password = $request->input('password');
        
        if ($password === 'EPC2026!') {
            session(['logo_access' => true]);
            return redirect()->route('logo.downloader');
        }
        
        return back()->withErrors(['password' => 'Mot de passe incorrect']);
    }
    
    public function generate(Request $request)
    {
        if (!session('logo_access')) {
            abort(403);
        }
        
        $request->validate([
            'background' => 'required|in:transparent,white,blue,dark',
            'size' => 'required|in:small,medium,large,xlarge'
        ]);
        
        $background = $request->input('background');
        $size = $request->input('size');
        
        // Définir les tailles
        $sizes = [
            'small' => 150,
            'medium' => 300,
            'large' => 600,
            'xlarge' => 1200
        ];
        
        $logoSize = $sizes[$size];
        
        // Générer le SVG
        $svg = $this->generateSVG($logoSize, $background);
        
        // Convertir SVG en PNG
        $pngData = $this->svgToPng($svg, $logoSize);
        
        // Définir le nom du fichier
        $filename = 'EPC-Plus-Logo-' . $background . '-' . $size . '.png';
        
        // Envoyer l'image au navigateur
        header('Content-Type: image/png');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        header('Content-Length: ' . strlen($pngData));
        echo $pngData;
        exit;
    }
    
    private function generateSVG($size, $background)
    {
        // Calculer les proportions
        $iconSize = $size * 0.3;
        $fontSize = $size * 0.18;
        $subFontSize = $size * 0.045;
        
        // Couleurs
        if ($background === 'dark') {
            $textColor = '#ffffff';
            $iconBgColor = '#3b82f6';
            $accentColor = '#fb923c';
            $subTextColor = '#e2e8f0';
        } else {
            $textColor = '#1e3a8a';
            $iconBgColor = '#1e3a8a';
            $accentColor = '#f97316';
            $subTextColor = '#1e3a8a';
        }
        
        // Positionnement
        $iconX = $size * 0.05;
        $iconY = $size * 0.35;
        $textX = $iconX + $iconSize + $size * 0.04;
        $textY = $iconY + $iconSize * 0.65;
        
        // Créer le SVG
        $svg = '<?xml version="1.0" encoding="UTF-8"?>';
        $svg .= '<svg width="' . $size . '" height="' . $size . '" xmlns="http://www.w3.org/2000/svg">';
        
        // Fond
        if ($background === 'transparent') {
            // Pas de fond pour transparent
        } else {
            $bgColors = [
                'white' => '#ffffff',
                'blue' => '#1e3a8a',
                'dark' => '#0f172a'
            ];
            $svg .= '<rect width="' . $size . '" height="' . $size . '" fill="' . $bgColors[$background] . '"/>';
        }
        
        // Groupe pour l'icône maison
        $svg .= '<g>';
        
        // Base de la maison (rectangle arrondi)
        $houseWidth = $iconSize * 0.9;
        $houseHeight = $iconSize * 0.6;
        $houseX = $iconX + ($iconSize - $houseWidth) / 2;
        $houseY = $iconY + $iconSize * 0.4;
        
        $svg .= '<rect x="' . $houseX . '" y="' . $houseY . '" 
                     width="' . $houseWidth . '" height="' . $houseHeight . '" 
                     rx="' . ($size * 0.02) . '" fill="' . $iconBgColor . '"/>';
        
        // Toit (triangle plus élégant)
        $roofPoints = [
            $iconX - $iconSize * 0.05, $houseY,
            $iconX + $iconSize * 0.5, $iconY - $iconSize * 0.35,
            $iconX + $iconSize * 1.05, $houseY
        ];
        $svg .= '<polygon points="' . implode(',', $roofPoints) . '" fill="' . $iconBgColor . '"/>';
        
        // Porte
        $doorWidth = $houseWidth * 0.3;
        $doorHeight = $houseHeight * 0.6;
        $doorX = $houseX + ($houseWidth - $doorWidth) / 2;
        $doorY = $houseY + $houseHeight - $doorHeight;
        
        $svg .= '<rect x="' . $doorX . '" y="' . $doorY . '" 
                     width="' . $doorWidth . '" height="' . $doorHeight . '" 
                     fill="' . ($background === 'dark' ? '#1e3a8a' : '#ffffff') . '"/>';
        
        // Fenêtres
        $windowSize = $houseWidth * 0.15;
        $windowY = $houseY + $houseHeight * 0.2;
        
        // Fenêtre gauche
        $svg .= '<rect x="' . ($houseX + $houseWidth * 0.2) . '" y="' . $windowY . '" 
                     width="' . $windowSize . '" height="' . $windowSize . '" 
                     fill="' . ($background === 'dark' ? '#1e3a8a' : '#ffffff') . '"/>';
        
        // Fenêtre droite
        $svg .= '<rect x="' . ($houseX + $houseWidth * 0.65) . '" y="' . $windowY . '" 
                     width="' . $windowSize . '" height="' . $windowSize . '" 
                     fill="' . ($background === 'dark' ? '#1e3a8a' : '#ffffff') . '"/>';
        
        $svg .= '</g>';
        
        // Texte "EPC"
        $svg .= '<text x="' . $textX . '" y="' . $textY . '" 
                     font-family="Arial, sans-serif" font-size="' . $fontSize . '" 
                     font-weight="800" fill="' . $textColor . '">EPC</text>';
        
        // Texte "+"
        $svg .= '<text x="' . ($textX + $fontSize * 1.3) . '" y="' . $textY . '" 
                     font-family="Arial, sans-serif" font-size="' . ($fontSize * 1.1) . '" 
                     font-weight="800" fill="' . $accentColor . '">+</text>';
        
        // Texte "POLE BATI PRO PLUS" (si la taille est suffisante)
        if ($size >= 300) {
            $subTextY = $textY + $fontSize * 0.4;
            $svg .= '<text x="' . $textX . '" y="' . $subTextY . '" 
                         font-family="Arial, sans-serif" font-size="' . $subFontSize . '" 
                         font-weight="700" fill="' . $subTextColor . '" 
                         letter-spacing="2">POLE BATI PRO PLUS</text>';
        }
        
        $svg .= '</svg>';
        
        return $svg;
    }
    
    private function svgToPng($svg, $size)
    {
        // Utiliser Imagick si disponible (meilleure qualité)
        if (extension_loaded('imagick')) {
            return $this->svgToPngImagick($svg, $size);
        }
        
        // Sinon, utiliser une méthode alternative avec GD
        return $this->svgToPngGD($svg, $size);
    }
    
    private function svgToPngImagick($svg, $size)
    {
        $imagick = new \Imagick();
        $imagick->readImageBlob($svg);
        $imagick->setImageFormat('png24');
        $imagick->resizeImage($size, $size, \Imagick::FILTER_LANCZOS, 1);
        return $imagick->getImageBlob();
    }
    
    private function svgToPngGD($svg, $size)
    {
        // Créer un fichier temporaire pour le SVG
        $tempSvg = tempnam(sys_get_temp_dir(), 'logo_') . '.svg';
        file_put_contents($tempSvg, $svg);
        
        // Utiliser une bibliothèque externe ou un service pour convertir
        // Pour l'instant, nous allons utiliser une approche simplifiée
        
        // Créer l'image de base
        $image = imagecreatetruecolor($size, $size);
        imagesavealpha($image, true);
        $transparent = imagecolorallocatealpha($image, 0, 0, 0, 127);
        imagefill($image, 0, 0, $transparent);
        
        // Dessiner une version améliorée du logo
        $this->drawImprovedLogo($image, $size);
        
        // Capturer la sortie
        ob_start();
        imagepng($image, null, 9);
        $pngData = ob_get_contents();
        ob_end_clean();
        
        imagedestroy($image);
        unlink($tempSvg);
        
        return $pngData;
    }
    
    private function drawImprovedLogo($image, $size)
    {
        // Calculer les proportions
        $iconSize = $size * 0.3;
        $fontSize = $size * 0.18;
        
        // Couleurs
        $textColor = imagecolorallocate($image, 30, 58, 138);
        $iconBgColor = imagecolorallocate($image, 30, 58, 138);
        $accentColor = imagecolorallocate($image, 249, 115, 22);
        
        // Positionnement
        $iconX = $size * 0.05;
        $iconY = $size * 0.35;
        
        // Dessiner une maison plus détaillée
        $houseWidth = $iconSize * 0.9;
        $houseHeight = $iconSize * 0.6;
        $houseX = $iconX + ($iconSize - $houseWidth) / 2;
        $houseY = $iconY + $iconSize * 0.4;
        
        // Base de la maison avec coins arrondis (simulation)
        imagefilledrectangle($image, $houseX, $houseY, $houseX + $houseWidth, $houseY + $houseHeight, $iconBgColor);
        
        // Toit
        $roofPoints = [
            $iconX - $iconSize * 0.05, $houseY,
            $iconX + $iconSize * 0.5, $iconY - $iconSize * 0.35,
            $iconX + $iconSize * 1.05, $houseY
        ];
        imagefilledpolygon($image, $roofPoints, 3, $iconBgColor);
        
        // Porte
        $doorWidth = $houseWidth * 0.3;
        $doorHeight = $houseHeight * 0.6;
        $doorX = $houseX + ($houseWidth - $doorWidth) / 2;
        $doorY = $houseY + $houseHeight - $doorHeight;
        
        $white = imagecolorallocate($image, 255, 255, 255);
        imagefilledrectangle($image, $doorX, $doorY, $doorX + $doorWidth, $doorY + $doorHeight, $white);
        
        // Fenêtres
        $windowSize = $houseWidth * 0.15;
        $windowY = $houseY + $houseHeight * 0.2;
        
        imagefilledrectangle($image, $houseX + $houseWidth * 0.2, $windowY, 
                           $houseX + $houseWidth * 0.2 + $windowSize, $windowY + $windowSize, $white);
        imagefilledrectangle($image, $houseX + $houseWidth * 0.65, $windowY, 
                           $houseX + $houseWidth * 0.65 + $windowSize, $windowY + $windowSize, $white);
        
        // Texte "EPC"
        $textX = $iconX + $iconSize + $size * 0.04;
        $textY = $iconY + $iconSize * 0.65;
        
        // Utiliser une police plus grande si disponible
        if (function_exists('imagettftext')) {
            // Essayez d'utiliser une police TTF si disponible
            $fontFile = public_path('fonts/arial.ttf');
            if (file_exists($fontFile)) {
                imagettftext($image, $fontSize, 0, $textX, $textY, $textColor, $fontFile, 'EPC');
                imagettftext($image, $fontSize * 1.1, 0, $textX + $fontSize * 1.3, $textY, $accentColor, $fontFile, '+');
            } else {
                // Revenir à la police système
                imagestring($image, 5, $textX, $textY - $fontSize, 'EPC', $textColor);
                imagestring($image, 5, $textX + $fontSize * 1.5, $textY - $fontSize, '+', $accentColor);
            }
        } else {
            imagestring($image, 5, $textX, $textY - $fontSize, 'EPC', $textColor);
            imagestring($image, 5, $textX + $fontSize * 1.5, $textY - $fontSize, '+', $accentColor);
        }
        
        // Texte "POLE BATI PRO PLUS"
        if ($size >= 300) {
            $subTextY = $textY + $fontSize * 0.4;
            $subText = 'POLE BATI PRO PLUS';
            imagestring($image, 2, $textX, $subTextY, $subText, $textColor);
        }
    }
}