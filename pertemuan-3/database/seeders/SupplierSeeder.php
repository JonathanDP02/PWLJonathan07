<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['supplier_kode'=>'SUP01','supplier_nama'=>'Supplier A','supplier_alamat'=>'Malang'],
            ['supplier_kode'=>'SUP02','supplier_nama'=>'Supplier B','supplier_alamat'=>'Surabaya'],
            ['supplier_kode'=>'SUP03','supplier_nama'=>'Supplier C','supplier_alamat'=>'Jakarta'],
        ];

        DB::table('m_supplier')->insert($data);
    }
}
