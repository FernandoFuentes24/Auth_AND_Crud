# 🚀 Proyecto Laravel - Sistema de Gestión

Este es un sistema de gestión desarrollado con **Laravel 11** y **MySQL**.

## 📌 Requisitos Previos

- **PHP 8.3+**
- **Composer**
- **MySQL** 

## ⚙️ Instalación y Configuración

### 1️⃣ Clonar el repositorio  
```sh
git clone https://github.com/FernandoFuentes24/Auth_AND_Crud.git
cd PRACFINAL

2️⃣ Instalar dependencias
composer install
npm install && npm run build

3️⃣ Configurar variables de entorno
Copiar el archivo .env.example y renómbralo a .env:

Editar el .env y configura la base de datos:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1 o localhost
DB_PORT=3306 
DB_DATABASE=mi_base_de_datos
DB_USERNAME=root
DB_PASSWORD=tu_contraseña

5️⃣ Ejecutar migraciones y seeders

php artisan migrate --seed

6️⃣ Levantar el servidor
php artisan serve