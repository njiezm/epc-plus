<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Confirmation de votre demande</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #1e3a8a; color: white; padding: 20px; text-align: center; }
        .content { padding: 20px; background: #f9fafb; }
        .footer { background: #e5e7eb; padding: 15px; text-align: center; font-size: 12px; }
        .btn { display: inline-block; padding: 12px 24px; background: #f97316; color: white; text-decoration: none; border-radius: 5px; margin: 10px 0; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>EPC+ - Pôle Bati Pro Plus</h1>
            <p>Merci pour votre confiance !</p>
        </div>
        
        <div class="content">
            <h2>Bonjour {{ $data['name'] }},</h2>
            
            <p>Nous avons bien reçu votre demande de devis concernant votre projet de {{ $data['project_type'] }} à {{ $data['location'] }}.</p>
            
            <p>Notre équipe va étudier votre demande et vous contactera dans les plus brefs délais (sous 24-48h) pour échanger sur les détails de votre projet.</p>
            
            <p><strong>Récapitulatif de votre demande :</strong></p>
            <ul>
                <li>Type de projet : {{ $data['project_type'] }}</li>
                <li>Localisation : {{ $data['location'] }}</li>
                @if($data['surface'])
                <li>Surface : {{ $data['surface'] }} m²</li>
                @endif
            </ul>
            
            <p>En attendant, n'hésitez pas à consulter nos <a href="{{ route('services') }}">prestations</a> et nos <a href="{{ route('gallery') }}">réalisations</a>.</p>
            
            <div style="text-align: center;">
                <a href="{{ route('home') }}" class="btn">Visiter notre site</a>
            </div>
        </div>
        
        <div class="footer">
            <p>EPC+ - Pôle Bati Pro Plus | 0696 60 01 55 | contact@epc-plus.fr</p>
            <p>Si vous n'êtes pas à l'origine de cette demande, veuillez nous contacter.</p>
        </div>
    </div>
</body>
</html>