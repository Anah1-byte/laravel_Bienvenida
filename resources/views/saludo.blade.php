<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Saludo</title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; background:#f4f6f8; color:#0f172a; margin:0; }
        .wrap { max-width:780px; margin:4rem auto; padding:1.5rem; background:#fff; border-radius:10px; box-shadow:0 8px 24px rgba(2,6,23,0.06); text-align:center }
        h1 { margin:0 0 0.5rem 0; font-size:1.6rem }
        p { color:#6b7280 }
        .btn { display:inline-block; padding:0.6rem 1rem; background:#2563eb; color:#fff; border-radius:8px; text-decoration:none; font-weight:600; margin-top:1rem }
    </style>
</head>
<body>
    <div class="wrap">
        <h1>Hola, {{ $nombre }}</h1>
        <p>Es un gusto saludarte, <strong>{{ $nombre }}</strong>!</p>
    <p style="margin-top:1rem"><a class="btn" href="{{ url('bienvenida') }}">Volver a bienvenida</a></p>
    </div>
</body>
</html>
