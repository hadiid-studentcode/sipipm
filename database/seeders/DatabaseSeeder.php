<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\BankMateri;
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
            'nba' => 'admin',
            'email' => 'hadiidandri2000@gmail.com',
            'password' => bcrypt('admin'),
        ]);



        // \App\Models\Notif::factory(10)->create();

        \App\Models\Kegiatan::factory()->create([
            'nama' => 'PKD TM 1',
            'tema' => 'Ini adalah tema untuk menciptakan pelatihan ini menjadi pelatihan yang sangat berguna dalam kegiatannya',
            'dari' => '2022-09-30',
            'sampai' => '2022-10-02',
            'deskripsi' => 'ini adalah deskripsi yang sangat panjang',
            'tujuan' => 'Ini adalah tujuannya dalam kegiatan ini',
            'informasi' => 'Ini adalah informasi yang wajib semuanya mengetahuinya',
            'tempat' => 'MA Muhammadiyah Pekanbaru',
            'upload_logo' => '1663565324307-logotm1.png'
        ]);


        \App\Models\Notif::factory(10)->create();



        $dataMateri = [
            'silabus' => 'TM 1',
            'standar_kompetensi' => 'Kemurnian akidah yang membentuk keshalehan dalam kehidupan',
            'kompetensi_dasar' => 'Peserta menjadikan tauhid sebagai prinsip dasar dan utama dalam menjalankan kehidupan',
            'indikator' => 'Peserta dapat:<br>
1.	Menerima konsep tauhid sebagai prinsip dasar dalam kehidupan<br>
2.	Menerapkan tauhid dalam kehidupan pribadi dan sosial<br>
3.	Melaksanakan gerak dakwah amar ma’ruf nahi mungkar dalam bingkai tauhid
',
'materi'=> 'Al-Islam (1):<br>
Tauhid sebagai
Fondasi
Kehidupan',
            'detailMateri' => 'Al-Islam (1):<br> Tauhid sebagai Fondasi Kehidupan<br>

•	Makna tauhid<br>
•	Tauhid sebagai spirit kemajuanumat.<br>
•	Tauhid dan penegakan amar ma’ruf nahimunkar.<br>
',
            'strategi_pembelajaran' => '•	Ceramah interaktif<br>
•	Diskusi
',
            'sks' => 2,
            'referensi_acuan' => 'Yunahar	Ilyas,
Kuliah	Aqidah Islam, (Yogyakarta: LPPI UMY, 2014)<br>
AzharBasyir, BeragamaSecaraD ewasa, (Yogyakarta:	UII Press, 2013)
',
            'penilaian' => '•	TesTertulis
Inventori<br>
•	Observasi
'
        ];
        $dataMateri1 = [
            'silabus' => 'TM 1',
            'standar_kompetensi' => 'Kemurnian akidah yang membentuk keshalehan dalam kehidupan',
            'kompetensi_dasar' => 'Peserta menjadikan tauhid sebagai prinsip dasar dan utama dalam menjalankan kehidupan',
            'indikator' => 'Peserta dapat:<br>
1.	Menerima konsep tauhid sebagai prinsip dasar dalam kehidupan<br>
2.	Menerapkan tauhid dalam kehidupan pribadi dan sosial<br>
3.	Melaksanakan gerak dakwah amar ma’ruf nahi mungkar dalam bingkai tauhid
',
            'materi' => 'Al-Islam (1):<br>
Tauhid sebagai
Fondasi
Kehidupan',
            'detailMateri' => 'Al-Islam (1):<br> Tauhid sebagai Fondasi Kehidupan<br>

•	Makna tauhid<br>
•	Tauhid sebagai spirit kemajuanumat.<br>
•	Tauhid dan penegakan amar ma’ruf nahimunkar.<br>
',
            'strategi_pembelajaran' => '•	Ceramah interaktif<br>
•	Diskusi
',
            'sks' => 2,
            'referensi_acuan' => 'Yunahar	Ilyas,
Kuliah	Aqidah Islam, (Yogyakarta: LPPI UMY, 2014)<br>
AzharBasyir, BeragamaSecaraD ewasa, (Yogyakarta:	UII Press, 2013)
',
            'penilaian' => '•	TesTertulis
Inventori<br>
•	Observasi
'
        ];


        $result = new BankMateri();
        $result->simpanPemateri($dataMateri);
        $result->simpanPemateri($dataMateri1);
    }
}
