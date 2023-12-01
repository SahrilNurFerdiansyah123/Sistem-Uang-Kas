![Tampilan XAMPP (1)](https://github.com/SahrilNurFerdiansyah123/Sistem-Uang-Kas/assets/152600300/68fac11c-a35a-410b-83ce-8e83634533f5)



![Designer](https://github.com/SahrilNurFerdiansyah123/Sistem-Uang-Kas/assets/152600300/fe21eeca-4e8e-48ad-8caf-c8ca5aedb6c1)

Hubungan database uang kas adalah hubungan antara data yang disimpan dalam sistem informasi akuntansi dengan data yang mencerminkan jumlah uang yang dimiliki oleh suatu organisasi. Database uang kas biasanya terdiri dari beberapa tabel yang saling berhubungan, seperti tabel penerimaan kas, pengeluaran kas, saldo kas, rekening bank, dan lain-lain. Tabel-tabel ini memiliki atribut-atribut yang menunjukkan informasi penting tentang transaksi uang kas, seperti tanggal, jumlah, sumber, tujuan, keterangan, dan lain-lain. Hubungan database uang kas dapat digambarkan dengan diagram entitas-relasi (ERD) yang menunjukkan entitas, atribut, dan relasi antara tabel-tabel dalam database. ERD dapat membantu dalam merancang dan mengembangkan aplikasi akuntansi uang kas yang efisien dan akurat.
Contoh hubungan database uang kas dapat dilihat pada gambar yang Anda kirimkan. Gambar tersebut menunjukkan sebuah screenshot dari phpMyAdmin, yaitu sebuah aplikasi web yang digunakan untuk mengelola database MySQL. Database yang ditampilkan dalam gambar memiliki nama “kas”, yang mungkin berisi data tentang uang kas suatu organisasi. Dalam database tersebut, terdapat beberapa tabel, seperti “kas_masuk”, “kas_keluar”, “rekening”, “bank”, dan lain-lain. Tabel-tabel ini saling berhubungan dengan garis dan panah yang menunjukkan kunci primer dan kunci asing dari masing-masing tabel. Kunci primer adalah atribut yang digunakan untuk mengidentifikasi setiap baris dalam tabel secara unik, sedangkan kunci asing adalah atribut yang digunakan untuk menghubungkan tabel dengan tabel lain yang memiliki kunci primer yang sama. Contohnya, tabel “kas_masuk” memiliki kunci primer “id”, yang merupakan nomor urut dari setiap penerimaan kas, dan kunci asing “rekening_id”, yang menghubungkan tabel “kas_masuk” dengan tabel “rekening” yang memiliki kunci primer “id”. Dengan demikian, hubungan database uang kas dapat memberikan informasi lengkap dan terintegrasi tentang transaksi uang kas yang terjadi dalam suatu organisasi.



![Sahril flowchart](https://github.com/SahrilNurFerdiansyah123/Sistem-Uang-Kas/assets/152600300/49e3019a-14cd-45d5-aaec-f31af8aa9f8a)

Tahapan flowchart sistem uang kas ini adalah sebagai berikut:
•	Login: Tahap ini adalah tahap awal dimana pelajar harus login ke sistem uang kas dengan menggunakan username dan password yang telah ditentukan.
•	Pembayaran: Tahap ini adalah tahap dimana pelajar melakukan pembayaran uang kas dengan menggunakan metode yang tersedia, seperti transfer bank, kartu kredit, atau tunai. Pelajar harus memasukkan jumlah uang yang ingin dibayar dan konfirmasi pembayaran.
•	Bukti Transaksi: Tahap ini adalah tahap dimana pelajar mendapatkan bukti transaksi yang berisi informasi tentang pembayaran yang telah dilakukan, seperti tanggal, waktu, jumlah, dan metode pembayaran. Bukti transaksi ini harus disimpan oleh pelajar sebagai bukti pembayaran yang sah.
•	Melakukan Pencatatan Pembukuan: Tahap ini adalah tahap dimana kelas administrasi menerima bukti transaksi dari pelajar dan melakukan pencatatan pembukuan dengan menggunakan sistem uang kas. Kelas administrasi harus memeriksa kebenaran dan kelengkapan data pembayaran yang diterima dari pelajar.
•	Menyimpan Data Pembayaran: Tahap ini adalah tahap dimana kelas administrasi menyimpan data pembayaran yang telah dicatat ke dalam database uang kas. Data pembayaran ini akan digunakan untuk melacak status pembayaran dari setiap pelajar dan menghitung total uang kas yang terkumpul.
•	Mengecek Status Pembayaran: Tahap ini adalah tahap dimana kelas administrasi mengecek status pembayaran dari setiap pelajar dengan menggunakan database uang kas. Kelas administrasi harus memastikan bahwa setiap pelajar telah membayar semua biaya uang kas yang dibebankan kepada mereka.
•	Mengarsipkan Data Pelajar: Tahap ini adalah tahap dimana kelas administrasi mengarsipkan data pelajar yang belum membayar semua biaya uang kas ke dalam folder arsip. Data pelajar yang diarsipkan ini akan ditindaklanjuti oleh kelas administrasi untuk melakukan penagihan atau sanksi terhadap pelajar yang menunggak pembayaran.
•	Membuat Laporan Transaksi: Tahap ini adalah tahap dimana kelas administrasi membuat laporan transaksi yang berisi informasi tentang semua transaksi uang kas yang telah dilakukan oleh pelajar, seperti jumlah, metode, dan status pembayaran. Laporan transaksi ini akan digunakan untuk melaporkan hasil pengelolaan uang kas kepada pihak yang berwenang, seperti guru, kepala sekolah, atau komite sekolah.
•	Menutup Laporan Transaksi: Tahap ini adalah tahap akhir dimana kelas administrasi menutup laporan transaksi yang telah dibuat dan menyimpannya ke dalam folder laporan. Laporan transaksi ini harus disimpan dengan baik oleh kelas administrasi sebagai dokumen penting yang berkaitan dengan uang kas.


![image](https://github.com/SahrilNurFerdiansyah123/Sistem-Uang-Kas/assets/152600300/515b2c37-2a2b-4960-91df-d98b8763382f)



Aplikasi pendataan uang kas dibuat dengan Framework Laravel 9. Dengan sistem pembayaran kas sekali selama seminggu. Aplikasi ini cocok untuk digunakan untuk di sekolah atau masing masing kelas. <br>

Beberapa CRUD menggunakan modal dan AJAX untuk pengambilan data agar mengurangi penggunaan pindah halaman. Dan seluruh menu menggunakan DataTable Server Side Processing.

**Penting**: Akan dilakukan rewrite seluruh modul. Untuk sekarang masih dalam tahap development di branch __rewrite/main__.

### Prasyarat![Sahril flowchart](https://github.com/SahrilNurFerdiansyah123/Sistem-Uang-Kas/assets/152600300/870c4879-b021-4668-9104-e0d26eb80343)


Berikut beberapa hal yang perlu diinstal terlebih dahulu:

-   Composer (https://getcomposer.org/)
-   PHP ^8.1.x
-   MySQL ^10.6
-   XAMPP

Jika Anda menggunakan XAMPP, untuk PHP dan MySQL sudah menjadi 1 (bundle) di dalam aplikasi XAMPP.

### Fitur

-   CRUD Data Siswa
-   CRUD Data Kelas
-   CRUD Data Jurusan
-   CRUD Data Transaksi Uang Kas
-   CRUD Data Administrator
-   Laporan

### Preview Gambar

_Login_
![Login](https://i.ibb.co/Ws6H4Kr/login.png)

_Dashboard_
![Dashboard](https://i.ibb.co/k3dCNyZ/dashboard.png)

_Daftar Pelajar_
![Daftar Pelajar](https://i.ibb.co/TPdYWxh/pelajar.png)

_Daftar Kelas_
![Daftar Kelas](https://i.ibb.co/9ZD9Nm4/kelas.png)

_Daftar Jurusan_
![Daftar Jurusan](https://i.ibb.co/LkFzhsS/jurusan.png)

_Daftar Kas_
![Daftar Kas](https://i.ibb.co/kBJwv30/kas-minggu-ini.png)

![Filter Kas](https://i.ibb.co/F88Gkyx/filter-kas.png)

_Laporan_
![Laporan](https://i.ibb.co/FmdXMBC/laporan.png)

_Daftar Administrator_
![Daftar Administrator](https://i.ibb.co/pyk0dSk/administrator.png)

_Logout_
![Logout](https://i.ibb.co/0Jd6GDM/logout.png)

### Langkah-langkah instalasi

-   Clone repository ini

HTTPS

```
https://github.com/mrizkimaulidan/wangkas.git
```

SSH

```
git@github.com:mrizkimaulidan/wangkas.git
```

-   Install seluruh packages yang dibutuhkan

```bash
composer install
```

-   Siapkan database dan atur file .env sesuai dengan konfigurasi Anda
-   Ubah value APP_NAME= pada file .env menjadi nama aplikasi yang anda inginkan
-   Jika sudah, migrate seluruh migrasi dan seeding data

```bash
php artisan migrate --seed
```

- Generate JWT Secret Token

```bash
php artisan jwt:secret
```

-   Ketik perintah dibawah ini untuk membuat cache baru dari beberapa konfigurasi yang telah diubah

```bash
php artisan optimize
```

-   Jalankan local server

```bash
php artisan serve
```

-   _(Opsional)_ Secara default debugbar akan aktif, untuk menonaktifkannnya cari variabel `DEBUGBAR_ENABLED` pada file .env dan ubah valuenya menjadi `false`

-   Akses ke halaman

```
http://127.0.0.1:8000
```

---

-   User default aplikasi untuk login

##### Administrator

```
Email       : admin@mail.com
Password    : secret
```

### Dibuat dengan

- [Laravel](https://laravel.com/) - Backend Framework
- [Bootstrap](https://getbootstrap.com/) - Frontend Framework

### Kontribusi

Silahkan request melalui kolom `Pull Requests` jika ingin melakukan kontribusi

### Pembuat

-   **Muhammad Rizki Maulidan**  - [mrizkimaulidan](https://github.com/mrizkimaulidan)

### Lisensi

Aplikasi ini boleh untuk dibagi dan diubah. Mohon tidak untuk diperjualbelikan!

### Ucapan terima kasih

-   [Mazer Dashboard Theme](https://github.com/zuramai/mazer)
-   Stackoverflow
-   Google
