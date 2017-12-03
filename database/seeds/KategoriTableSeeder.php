<?php

use Illuminate\Database\Seeder;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $result = DB::table('kategori')->insert([
            'kategori' => 'Toko',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);

        $result = DB::table('kategori')->insert([
            'kategori' => 'Jasa',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
    }
}
