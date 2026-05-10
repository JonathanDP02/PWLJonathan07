# Pertemuan 5

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






# Pertemuan 6

## Praktikum 1

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/57b3e18af739db1087711729746856763bea4c8e/pertemuan-6/pt5-1.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/57b3e18af739db1087711729746856763bea4c8e/pertemuan-6/pt5-2.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/57b3e18af739db1087711729746856763bea4c8e/pertemuan-6/pt5-3.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/57b3e18af739db1087711729746856763bea4c8e/pertemuan-6/pt5-4.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/57b3e18af739db1087711729746856763bea4c8e/pertemuan-6/pt5-5.png)

# I. Analisis & Diskusi

# Mengapa kita perlu storage:link?
Membuat symbolic link dari storage/app/public ke public/storage agar file yang diupload bisa diakses via HTTP (browser).

# Apa fungsi $casts untuk field JSON?
Otomatis mengkonversi JSON dari database menjadi array saat baca, dan array menjadi JSON saat simpan. Dalam contoh: 'tags' => 'array' membuat tags otomatis jadi array PHP.

# Mengapa kita menggunakan category.name bukan category_id?
Untuk menampilkan nama kategori yang lebih readable bagi user, bukan ID numerik yang tidak meaningful. Ini adalah relationship (relasi) ke tabel categories.

# Apa perbedaan RichEditor dan MarkdownEditor?
RichEditor: WYSIWYG editor (What You See Is What You Get) dengan toolbar formatting buttons
MarkdownEditor: Membutuhkan syntax markdown manual (bold: **text**, italic: *text*, dll)

## PRAKTIKUM 2

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/1759f2a5180b14706e6464085532bc4a659cf79c/pertemuan-6/pt5-6.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/1759f2a5180b14706e6464085532bc4a659cf79c/pertemuan-6/pt5-7.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/1759f2a5180b14706e6464085532bc4a659cf79c/pertemuan-6/pt5-8.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/1759f2a5180b14706e6464085532bc4a659cf79c/pertemuan-6/pt5-9.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/1759f2a5180b14706e6464085532bc4a659cf79c/pertemuan-6/pt5-10.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/1759f2a5180b14706e6464085532bc4a659cf79c/pertemuan-6/pt5-11.png)

# I. Analisis & Diskusi

# Mengapa layout form penting dalam aplikasi admin?
Meningkatkan user experience: Form terorganisir mudah dipahami dan diisi
Mengurangi kesalahan input: Pengelompokan yang jelas membantu user fokus
Meningkatkan efisiensi: User bekerja lebih cepat dengan navigasi form yang logis
Profesional: Form yang rapi meningkatkan kredibilitas aplikasi

# Apa perbedaan Section dan Group?
Section: Membuat container dengan header/title, border, dan visual separation jelas. Cocok untuk mengelompokkan field dalam kategori besar
Group: Hanya mengelompokkan field tanpa visual header yang menonjol. Lebih subtle, cocok untuk sub-grouping kecil dalam section

# Kapan kita menggunakan columnSpanFull()?
Ketika ingin field mengambil seluruh lebar form (12 kolom dari 12). Contoh: RichEditor, FileUpload, atau field yang butuh space banyak.

# Apa keuntungan sistem grid 12 kolom?
Fleksibel: Bisa dibagi menjadi 1, 2, 3, 4, 6, 12 kolom (semua pembagi 12)
Responsive: Mudah menyesuaikan layout di berbagai ukuran layar
Konsistensi: Standard industri, mudah dipahami developer lain
Control presisi: Fine-grained control atas penempatan elemen (span 3, 6, 4, dll)

## PRAKTIKUM 3

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/91f07142af6769f08b7ec48cf0891f4925dda0d9/pertemuan-6/pt5-12.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/91f07142af6769f08b7ec48cf0891f4925dda0d9/pertemuan-6/pt5-13.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/91f07142af6769f08b7ec48cf0891f4925dda0d9/pertemuan-6/pt5-14.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/91f07142af6769f08b7ec48cf0891f4925dda0d9/pertemuan-6/pt5-15.png)

# K. Analisis & Diskusi

# Mengapa validasi penting pada admin panel?
Data integrity: Mencegah data invalid masuk ke database
Security: Melindungi dari input berbahaya (injection, XSS, dll)
User experience: Memberikan feedback jelas tentang kesalahan input
Consistency: Memastikan format dan aturan bisnis terpenuhi (unique email, min length, dll)

# Apa perbedaan validasi client-side dan server-side?
Client-side: Validasi di browser sebelum kirim ke server. Cepat, UX baik, tapi bisa di-bypass
Server-side: Validasi di server setelah menerima data. Lebih aman, tidak bisa di-bypass, tapi lebih lambat

# Mengapa unique otomatis bekerja saat edit data?
Filament secara otomatis menambahkan ignoreRecord() pada rule unique() saat edit. Ini mengabaikan record yang sedang diedit dari pengecekan unique, sehingga user bisa simpan tanpa mengubah field (tidak dianggap duplicate).

# Kapan kita perlu menggunakan rules array dibanding string?
String: Rule sederhana, satu per field. Contoh: 'required|email|max:255'
Array: Ketika butuh rule kompleks dengan parameter khusus.






# Pertemuan 7

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/321daa3bc8f87434cfcb0be247b1679ae3ccfeb6/pertemuan-6/pt7-1.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/321daa3bc8f87434cfcb0be247b1679ae3ccfeb6/pertemuan-6/pt7-2.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/321daa3bc8f87434cfcb0be247b1679ae3ccfeb6/pertemuan-6/pt7-3.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/321daa3bc8f87434cfcb0be247b1679ae3ccfeb6/pertemuan-6/pt7-3.png)

## L. Analisis & Diskusi

### 1. Mengapa Wizard Form lebih baik untuk form panjang?
Karena mengurangi "beban kognitif" user. Form yang terlalu panjang di satu halaman bisa membuat user merasa kewalahan (overwhelmed). Dengan Wizard, data dipecah menjadi bagian-bagian kecil sehingga user bisa lebih fokus dan tidak merasa bosan saat mengisi.

### 2. Kapan kita menggunakan skippable()?
Saat urutan pengisian tidak harus berurutan secara ketat atau jika ada langkah yang bersifat opsional. Dengan skippable(), user bebas berpindah ke tahap mana pun tanpa harus menyelesaikan validasi di tahap sebelumnya terlebih dahulu.

### 3. Apa kelebihan multi step dibanding single form panjang?
Visual yang lebih bersih: Tidak butuh banyak scrolling.
Indikator Progress: User tahu sudah sejauh mana mereka mengisi dan berapa langkah lagi yang tersisa.
Organisasi Data: Memungkinkan pengelompokan input yang memiliki kategori berbeda (misal: Info Produk vs. Media) secara lebih logis.

### 4. Apakah wizard cocok untuk semua jenis form?
Tidak. Untuk form pendek (seperti Login, Search, atau Contact Us singkat), Wizard justru akan merepotkan karena menambah jumlah klik yang tidak perlu. Wizard paling pas digunakan untuk proses yang kompleks seperti Check-out belanja atau pendaftaran data yang sangat detail.

# Pertemuan 8

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/1be3b70b36616fae676a17e7f933ee099146fc96/pertemuan-6/pt8-1.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/1be3b70b36616fae676a17e7f933ee099146fc96/pertemuan-6/pt8-2.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/1be3b70b36616fae676a17e7f933ee099146fc96/pertemuan-6/pt8-3.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/1be3b70b36616fae676a17e7f933ee099146fc96/pertemuan-6/pt8-4.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/1be3b70b36616fae676a17e7f933ee099146fc96/pertemuan-6/pt8-5.png)

## L. Analisis & Diskusi

### 1. Mengapa View Page tidak cocok menggunakan form input?
View Page tidak cocok menggunakan form input karena halaman tersebut secara arsitektur dan pengalaman pengguna didesain khusus hanya untuk membaca informasi (read-only), sehingga mencegah terjadinya perubahan data yang tidak disengaja.

### 2. Apa perbedaan TextColumn dan TextEntry?
Perbedaan utamanya adalah TextColumn digunakan khusus untuk menampilkan teks pada banyak baris data di dalam tabel (halaman List), sedangkan TextEntry digunakan untuk menampilkan detail teks dari satu data spesifik di dalam Infolist (halaman View).

### 3. Kapan kita menggunakan badge?
Kita menggunakan badge ketika perlu menonjolkan status, kondisi, atau kategori singkat—seperti "Aktif" atau "Lunas"—dengan bantuan warna agar informasi tersebut langsung tertangkap oleh mata dalam hitungan detik.

### 4. Apa keuntungan menggunakan IconEntry untuk boolean?
Keuntungan utama menggunakan IconEntry untuk data boolean adalah memberikan kecepatan pemahaman visual kepada pengguna melalui simbol (seperti ceklis hijau atau silang merah) yang jauh lebih intuitif dan bersih dibandingkan harus membaca teks "Ya/Tidak" atau "True/False".