# Architecture – e-Hunian Laravel API

## 1. Overview

e-Hunian adalah aplikasi layanan dan pengelolaan Rusunawa berbasis mobile.

Project Laravel ini digunakan sebagai backend API untuk menyediakan struktur dasar layanan data yang akan digunakan oleh aplikasi Flutter.

Pada tahap Pertemuan 5, project masih berupa starter project. Business logic dan implementasi fitur lengkap belum dikembangkan.

---

## 2. Architecture

Backend menggunakan pola:

**MVC + REST API**

Pembagian tanggung jawab:

- **Models**: merepresentasikan data dan relationship database.
- **Controllers/API**: menjadi endpoint dan penghubung request dengan model.
- **Requests**: menyiapkan validasi request.
- **Resources**: menyiapkan format response API.
- **Routes**: mendefinisikan endpoint API.
- **Migrations**: mendefinisikan struktur database.

Alur umum:

```text
Client / Flutter
       |
       v
API Route
       |
       v
API Controller
       |
       v
Request / Model
       |
       v
Database
       |
       v
API Resource
       |
       v
JSON Response

## 3. Struktur Folder Utama

```text
e-hunian-laravel/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   └── Resources/
│   └── Models/
│
├── bootstrap/
├── config/
├── database/
│   ├── factories/
│   ├── migrations/
│   └── seeders/
│
├── docs/
├── public/
├── resources/
│   └── views/
│
├── routes/
│   ├── api.php
│   └── web.php
│
├── storage/
├── tests/
├── .env
├── artisan
├── composer.json
└── README.md

## 4. Komponen Utama

| Komponen | Fungsi |
|---|---|
| `app/Models` | Model dan relasi database |
| `app/Http/Controllers` | Menangani request API |
| `app/Http/Resources` | Format response JSON |
| `database/migrations` | Struktur tabel database |
| `routes/api.php` | Endpoint REST API |
| `routes/web.php` | Route web |
| `config/` | Konfigurasi aplikasi |
| `public/` | File yang dapat diakses publik |
| `resources/` | View dan resource frontend |
| `storage/` | File/log aplikasi |
| `tests/` | Pengujian aplikasi |
| `docs/` | Dokumentasi proyek |