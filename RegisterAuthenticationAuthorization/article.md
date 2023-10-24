## Register, Authentication dan Authorization

### Authentication
<p>Pada praktikum kali ini kita mengimplementasikan token based authentication. Token Bases Authentication menggunakan token untuk melakukan autentikasi pada user yang login kedalam sistem. Ketika user melakukan login, sistem akan menghasilkan token yang disimpan didalam database, dan dikembalikan kepada user. User perlu menyimpan token tersebut dan menggunakannya ketika mengakses endpoint endpoint yang membutuhkan token</p>

### Authorization
<p>Pada praktikum ini, authorization diimplementasikan menggunakan middleware. Middleware ini akan mengecek token yang dikirim pada HTTP Header, dan memastikan bahwa tokennya valid. Jika token tersebut tidak valid maka error response akan diberikan. Jika valid maka request akan dilanjutkan dan data user yang sesuai akan disimpan didalam request.</p>

### Implementasi
#### Registrasi
<p>Pada tahapan registrasi, sebenernya kita hanya membuat user baru dan menyimpannya dalam databse. Namun, kita perlu menyimpan password user dengan bentuk yang sudah terenskripsi untuk memastikan keamanan data</p>

![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/afe95f2d-8734-4546-86a3-e503933f7acb)

#### Login
<p>Pada tahapan login, kita memastikan credential yang dimasukkan user sudah sesuai dengan data yang ada didatabase. Jika memang sudah sesuai maka kita akan menggenerate sebuah token yang akan disimpan pada database, dan juga diberikan kepada user</p>

![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/e2845582-7980-4331-afd3-e8d1b580203b)

#### Middleware
<p>Pada middleware, kita melakukan pengecekan terhadap token yang dikirim oleh user</p>

![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/efe6316e-2687-48b2-b69c-7070aaf0b5c8)

### Postman docs
https://documenter.getpostman.com/view/25516509/2s9YRDyVgq
