<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nouvelle demande de contact</title>
</head>
<body style="margin:0; padding:32px; background:#f7f4ef; font-family:Arial, Helvetica, sans-serif; color:#1f2937;">
    <div style="max-width:680px; margin:0 auto; background:#ffffff; border:1px solid #e5ded6; border-radius:16px; padding:32px;">
        <h2 style="margin-top:0; margin-bottom:24px; font-size:24px; color:#0f172a;">Nouvelle demande reçue</h2>

        <p style="margin:0 0 14px;"><strong>Nom / Entreprise :</strong> {{ $data['name'] }}</p>
        <p style="margin:0 0 14px;"><strong>Email :</strong> {{ $data['email'] }}</p>
        <p style="margin:0 0 14px;"><strong>Type de demande :</strong> {{ $data['type'] === 'devis' ? 'Demande de devis personnalisé' : 'Simple prise de contact' }}</p>
        <p style="margin:0 0 14px;"><strong>Expertise requise :</strong> {{ $data['service'] ?: 'Non précisé' }}</p>

        <div style="margin-top:24px;">
            <p style="margin:0 0 8px;"><strong>Message :</strong></p>
            <div style="padding:16px; background:#f8fafc; border:1px solid #e5e7eb; border-radius:12px; white-space:pre-line;">
                {{ $data['message'] }}
            </div>
        </div>
    </div>
</body>
</html>
