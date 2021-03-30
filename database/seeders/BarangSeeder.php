<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'kode_barang' => 'PRD001',
                'nama_barang' => ' Indomie',
                'kategori_barang' => 'Makanan',
                'harga' => '3000',
                'qty' => '100'
            ],
            [
                'kode_barang' => 'PRD002',
                'nama_barang' => ' Pocari Sweet',
                'kategori_barang' => 'Minuman',
                'harga' => '6000',
                'qty' => '50'
            ],
            [
                'kode_barang' => 'PRD003',
                'nama_barang' => ' Silverqueen',
                'kategori_barang' => 'Snack',
                'harga' => '12500',
                'qty' => '45'
            ],
            [
                'kode_barang' => 'PRD004',
                'nama_barang' => ' Pensil',
                'kategori_barang' => 'Peralatan',
                'harga' => '3000',
                'qty' => '100'
            ],
            [
                'kode_barang' => 'PRD005',
                'nama_barang' => ' Sosis',
                'kategori_barang' => 'Makanan',
                'harga' => '3000',
                'qty' => '100'
            ],
            [
                'kode_barang' => 'PRD006',
                'nama_barang' => ' Teh Pucuk',
                'kategori_barang' => 'Minuman',
                'harga' => '3000',
                'qty' => '50'
            ],
            [
                'kode_barang' => 'PRD007',
                'nama_barang' => ' Taro',
                'kategori_barang' => 'Snack',
                'harga' => '5000',
                'qty' => '60'
            ],
            [
                'kode_barang' => 'PRD008',
                'nama_barang' => ' Penggaris',
                'kategori_barang' => 'Peralatan',
                'harga' => '2000',
                'qty' => '100'
            ],
            [
                'kode_barang' => 'PRD009',
                'nama_barang' => ' Buffalo Meat',
                'kategori_barang' => 'Makanan',
                'harga' => '80000',
                'qty' => '50'
            ],
            [

                'kode_barang' => 'PRD0010',
                'nama_barang' => ' Ultra Milk',
                'kategori_barang' => 'Minuman',
                'harga' => '6000',
                'qty' => '150'
            ],
            [

                'kode_barang' => 'PRD0011',
                'nama_barang' => ' Pillow',
                'kategori_barang' => 'Snack',
                'harga' => '8000',
                'qty' => '80'
            ],
            [

                'kode_barang' => 'PRD0012',
                'nama_barang' => ' Spidol',
                'kategori_barang' => 'Peralatan',
                'harga' => '12000',
                'qty' => '100'
            ],
            [

                'kode_barang' => 'PRD0013',
                'nama_barang' => ' Pop Mie',
                'kategori_barang' => 'Makanan',
                'harga' => '5000',
                'qty' => '80'
            ],
            [

                'kode_barang' => 'PRD0014',
                'nama_barang' => ' Teh Javana',
                'kategori_barang' => 'Minuman',
                'harga' => '3000',
                'qty' => '40'
            ],
            [

                'kode_barang' => 'PRD0015',
                'nama_barang' => ' Roma Kelapa',
                'kategori_barang' => 'Snack',
                'harga' => '10000',
                'qty' => '100'
            ],
            [

                'kode_barang' => 'PRD0016',
                'nama_barang' => ' Tipe X',
                'kategori_barang' => 'Peralatan',
                'harga' => '5000',
                'qty' => '100'
            ],
            [

                'kode_barang' => 'PRD0017',
                'nama_barang' => ' Nugget',
                'kategori_barang' => 'Makanan',
                'harga' => '30000',
                'qty' => '150'
            ],
            [

                'kode_barang' => 'PRD0018',
                'nama_barang' => ' Coca Cola',
                'kategori_barang' => 'Minuman',
                'harga' => '10000',
                'qty' => '50'
            ],
            [

                'kode_barang' => 'PRD0019',
                'nama_barang' => ' Qtela',
                'kategori_barang' => 'Snack',
                'harga' => '10000',
                'qty' => '90'
            ],
            [

                'kode_barang' => 'PRD0020',
                'nama_barang' => ' Kotak Pensil',
                'kategori_barang' => 'Peralatan',
                'harga' => '20000',
                'qty' => '100'
            ]
            ];
            DB::table('barang')->insert($data);
        
    }
}
