<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Hadiid Andri Yulison',
            'nba' => '05.06.64192',
            'email' => 'hadiidandri2000@gmail.com',
            'password' => bcrypt('hadiidandriy12'),
        ]);



        // \App\Models\Notif::factory(10)->create();

        \App\Models\Kegiatan::factory()->create([
            'nama' => 'PKD TM 1',
            'tema' => 'Ini adalah tema untuk menciptakan pelatihan ini menjadi pelatihan yang sangat berguna dalam kegiatannya',
            'dari' => '2022-09-30',
            'sampai' => '2022-10-02',
            'deskripsi'=> 'ini adalah deskripsi yang sangat panjang',
            'tujuan' => 'Ini adalah tujuannya dalam kegiatan ini',
            'informasi' => 'Ini adalah informasi yang wajib semuanya mengetahuinya',
            'tempat' => 'MA Muhammadiyah Pekanbaru',
            'upload_logo' => '1663565324307-logotm1.png'
        ]);
    }
}

