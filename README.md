# PHP MVC
Este es un proyecto para implementar el patrón MVC en PHP. A continuación, te proporcionamos los pasos para clonar el repositorio y configurar el proyecto.

## Requisitos

Antes de comenzar, asegúrate de tener instalado:

- PHP 8.2 o superior
- Composer
- MySQL o MariaDB
- Acceso a la terminal (CLI)


## Configuración del proyecto

1. **Clonar el repositorio**

    ```bash
    git clone https://github.com/OscarCastellanos01/php-mvc.git
    ```

3. **Navega al directorio del proyecto:**
   ```bash
   cd php-mvc
   ```

4. **Instalar Dependencias con Composer**

    ```bash
    composer install
    ```

5. **Después de instalar las dependencias, copia el archivo `config.example.php` a `config.php`**

    ```bash
    cp config/config.example.php config/config.php
    ```

Abre `config/config.php` y actualiza los valores de la base de datos y la URL según tu entorno local.

5. **Cargar BD de Prueba**

En la carpeta data/, encontrarás un archivo SQL (database.sql) que contiene la estructura de la base de datos.

6. **Configurar el Servidor Local**

Si ya tienes configurado un servidor local, solo necesitas configurarlo para que apunte a la carpeta public. Si prefieres usar el servidor embebido de PHP, ejecuta el siguiente comando:

```bash
php -S localhost:8000 -t public
```
7. **Acceder al Proyecto**

Accede al proyecto en tu navegador en la siguiente dirección:

```bash
http://localhost:8000
```

## Estructura del Proyecto

```
php-mvc/
├── config/
│   ├── config.example.php
│   ├── config.php
│   ├── functions.php
├── data/
│   └── database.sql
├── public/
│   ├── css/
│   │   └── style.css
│   ├── js/
│   │   └── script.js
│   ├── .htaccess
│   └── index.php
├── src/
│   ├── app/
│   │   ├── Database.php
│   │   ├── Router.php
│   │   └── routes.php
│   ├── controllers/
│   │   ├── HomeController.php
│   │   └── UserController.php
│   ├── models/
│   │   └── User.php
│   └── views/
│       ├── home/
│       │   └── index.php
│       ├── users/
│       │   └── index.php
│       └── layout.php
├── .gitignore
├── .htaccess
└── composer.json
```

<p align="center">
  <img src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" alt="Logo de PHP" width="200" />
</p>
