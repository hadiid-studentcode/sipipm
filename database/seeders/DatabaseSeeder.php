<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\BankMateri;
use App\Models\Preposttest;
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
            "name" => "Hadiid Andri Yulison",
            "nba" => "admin",
            "email" => "hadiidandri2000@gmail.com",
            "password" => bcrypt("admin"),
        ]);

        // \App\Models\Notif::factory(10)->create();

        \App\Models\Kegiatan::factory()->create([
            "nama" => "PKD TM 1",
            "tema" =>
            "Ini adalah tema untuk menciptakan pelatihan ini menjadi pelatihan yang sangat berguna dalam kegiatannya",
            "dari" => "2022-09-30",
            "sampai" => "2022-10-02",
            "deskripsi" => "ini adalah deskripsi yang sangat panjang",
            "tujuan" => "Ini adalah tujuannya dalam kegiatan ini",
            "informasi" =>
            "Ini adalah informasi yang wajib semuanya mengetahuinya",
            "tempat" => "MA Muhammadiyah Pekanbaru",
            "upload_logo" => "1663565324307-logotm1.png",
        ]);

        \App\Models\Notif::factory(10)->create();

        $dataMateri1 = [
            "silabus" => "TM 1",
            "standar_kompetensi" =>
            "Kemurnian akidah yang membentuk keshalehan dalam kehidupan",
            "kompetensi_dasar" =>
            "Peserta menjadikan tauhid sebagai prinsip dasar dan utama dalam menjalankan kehidupan",
            "indikator" => 'Peserta dapat:<br>
                            1.	Menerima konsep tauhid sebagai prinsip dasar dalam kehidupan<br>
                            2.	Menerapkan tauhid dalam kehidupan pribadi dan sosial<br>
                            3.	Melaksanakan gerak dakwah amar ma’ruf nahi mungkar dalam bingkai tauhid',
            "materi" => 'Al-Islam (1):Tauhid sebagai Fondasi Kehidupan',
            "detailMateri" => ' ●	Makna tauhid<br>
                                ●	Tauhid sebagai spirit kemajuanumat.<br>
                                ●	Tauhid dan penegakan amar ma’ruf nahimunkar.',
            "strategi_pembelajaran" => '●	Ceramah interaktif<br>
                                        ●	Diskusi',
            "sks" => 2,
            "referensi_acuan" => 'Yunahar	Ilyas, Kuliah	Aqidah Islam, (Yogyakarta: LPPI UMY, 2014)<br>
                                AzharBasyir, BeragamaSecaraD ewasa, (Yogyakarta:	UII Press, 2013)',
            "penilaian" => '●	Tes Tertulis Inventori<br>
                            ●	Observasi',
        ];
        $dataMateri2 = [
            "silabus" => "TM 1",
            "standar_kompetensi" =>
            "Ketaatan beribadah yang tahsinah dari ibadah itu terpantul dalam kehidupan sehari-hari",
            "kompetensi_dasar" =>
            "Peserta melaksanakan ibadah mahdah sesuai dengan hasil keputusan tarjih",
            "indikator" => 'Peserta dapat : <br>
            Menyetujui tuntunan ibadah sesuai dengan putusan tarjih Muhammadiyah
Memilih hasil putusan tarjih sebagai rujukan dalam melaksanakan ibadah keseharian
Melaksanakan ibadah mahdah dan nafilah  sesuai dengan tuntunan syariah secarakonsisten

',
            "materi" =>
            "Tuntunan Ibadah Sesuai Tarjih ibadah mandha dan nafilah",
            "detailMateri" => '1. Kaifiyat Wudhu, Tayammum & Mandi Junub
Kaifiyat &Bacaan Shalat
',
            "strategi_pembelajaran" => '
Simulasi<br>
Watching video<br>
Tanya Jawab
',
            "sks" => 2,
            "referensi_acuan" => '● Majelis Tarjih &
Tajdid
PP
Muhammadiyah,
Himpunan
Putusan
Tarjih
Muhammadiyah,
(Yogyakarta:
Suara<br>
● , Tanya Jawab
Agama jilid 1-7,
(Yogyakarta:
Suara
Muhammadiyah,
1996-2010)<br>
● Agung Danarto,
Cara Berwudhu
Menurut
Rasulullah,
(Yogyakarta:
Suara
Muhammadiyah,
2005)
',
            "penilaian" => '● Unjuk Kerja <br>
Observasi
',
        ];

        // ======================================================
        $dataMateri3 = [
            "silabus" => "TM 1",
            "standar_kompetensi" =>
            "Keshalehan
dalam
kehidupan
pribadi,
keluarga,
dan
masyarakat",
            "kompetensi_dasar" =>
            "Peserta
mampu
mewujudkan
PHIWM dalam
kehidupan
sehari-hari
",
            "indikator" => 'Peserta dapat:<br>
1. Menjelaskan
urgensi dan sifat
PHIWM
2. Praktek Sikap dan
Perilaku PHIWM
dalamPelatihan
3. Menginternalisasik
an PHIWM dalam
KehidupansehariHari


',
            "materi" =>
            "Kemuhammadiyahan
(1): PHIWM",
            "detailMateri" => '● Pengertian PHIWM <br>
● Urgensi dan Sifat
PHIWM <br>
● Kandungan PHIWM
Strategi 
internalisasi
PHIWM
dalamkehidupan
',
            "strategi_pembelajaran" => '● Ceramah <br>
● bervariasi
SGD
',
            "sks" => 2,
            "referensi_acuan" => '● PP
Muhammadiyah,
Pedoman Hidup
Islami Warga
Muhammadiyah,
(Yogyakarta :
Suara
Muhammadiyah,
2002)

',
            "penilaian" => '●TesTertulis
Inventori
',

            // ======================================
        ];
        $dataMateri4 = [
            "silabus" => "TM 1",
            "standar_kompetensi" =>
            "Keteladanan
dalam seluruh
sikap
dan
tindakan",
            "kompetensi_dasar" =>
            "Peserta
mendapatkan
inspirasi
keteladanan dari
kisah tokohtokoh
Muhammadiya
h",
            "indikator" => 'Peserta dapat : <br>
Menyimpulkan profil &
kompetensi kader
MuhammadiyaMenunju
kkan nilai karakter
perjuangan dan
keteladanan para tokoh
teladan Muhammadiyah.',
            "materi" =>
            "Profil Kader dan Nilai
Perjuangan Tokoh
Muhammadiyah",
            "detailMateri" => '- Profil Kader
Muhammadiyah <br>
- Kisah HidupPara
Tokoh <br>
Muhammadiyah
- Karakter
Perjuangan dan
Keteladanan para
Tokoh
',
            "strategi_pembelajaran" => '
- Story
telling,
Reading Guide
',
            "sks" => 2,
            "referensi_acuan" => '- Lasa Hs.,dkk., 100
Tokoh
Muhammadiyah Yang
Menginspirasi,
(Yogyakarta: Majelis
Pustaka & Informasi
PP
Muhammadiyah,
2014) <br>
- Najamuddin Ramly
& Hery
Sucipto, Ensiklopedi
Tokoh
Muhammadiyah :
Pemikiran dan
Kiprah dalam
Panggung Sejarah
Muhammadiyah,
(Jakarta : Best,
Media Utama,
2010',
            "penilaian" => '●	TesTertulis
Inventori<br>
●	Observasi
',
        ];
        // =============================================
        $dataMateri5 = [
            "silabus" => "TM 1",
            "standar_kompetensi" =>
            "Komitmen
menjaga
integritas sebagai
kader ideal
sebagaimana
dirumuskan
dalam profil
kaderikatan",
            "kompetensi_dasar" =>
            "Peserta
mengintern
alis asi nilainilai
perjuangan
gerakanIPM",
            "indikator" => 'Peserta dapat:<br>
Memahami
konsep dasar
KepribadianIPM
Menguraikan
identitas gerakan
IPM pada Gerakan
Pelajar
Berkemajuan.
Berperilaku
sebagaimana
tercermin sebagai
kader
berkemajuan.',
            "materi" =>
            "Ke-IPM-an (1):
Kepribadian IPM",
            "detailMateri" => '● Pengantar
KepribadianIPM <br>
● Identitas IPM sebagai
Gerakan Pelajar <br>
Profil Kader yang sesuai
dengan identitasgerakan
',
            "strategi_pembelajaran" => '● Ceramah
Small
Group
Discussi
on',
            "sks" => 2,
            "referensi_acuan" => 'Materi
Muktamar
Jakarta',
            "penilaian" => '● TesTertulis
● Inventori
Observasi',
        ];
        $dataMateri6 = [
            "silabus" => "TM 1",
            "standar_kompetensi" =>
            "Komitmen
untukterus
berittiba’
dengan
Rasululloah
dalam konteks
yangada",
            "kompetensi_dasar" =>
            "Peserta mampu <br>
mengenal
sejarah
perjuangan
nabi dalam
menegakkan
Islamdi muka
bumi dan dapat
meneladaninya
pada konteks
kekinian",
            "indikator" => 'Peserta dapat :<br>
Memahami
perkembangan
islamdan perjuangan
yang ada di dalamnya
Mengideentifika si
konteks pada saaatini
Termotivasi untuk
membiasakan
istiqomah dan
ittiba’rasul.
',
            "materi" =>
            "Sejarah Peradaban
Islam",
            "detailMateri" => '- Pengenalan sejarah
perjuangan Islam
oleh Nabi
Muhammad <br>
- Bentuk bentuk perjuangan tantangan yang dihadapi oleh Islam <br>
',
            "strategi_pembelajaran" => '● Ceramah
● Diskusi <br>
Reading Guide',
            "sks" => 2,
            "referensi_acuan" => '',
            "penilaian" => '● TesTertulis
Inventori <br>
● Observasi',
        ];
        $dataMateri7 = [
            "silabus" => "TM 1",
            "standar_kompetensi" =>
            "Berperan aktif
dalam
memanajemen
gerakan IPM.",
            "kompetensi_dasar" =>
            "Peserta
mampu
memahami
pengelolaan
organisasi dan
nilai-nilai yang
dilestarikan di
IPM.
",
            "indikator" => 'Peserta dapat: <br>
1. Mengidentifikasi
kekuatan dan
kelemahanIPM. <br>
2. Menunjukkan
Skema
Manajemen
Organisasi IPM
yang kreatif
inovatif. <br>
3. Menampilkan
manajemen
organisasi yang
sesuai dengan
nilai-nilai IPM.',
            "materi" =>
            "Wawasan (1):
Manajemen dan
Kepemimpinan
Organisasi",
            "detailMateri" => '● Pengertian
Manajemen
Organisasi <br>
● Skema Manajemen
Organisasi
Akhlak Berorganisasi diIPM',
            "strategi_pembelajaran" => '● Ceramah <br>
● Diskusi
Reading
Guide',
            "sks" => 2,
            "referensi_acuan" => '-',
            "penilaian" => '● TesTertulis <br>
● Inventori
Observas',
        ];
        $dataMateri8 = [
            "silabus" => "TM 1",
            "standar_kompetensi" =>
            "Komitmen
menjaga
integritas
sebagai kader
ideal
sebagaimana
dirumuskan
dalam
profil
kaderikatan",
            "kompetensi_dasar" =>
            "Peserta
menunjukkan
sikap positif
sebagai remaja
terampil,
berilmu dan
berakhlak
mulia.",
            "indikator" => 'Pesertadapat: <br>
1. Memahami
perkembangan
manusia tiapfase.<br>
2. Mengidentifikasi
karakteristik
remaja dan
beberapa
sudutpandang.
Termotivasi
membiasakan
akhlakulkarimah
',
            "materi" =>
            "Metodologis (1):
Psikologi dan etika
organisasi
",
            "detailMateri" => '● Pengenalan fase
perkembangan
manusia <br>
● Karakteristik
psikologis dan
etika organisasi
K',
            "strategi_pembelajaran" => '● Ceramah
Small Group
Discussion',
            "sks" => 2,
            "referensi_acuan" => 'Psikologi Remaja,
(Jakarta: Rajawali
Press, 2010)',
            "penilaian" => 'TesTertulis <br>
Inventori <br>
Observasi',
        ];
        $dataMateri9 = [
            "silabus" => "TM 1",
            "standar_kompetensi" =>
            "Mengerti dan
menguasai
teknik dalam
persidangan
terutama
permusyawarat
an dalam
Ikatan Pelajar
Muhammadiya
h",
            "kompetensi_dasar" =>
            "Peserta
mempraktekkan
cara
persidangan
dalam
permusyawarata
n dengan baik",
            "indikator" => 'Peserta dapat: <br>
1. Dapat
memahami
teknik
persidangan
serta cara
bermusyawa
rah.',
            "materi" =>
            "(Muatan Lokal)
Teknik Persidangan",
            "detailMateri" => '● Pengertian
rapat,
sidang,ketok
palu sidang dan
musyawarah <br>
● Mempraktekkan
Teknik
Persidangan
',
            "strategi_pembelajaran" => '● Ceramah <br>
● Diskusi <br>
● Simulasi',
            "sks" => 2,
            "referensi_acuan" => 'Azzaki Khoirudin, M. S.
(2016).
PEDOMAN
PERSIDANGAN
IKATAN PELAJAR
MUHAMMADIYA
H. Yogyakarta:
Pimpinan Pusat
IPM & Suara
Muhammadiyah',
            "penilaian" => 'TesTertulis <br>
Inventori <br>
Observasi <br>
Praktek',
        ];
        $dataMateri10 = [
            "silabus" => "TM 1",
            "standar_kompetensi" =>
            "Mengutamaka
n misi dan
kepentingan
Muhammadiya
h di atas
lainnya dengan
niat dan ikhlas
dan
berkhidmat",
            "kompetensi_dasar" =>
            "Peserta mampu
menginternalisa
si nilai – nilai
yang ada dalam
aktivitas
Outbound ",
            "indikator" => 'Peserta dapat : <br>
1. Membuktikan
pentingnya
nilai – nilai
kohesifitas,
kerjasama,ke
pedulian dan
kepemimpina
n dalam
organisasi <br>
2. Menunjukkan
manfaat
strategi &
kreatifitas
dalam
pencapaian
tujuan
organisasi <br>
3. Mengadopsi
nilai – nilai
baik dalam
outbound
dalam
kehidupan
berorganisasi
',
            "materi" =>
            "Outbound",
            "detailMateri" => '● Taaruf <br>
● Kohesifitas
● Empati <br>
● Kepemimpi
nan <br>
● Kerjasama <br>
● Strategi <br>
● Kreatifitas',
            "strategi_pembelajaran" => '● Outdoor
activity  <br>
● Praktek
(experienc
ing/proses
mengalam
ai)  <br>
● Debirefing',
            "sks" => 2,
            "referensi_acuan" => '● Djamaluddin
Ancok, Outbound
Training,
(Yogyakarta : UII
Press, 2005)<br> ●
Muhammad
Dzikron,
ModelModel
Permainan
Outbound, (Klaten :
HW Kalten, 2014) ',
            "penilaian" => '● Penilaian
Kinerja',
        ];



        $agenda1 = [
            "silabus" => "TM 1",
            "standar_kompetensi" =>
            "-",
            "kompetensi_dasar" =>
            "-",
            "indikator" => '-',
            "materi" => 'Registrasi',
            "detailMateri" => '-',
            "strategi_pembelajaran" => '-',
            "sks" => 2,
            "referensi_acuan" => '-',
            "penilaian" => '-',
        ];

        $agenda2 = [
            "silabus" => "TM 1",
            "standar_kompetensi" =>
            "-",
            "kompetensi_dasar" =>
            "-",
            "indikator" => '-',
            "materi" => 'Pembukaan',
            "detailMateri" => '-',
            "strategi_pembelajaran" => '-',
            "sks" => 2,
            "referensi_acuan" => '-',
            "penilaian" => '-',
        ];
        $agenda3 = [
                "silabus" => "TM 1",
                "standar_kompetensi" =>
                "-",
                "kompetensi_dasar" =>
                "-",
                "indikator" => '-',
                "materi" => 'ISHOMA',
                "detailMateri" => '-',
                "strategi_pembelajaran" => '-',
                "sks" => 2,
                "referensi_acuan" => '-',
                "penilaian" => '-',
            ];
        $agenda4 = [
            "silabus" => "TM 1",
            "standar_kompetensi" =>
            "-",
            "kompetensi_dasar" =>
            "-",
            "indikator" => '-',
            "materi" => 'Kontrak belajar',
            "detailMateri" => '-',
            "strategi_pembelajaran" => '-',
            "sks" => 2,
            "referensi_acuan" => '-',
            "penilaian" => '-',
        ];
        $agenda5 = [
                "silabus" => "TM 1",
                "standar_kompetensi" =>
                "-",
                "kompetensi_dasar" =>
                "-",
                "indikator" => '-',
                "materi" => 'Pergi kedunia khayangan',
                "detailMateri" => '-',
                "strategi_pembelajaran" => '-',
                "sks" => 2,
                "referensi_acuan" => '-',
                "penilaian" => '-',
            ];
        $agenda6 = [
            "silabus" => "TM 1",
            "standar_kompetensi" =>
            "-",
            "kompetensi_dasar" =>
            "-",
            "indikator" => '-',
            "materi" => 'Qiyamul Lail, Subuh & Kultum',
            "detailMateri" => '-',
            "strategi_pembelajaran" => '-',
            "sks" => 2,
            "referensi_acuan" => '-',
            "penilaian" => '-',
        ];
        $agenda7 = [
                "silabus" => "TM 1",
                "standar_kompetensi" =>
                "-",
                "kompetensi_dasar" =>
                "-",
                "indikator" => '-',
                "materi" => 'Senam',
                "detailMateri" => '-',
                "strategi_pembelajaran" => '-',
                "sks" => 2,
                "referensi_acuan" => '-',
                "penilaian" => '-',
            ];
        $agenda8 = [
            "silabus" => "TM 1",
            "standar_kompetensi" =>
            "-",
            "kompetensi_dasar" =>
            "-",
            "indikator" => '-',
            "materi" => 'MCK & Sarapan',
            "detailMateri" => '-',
            "strategi_pembelajaran" => '-',
            "sks" => 2,
            "referensi_acuan" => '-',
            "penilaian" => '-',
        ];
        $agenda9 = [
                "silabus" => "TM 1",
                "standar_kompetensi" =>
                "-",
                "kompetensi_dasar" =>
                "-",
                "indikator" => '-',
                "materi" => 'Shalat Dhuha',
                "detailMateri" => '-',
                "strategi_pembelajaran" => '-',
                "sks" => 2,
                "referensi_acuan" => '-',
                "penilaian" => '-',
            ];
        $agenda10 = [
            "silabus" => "TM 1",
            "standar_kompetensi" =>
            "-",
            "kompetensi_dasar" =>
            "-",
            "indikator" => '-',
            "materi" => 'Ice Breaking',
            "detailMateri" => '-',
            "strategi_pembelajaran" => '-',
            "sks" => 2,
            "referensi_acuan" => '-',
            "penilaian" => '-',
        ];
        $agenda11 = [
            "silabus" => "TM 1",
            "standar_kompetensi" =>
            "-",
            "kompetensi_dasar" =>
            "-",
            "indikator" => '-',
            "materi" => 'MCK & Ishoma',
            "detailMateri" => '-',
            "strategi_pembelajaran" => '-',
            "sks" => 2,
            "referensi_acuan" => '-',
            "penilaian" => '-',
        ];
        $agenda12 = [
            "silabus" => "TM 1",
            "standar_kompetensi" =>
            "-",
            "kompetensi_dasar" =>
            "-",
            "indikator" => '-',
            "materi" => 'RKTL',
            "detailMateri" => '-',
            "strategi_pembelajaran" => '-',
            "sks" => 2,
            "referensi_acuan" => '-',
            "penilaian" => '-',
        ];
        $agenda13 = [
            "silabus" => "TM 1",
            "standar_kompetensi" =>
            "-",
            "kompetensi_dasar" =>
            "-",
            "indikator" => '-',
            "materi" => 'Sholat Zuhur',
            "detailMateri" => '-',
            "strategi_pembelajaran" => '-',
            "sks" => 2,
            "referensi_acuan" => '-',
            "penilaian" => '-',
        ];
        $agenda14 = [
            "silabus" => "TM 1",
            "standar_kompetensi" =>
            "-",
            "kompetensi_dasar" =>
            "-",
            "indikator" => '-',
            "materi" => 'Penutupan & Temu Ramah Alumni',
            "detailMateri" => '-',
            "strategi_pembelajaran" => '-',
            "sks" => 2,
            "referensi_acuan" => '-',
            "penilaian" => '-',
        ];
       
      

        $result = new BankMateri();
        $result->simpanPemateri($dataMateri1);
        $result->simpanPemateri($dataMateri2);
        $result->simpanPemateri($dataMateri3);
        $result->simpanPemateri($dataMateri4);
        $result->simpanPemateri($dataMateri5);
        $result->simpanPemateri($dataMateri6);
        $result->simpanPemateri($dataMateri7);
        $result->simpanPemateri($dataMateri8);
        $result->simpanPemateri($dataMateri9);
        $result->simpanPemateri($dataMateri10);


        $result->simpanPemateri($agenda1);
        $result->simpanPemateri($agenda2);
        $result->simpanPemateri($agenda3);
        $result->simpanPemateri($agenda4);
        $result->simpanPemateri($agenda5);
        $result->simpanPemateri($agenda6);
        $result->simpanPemateri($agenda7);
        $result->simpanPemateri($agenda8);
        $result->simpanPemateri($agenda9);
        $result->simpanPemateri($agenda10);
        $result->simpanPemateri($agenda11);
        $result->simpanPemateri($agenda12);
        $result->simpanPemateri($agenda13);
        $result->simpanPemateri($agenda14);



        // panitia
        \App\Models\Panitia::factory(15)->create();
        // peserta
        \App\Models\Peserta::factory(40)->create();
        // tim fasilitator
        \App\Models\Fasilitator::factory(15)->create();
        // mengelola materi

        // pre post tes

        $pre1 = [
          'test'=>'pre',
          'idMateri' => 1,
          'link' => 'https://quizzory.in/id/6333c0041eb83c36b9f495e8',
        ];
        $pre2 = [
            'test' => 'pre',
            'idMateri' => 2,
            'link' => 'https://quizzory.in/id/6333c88fd58775368c60a458',
        ];
        $pre3 = [
            'test' => 'pre',
            'idMateri' => 3,
            'link' => 'https://quizzory.in/id/6333cb8051271036db7c2d6b',
        ];
        $pre4 = [
            'test' => 'pre',
            'idMateri' => 4,
            'link' => 'https://quizzory.in/id/6333ce0f51271036db7c2e12',
        ];
        $pre5 = [
            'test' => 'pre',
            'idMateri' => 5,
            'link' => 'https://quizzory.in/id/6333d124a280cd36f9b9fc79',
        ];
        $pre6 = [
            'test' => 'pre',
            'idMateri' => 6,
            'link' => 'https://quizzory.in/id/6333d24051271036db7c30a0',
        ];
        $pre7 = [
            'test' => 'pre',
            'idMateri' => 7,
            'link' => 'https://quizzory.in/id/6333d37e1eb83c36b9f4a443',
        ];
        $pre8 = [
            'test' => 'pre',
            'idMateri' => 8,
            'link' => 'https://quizzory.in/id/6333d49f1767f7370396e0cd',
        ];
        $pre9 = [
            'test' => 'pre',
            'idMateri' => 9,
            'link' => 'https://quizzory.in/id/6333d60bd58775368c60aedf',
        ];

        $result = new Preposttest();
        $result->simpantest($pre1);
        $result->simpantest($pre2);
        $result->simpantest($pre3);
        $result->simpantest($pre4);
        $result->simpantest($pre5);
        $result->simpantest($pre6);
        $result->simpantest($pre7);
        $result->simpantest($pre8);
        $result->simpantest($pre9);


        $post1 = [
            'test' => 'post',
            'idMateri' => 1,
            'link' => 'https://quizzory.in/id/6333c66db8f1ce36d24e3fd9',
        ];
        $post2 = [
            'test' => 'post',
            'idMateri' => 2,
            'link' => 'https://quizzory.in/id/6333ca95b8f1ce36d24e4592',
        ];
        $post3 = [
            'test' => 'post',
            'idMateri' => 3,
            'link' => 'https://quizzory.in/id/6333cb9c1eb83c36b9f4a02d',
        ];
        $post4 = [
            'test' => 'post',
            'idMateri' => 4,
            'link' => 'https://quizzory.in/id/6333ce82d58775368c60aaae',
        ];
        $post5 = [
            'test' => 'post',
            'idMateri' => 5,
            'link' => 'https://quizzory.in/id/6333d12451271036db7c2fb6',
        ];
        $post6 = [
            'test' => 'post',
            'idMateri' => 6,
            'link' => 'https://quizzory.in/id/6336900ba280cd36f9bbdb21',
        ];
        $post7 = [
            'test' => 'post',
            'idMateri' => 7,
            'link' => 'https://quizzory.in/id/6333d257f808e73692d38a7a',
        ];
        $post8= [
            'test' => 'post',
            'idMateri' => 8,
            'link' => 'https://quizzory.in/id/6333d392b8f1ce36d24e4b97',
        ];
        $post9 = [
            'test' => 'post',
            'idMateri' => 9,
            'link' => 'https://quizzory.in/id/6333d61ed58775368c60aef1',
        ];


        $result->simpantest($post1);
        $result->simpantest($post2);
        $result->simpantest($post3);
        $result->simpantest($post4);
        $result->simpantest($post5);
        $result->simpantest($post6);
        $result->simpantest($post7);
        $result->simpantest($post8);
        $result->simpantest($post9);
        
       
    }
}
