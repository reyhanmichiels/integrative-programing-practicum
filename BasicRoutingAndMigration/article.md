## Modul 4
Pada modul ini kita belajar mendefinisikan route dan melakukan migration pada framework lumen. Karena Lumen sendiri merupakan anak framework dari laravel, maka cara yang digunakan pun sama.
Hanya ada 1 konfigurasi yang berbeda, yaitu konfigurasi untuk enable library ORM.

### Mendefinisikan route
untuk mendefisikan route kita melakukannya pada routes/web.php. Mendefinisikan route dilakukan menggunakan variable $route, lalu memanggil method sesuai dengan HTTP method yang digunakan. Di dalam function
tersebut kita mendefinisikan endpoint, dan function yang akan menghandlenya.

![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/a7b5e2e0-740e-4cd2-a385-c637ed05ce51)

### Melakukan Migration
Untuk melakukan migration kita perlu membuat file migration. Membuat file migration dapat dilakukan dengan menggunakan perintah berikut
```
php artisan make:migration create_names_table
```
Setelah file dibuat kita dapat menentukan struktur tablenya menggunakan Elouquent, yaitu  ORM dari laravel. Untuk panduan lengkapnya terdapat pada dokumentasi laravel

![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/7f5d7053-2375-40b9-9cd9-2d2f806a9cd4)
