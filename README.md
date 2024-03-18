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



#### A. Installation
CodeIgniter memiliki dua metode instalasi yang didukung: pengunduhan manual, atau menggunakan Composer.

● Composer Installation
1. Buka terminal (di sini saya menggunakan terminal laragon).
2. Ketikan perintah berikut : 
```bash
composer create-project codeigniter4/appstarter LatihanCI4Evan
```
<img width="389" alt="image" src="https://github.com/EvanArlen194/TUGAS-1-Evan-Arlen-Handy-220302082-TI-2D/assets/124815888/17f19fdf-9188-422b-94bc-4d2b584a6ccd">

Perintah di atas akan membuat folder LatihanCI4Evan.

● Running Your App

► Local Development Server

CodeIgniter 4 hadir dengan server pengembangan lokal, memanfaatkan server web bawaan PHP dengan routing CodeIgniter. Anda dapat menjalankannya, dengan baris perintah berikut di direktori proyek anda:
```bash
php spark serve
```
<img width="305" alt="image" src="https://github.com/EvanArlen194/TUGAS-1-Evan-Arlen-Handy-220302082-TI-2D/assets/124815888/3eeed5e7-f049-4d54-b7d2-883cc5d462a1">

! CATATAN : Server pengembangan bawaan hanya boleh digunakan pada mesin pengembangan lokal. Server ini TIDAK BOLEH digunakan pada server produksi.

Jika Anda perlu menjalankan situs pada host selain dari host lokal, Anda harus menambahkan host tersebut ke berkas host Anda. Lokasi file yang tepat bervariasi di setiap sistem operasi utama, meskipun semua sistem jenis unix (termasuk macOS) biasanya akan menyimpan file tersebut di /etc/hosts.

Server pengembangan lokal dapat dikustomisasi dengan tiga opsi baris perintah:

1. Anda dapat menggunakan opsi CLI --host untuk menentukan host yang berbeda untuk menjalankan aplikasi:
```bash
php spark serve --host example.dev
```
2. Secara default, server berjalan pada port 8080 tetapi Anda mungkin memiliki lebih dari satu situs yang berjalan, atau sudah memiliki aplikasi lain yang menggunakan port tersebut. Anda dapat menggunakan opsi CLI --port untuk menentukan port yang berbeda:
```bash
php spark serve --port 8081
```
3. Anda juga dapat menentukan versi PHP tertentu yang akan digunakan, dengan opsi --php CLI, dengan nilainya diatur ke jalur eksekusi PHP yang ingin Anda gunakan:
```bash
php spark serve --php /usr/bin/php7.6.5.4
```

### C. Build Your First Application
● Static Pages
Hal pertama yang akan Anda lakukan adalah menyiapkan routing rules untuk menangani static pages.
► Setting Routing Rules
Routing mengasosiasikan URI dengan controller method. Controller hanyalah sebuah kelas yang membantu mendelegasikan pekerjaan. Kita akan membuat controller nanti.

Mari kita siapkan routing rules. Buka berkas routes yang terletak di app/Config/Routes.php.

Satu-satunya arahan route di sana untuk memulai adalah:

```bash
<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
```
<img width="305" alt="image" src="https://github.com/EvanArlen194/TUGAS-1-Evan-Arlen-Handy-220302082-TI-2D/assets/124815888/2f2f2527-2073-436d-85ce-3c6860428763">

Perintah ini mengatakan bahwa setiap permintaan yang masuk tanpa konten apa pun yang ditentukan harus ditangani oleh method index() di dalam controller Home.

► Create Pages Controller
Buat sebuah file di app/Controllers/Pages.php dengan kode berikut.
```bash
<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function view($page = 'home')
    {
        // ...
    }
}
```
<img width="298" alt="image" src="https://github.com/EvanArlen194/TUGAS-1-Evan-Arlen-Handy-220302082-TI-2D/assets/124815888/a25f55df-3a0d-4583-b25e-c823e0b4d12b">

Anda telah membuat class bernama Pages, dengan method view() yang menerima satu argumen bernama $page.

classs Pages memperluas class BaseController yang memperluas class CodeIgniter\Controller. Ini berarti bahwa class Pages yang baru dapat mengakses method dan properti yang didefinisikan dalam class CodeIgniter\Controller (system/Controller.php).

Controller inilah yang akan menjadi pusat dari setiap permintaan ke aplikasi web Anda. Seperti halnya class PHP lainnya, Anda dapat merujuknya di dalam controller sebagai $this.




