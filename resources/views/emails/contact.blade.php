<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; margin: 0; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .header { background: #1d4ed8; padding: 30px; text-align: center; }
        .header h1 { color: white; margin: 0; font-size: 1.4rem; }
        .header p { color: rgba(255,255,255,0.8); margin: 5px 0 0; font-size: 0.9rem; }
        .body { padding: 30px; }
        .field { margin-bottom: 20px; border-bottom: 1px solid #f0f0f0; padding-bottom: 20px; }
        .field:last-child { border-bottom: none; margin-bottom: 0; }
        .field label { display: block; font-size: 0.75rem; font-weight: 700; color: #94a3b8; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 5px; }
        .field p { color: #1e293b; font-size: 0.95rem; margin: 0; line-height: 1.6; }
        .badge { display: inline-block; background: #eff6ff; color: #1d4ed8; padding: 4px 12px; border-radius: 100px; font-size: 0.8rem; font-weight: 600; }
        .footer { background: #f8fafc; padding: 20px 30px; text-align: center; border-top: 1px solid #e2e8f0; }
        .footer p { color: #94a3b8; font-size: 0.8rem; margin: 0; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🧇 Waffle Network</h1>
            <p>Pertanyaan Baru Diterima</p>
        </div>
        <div class="body">
            <div class="field">
                <label>Nama Pengirim</label>
                <p>{{ $namaPengirim }}</p>
            </div>
            <div class="field">
                <label>Email</label>
                <p>{{ $emailPengirim }}</p>
            </div>
            <div class="field">
                <label>Telefon</label>
                <p>{{ $telefon ?: 'Tidak dinyatakan' }}</p>
            </div>
            <div class="field">
                <label>Perkhidmatan Diminati</label>
                <p><span class="badge">{{ $perkhidmatan }}</span></p>
            </div>
            <div class="field">
                <label>Mesej</label>
                <p>{{ $mesej }}</p>
            </div>
        </div>
        <div class="footer">
            <p>Email ini dijana secara automatik oleh sistem Waffle Network</p>
        </div>
    </div>
</body>
</html>