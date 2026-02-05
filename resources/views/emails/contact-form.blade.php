<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nouvelle demande de devis</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #1e3a8a; color: white; padding: 20px; text-align: center; }
        .content { padding: 20px; background: #f9fafb; }
        .footer { background: #e5e7eb; padding: 15px; text-align: center; font-size: 12px; }
        .info-box { background: white; padding: 15px; margin: 10px 0; border-left: 4px solid #f97316; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>EPC+ - Pôle Bati Pro Plus</h1>
            <p>Nouvelle demande de devis reçue</p>
        </div>
        
        <div class="content">
            <h2>Informations du client</h2>
            <div class="info-box">
                <p><strong>Nom :</strong> {{ $data['name'] }}</p>
                <p><strong>Email :</strong> {{ $data['email'] }}</p>
                <p><strong>Téléphone :</strong> {{ $data['phone'] }}</p>
            </div>
            
            <h2>Détails du projet</h2>
            <div class="info-box">
                <p><strong>Type de projet :</strong> {{ $data['project_type'] }}</p>
                <p><strong>Localisation :</strong> {{ $data['location'] }}</p>
                @if($data['surface'])
                <p><strong>Surface :</strong> {{ $data['surface'] }} m²</p>
                @endif
                @if($data['description'])
                <p><strong>Description :</strong><br>{{ $data['description'] }}</p>
                @endif
            </div>
            
            <p><strong>Date de la demande :</strong> {{ now()->format('d/m/Y H:i') }}</p>
        </div>
        
        <div class="footer">
            <p>EPC+ - Pôle Bati Pro Plus | 0696 60 01 55 | contact@epc-plus.com</p>
        </div>
    </div>
</body>
</html>