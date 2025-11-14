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

## Capturas Requeridas

Colocar en `docs/screenshots/` (o insertar directamente en el PDF):

- `bienvenida.png`
- `saludo-john.png` (o similar con un nombre real)
- `saludo-invitado.png` (caso nombre vacío → Invitado)

## Generar el PDF

Ejemplo usando Pandoc:
```bash
pandoc docs/reflexion.md -o docs/entrega.pdf
```

## Flujo de Trabajo Git

```bash
git init
git add .
git commit -m "Proyecto Laravel rutas bienvenida y saludo"
git branch -M main
git remote add origin https://github.com/<usuario>/<repo>.git
git push -u origin main
```

## Restaurar Dependencias

Después de clonar:
```bash
composer install
```

## Notas

Completar las respuestas de `docs/reflexion.md` antes de generar el PDF. Verificar que las capturas sean claras y muestren la funcionalidad solicitada.
