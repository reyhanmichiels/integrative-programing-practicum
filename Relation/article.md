## Relasi One-to-Many dan Many-to-Many
<p>Untuk melakukan relasi kita harus mendefinisikan table dan modelnya terlebih dahulu</p>

### Relasi One-to-Many
<p>Untuk melakukan relasi one to many kita dapat membuat function yang mereturn pemanggilan method hasMany(). Penamaan function tersebut juga harus sesuai dengan aturan penamaan, yaitu  plural case dari nama table yang berelasi. Jika penamaan foreign key tidak sesuai dengan aturan dari lumen, kita harus memberitahu nama foreignkeynya pada parameter ke 2 method hasMany()</p>

![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/e608bc94-ed83-4e3e-bc35-8b8f1ef84c6b)

### Relasi Many-to-Many
<p>Sama dengan one to many, untuk melakukan relasi many to many kita bisa membuat function pada model. Bedanya adalah pada function ini kita melakukan pemanggilan method belongsToMany. Relasi many to many membutuhkan table tambahan, jika nama table tambahan tersebut tidak sesuai dengan aturan laravel ktia dapat memberitahunya pada parameter ke 2 method belongsToMany()</p>

![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/4ce206ea-9379-491e-a200-43b3470ffdaf)

### postman docs
https://documenter.getpostman.com/view/25516509/2s9YRCXrUK
