<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nouvelle inscription newsletter</title>
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
            <p>Nouvelle inscription à la newsletter</p>
        </div>
        
        <div class="content">
            <h2>Nouvel abonné</h2>
            <div class="info-box">
                <p><strong>Email :</strong> {{ $email }}</p>
                <p><strong>Date d'inscription :</strong> {{ now()->format('d/m/Y H:i') }}</p>
            </div>
            
            <p>Cet email a été ajouté à la liste de diffusion de la newsletter.</p>
        </div>
        
        <div class="footer">
            <p>EPC+ - Pôle Bati Pro Plus | 0696 60 01 55 | contact@epc-plus.fr</p>
        </div>
    </div>
</body>
</html>