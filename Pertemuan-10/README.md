
# Pertemuan 10

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/62a84d5821234d233f873f1eda01292c10eb8f24/Pertemuan-10/pt10-1.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/62a84d5821234d233f873f1eda01292c10eb8f24/Pertemuan-10/pt10-2.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/62a84d5821234d233f873f1eda01292c10eb8f24/Pertemuan-10/pt10-3.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/62a84d5821234d233f873f1eda01292c10eb8f24/Pertemuan-10/pt10-4.png)

## L. Analisis & Diskusi

### 1. Mengapa sorting penting pada admin panel?
Sorting (pengurutan) sangat penting pada admin panel karena memungkinkan pengguna untuk dengan cepat menemukan, mengorganisir, dan menganalisis prioritas data dari ribuan baris informasi tanpa harus mencarinya secara manual satu per satu.

### 2. Apa perbedaan sortable biasa dengan defaultSort()?
Method sortable() memberikan opsi agar kolom tersebut bisa diurutkan secara manual oleh pengguna dengan cara mengklik header tabelnya, sedangkan defaultSort() berfungsi untuk menentukan urutan baku data secara otomatis saat halaman pertama kali dimuat tanpa perlu interaksi pengguna.

### 3. Mengapa relasi tetap bisa di-sort?
Kolom yang berasal dari relasi antar-tabel tetap bisa diurutkan karena di balik layar, framework (seperti Eloquent di Laravel) menggunakan mekanisme SQL JOIN sehingga operasi pengurutan tetap dieksekusi secara efisien langsung di dalam database.

### 4. Kapan kita menggunakan desc sebagai default?
Pengurutan desc (descending atau menurun) ideal digunakan sebagai default ketika pengguna perlu melihat data yang paling baru, paling besar, atau paling urgen di urutan teratas, seperti riwayat transaksi terakhir atau pendaftaran pengguna baru.
