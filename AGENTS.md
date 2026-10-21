# AGENTS.md — E-Hunian Laravel

## 1. Project Overview

E-Hunian Laravel merupakan backend API untuk aplikasi E-Hunian.

Project menggunakan Laravel dengan pola MVC dan RESTful API.

## 2. Development Rules

- Gunakan Laravel sesuai struktur MVC.
- API menggunakan prefix `/api/v1`.
- Gunakan autentikasi Bearer Token sesuai konfigurasi project.
- Validasi seluruh input dari client.
- Gunakan HTTP status code yang sesuai.
- Gunakan API Resource untuk response API.
- Pertahankan format JSON response yang sudah digunakan.
- Jangan mengubah nama field API tanpa memperbarui dokumentasi dan koordinasi dengan aplikasi Flutter.

## 3. Database Rules

- Jangan menghapus atau mengubah data database tanpa instruksi.
- Gunakan migration untuk perubahan struktur database.
- Pertahankan relasi antar tabel.
- Jangan membuat duplikasi field atau tabel tanpa alasan yang jelas.

## 4. Git Workflow

- Jangan bekerja langsung pada branch `main`.
- Gunakan branch `dev` atau `feature/*`.
- Gunakan Conventional Commits.
- Perubahan fitur harus melalui Pull Request.
- Perubahan yang sudah dipush bersama tidak boleh diubah dengan `git push --force`.
- Untuk membatalkan commit gunakan `git revert`.
- Periksa `git status` sebelum commit dan push.

## 5. AI Safety Rules

Sebelum melakukan perubahan:
1. Baca `AGENTS.md`.
2. Baca `docs/project_guidelines.md`.
3. Baca `docs/architecture.md`.
4. Periksa struktur project dan file yang terkait.

AI tidak boleh:
- Menghapus file atau data tanpa instruksi.
- Mengubah kredensial atau `.env`.
- Mengubah database secara destruktif.
- Melakukan `git push --force`.
- Mengubah API contract tanpa memperbarui dokumentasi.

Setiap perubahan harus dilakukan seminimal mungkin dan tetap mengikuti arsitektur project.

## 6. Documentation

Jika perubahan berdampak pada API, database, arsitektur, atau workflow:
- Perbarui dokumentasi terkait.
- Pastikan `docs/architecture.md`, `docs/api_contract.md`, dan `docs/project_guidelines.md` tetap konsisten.