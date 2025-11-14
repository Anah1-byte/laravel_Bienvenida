# Entrega del Proyecto Laravel

Este repositorio contiene el proyecto Laravel solicitado con las rutas `/bienvenida` y `/saludo/{nombre}`. A continuación se detallan los elementos requeridos para la entrega.

## Contenido Incluido

- Código fuente completo (excepto `vendor/`).
- Archivo `.gitignore` que excluye `vendor/` y otros archivos temporales.
- Documento `docs/reflexion.md` (convertir a PDF para la entrega final) con:
  - Descripción del proyecto
  - Pasos técnicos realizados
  - Preguntas de reflexión
  - Sección para insertar capturas de pantalla
- Carpeta opcional `docs/screenshots/` para almacenar las imágenes usadas en la entrega.

## Cómo Ejecutar Localmente

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
# Visitar http://127.0.0.1:8000/bienvenida
```

Si usas XAMPP y public está expuesto:
```
http://localhost/p1/public/bienvenida
```
