<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balasan untuk {{ $name }}</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }
        .email-container {
            background-color: #ffffff;
            max-width: 650px;
            margin: 40px auto;
            padding: 35px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        h2 {
            color: #2c3e50;
            border-bottom: 2px solid #ecf0f1;
            padding-bottom: 10px;
            margin-bottom: 25px;
        }
        p {
            color: #444;
            line-height: 1.7;
            font-size: 16px;
        }
        .section-title {
            margin-top: 30px;
            margin-bottom: 10px;
            font-weight: 600;
            color: #34495e;
        }
        .quote-box {
            background-color: #f8f9fa;
            border-left: 5px solid #3498db;
            padding: 15px 20px;
            margin-bottom: 25px;
            font-style: italic;
            color: #555;
        }
        .quote-box-right {
            background-color: #f8f9fa;
            border-right: 5px solid #3498db;
            padding: 15px 20px;
            margin-bottom: 25px;
            font-style: italic;
            color: #555;
            text-align: left;
        }
        .signature {
            margin-top: 40px;
            font-weight: 500;
        }
        .footer {
            margin-top: 50px;
            font-size: 13px;
            color: #aaa;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h2>Balasan dari Tim Gua Pawon</h2>

        <p>Halo Yth. <strong>{{ $name }}</strong>,</p>

        <p class="section-title">Pertanyaan Anda:</p>
        <div class="quote-box">
            {{ $message_text }}
        </div>

        <p class="section-title">Jawaban Kami:</p>
        <div class="quote-box-right">
            {{ $reply }}
        </div>

        <p class="signature">Salam hormat,<br><strong>Admin Gua Pawon</strong></p>

        <div class="footer">
            &copy; {{ date('Y') }} Gua Pawon. Semua hak dilindungi.
        </div>
    </div>
</body>
</html>
