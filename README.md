# 🌐 Web Application Project

[![Status](https://img.shields.io/badge/Status-In_Development-orange.svg)]()
[![Language](https://img.shields.io/badge/Main_Tech-PHP%20%7C%20HTML%20%7C%20Docker-blue.svg)]()

Selamat datang di repositori proyek web saya! Proyek ini dibangun untuk mempelajari pembuatan aplikasi web dinamis yang menghubungkan frontend (HTML/CSS) dengan backend pemrosesan data (PHP) serta manajemen basis data.

---

## 🚀 Tech Stack & Tools

Proyek ini memanfaatkan kombinasi teknologi berikut untuk membangun halaman web yang interaktif:

* **Frontend:** HTML5, CSS3, JavaScript (`abouttt.js`)
* **Backend:** PHP (`index.php`, `simpan.php`)
* **DevOps / Environment:** Docker & Docker Compose (`docker-compose.yml`)

---

## 📁 Struktur File

Berikut adalah gambaran singkat mengenai struktur file utama di dalam repositori ini:

* `index.html` & `about.html` — Struktur halaman utama dan halaman tentang.
* `style.css` & `about.css` — Desain dan tata letak visual halaman web.
* `index.php` — Titik masuk utama aplikasi web berbasis server-side PHP.
* `simpan.php` — Script PHP yang menangani pemrosesan atau penyimpanan data.
* `abouttt.js` — Menambahkan interaktivitas pada halaman about.
* `docker-compose.yml` — Konfigurasi container untuk menjalankan server PHP dan MySQL secara lokal.

---

## 🛠️ Mengapa Menggunakan Docker di Proyek Ini?

> 💡 **Catatan Pengembangan:** > Ekstensi *Live Server* di VS Code secara bawaan hanya mendukung file statis (HTML/CSS/JS) dan **tidak bisa** mengeksekusi kode backend seperti PHP atau terhubung ke MySQL. 

Untuk mengatasi batasan tersebut, proyek ini dilengkapi dengan **Docker**. Dengan Docker, Anda tidak perlu pusing menginstal XAMPP/Laragon secara manual. Cukup jalankan container, dan lingkungan server PHP serta database MySQL siap digunakan secara instan dan konsisten!

### Cara Menjalankan Proyek (Menggunakan Docker)

1. Pastikan Anda sudah menginstal **Docker Desktop** di komputer Anda.
2. Buka terminal di folder proyek ini.
3. Jalankan perintah berikut untuk menyalakan server:
   ```bash
   docker-compose up -d
