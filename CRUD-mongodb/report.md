## Menggunakan Mongo DB Compass

1. Lakukan koneksi ke MongoDB menggunakan connection string
![Screenshot from 2023-09-14 16-30-29](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/83f98788-5a8c-46b7-b982-34112834b561)
2. Buat database dengan melakukan klik “Create Database”
![Screenshot from 2023-09-14 16-32-26](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/5d810e06-c3f4-46cd-911d-d95d73be2298)
3. Lakukan insert buku pertama dengan melakukan klik “Add Data”, pilih “Insert Document”, isi dengan data yang diinginkan dan klik “Insert”
   
![Screenshot from 2023-09-14 16-35-31](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/a65ac14a-00c0-4631-911f-c0ba7915bb31)

4. Lakukan insert buku kedua dengan cara yang sama.

![Screenshot from 2023-09-14 16-39-12](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/6fdd5b94-0d76-44db-8bd6-4c734b9454fb)

5. Lakukan pencarian buku dengan author “Osamu Dazai” dengan mengisi filter yang diinginkan dan klik “Find”
  
![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/46babb38-902c-40d8-aac1-d056fba69d68)

6. Lakukan perubahan summary pada buku “No Longer Human” menjadi “Buku yang
bagus (<NAMA>,<NIM>) dengan melakukan klik “Edit Document” (berlambang
pensil), mengisi nilai summary yang baru, dan melakukan klik “Update”

![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/73d41f74-7b83-4831-80b2-132c1eb494cd)

7. Lakukan penghapusan pada buku “I Am a Cat” dengan melakukan klik “Remove
Document” (berlambang tong sampah) dan melakukan klik “Delete”

![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/1ab65df9-3611-481a-af6b-5ae54b65717c)

## Menggunakan Mongo DB Shell

1. Lakukan koneksi ke MongoDB Server dengan menjalankan command mongosh bagi
yang menggunakan terminal build in OS sehingga tampilan terminal kalian akan
menjadi seperti berikut

![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/9ceb11ab-62df-49a6-bfe0-a0c133206b6d)

2. Mencoba melihat list database yang ada di server dengan menjalankan command
`show dbs`

![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/13c14d0a-a491-4b85-a9a6-06d5322cacf9)

Untuk berpindah ke database “bookstore” gunakan command `use bookstore` , kalian
dapat memastikan telah berpindah ke database yang benar dengan melihat tulisan
sebelum tanda “>”

![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/f6945c6c-12ac-45fc-9f29-77ff99bf848f)

Cobalah untuk melihat collection yang ada pada database tersebut dengan
menggunakan command `show collections`

![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/4c37c951-d383-4491-b64d-a64aac5dc6c0)

3. Lakukan insert buku “Overlord I” dengan menggunakan command
`db.books.insertOne(<data kalian>)` , setelah insert buku berhasil maka MongoDB akan
mengembalikan pesan sebagai berikut.

![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/c4c90f65-07de-46cd-875b-1cbbfd63c6cb)

4. Lakukan insert buku “The Setting Sun” dan “Hujan” dengan insert many dengan
menggunakan command `db.books.insertMany(<data kalian>)` , dan akan mengembalikan pesan sebagai berikut.

![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/165b3e40-3be6-4140-b3f2-e50f14c19d75)

5. Lakukan pencarian buku dengan menggunakan command `db.books.find()` untuk
melakukan pencarian semua buku.

![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/fb571511-e0d7-4f5b-a880-150b98be5fd5)

6. Tampilkan seluruh buku dengan author “Osamu Dazai” dengan mengisi argument
pada find() dengan menggunakan command `db.books.find({<filter yang ingin
diisi>})`

![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/773a500d-b103-4646-85bc-249cf05a09b4)

7. Lakukan perubahan summary pada buku “Hujan” menjadi “Buku yang bagus
(<NAMA>,<NIM>) dengan mengunakan `command db.books.updateOne({<filter>},
{$set: {<data yang akan di update>}})` sehingga output yang dihasilkan oleh MongoDB
akan menjadi seperti berikut

![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/151f8a76-b815-4736-b0e4-639b00946b4c)


8. Lakukan perubahan publisher menjadi “Yen Press” pada semua buku “Osamu
Dazai” dengan menggunakan command `db.books.updateMany({<filter>}, {$set: {<data
yang akan di update>}})`

![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/d359ac0d-0d25-47ad-ab4f-2fe9c21f9b3f)

9. Lakukan penghapusan pada buku “Overlord I” dengan menggunakan command
`db.books.deleteOne({<argument>})`

 ![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/d05bded4-351c-45aa-9303-a686841639ef)

10.Lakukan penghapusan pada semua buku “Osamu Dazai dengan menggunakan
command `db.books.deleteMany({<argument>})` 

![image](https://github.com/reyhanmichiels/integrative-programing-practicum/assets/103521934/49c722da-fc96-419f-b0eb-88c68117b5ee)


