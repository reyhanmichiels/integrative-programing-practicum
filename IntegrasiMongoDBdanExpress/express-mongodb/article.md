## Praktikum 3

Pada praktikum kali ini kita membuat sebuah REST API sederhana yang menerapkan CRUD. 
Tech Stack:
* Node JS + Express JS
* MongoDB menggunakan library mongoose

REST API yang dibuat pada praktikum ini menggunakan arsitektur Model View Controller atau disebut juga MVC.
Pada arsitektur MVC yang dibuat terdapat 3 bagian yaitu route, model, dan controller
Route merupakan bagian dimana kita mendefinisikan endpoint kita, dan menentukan function mana yang mengurus endpoint tersebut.
Controller merupakan pusat logic pada aplikasi kita, umumnya function pada controller akan digunakan pada Route
Model disini mengurus data dari atau ke dalam database.

REST API ini memiakukan CRUD pada 1 resource, yaitu resource books. Berikut adalah link dokumentasi api
https://documenter.getpostman.com/view/25516509/2s9YCARA5Q
