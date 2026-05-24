
# Pertemuan 14

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/c74fbd256d00620067b019618c923e7c928910aa/Pertemuan-14/pt14-1.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/c74fbd256d00620067b019618c923e7c928910aa/Pertemuan-14/pt14-2.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/c74fbd256d00620067b019618c923e7c928910aa/Pertemuan-14/pt14-3.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/c74fbd256d00620067b019618c923e7c928910aa/Pertemuan-14/pt14-4.png)


## L. Analisis & Diskusi

### 1. Apa perbedaan relationship() dengan options()?
relationship(): Mengambil daftar pilihan secara dinamis langsung dari relasi database (Eloquent). Jika data di database bertambah, pilihan otomatis update.

options(): Menggunakan daftar pilihan secara statis (manual) dari array yang kamu tulis (hardcode) di dalam kodingan.

### 2. Mengapa searchable penting untuk dataset besar?
Sangat penting untuk efisiensi dan UX (User Experience). Pada dataset berisi ribuan data, mencari item secara manual lewat paginasi akan sangat memakan waktu. searchable() menyediakan kolom pencarian agar pengguna bisa menemukan data spesifik dalam hitungan detik.

### 3. Apa fungsi Relationship Manager pada Filament?
Fungsinya adalah untuk mengelola (melihat, membuat, mengedit, menghapus) data anak/terkait secara langsung dari dalam halaman halaman form data induknya. Contohnya: Kamu bisa mengelola daftar Posts langsung di dalam halaman Edit Category, tanpa harus bolak-balik pindah menu.

### 4. Kapan menggunakan HasMany dan BelongsTo?
HasMany: Digunakan pada model Induk (One). Menandakan bahwa satu induk bisa memiliki banyak anak. (Contoh di model Category: Satu kategori punya banyak post).

BelongsTo: Digunakan pada model Anak (Many). Menandakan bahwa data anak ini menginduk/dimiliki oleh satu data utama, dan tabel anak inilah yang menyimpan foreign key (seperti category_id). (Contoh di model Post: Post ini milik sebuah kategori).