# Descripción del Proyecto

Este proyecto es una aplicación base de Laravel con dos rutas principales:

- `/bienvenida`: Muestra una página de bienvenida con un botón para redirigir al saludo ingresando un nombre.
- `/saludo/{nombre}`: Muestra un saludo personalizado utilizando el nombre proporcionado en la URL.

## Funcionalidad Implementada

1. Controlador `PaginaController` con métodos `bienvenida()` y `saludo($nombre)`.
2. Vistas Blade simples estilizadas para cada ruta.
3. Redirección desde la vista de bienvenida usando JavaScript y construcción segura de URL.
4. Corrección de enlaces para funcionar dentro de subdirectorios (ej. XAMPP).

## Instrucciones de Ejecución

```bash
php artisan serve
# Visitar: http://127.0.0.1:8000/bienvenida
```

O bajo XAMPP (según tu estructura):

```
http://localhost/p1/public/bienvenida
```

## Pasos Técnicos Realizados

| Paso | Descripción |
|------|-------------|
| Controlador | Creación de `PaginaController` con métodos solicitados |
| Rutas | Definición en `routes/web.php` de `/bienvenida` y `/saludo/{nombre}` |
| Vistas | Creación y mejora de `bienvenida.blade.php` y `saludo.blade.php` |
| UX | Botón en bienvenida que solicita nombre y redirige al saludo |
| Correcciones | Ajustes de enlaces usando `url()` para compatibilidad con subdirectorios |

## Preguntas de Reflexión 

### 1. ¿Qué aprendiste al crear y conectar rutas, controlador y vistas en Laravel?
Respuesta: Aprendí a definir rutas, crear un controlador y devolver vistas pasando datos de forma sencilla.

### 2. ¿Qué problemas encontraste y cómo los solucionaste (especialmente con rutas en subdirectorios)?
Respuesta: Las rutas fallaban en subdirectorios; usé `url()` y enlaces apropiados para generar direcciones correctas.

### 3. Explica cómo Laravel resuelve la vista cuando llamas `view('saludo', ['nombre' => $nombre])`.
Respuesta: Busca `resources/views/saludo.blade.php`, compila la plantilla Blade y le inyecta la variable `$nombre` antes de renderizar HTML.

### 4. ¿Qué mejoras harías si el proyecto creciera (layout, componentes, tests, etc.)?
Respuesta: Agregar un layout común, componentes Blade reutilizables, pruebas con PHPUnit, validación y estilos con Tailwind.

### 5. ¿Por qué es importante excluir `vendor` en el repositorio y cómo se reconstruye?
Respuesta: Evita subir dependencias pesadas; se reconstruye ejecutando `composer install` tras clonar el proyecto.

### 6. ¿Qué cambios harías para internacionalización o accesibilidad?
Respuesta: Usar archivos `lang`, la función `__()`, etiquetas semánticas, textos alternativos y manejar foco y contraste.

## Capturas de Pantalla

Incluye aquí (o en carpeta `docs/screenshots/`) las imágenes:

1. `bienvenida.png` — Página de bienvenida.
2. `saludo-john.png` — Saludo mostrando un nombre (ejemplo).
3. `saludo-invitado.png` — Saludo usando nombre por defecto tras entrada vacía.

## Generación del PDF

Puedes convertir este archivo a PDF usando:

### Opción 1: VS Code
Extensión de exportación Markdown a PDF. Abrir `reflexion.md` y exportar.

### Opción 2: Pandoc
```bash
pandoc docs/reflexion.md -o docs/entrega.pdf
```

### Opción 3: Navegador
Renderizar Markdown en un visor y "Imprimir" → Guardar como PDF.

## Reconstrucción del Proyecto

```bash
git clone <url-del-repo>
cd <carpeta>
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

## Notas Finales

Este documento sirve como base de entrega: completa las respuestas de reflexión antes de generar el PDF final y subirlo al repositorio.
