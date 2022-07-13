### **Dibuat Dengan**
 - [Laravel](https://laravel.com/ "Laravel")
 - [MongoDB](https://www.mongodb.com/)
 - [jwt-auth](https://github.com/tymondesigns/jwt-auth)
 
### **Instalasi**
Pastikan sudah terinstal mongoDB terlebih dahulu, untuk cara instalasi dan integrasi mongoDB pada laravel dapat di lihat [disini](https://www.mongodb.com/compatibility/mongodb-laravel-intergration).

Selanjutnya copy file .env.example dan masukkan perintah dibawah


`cp env.example .env`

Sesuaikan nama database pada file .env

`composer install`

`php artisan key:generate`

`php artisan migrate --seed`

`php artisan serve`
