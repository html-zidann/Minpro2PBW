# Minpro 2 Pemrograman Berbasis Website

## Nama  : Zidan Daffa Ramadhan
## NIM   : 2409116056
## Kelas : Sistem Informasi B 2024

# Tujuan

Tujuan dari tugas ini adalah untuk mengimplementasikan data dari database ke dalam website portofolio. Fokus utamanya adalah mengubah website yang sebelumnya bersifat statis menjadi dinamis, di mana seluruh konten (profil, pengalaman, skill, dan sertifikat) diambil dari server melalui API menggunakan PHP dan database.

# Deskripsi Projek

Deskripsi Projek
Projek ini merupakan pengembangan dari Tugas 1. Website portofolio ini sekarang tidak lagi menyimpan data secara hardcoded di dalam HTML.

Perubahan Utama:

1. Migrasi Format: Mengubah file utama dari .html menjadi .php.

2. Integrasi Vue.js & Fetch API: Menggunakan Vue.js di sisi klien untuk mengambil data secara asinkron dari endpoint PHP (/api/...).

3. Data Driven: Seluruh komponen mulai dari foto profil, bar presentase skill, hingga daftar sertifikat dikelola melalui database.


# Fitur & Tampilan

## Section Home

<img width="1919" height="945" alt="image" src="https://github.com/user-attachments/assets/c26f64e8-abaa-4b39-97c4-e102bff7ba11" />


- Menampilkan identitas utama (Foto, Nama, Tagline).

- Data diikat (binding) menggunakan Vue.js dari tabel profile.

- Layout hero yang responsif dan fokus pada identitas pengguna.

## Section About & Experience

<img width="945" height="777" alt="image" src="https://github.com/user-attachments/assets/41c34587-36f2-4f45-8773-f17c538e8d92" />


- About Me: Deskripsi diri yang dinamis.

- Experience: Daftar pengalaman yang dirender otomatis menggunakan direktif v-for pada Vue.js.


## Technical Skills

<img width="802" height="424" alt="image" src="https://github.com/user-attachments/assets/5c42dcec-5702-467f-b2ab-dc23fbb4c1e6" />


- Visualisasi kemampuan menggunakan Bootstrap Progress Bar.

- Tingkat kemahiran (persentase) diambil langsung dari database untuk memberikan gambaran kompetensi yang akurat.


## Certificates

<img width="1653" height="505" alt="image" src="https://github.com/user-attachments/assets/21c06efe-a3df-42eb-9ddb-cb50b2144646" />


- Menampilkan bukti pencapaian dalam bentuk Card Grid.

- Menampilkan gambar sertifikat, judul, dan instansi penerbit secara dinamis.


# Teknologi yang digunakan

- Aplikasi: Visual Studio Code & Laragon

- Frontend: HTML5, CSS3, Bootstrap 5 (Styling).

- Reactivity: Vue.js 3 (CDN).

- Backend: PHP (sebagai penyedia API JSON).

- Database: MySQL & Apache.


# Struktur Folder

Portofolio-api/ 

api/ profile.php , experience.php, skills.php, certificate.php


assets/ = img/   file jpg, jpeg & png


css-portofolio.css

index.php
