Este proyecto fue realizado por los integrantes del repositorio a modo de trabajo del ciclo de DAW que cursamos en su día.

Para poder ejecutar el proyecto primero de todo instalamos todos los paquetes del composer:
```
composer install
 ```
 Y para ejecutar el servidor:
 ```
 php artisan serve
 ```

Algunas consideraciones del proyecto:

 · El proyecto no tiene migraciones hechas porque en el momento de hacerlo no sabíamos como iba el asunto. Por ello tenemos el archivo broggi.sql, donde se encutra la base de datos.
 
 · Algunas cosas de Laravel están hechas un poco mal, por ejemplo escribir toda la lógica en los controladores y no en los modelos.

 · Seguramente hay muchas cosas rotas a día de hoy.
