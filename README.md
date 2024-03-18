# TUGAS-1-Evan-Arlen-Handy-220302082-TI-2D

### CodeIgniter
■ CodeIgniter adalah Kerangka Kerja Pengembangan Aplikasi - sebuah toolkit - untuk orang-orang yang membangun situs web menggunakan PHP. Tujuannya adalah untuk memungkinkan Anda mengembangkan proyek lebih cepat daripada jika Anda menulis kode dari awal, dengan menyediakan sekumpulan pustaka yang kaya untuk tugas-tugas yang umumnya dibutuhkan, serta antarmuka yang sederhana dan struktur logis untuk mengakses pustaka-pustaka ini. CodeIgniter memungkinkan Anda untuk fokus secara kreatif pada proyek Anda dengan meminimalkan jumlah kode yang dibutuhkan untuk tugas tertentu.

■ CodeIgniter tepat untuk Anda jika:

► Anda menginginkan kerangka kerja dengan footprint yang kecil.

► Anda membutuhkan kinerja yang luar biasa.

► Anda menginginkan sebuah framework yang hampir tidak memerlukan konfigurasi.

► Anda menginginkan framework yang tidak mengharuskan Anda menggunakan baris perintah.

► Anda menginginkan framework yang tidak mengharuskan Anda untuk mematuhi aturan pengkodean yang ketat.

► Anda tidak tertarik dengan pustaka monolitik berskala besar seperti PEAR.

► Anda tidak ingin dipaksa untuk mempelajari bahasa templating (meskipun pengurai templat tersedia secara opsional jika Anda menginginkannya).

► Anda menghindari kerumitan, dan lebih menyukai solusi yang sederhana.

► Anda membutuhkan dokumentasi yang jelas dan menyeluruh.



#### A. Instalasi
CodeIgniter memiliki dua metode instalasi yang didukung: pengunduhan manual, atau menggunakan Composer.
### ● Instalasi Mengunakan Composer
1. Buka terminal (di sini saya menggunakan terminal laragon).
2. Ketikan perintah berikut : 
```bash
composer create-project codeigniter4/appstarter LatihanCI4Evan
```
Perintah di atas akan membuat folder LatihanCI4Evan.

### B. Server Pengembangan Lokal
CodeIgniter 4 hadir dengan server pengembangan lokal, memanfaatkan server web bawaan PHP dengan routing CodeIgniter. Anda dapat menjalankannya, dengan baris perintah berikut di direktori proyek anda:
```bash
php spark serve
```
! CATATAN : Server pengembangan bawaan hanya boleh digunakan pada mesin pengembangan lokal. Server ini TIDAK BOLEH digunakan pada server produksi.

Jika Anda perlu menjalankan situs pada host selain dari host lokal, Anda harus menambahkan host tersebut ke berkas host Anda. Lokasi file yang tepat bervariasi di setiap sistem operasi utama, meskipun semua sistem jenis unix (termasuk macOS) biasanya akan menyimpan file tersebut di /etc/hosts.

Server pengembangan lokal dapat dikustomisasi dengan tiga opsi baris perintah:
●  Anda dapat menggunakan opsi CLI --host untuk menentukan host yang berbeda untuk menjalankan aplikasi:
```bash
php spark serve --host example.dev
```
● Secara default, server berjalan pada port 8080 tetapi Anda mungkin memiliki lebih dari satu situs yang berjalan, atau sudah memiliki aplikasi lain yang menggunakan port tersebut. Anda dapat menggunakan opsi CLI --port untuk menentukan port yang berbeda:
```bash
php spark serve --port 8081
```
● Anda juga dapat menentukan versi PHP tertentu yang akan digunakan, dengan opsi --php CLI, dengan nilainya diatur ke jalur eksekusi PHP yang ingin Anda gunakan:
```bash
php spark serve --php /usr/bin/php7.6.5.4
```
