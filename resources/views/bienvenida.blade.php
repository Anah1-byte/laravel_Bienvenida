<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenida</title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; background:#f4f6f8; color:#0f172a; margin:0; }
        .wrap { max-width:780px; margin:4rem auto; padding:1.5rem; background:#fff; border-radius:10px; box-shadow:0 8px 24px rgba(2,6,23,0.06); text-align:center }
        h1 { margin:0 0 0.5rem 0; font-size:1.6rem }
        p { color:#6b7280 }
        .btn { display:inline-block; padding:0.6rem 1rem; background:#2563eb; color:#fff; border-radius:8px; text-decoration:none; font-weight:600; margin-top:1rem }
        .muted { margin-top:0.75rem; color:#6b7280; font-size:0.95rem }
    </style>
</head>
<body>
    <div class="wrap">
        <h1>Bienvenido a mi primera aplicación de Laravel</h1>
        <p>Usa el botón para ir a la página de saludo; podrás introducir tu nombre y ver el saludo personalizado.</p>

        <button id="btn-saludo" class="btn">Ir al saludo</button>

    <div class="muted">o <a href="{{ url('saludo/Juan') }}">ver ejemplo de saludo</a></div>
    </div>

    <script>
        (function(){
            var btn = document.getElementById('btn-saludo');
            if(!btn) return;
            btn.addEventListener('click', function(){
                var nombre = prompt('Introduce tu nombre:','');
                if(nombre === null) return; // cancel
                nombre = nombre.trim();
                if(nombre.length === 0) {
                    nombre = 'Invitado';
                }
                // Construir la URL usando la base de la app para funcionar desde subdirectorios
                var base = '{{ url('') }}';
                // Evitar doble slash si base termina sin slash
                if(base.charAt(base.length - 1) === '/') base = base.slice(0, -1);
                window.location.href = base + '/saludo/' + encodeURIComponent(nombre);
            });
        })();
    </script>
</body>
</html>
