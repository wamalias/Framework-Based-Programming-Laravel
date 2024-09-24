Tampilan UI berikut dibuat berdasarkan video tutorial laravel pada channel Web Programming UNPAS.

Berdasarkan penjelasan di video tersebut, sebuah tampilan UI yang dibangun menggunakan framework laravel akan disusun menggunakan blade. Kemudian, agar tidak terjadi banyak pengulangan kode, maka konsep blade component juga diterapkan dalam project ini. Terdapat 4 Route yang mewakili halaman yang akan dibuat dan ditampilkan. Setiap route ini akan memiliki file blade-nya masing-masing. Berikut adalah daftar halaman atau route yang telah dibuat dalam projet ini:
- Home Page
- Blog Page
- Contact Page
- About Page.

Tampilan dalam project ini secara garis besar dibagi menjadi 3 bagian: 
1) Navigasi Bar (Navbar) yang berisi segala hal terkait navigasi
2) Header yang menunjukkan nama halaman
3) Main yang berisi konten utama dari halaman tersebut.

Untuk mencegah pengulangan kode dan memudahkan maintenance kode kedepannya, maka dibuat lah 4 komponen blade. Blade component yang telah dibuat adalah:
- **Layout** yang akan mengatur susunan halaman secara garis besar, mulai dari navbar hingga main. Isi konten main tergantung apa yang dituliskan dalam blade yang memanggilnya.
- **Navbar** yang akan mengatur tampilan navigasi bar.
- **Header** yang akan mengatur styling header. Text yang akan ditampilkan pada header akan diambil dari attribute title yang tercantum di route dan telah diteruskan oleh komponen layout saat komponen tersebut dipanggil oleh sebuah blade.
- **Nav-link** yang akan mengatur styling hover dan toogle pada navbar sesuai halaman yang sedang aktif.

Berikut adalah tampilan UI yang telah saya buat.
![Screenshot 2024-09-11 144350](https://github.com/user-attachments/assets/a45d2487-99fe-4ac5-9bc1-41823bc9ffc5)
![Screenshot 2024-09-11 144401](https://github.com/user-attachments/assets/f10ce790-aac0-44e8-bebb-271004cad66a)
![Screenshot 2024-09-11 144423](https://github.com/user-attachments/assets/f2947cb2-73f0-42ff-9755-c0cae12d59c6)
![Screenshot 2024-09-11 144413](https://github.com/user-attachments/assets/cf9403b6-4be0-4495-96d9-04fff422f3c7)

Untuk mendukung konsep MVC (Model - View - Controller) dalam project ini, maka diperlukan pengelolaan view data dan model. Pada folder model, dibuat sebuah file untuk menyimpan kelas Post (Post.php). Kemudian, dalam route (web.php) ditambahkan beberapa penyesuaian agar setiap data yang tersimpan dalam model dapat ditampilkan oleh view dengan baik. Peran route ini seperti controller dalam konsep MVC. Berikut adalah tampilan halaman blog yang akan menampilkan posts dan memungkinkan setiap post dibuka dalam halaman single post.

Halaman Blog / Posts
![Screenshot 2024-09-18 213514](https://github.com/user-attachments/assets/27c758fe-7fdd-4c88-85c7-60142e5bc2de)

Halaman Single Post
![Screenshot 2024-09-18 213523](https://github.com/user-attachments/assets/09df7622-6df5-4e85-8dd8-a4015e8f903a)
![Screenshot 2024-09-18 213535](https://github.com/user-attachments/assets/c02938ff-c53e-4d89-aa53-09e13d040f93)

Error Handling (ketika halaman tidak ditemukan)
![Screenshot 2024-09-18 213549](https://github.com/user-attachments/assets/08530fd6-9bf2-4b9f-9a1b-5deaa6b064bf)

Dalam tahap pembuatan migrasi data dan penggunaan eloquent ORM, database yang digunakan bertipe SQLite dan memanfaatkan TablePlus untuk membuat koneksi database. Berikut adalah tampilan database beserta tabel Posts hasil dari migrasi dan input data menggunakan php artisan tinker
![Screenshot 2024-09-24 151534](https://github.com/user-attachments/assets/49133344-bcc3-481e-8602-e993f385469f)

Kemudian, berikut adalah tampilan blog (/Posts dan /Posts/{post:slug}) yang telah menampilkan data dari database. Untuk tanggal postingan juga telah disesuaikan dengan isi kolom created_at dengan pengaturan format tanggal bulan tahun sesuai formatting php (j F Y).
![Screenshot 2024-09-24 151458](https://github.com/user-attachments/assets/d4ce8f92-47b8-47cd-9e62-f5e8ea3eee18)
![Screenshot 2024-09-24 151509](https://github.com/user-attachments/assets/f2c98057-ce78-43de-9604-11009d064fdf)
