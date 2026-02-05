<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPC+ Logo Downloader</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Outfit', sans-serif;
        }
        .logo-preview-container {
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .preview-transparent {
            background-image: url("data:image/svg+xml,%3Csvg width='20' height='20' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%239C92AC' fill-opacity='0.2'%3E%3Cpolygon points='20 10 10 0 0 0 20 20'/%3E%3Cpolygon points='0 10 0 20 10 20'/%3E%3C/g%3E%3C/svg%3E");
        }
        /* Style pour masquer le canvas de rendu */
        #renderCanvas {
            display: none;
        }
        .success-toast {
            transform: translateY(100px);
            transition: transform 0.3s ease-out;
        }
        .success-toast.show {
            transform: translateY(0);
        }
    </style>
</head>
<body class="bg-slate-100 min-h-screen">

    <!-- Header -->
    <header class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center gap-2">
                    <div class="bg-blue-900 text-white p-2 rounded-lg">
                        <i class="fas fa-home text-xl"></i>
                    </div>
                    <span class="text-xl font-bold text-blue-900 uppercase tracking-tight">EPC+ Media Center</span>
                </div>
                <div class="flex items-center gap-4">
                    <a href="{{ route('home') }}" class="text-slate-600 hover:text-slate-900 text-sm font-medium">
                        <i class="fas fa-arrow-left mr-2"></i>Retour au site
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-slate-900 mb-4">Générateur de Logo EPC+</h1>
            <p class="text-xl text-slate-600">Exportez votre identité visuelle au format haute définition</p>
        </div>

        <div class="grid lg:grid-cols-2 gap-8">
            <!-- Options de génération -->
            <div class="bg-white rounded-2xl shadow-xl p-8 border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-6 flex items-center gap-2">
                    <i class="fas fa-sliders-h text-blue-600"></i> Configuration
                </h2>
                
                <div id="logoForm">
                    <!-- Fond -->
                    <div class="mb-8">
                        <label class="block text-sm font-bold text-slate-700 mb-4 uppercase tracking-wider">Type de fond</label>
                        <div class="grid grid-cols-2 gap-4">
                            <label class="cursor-pointer group">
                                <input type="radio" name="background" value="transparent" checked class="sr-only peer">
                                <div class="p-4 border-2 rounded-xl peer-checked:border-blue-600 peer-checked:bg-blue-50 hover:bg-slate-50 transition-all border-slate-200">
                                    <div class="preview-transparent w-full h-16 rounded-lg mb-2 shadow-inner"></div>
                                    <p class="text-sm font-semibold text-center group-hover:text-blue-600">Transparent</p>
                                </div>
                            </label>
                            <label class="cursor-pointer group">
                                <input type="radio" name="background" value="white" class="sr-only peer">
                                <div class="p-4 border-2 rounded-xl peer-checked:border-blue-600 peer-checked:bg-blue-50 hover:bg-slate-50 transition-all border-slate-200">
                                    <div class="bg-white w-full h-16 rounded-lg border mb-2 shadow-inner"></div>
                                    <p class="text-sm font-semibold text-center group-hover:text-blue-600">Blanc</p>
                                </div>
                            </label>
                            <label class="cursor-pointer group">
                                <input type="radio" name="background" value="blue" class="sr-only peer">
                                <div class="p-4 border-2 rounded-xl peer-checked:border-blue-600 peer-checked:bg-blue-50 hover:bg-slate-50 transition-all border-slate-200">
                                    <div class="bg-[#1e3a8a] w-full h-16 rounded-lg mb-2 shadow-inner"></div>
                                    <p class="text-sm font-semibold text-center group-hover:text-blue-600 text-slate-700">Bleu Corporate</p>
                                </div>
                            </label>
                            <label class="cursor-pointer group">
                                <input type="radio" name="background" value="dark" class="sr-only peer">
                                <div class="p-4 border-2 rounded-xl peer-checked:border-blue-600 peer-checked:bg-blue-50 hover:bg-slate-50 transition-all border-slate-200">
                                    <div class="bg-[#0f172a] w-full h-16 rounded-lg mb-2 shadow-inner"></div>
                                    <p class="text-sm font-semibold text-center group-hover:text-blue-600">Sombre</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <!-- Taille -->
                    <div class="mb-8">
                        <label class="block text-sm font-bold text-slate-700 mb-4 uppercase tracking-wider">Résolution de sortie</label>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                            <label class="cursor-pointer">
                                <input type="radio" name="size" value="150" class="sr-only peer">
                                <div class="py-3 px-2 border-2 rounded-xl peer-checked:border-blue-600 peer-checked:bg-blue-50 hover:bg-slate-50 transition-all text-center border-slate-200">
                                    <p class="text-lg font-bold">150px</p>
                                    <p class="text-[10px] text-slate-500 font-bold uppercase">Web</p>
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="size" value="300" checked class="sr-only peer">
                                <div class="py-3 px-2 border-2 rounded-xl peer-checked:border-blue-600 peer-checked:bg-blue-50 hover:bg-slate-50 transition-all text-center border-slate-200">
                                    <p class="text-lg font-bold">300px</p>
                                    <p class="text-[10px] text-slate-500 font-bold uppercase">Email</p>
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="size" value="600" class="sr-only peer">
                                <div class="py-3 px-2 border-2 rounded-xl peer-checked:border-blue-600 peer-checked:bg-blue-50 hover:bg-slate-50 transition-all text-center border-slate-200">
                                    <p class="text-lg font-bold">600px</p>
                                    <p class="text-[10px] text-slate-500 font-bold uppercase">Print</p>
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="size" value="1200" class="sr-only peer">
                                <div class="py-3 px-2 border-2 rounded-xl peer-checked:border-blue-600 peer-checked:bg-blue-50 hover:bg-slate-50 transition-all text-center border-slate-200">
                                    <p class="text-lg font-bold">1200px</p>
                                    <p class="text-[10px] text-slate-500 font-bold uppercase">HD</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <button id="downloadBtn" class="group relative w-full bg-blue-900 text-white py-5 rounded-xl font-bold text-lg hover:bg-blue-800 transition-all shadow-lg hover:shadow-blue-200 active:scale-[0.98] overflow-hidden">
                        <span class="relative z-10 flex items-center justify-center gap-3">
                            <i class="fas fa-file-download text-xl group-hover:bounce"></i>
                            Générer le PNG Haute Qualité
                        </span>
                        <div class="absolute inset-0 bg-white/10 translate-y-full group-hover:translate-y-0 transition-transform duration-300"></div>
                    </button>
                </div>
            </div>
            
            <!-- Aperçu -->
            <div class="bg-white rounded-2xl shadow-xl p-8 border border-slate-200 flex flex-col">
                <h2 class="text-2xl font-bold text-slate-900 mb-6 flex items-center gap-2">
                    <i class="fas fa-eye text-blue-600"></i> Rendu en direct
                </h2>
                
                <div class="flex-grow flex justify-center items-center bg-slate-50 rounded-2xl p-4 border-2 border-dashed border-slate-200 overflow-hidden min-h-[300px]">
                    <div id="logoPreview" class="logo-preview-container p-12 rounded-xl">
                        <!-- Logo Content -->
                        <div class="flex items-center gap-4 transition-transform duration-500" id="previewScale">
                            <!-- SVG du Logo pour garantir l'export -->
                            <svg id="mainLogoSvg" width="280" height="100" viewBox="0 0 280 100" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <style>
                                        .text-main { font: bold 48px 'Outfit', sans-serif; fill: #1e3a8a; }
                                        .text-plus { font: bold 54px 'Outfit', sans-serif; fill: #f97316; }
                                        .text-sub { font: bold 14px 'Outfit', sans-serif; fill: #1d4ed8; text-transform: uppercase; letter-spacing: 2px; }
                                        .white-mode { fill: #ffffff !important; }
                                    </style>
                                </defs>
                                <!-- Icon Container -->
                                <rect id="iconBg" x="0" y="20" width="60" height="60" rx="12" fill="#1e3a8a" />
                                <!-- Maison (chemin SVG simplifié) -->
                                <path d="M30 32 L18 42 L18 58 L26 58 L26 48 L34 48 L34 58 L42 58 L42 42 Z M14 42 L30 28 L46 42 L43 45 L30 32.5 L17 45 Z" fill="white" />
                                
                                <!-- Text Group -->
                                <text x="75" y="62" class="text-main" id="svgTextMain">EPC</text>
                                <text x="175" y="62" class="text-plus" id="svgTextPlus">+</text>
                                <text x="75" y="85" class="text-sub" id="svgTextSub">Pôle Bati Pro Plus</text>
                            </svg>
                        </div>
                    </div>
                </div>
                
                <div class="mt-6 flex items-center gap-4 p-4 bg-blue-50 rounded-xl text-blue-800 text-sm">
                    <i class="fas fa-lightbulb text-xl text-blue-400"></i>
                    <p>Le fichier exporté utilisera une technologie de lissage pour conserver la netteté des polices, même en 1200px.</p>
                </div>
            </div>
        </div>
    </main>

    <!-- Canvas caché pour le rendu -->
    <canvas id="renderCanvas"></canvas>

    <!-- Toast de succès -->
    <div id="successToast" class="fixed bottom-8 left-1/2 -translate-x-1/2 bg-slate-900 text-white px-8 py-4 rounded-full shadow-2xl flex items-center gap-3 z-50 pointer-events-none success-toast">
        <div class="bg-green-500 rounded-full p-1">
            <i class="fas fa-check text-sm"></i>
        </div>
        <span class="font-bold">Logo téléchargé avec succès !</span>
    </div>

    <script>
        const downloadBtn = document.getElementById('downloadBtn');
        const logoPreview = document.getElementById('logoPreview');
        const previewScale = document.getElementById('previewScale');
        const svgElement = document.getElementById('mainLogoSvg');
        const renderCanvas = document.getElementById('renderCanvas');
        const successToast = document.getElementById('successToast');

        // Éléments du SVG à modifier dynamiquement
        const iconBg = document.getElementById('iconBg');
        const textMain = document.getElementById('svgTextMain');
        const textPlus = document.getElementById('svgTextPlus');
        const textSub = document.getElementById('svgTextSub');

        function updatePreview() {
            const background = document.querySelector('input[name="background"]:checked').value;
            const size = document.querySelector('input[name="size"]:checked').value;
            
            // 1. Gérer le fond visuel
            logoPreview.className = 'logo-preview-container p-12 rounded-xl';
            logoPreview.style.backgroundColor = 'transparent';

            // Réinitialiser les couleurs par défaut
            iconBg.setAttribute('fill', '#1e3a8a');
            textMain.classList.remove('white-mode');
            textSub.classList.remove('white-mode');

            switch(background) {
                case 'transparent':
                    logoPreview.classList.add('preview-transparent');
                    break;
                case 'white':
                    logoPreview.style.backgroundColor = 'white';
                    break;
                case 'blue':
                    logoPreview.style.backgroundColor = '#1e3a8a';
                    // Adapter le logo pour fond bleu
                    iconBg.setAttribute('fill', '#ffffff');
                    textMain.classList.add('white-mode');
                    textSub.classList.add('white-mode');
                    break;
                case 'dark':
                    logoPreview.style.backgroundColor = '#0f172a';
                    textMain.classList.add('white-mode');
                    textSub.classList.add('white-mode');
                    break;
            }

            // 2. Gérer l'échelle de l'aperçu
            const scale = parseInt(size) / 300;
            const visualScale = Math.min(Math.max(scale * 0.5, 0.6), 1.2);
            previewScale.style.transform = `scale(${visualScale})`;
        }

        async function downloadLogo() {
            const background = document.querySelector('input[name="background"]:checked').value;
            const size = parseInt(document.querySelector('input[name="size"]:checked').value);
            
            // Calculer le ratio d'aspect (SVG original est 280x100)
            const aspectRatio = 280 / 100;
            const width = size;
            const height = size / aspectRatio;

            const ctx = renderCanvas.getContext('2d');
            renderCanvas.width = width;
            renderCanvas.height = height;

            // 1. Remplir le fond
            if (background !== 'transparent') {
                const colors = { 'white': '#ffffff', 'blue': '#1e3a8a', 'dark': '#0f172a' };
                ctx.fillStyle = colors[background];
                ctx.fillRect(0, 0, width, height);
            }

            // 2. Préparer le SVG pour le rendu Canvas
            // On clone pour ne pas abîmer l'affichage
            const svgData = new XMLSerializer().serializeToString(svgElement);
            const svgBlob = new Blob([svgData], { type: 'image/svg+xml;charset=utf-8' });
            const url = URL.createObjectURL(svgBlob);

            const img = new Image();
            img.onload = function() {
                // Dessiner l'image SVG sur le canvas à la taille demandée
                ctx.drawImage(img, 0, 0, width, height);
                
                // Convertir en PNG
                const pngUrl = renderCanvas.toDataURL('image/png');
                
                // Créer le lien de téléchargement
                const downloadLink = document.createElement('a');
                downloadLink.href = pngUrl;
                downloadLink.download = `EPC_Plus_Logo_${background}_${size}px.png`;
                document.body.appendChild(downloadLink);
                downloadLink.click();
                document.body.removeChild(downloadLink);
                
                // Nettoyer
                URL.revokeObjectURL(url);
                
                // Montrer le succès
                showToast();
            };
            img.src = url;
        }

        function showToast() {
            successToast.classList.add('show');
            setTimeout(() => {
                successToast.classList.remove('show');
            }, 3000);
        }

        // Event Listeners
        document.querySelectorAll('input[name="background"], input[name="size"]').forEach(input => {
            input.addEventListener('change', updatePreview);
        });

        downloadBtn.addEventListener('click', (e) => {
            e.preventDefault();
            downloadLogo();
        });

        // Init
        updatePreview();
    </script>
</body>
</html>