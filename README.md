Tampilan UI berikut dibuat berdasarkan video tutorial laravel yang membahas tentang blade (https://www.youtube.com/watch?v=vDx6VA-6a6Y&t=1s) dan blade component (https://www.youtube.com/watch?v=00o1vJYTp4I) pada channel Web Programming UNPAS.

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
