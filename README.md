# UTILESAPP

UTILESAPP es una aplicación web diseñada para almacenar recursos relacionados con la programación. La aplicación se desarrolló utilizando la metodología de Desarrollo Guiado por Pruebas (TDD) y se basa en el framework Laravel.

## Descripción

La aplicación proporciona un espacio para guardar y organizar recursos útiles, enlaces, y cualquier información relevante para programadores y entusiastas de la tecnología. Utilizando Laravel como base, UTILESAPP ofrece una interfaz fácil de usar y funcionalidades centradas en la gestión de recursos.

## Requisitos Previos

Asegúrate de tener instalados los siguientes requisitos en tu sistema:

-   PHP (versión 8.x)
-   Composer
-   MySQL o cualquier otro sistema de gestión de bases de datos compatible con Laravel

## Instalación

Sigue estos pasos para instalar y ejecutar UTILESAPP localmente:

1.  **Clonar el Repositorio:**

    ```bash
    git clone https://github.com/roorjoan/utilesapp.git
    ```

2.  **Instalar Dependencias:**

    ```bash
    cd utilesapp
    composer install
    ```

3.  **Copiar el Archivo de Configuración:**

    ```bash
    cp .env.example .env
    ```

Luego, edita el archivo .env con los detalles de tu base de datos y otras configuraciones necesarias.

4. **Generar Clave de Encriptación:**

    ```bash
    php artisan key:generate
    ```

5. **Migrar la Base de Datos**

    ```bash
    php artisan migrate
    ```

6. **Crear acceso al almacenamiento**

    ```bash
    php artisan storage:link
    ```

7. **Iniciar el Servidor de Desarrollo:**

    ```bash
    php artisan serve
    ```

## Contribuciones

Si deseas contribuir a UTILESAPP, por favor, abre un issue o envía una pull request. ¡Tus contribuciones son bienvenidas!
