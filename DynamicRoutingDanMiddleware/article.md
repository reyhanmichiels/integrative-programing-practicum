## Modul 5
Modul 5 mempelajari beberapa jenis routing dan juga middleware

### dynamic routing
Dynamic routing merupakan routing yang memiliki parameter atau value yang berubah ubah. Untuk mendefinisikan dynamic routing pada lumen cukup mudah, cukup mengapit value yang ingin dijadikan parameter dengan tanda ( {} ).
![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/462c4967-c7fe-4afb-863d-6d27d1a537d8)

selain itu ada juga optional routes yang dimana user bebas menentukan ingin menggunakan parameter atau tidak
![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/3503cfea-75de-4f92-800c-9642a7994b49)

### Aliases Routes
Aliases routes digunakan untuk memberi nama pada routes, sehingga kita dapat memanggil routes tersebut hanya dengan menggunakan namanya

![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/bde3fe61-da80-4cc7-aecb-d921c1896f5c)

### Group Route
Group route berfungsi untuk mengelompokkan routes yang memiliki prefix yang sama
![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/cf3284f8-795c-4391-9598-548ec62aed1d)

### Middleware 
Middleware berfungsi untuk memvalidasi request yang masuk ke dalam aplikasi kita. Jika validasi berhasil, maka kita dapat melanjutkan requestnya, jika gagal kita dapat menentukan apa yang akan terjadi dengan request tersebut

untuk membuat middleware pada lumen kita dapat mengcopy file ExampleMiddleware.php dan membuat file middleware baru.
![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/f21e9b8b-b5ae-4e19-94ce-1fcfad45ab38)

setelah itu kita dapat meregistrasikan middleware tersebut dan dapat menggunakannya
