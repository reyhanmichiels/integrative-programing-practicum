## Model Controller and Request Response

### Model 
model merupakan objek yang merepresentasikan table pada database. Pada model kita dapat melakukan beberapa konfigurasi, seperti menentukan kolum mana saja yang bisa diisi, menentukan relasi, accessor mutator, dll

![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/5e2336f9-bfd1-4c3b-be26-5f4831c8d40f)

### Controller
Controller merupakan pusat logic dari aplikasi kita. Sebenernya bisa saja kita tidak mengguanakan controller dan mendefinisikan logic pada route. Namun, hal ini akan menyebabkan kode tidak rapih dan maintanence kode akan menjadi lebih sulit.
Biasanya pada controller kita akan menggunakan model untuk mengambil data maupun menyimpan data dari dan ke database.

![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/dc7887ec-b486-4554-b872-390686a35fef)

### Request dan Response
Laravel menyediakan class `Illuminate\http\request` yang dapat digunakan untuk mengakses request yang dimasukkan oleh user. Contohnya pada praktikum ini kita menggunakan request untuk melihat endpoint yang digunakan user dan mengambil data yang dikirim user

![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/bc6ace4e-6d51-4b76-bf02-a1f7cd29cab7)

Laravel juga menyediakan object dan helper response yang dapat digunakan untuk mengembalikan data berupa objek json atau bentuk lainnya.

#### postman docs
https://documenter.getpostman.com/view/25516509/2s9YJhwKsD
