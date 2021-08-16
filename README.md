Este proyecto fue realizado por los integrantes del repositorio a modo de trabajo del ciclo de DAW que cursamos en su día.

Este consiste un simular una centro de atención de emergencias, donde los operadores toman nota de las incidencias y manda al lugar los recursos que hagan falta, ambulancías, patrullas...

Para poder ejecutar el proyecto primero de todo instalamos todos los paquetes del composer:
```
composer install
 ```
 Y para ejecutar el servidor:
 ```
 php artisan serve
 ```

Algunas consideraciones del proyecto:

 · El proyecto no tiene migraciones hechas porque en el momento de hacerlo no sabíamos como iba el asunto. Por ello tenemos el archivo broggi.sql, donde se encuentra la base de datos que usa el proyecto para funcionar como debería.
 
 · Algunas cosas de Laravel están hechas sin seguir todas las buenas prácticas de este, básicamente por ser unos novatos en su momento, seguramente a día de hoy cambiaríamos miles de cosas.

 · Seguramente hay muchas cosas rotas a día de hoy.
