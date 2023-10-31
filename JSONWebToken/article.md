## JSON Web Token
<p>Json Web Token atau JWT merupakan token yang biasa digunakan untuk melakukan Autentikasi. Hal ini dikarenakan penggunaan JWT memakan cost yang rendah, karena kita bisa memverifikasi JWT tanpa menyimpan tokennya ke dalam database.</p>

### Implementasi secara manual
<p>Untuk implementasi secara manual kita dapat membuat token JWT sesuai ketentuan. Pada praktikum kali ini kita membuat beberapa function yang membantu kita untuk membuat token jwt</p>

![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/bf41ffe1-5a64-41e8-bbb2-f01747d92976)

<p>function jwt_manual dapat kita gunakan untuk menghasilkan token JWt. Pada praktikum ini, kita akan menggunakan function tersebut saat user melakukan login.</p>

<p>Setelah itu, kita harus membuat middleware untuk memverifikasi apakah token yang dimasukkan oleh user valid</p>
<p>Untuk melakukan verifikasi kita membuat 4 function yang akan digunakan pada function handle</p>

![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/f37c6836-731e-4a0c-9952-2bbfd946f8cf)
![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/2bef222f-b265-4614-a285-8369b7f0c325)


### Implementasi menggunakan library
<p>Pada praktikum kali ini kita akan menggunakan library jwt untuk php dari firebase. Untuk menggunakan library ini kita perlu melakukan installasi dependency terlebih dahulu dan membuat JWT_SECRET_TOKEN pada env</p>

![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/437ca696-9063-4f8c-a7c8-1179d7ad8749)

<p>Langkah berikutnya kita dapat membuat function yang membantu kita untuk generate token jwt nanti</p>

![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/c8f5d0eb-dd46-4742-a512-da077a2aa125)

<p>Sama seperti bab sebelumnya kita akan mengimplementasikan function tersebut saat user login. Terakhir kita juga perlu membuat midleware untuk memverifikasi token JWT Nya</p>

![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/ec75a682-44e7-4047-a6e4-7d88a83146c9)

### postman docs
https://documenter.getpostman.com/view/25516509/2s9YXb9ki2
