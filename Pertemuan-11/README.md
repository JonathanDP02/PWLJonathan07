
# Pertemuan 11

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/a7fc1ec96e5759c10ae038a322d720391daa1c50/Pertemuan-11/pt11-1.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/a7fc1ec96e5759c10ae038a322d720391daa1c50/Pertemuan-11/pt11-2.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/a7fc1ec96e5759c10ae038a322d720391daa1c50/Pertemuan-11/pt11-3.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/a7fc1ec96e5759c10ae038a322d720391daa1c50/Pertemuan-11/pt11-4.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/a7fc1ec96e5759c10ae038a322d720391daa1c50/Pertemuan-11/pt11-5.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/a7fc1ec96e5759c10ae038a322d720391daa1c50/Pertemuan-11/pt11-6.png)

## L. Analisis & Diskusi

### 1. Mengapa search tidak cocok untuk filter tanggal?
Fitur pencarian teks (search) tidak cocok untuk tanggal karena basis data menyimpan waktu dalam format baku (seperti 2026-05-10), sehingga pencarian berbasis teks sangat tidak efisien dan rawan tidak cocok jika pengguna mengetik format yang berbeda (misalnya mengetik "10 Mei").

### 2. Apa fungsi relationship() pada SelectFilter?
Fungsi relationship() pada SelectFilter berguna untuk secara otomatis memuat daftar pilihan dropdown langsung dari tabel relasi (contoh: menampilkan nama kategori alih-alih ID kategori), sekaligus otomatis menangani logika query pemfilterannya.

### 3. Mengapa kita perlu whereDate() pada query filter?
Kita perlu menggunakan whereDate() pada query karena fungsi ini akan mengabaikan bagian jam/waktu (time) pada database dan hanya mencocokkan bagian tanggalnya saja, sehingga semua data yang masuk pada hari tersebut dapat terfilter dengan akurat terlepas dari jam berapa data itu dibuat.

### 4. Apa perbedaan searchable() dan filters()?
Perbedaan utamanya adalah searchable() digunakan untuk mencari data menggunakan input teks bebas berupa kata kunci di kolom pencarian, sedangkan filters() menyediakan antarmuka khusus (seperti dropdown atau kalender) untuk menyempitkan data berdasarkan kriteria atau rentang kondisi yang sudah terdefinisi secara pasti.