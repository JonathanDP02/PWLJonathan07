## Pertemuan 5

## PRAKTIKUM 1
![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/184cf20fb833a0fd000ba20798800c5caf7643f1/pertemuan-6/pt6-1.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/184cf20fb833a0fd000ba20798800c5caf7643f1/pertemuan-6/pt6-2.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/184cf20fb833a0fd000ba20798800c5caf7643f1/pertemuan-6/pt6-3.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/184cf20fb833a0fd000ba20798800c5caf7643f1/pertemuan-6/pt6-4.png)

## PRAKTIKUM 2

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/184cf20fb833a0fd000ba20798800c5caf7643f1/pertemuan-6/pt6-5.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/184cf20fb833a0fd000ba20798800c5caf7643f1/pertemuan-6/pt6-6.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/184cf20fb833a0fd000ba20798800c5caf7643f1/pertemuan-6/pt6-7.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/184cf20fb833a0fd000ba20798800c5caf7643f1/pertemuan-6/pt6-8.png)

# I. Analisis & Diskusi

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/184cf20fb833a0fd000ba20798800c5caf7643f1/pertemuan-6/pt6-10.png)

# Mengapa Filament dapat membuat CRUD tanpa banyak coding?
Filament menggunakan pendekatan declarative (berbasis skema) dan dibangun terintegrasi erat dengan ekosistem Laravel (terutama Eloquent ORM dan Livewire). Daripada menulis controller, routing, dan halaman view (HTML/Blade) secara manual dari nol, Filament sudah merangkai logika standar CRUD di belakang layar. Kamu hanya perlu mendeklarasikan "apa" yang ingin dibuat (misalnya TextInput atau TextColumn), dan sistem otomatis men-generate antarmuka serta fungsi database-nya.

# Apa perbedaan Form Schema dan Table Schema?
Form Schema (form()): Digunakan secara khusus untuk mengatur tampilan antarmuka saat pengguna memasukkan data baru (Create) atau mengubah data yang sudah ada (Edit). Di sini kamu mendefinisikan komponen input (teks, dropdown, upload gambar) beserta aturan validasinya.

Table Schema (table()): Digunakan untuk mengatur bagaimana data ditampilkan dalam bentuk daftar/tabel (halaman List). Di sini kamu menentukan kolom apa saja yang muncul, mengatur fitur pencarian (searchable), pengurutan data (sortable), filter, dan tombol aksi (seperti View, Edit, Delete).
# Bagaimana jika kita ingin menambahkan validasi email unik?

Di dalam Filament, menambahkan validasi sangat mudah karena langsung disambungkan pada komponen form-nya. Kamu cukup menambahkan method unique() pada kolom email di UserForm.php.

# Mengapa password tidak perlu kita hash manual?
Pada Laravel 11, Model User bawaan sudah dilengkapi dengan fitur Model Casts. Jika kamu membuka file app/Models/User.php, terdapat pendefinisian array $casts yang mengubah password menjadi hashed ('password' => 'hashed'). Karena adanya aturan ini di level Model, setiap kali Filament (atau fitur Laravel lainnya) menyimpan kata sandi ke kolom password, Laravel secara otomatis mengeksekusi fungsi hash sesaat sebelum data tersebut menyentuh database.

## PRAKTIKUM 3

# J. Analisis & Diskusi

# Mengapa kita perlu $fillable?
$fillable diperlukan sebagai fitur keamanan yang disebut Mass Assignment Protection. Saat kita menyimpan data menggunakan metode seperti Category::create($request->all()), Laravel perlu tahu kolom mana saja yang boleh diisi secara otomatis oleh user.

# Apa fungsi $casts pada Laravel?
Fungsi $casts adalah untuk mengonversi tipe data secara otomatis saat data diambil dari database atau saat akan disimpan. Database sering kali menyimpan data dalam format sederhana (seperti string atau integer)

# Apa perbedaan integer biasa dengan foreign key?
Integer Biasa: Hanya sebuah tipe data angka yang tidak memiliki keterikatan dengan tabel lain. Angka tersebut tidak menjamin bahwa data yang dirujuk benar-benar ada.

Foreign Key: Adalah kolom integer khusus yang berfungsi sebagai penghubung (link) ke Primary Key di tabel lain. Foreign key menjaga Integritas Referensial, artinya database akan memastikan bahwa nilai category_id di tabel posts harus merujuk pada id yang valid dan ada di tabel categories.

# Bagaimana jika category dihapus tetapi masih ada post?
Pada langkah migrasi tadi, kita menggunakan perintah ->cascadeOnDelete(). Efeknya adalah:

    Jika sebuah Category dihapus, maka secara otomatis seluruh Post yang terhubung dengan kategori tersebut akan ikut terhapus.

    Hal ini dilakukan untuk mencegah adanya data "yatim" (orphaned data), yaitu postingan yang memiliki category_id tetapi kategorinya sudah tidak ada di database, yang bisa menyebabkan error pada aplikasi.

## Pertemuan 6
## Pertemuan 7
