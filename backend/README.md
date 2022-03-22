# Backend

## Para insertar datos en la base de datos

Configuran el archivo ´.env´.

Se debe ejecutar el comando

    php artisan migrate

Despues de cargar las tablas, se debe ejecutar los seeder

    php artisan db:seed --class=EmpresaSeeder

    php artisan db:seed --class=PersonaSeeder

De esta manera se cargara la base de datos con datos falsos para realizar la prueba de los endpoints.


Para lograr visualizar los resultados debe correr el serve con el comando

    php artisan serve

Puede utilizar la herramienta de postman para ver los resultados.

En un entorno local, en mi caso estos serian los enlaces.

    http://127.0.0.1:8000/api/persona

    http://127.0.0.1:8000/api/persona/4

    http://127.0.0.1:8000/api/empresa

    http://127.0.0.1:8000/api/empresa/5






