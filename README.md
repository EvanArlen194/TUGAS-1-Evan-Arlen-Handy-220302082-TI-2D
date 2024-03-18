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
■ CodeIgniter memiliki dua metode instalasi yang didukung: pengunduhan manual, atau menggunakan Composer.

### Materi ke 1. Composer Installation
1. Buka terminal (di sini saya menggunakan terminal laragon).
2. Ketikan perintah berikut : 
```bash
composer create-project codeigniter4/appstarter LatihanCI4Evan
```
<img width="389" alt="image" src="https://github.com/EvanArlen194/TUGAS-1-Evan-Arlen-Handy-220302082-TI-2D/assets/124815888/17f19fdf-9188-422b-94bc-4d2b584a6ccd">

Perintah di atas akan membuat folder LatihanCI4Evan.

### Materi ke 2. Running Your App

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
### Materi ke 3. Static Pages
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

class Pages memperluas class BaseController yang memperluas class CodeIgniter\Controller. Ini berarti bahwa class Pages yang baru dapat mengakses method dan properti yang didefinisikan dalam class CodeIgniter\Controller (system/Controller.php).

Controller inilah yang akan menjadi pusat dari setiap permintaan ke aplikasi web Anda. Seperti halnya class PHP lainnya, Anda dapat merujuknya di dalam controller sebagai $this.

► Create View
Setelah Anda membuat method pertama, sekarang saatnya untuk membuat beberapa pages template dasar. Kita akan membuat dua "view" (pages template) yang berfungsi sebagai footer dan header pages.
Buat header di app/Views/templates/header.php dan tambahkan kode berikut:
```bash
<!doctype html>
<html>
<head>
    <title>Belajar CodeIgniter 4</title>
</head>
<body>

    <h1><?= esc($title) ?></h1>
```
<img width="280" alt="image" src="https://github.com/EvanArlen194/TUGAS-1-Evan-Arlen-Handy-220302082-TI-2D/assets/124815888/b91a8155-81d5-45b4-baf5-7b8d3a3dce93">

Header berisi kode HTML dasar yang ingin Anda tampilkan sebelum memuat main view, bersama dengan heading. Header juga akan menampilkan variabel $title, yang akan kita definisikan nanti di controller. Sekarang, buatlah footer di app/Views/templates/footer.php yang menyertakan kode berikut:
```bash
<em>&copy; 2024</em>
</body>
</html>
```
<img width="266" alt="image" src="https://github.com/EvanArlen194/TUGAS-1-Evan-Arlen-Handy-220302082-TI-2D/assets/124815888/1e190a82-b9a5-4769-ad8b-603dc4e550df">


► Adding Logic to the Controller
Sebelumnya Anda telah menyiapkan controller dengan method view(). Method ini menerima satu parameter, yaitu nama page yang akan dimuat.
Body static pages akan ditempatkan di direktori app/Views/pages.
Di dalam direktori tersebut, buatlah dua file bernama evan.php Di dalam berkas-berkas tersebut, ketik beberapa teks - apa pun yang Anda inginkan - dan simpan.

Lalu lengkapi method Pages::view()
```bash
<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Pages extends BaseController
{
    public function view($page = 'home')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page);

        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }
}
```
<img width="463" alt="image" src="https://github.com/EvanArlen194/TUGAS-1-Evan-Arlen-Handy-220302082-TI-2D/assets/124815888/0cfa469e-9c97-4bf9-af2c-3ca1a8d61ad6">

Kunjungi localhost:8080/evan untuk menampilkan static pages
<img width="299" alt="image" src="https://github.com/EvanArlen194/TUGAS-1-Evan-Arlen-Handy-220302082-TI-2D/assets/124815888/57745d19-0419-4a0a-9251-ecd6e81bb318">

### D. CodeIgniter4 Overview
### Materi ke 4. Struktur direktori aplikasi pada CodeIgniter adalah sebagai berikut :
```bash
LatihanCI4Evan/
│
├── app/
│   ├── Config/               # Konfigurasi aplikasi
│   ├── Controllers/          # Kontroler
│   ├── Database/             # File migrasi dan seeds
│   ├── Filters/              # Filter
│   ├── Helpers/              # Helper tambahan
│   ├── Libraries/            # Pustaka tambahan
│   ├── Locales/              # File terjemahan
│   ├── Models/               # Model
│   ├── ThirdParty/           # Pustaka pihak ketiga
│   └── Views/                # Tampilan
│
├── public/                   # Dokumen publik
│   ├── index.php             # Pintu masuk utama
│   └── .htaccess             # File konfigurasi server
│
├── system/                   # Core CodeIgniter
│
├── writable/                 # Direktori untuk data yang dapat ditulis
│   ├── cache/                # Cache aplikasi
│   ├── logs/                 # Log aplikasi
│   └── uploads/              # Direktori upload file
│
├── tests/                     # Unit dan fungsional test
│
├── composer.json              # Konfigurasi Composer
├── spark                      # CLI CodeIgniter
└── phpunit.xml.dist           # Konfigurasi PHPUnit
```
<img width="602" alt="image" src="https://github.com/EvanArlen194/TUGAS-1-Evan-Arlen-Handy-220302082-TI-2D/assets/124815888/91599497-eeaf-44f2-aa7d-d46e5a314969">

### E. Models, Views, and Controllers
### Materi ke 5. MVC
■ MVC adalah sebuah pola arsitektur dalam membuat sebuah aplikasi dengan cara memisahkan kode menjadi tiga bagian yang terdiri dari Model, Views, dan Controller.
► Model : Tugas model adalah memelihara satu jenis data untuk aplikasi. Data ini bisa berupa pengguna, posting blog, transaksi, dll. Dalam hal ini, tugas model memiliki dua bagian: menerapkan aturan bisnis pada data yang diambil dari, atau dimasukkan ke dalam, basis data; dan menangani penyimpanan dan pengambilan data yang sebenarnya dari basis data.

► Views : File yang paling sederhana dan biasanya berupa HTML dengan jumlah PHP yang sangat sedikit. PHP yang sederhana, biasanya hanya menampilkan isi variabel, atau looping beberapa item dan menampilkan informasinya dalam sebuah tabel.

► Controller : Controller memiliki beberapa peran yang berbeda. Yang paling jelas adalah bahwa mereka menerima input dari pengguna dan kemudian menentukan apa yang harus dilakukan dengan input tersebut. Hal ini sering kali melibatkan pengoperan data ke model untuk menyimpannya, atau meminta data dari model yang kemudian diteruskan ke view yang akan ditampilkan. Hal ini juga termasuk memuat kelas utilitas lain, jika diperlukan, untuk menangani tugas-tugas khusus yang berada di luar lingkup model.

Tanggung jawab lain dari controller adalah menangani segala sesuatu yang berhubungan dengan HTTP requests - redirects, authentication, web safety, encoding, dll. 

### Materi ke 6. Autoloading Files

