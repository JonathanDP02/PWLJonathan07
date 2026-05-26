
# Pertemuan 15

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/5eb397bcf6a8db6c73226322561e4a3899d5dcfb/Pertemuan-15/pt15.1.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/5eb397bcf6a8db6c73226322561e4a3899d5dcfb/Pertemuan-15/pt15-2.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/5eb397bcf6a8db6c73226322561e4a3899d5dcfb/Pertemuan-15/pt15-3.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/5eb397bcf6a8db6c73226322561e4a3899d5dcfb/Pertemuan-15/pt15-4.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/5eb397bcf6a8db6c73226322561e4a3899d5dcfb/Pertemuan-15/pt15-5.png)


## L. Analisis & Diskusi

### 1. Apa perbedaan HasMany dan Many-to-Many?
HasMany (One-to-Many): Relasi di mana satu baris dalam tabel A dapat memiliki banyak baris dalam tabel B, tetapi satu baris dalam tabel B hanya dimiliki oleh satu baris dalam tabel A.

Many-to-Many: Relasi di mana satu baris dalam tabel A dapat memiliki banyak baris dalam tabel B, dan sebaliknya, satu baris dalam tabel B dapat memiliki banyak baris dalam tabel A.

### 2. Mengapa pivot table diperlukan?
Pivot table diperlukan pada relasi Many-to-Many karena sistem database relasional tidak dapat menyimpan daftar nilai (list) langsung di dalam satu kolom tabel tanpa melanggar prinsip normalisasi. Pivot table berfungsi sebagai jembatan yang menghubungkan primary key dari kedua tabel yang berelasi, sehingga kita bisa memetakan hubungan banyak-ke-banyak secara terstruktur tanpa adanya data duplikat .

### 3. Apa fungsi attach dan detach pada Filament?
Attach: Berfungsi untuk menambahkan atau mengaitkan data ke dalam tabel pivot. Contohnya, saat Anda memilih tag di form Post, sistem akan membuat baris baru di tabel post_tag yang menghubungkan post_id dengan tag_id.

Detach: Berfungsi untuk menghapus atau melepas hubungan antara dua data di tabel pivot. Contohnya, saat Anda menghapus satu tag dari sebuah post, sistem akan menghapus baris terkait di tabel post_tag tersebut tanpa menghapus data post atau tag aslinya.

### 4. Mengapa JSON column kurang baik untuk relasi?
Sulit di-query: Database tidak bisa mencari data di dalam JSON secara efisien (lambat).

Tidak ada integritas data: Tidak ada foreign key, sehingga hubungan antar tabel tidak terjamin dan rawan tidak konsisten.

Data duplikat: Sering terjadi pengulangan data yang tidak perlu (tidak memenuhi aturan normalisasi database).

Sulit dikelola: Perubahan data pada satu elemen di dalam JSON membutuhkan proses parsing dan update yang rumit.