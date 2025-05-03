<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reply for {{ $name }}</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .email-container {
            background-color: #ffffff;
            max-width: 600px;
            margin: 30px auto;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
        h2 {
            color: #333;
        }
        p {
            color: #555;
            line-height: 1.6;
        }
        .footer {
            margin-top: 30px;
            font-size: 14px;
            color: #999;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h2>Balasan dari Tim Gua Pawon</h2>
        <p>Halo Yth. {{ $name }}.</p>
        <p>{{ $reply }}</p>

        <p>Salam hormat,<br><strong>Admin Gua Pawon</strong></p>

        <div class="footer">
            &copy; {{ date('Y') }} Gua Pawon. Semua hak dilindungi.
        </div>
    </div>
</body>
</html>
