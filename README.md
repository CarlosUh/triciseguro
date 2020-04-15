# triciseguro
Proyecto escolar trici seguro

Inicializar Laravel
==================
	
* laravel new Muestra
* crear modelo Tarea

Clonando desde git
==================
* crear archivo .env a partir del ejemplo que se incluye en el proyecto.
* php artisan key:generate
* Iniciar servidor:
	- php artisan serve
* creat migracion
	- php artisan make:migration createTarea_table
* correr migracion
	- php artisan migrate
* Creacion de la vista y controlador, configuracion de rutas
* insertar
* consultar
* Crear migracion para agregar usuario
	- php artisan make:migration addColumnUsuario_table
* Actualizar base de datos
	- php artisan migrate
* Deshacer cambios
	- php artisan migrate:rollback
* Rehacer cambios
	- php artisan migrate
	
Instalacion de adminLTE
==============
* Instalacion
	- composer global require "acacha/adminlte-laravel-installer"
	- adminlte-laravel install
	
Instalar laravel para version 6
===============================
* composer require jeroennoten/laravel-adminlte
* php artisan adminlte:install
	
Instalacion de Laravel CRUD Generator
==============
* Instalacion Crud Generator
	- composer require appzcoder/crud-generator --dev
	- php artisan vendor:publish --provider="Appzcoder\CrudGenerator\CrudGeneratorServiceProvider"
	
* Utilizar Crud Generator
	- Crear archivo json en crudg/tareas.json
	- php artisan crud:generate Documento --fields_from_file="crudg/documento.json"  --form-helper=html
	- php artisan migrate
	
Ligar rutas storage
==============================
php artisan storage:link

php artisan crud:api-controller Api\DocumentoController --crud-name=Documento --model-name=Documento

Seeder Pasos:
Generar Seeder Nuevo
	
php artisan make:seeder DocumentoSeeder

Ejecutamos Seeders

php artisan db:seed

Ejecutar un Seeder en especifico

php artisan db:seed --class=ProfessionSeeder

Factory Pasos:

php artisan make:factory DocumentoFactory

