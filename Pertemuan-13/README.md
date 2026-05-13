
# Pertemuan 12

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/bd796b459af299927e595d2e1576ab86e52c7918/Pertemuan-12/pt12-1.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/bd796b459af299927e595d2e1576ab86e52c7918/Pertemuan-12/pt12-2.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/bd796b459af299927e595d2e1576ab86e52c7918/Pertemuan-12/pt12-3.png)

![image alt](https://github.com/JonathanDP02/PWLJonathan07/blob/bd796b459af299927e595d2e1576ab86e52c7918/Pertemuan-12/pt12-4.png)


## L. Analisis & Diskusi

### 1. Mengapa action di tabel lebih efisien dibanding halaman edit?
Mengurangi navigasi dan pemuatan halaman (page load), sehingga pengguna bisa mengubah data spesifik dengan cepat tanpa perlu membuka form Edit secara penuh.

### 2. Apa perbedaan predefined action dan custom action?
Predefined action adalah aksi bawaan framework dengan logika dan tampilan standar (seperti Edit atau Delete), sedangkan custom action dibuat manual dari nol dengan kontrol penuh atas form dan logikanya.

### 3. Bagaimana cara menambahkan validasi dalam custom action?
Cukup tambahkan method ->form() atau ->schema() ke dalam aksi, lalu pasang aturan validasi langsung di komponen input tersebut (contoh: ->required() atau ->numeric()).

### 4. Kapan kita menggunakan Replicate?
Digunakan saat ingin membuat entri data baru yang isinya sebagian besar sama persis dengan data lama (duplikasi), sehingga jauh lebih cepat daripada mengisi form dari awal.
