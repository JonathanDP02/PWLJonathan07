<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $supplierIds = DB::table('m_supplier')->pluck('supplier_id')->toArray();
    $barangIds = DB::table('m_barang')->pluck('barang_id')->toArray();

    $data = [];

    foreach ($barangIds as $barangId) {
        $data[] = [
            'supplier_id' => $supplierIds[array_rand($supplierIds)],
            'barang_id' => $barangId,
            'user_id' => 1,
            'stok_tanggal' => now(),
            'stok_jumlah' => rand(10,100),
        ];
    }

    DB::table('t_stok')->insert($data);
    }
}
