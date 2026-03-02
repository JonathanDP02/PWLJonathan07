<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $barangIds = DB::table('m_barang')->pluck('barang_id')->toArray();
    $penjualanIds = DB::table('t_penjualan')->pluck('penjualan_id')->toArray();

    $data = [];

    foreach ($penjualanIds as $penjualanId) {
        for ($i = 1; $i <= 3; $i++) {
            $barangId = $barangIds[array_rand($barangIds)];

            $data[] = [
                'penjualan_id' => $penjualanId,
                'barang_id' => $barangId,
                'harga' => rand(25000,40000),
                'jumlah' => rand(1,5),
            ];
        }
    }

    DB::table('t_penjualan_detail')->insert($data);
    }
}
