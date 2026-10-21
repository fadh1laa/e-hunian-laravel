# Project Guidelines — E-Hunian Laravel

## 1. Overview

E-Hunian Laravel merupakan backend API untuk mendukung aplikasi E-Hunian. Backend digunakan untuk pengelolaan data hunian, unit, fasilitas, pengajuan sewa, dokumen, riwayat pengajuan, dan ulasan.

Project dikembangkan menggunakan Laravel dengan pendekatan MVC dan RESTful API.

## 2. Arsitektur

Project menggunakan pola MVC dan API Laravel.

Struktur utama:
- Models: representasi data dan relasi database.
- Controllers/API: menangani request dan business flow API.
- Requests: validasi input.
- Resources: standardisasi response JSON.
- Routes: endpoint REST API pada `routes/api.php`.
- Migrations: struktur database.

## 3. API Rules

- Gunakan endpoint RESTful yang konsisten.
- Validasi input menggunakan Request.
- Gunakan HTTP status code yang sesuai.
- Response API harus memiliki format yang konsisten.
- Jangan mengubah nama field API tanpa memperbarui dokumentasi.
- Perubahan kontrak API harus diperbarui pada `docs/api_contract.md`.

## 4. Authentication

Endpoint yang membutuhkan akses pengguna harus menggunakan mekanisme autentikasi yang telah ditentukan project.

Token atau credential tidak boleh ditulis langsung ke source code atau di-commit ke repository.

## 5. Database

- Gunakan migration untuk perubahan struktur database.
- Pertahankan relasi dan integritas data.
- Jangan menghapus data atau migration tanpa instruksi.
- Hindari perubahan schema yang tidak terdokumentasi.

## 6. Git Workflow

Jangan melakukan pengembangan langsung pada `main`.

Gunakan alur:

`main` → `dev` → `feature/*`

Setiap perubahan fitur atau perbaikan dibuat pada branch `feature/*`, kemudian diajukan melalui Pull Request ke `dev`.

Gunakan Conventional Commits, misalnya:
- `feat: add application endpoint`
- `fix: validate rental application`
- `docs: update api documentation`

## 7. AI Rules

AI harus:
- membaca `AGENTS.md` sebelum melakukan perubahan;
- mengikuti struktur dan aturan project;
- tidak menghapus file atau data tanpa instruksi;
- tidak mengubah credential atau file `.env`;
- mempertahankan kompatibilitas API;
- menjelaskan perubahan yang dilakukan;
- menyarankan pengujian setelah perubahan.

## 8. Rollback

Jika perubahan menyebabkan masalah, gunakan `git revert` untuk membatalkan commit yang sudah dibuat.

Jangan menggunakan:

`git push --force`

pada branch yang digunakan bersama.

## 9. Dokumentasi

Setiap perubahan yang berdampak pada API, database, atau arsitektur harus disertai pembaruan dokumentasi terkait.

Dokumen utama:
- `AGENTS.md`
- `docs/architecture.md`
- `docs/api_contract.md`
- `docs/project_guidelines.md`