# Portafolio Personal

Este es un portafolio web personal desarrollado con PHP y CodeIgniter 4, diseñado para mostrar proyectos, habilidades y experiencia profesional de manera elegante y profesional.

## 🚀 Características

- Diseño responsive y moderno
- Modo claro/oscuro
- Línea de tiempo para proyectos
- Sección de perfil personal
- Integración con redes sociales
- Contacto directo por WhatsApp
- Navegación suave y animaciones
- Gestión de proyectos dinámica

## 🛠️ Tecnologías Utilizadas

- PHP 7.4+
- CodeIgniter 4
- Bootstrap 5
- Font Awesome
- CSS3
- JavaScript
- MySQL/MariaDB

## 📋 Requisitos Previos

- Servidor web (Apache/Nginx)
- PHP 7.4 o superior
- MySQL/MariaDB
- Composer (para gestionar dependencias)

## 🔧 Instalación

1. Clonar el repositorio:

```bash
git clone [URL_DEL_REPOSITORIO]
```

2. Instalar dependencias:

```bash
composer install
```

3. Configurar la base de datos:

   - Crear una base de datos MySQL
   - Copiar el archivo `.env.example` a `.env`
   - Configurar las credenciales de la base de datos en `.env`

4. Importar la base de datos:

   - Usar el archivo SQL proporcionado en la carpeta `database`

5. Configurar el servidor web:
   - Asegurarse que el directorio `public` sea el directorio raíz
   - Configurar los permisos de escritura en la carpeta `uploads`

## 📁 Estructura del Proyecto

```
portafolio/
├── app/
│   ├── Config/
│   ├── Controllers/
│   ├── Models/
│   └── Views/
│       ├── portafolio.php
│       ├── proyectos.php
│       └── footer.php
├── public/
│   ├── css/
│   ├── js/
│   └── uploads/
├── database/
└── .env
```

## 💻 Uso

1. Acceder al panel de administración:

   - URL: `http://tudominio/admin`
   - Credenciales por defecto: admin/admin

2. Gestionar contenido:
   - Perfil personal
   - Proyectos
   - Videos
   - Redes sociales
   - Información de contacto

## 🔐 Seguridad

- Validación de datos
- Protección contra XSS
- Escape de datos
- Sanitización de entradas
- Protección CSRF

## 🌐 Características del Frontend

- Diseño responsive
- Modo claro/oscuro
- Animaciones suaves
- Línea de tiempo interactiva
- Galería de proyectos
- Integración con redes sociales
- Botón de WhatsApp flotante
- Botón de "Subir al inicio"

## 📱 Responsive Design

El sitio está optimizado para:

- Móviles
- Tablets
- Laptops
- Pantallas grandes

## 🔄 Modo Claro/Oscuro

- Cambio automático según preferencias del sistema
- Botón manual para cambiar tema
- Persistencia de preferencias
- Transiciones suaves

## 📝 Personalización

1. Editar archivos de configuración:

   - `.env` para configuraciones generales
   - `app/Config/` para configuraciones específicas

2. Modificar estilos:

   - `public/css/` para estilos personalizados
   - Variables CSS para temas

3. Actualizar contenido:
   - Panel de administración
   - Base de datos
   - Archivos de vista

## 🤝 Contribuciones

Las contribuciones son bienvenidas. Por favor:

1. Fork el proyecto
2. Crear una rama para tu feature
3. Commit tus cambios
4. Push a la rama
5. Abrir un Pull Request

## 📄 Licencia

Este proyecto está bajo la Licencia MIT - ver el archivo [LICENSE.md](LICENSE.md) para más detalles.

## 👥 Autor

[Tu Nombre]

## 📞 Contacto

- Email: [tu@email.com]
- LinkedIn: [tu-perfil-linkedin]
- GitHub: [tu-perfil-github]

## 🙏 Agradecimientos

- CodeIgniter Team
- Bootstrap Team
- Font Awesome Team
- Todos los contribuidores

# CodeIgniter 4 Application Starter

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

You can read the [user guide](https://codeigniter.com/user_guide/)
corresponding to the latest version of the framework.

## Installation & updates

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the _public_ folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's _public_ folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter _public/..._, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 8.1 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
>
> - The end of life date for PHP 7.4 was November 28, 2022.
> - The end of life date for PHP 8.0 was November 26, 2023.
> - If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> - The end of life date for PHP 8.1 will be December 31, 2025.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
