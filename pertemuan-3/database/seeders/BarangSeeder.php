<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $kategoriIds = DB::table('m_kategori')
        ->pluck('kategori_id')
        ->toArray();

    if (empty($kategoriIds)) {
        throw new \Exception('Kategori belum ada. Jalankan KategoriSeeder dulu.');
    }

    $data = [];

    for ($i = 1; $i <= 15; $i++) {
        $data[] = [
            'kategori_id' => $kategoriIds[array_rand($kategoriIds)],
            'barang_kode' => 'BRG'.str_pad($i,3,'0',STR_PAD_LEFT),
            'barang_nama' => 'Barang '.$i,
            'harga_beli' => rand(5000,20000),
            'harga_jual' => rand(21000,40000),
        ];
    }

    DB::table('m_barang')->insert($data);
    }
}
