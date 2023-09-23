<?php

namespace Database\Seeders;

use App\Models\PaslonPutra;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaslonPutraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaslonPutra::create([
            'name'   => "1 Anggara Putra",
            'count_vote' => 0,
            'path' => '01_Muara enim_Anggara Putra.JPG',
            'persentase' => 0,
            'asal_daerah' => 'Muara Enim',
        ]);

        PaslonPutra::create([
            'name'   => "3 M Dandi Pratama",
            'count_vote' => 0,
            'path' => '03_Okutimur_Muhammad Dandi Pratama.jpg',
            'persentase' => 0,
            'asal_daerah' => 'OKU Timur',
        ]);

        PaslonPutra::create([
            'name'   => "5 Daffa Ramadhan",
            'count_vote' => 0,
            'path' => '05_Palembang1_Muhammad Daffa Ramadhan.JPG',
            'persentase' => 0,
            'asal_daerah' => 'Palembang 1',
        ]);

        PaslonPutra::create([
            'name'   => "7 Abie Maulana",
            'count_vote' => 0,
            'path' => '07_Palembang 2_ Achmad Abie Maulana.JPG',
            'persentase' => 0,
            'asal_daerah' => 'Palembang 2',
        ]);

        PaslonPutra::create([
            'name'   => "9 Riko Yudha Pratama",
            'count_vote' => 0,
            'path' => '09_Pagaralam_Riko.JPG',
            'persentase' => 0,
            'asal_daerah' => 'Pagar Alam',
        ]);

        PaslonPutra::create([
            'name'   => "11 Muhammad Dimas Anugerah",
            'count_vote' => 0,
            'path' => '11_OganIlir_ Muhammad Dimas Anugerah.jpg',
            'persentase' => 0,
            'asal_daerah' => 'Ogan Ilir',
        ]);

        PaslonPutra::create([
            'name'   => "13 Mahesa Putra Pradana",
            'count_vote' => 0,
            'path' => '13_MusiRawas_ Mahesa Pradana.jpg',
            'persentase' => 0,
            'asal_daerah' => 'Musi Rawas',
        ]);

        PaslonPutra::create([
            'name'   => "15 Akbar Agapitus",
            'count_vote' => 0,
            'path' => '15_PALI_Akbar Agapitus.jpeg',
            'persentase' => 0,
            'asal_daerah' => 'PALI',
        ]);

        PaslonPutra::create([
            'name'   => "17 Riski Ramadhan",
            'count_vote' => 0,
            'path' => '17_Banyuasin_ Riski Ramadhan.jpg',
            'persentase' => 0,
            'asal_daerah' => 'Banyuasin',
        ]);

        PaslonPutra::create([
            'name'   => "19 Faris Nando Syaputra",
            'count_vote' => 0,
            'path' => '19_Lubuklinggau_Faris Nando Syaputra.jpg',
            'persentase' => 0,
            'asal_daerah' => 'Lubuklinggau',
        ]);

        PaslonPutra::create([
            'name'   => "21 Fauzan Azmi",
            'count_vote' => 0,
            'path' => '21_Lahat_Fauzans Azmi.jpg',
            'persentase' => 0,
            'asal_daerah' => 'Lahat',
        ]);

        PaslonPutra::create([
            'name'   => "23 Defran alvindo",
            'count_vote' => 0,
            'path' => '23_Empat Lawang_Defran Alvindo.jpg',
            'persentase' => 0,
            'asal_daerah' => 'Empat Lawang',
        ]);

        PaslonPutra::create([
            'name'   => "25 M Fathan Qoriba",
            'count_vote' => 0,
            'path' => '25_OKU_Fathan Qoriba.jpg',
            'persentase' => 0,
            'asal_daerah' => 'OKU',
        ]);

        PaslonPutra::create([
            'name'   => "27 Muhammad Faqih Muslihudin",
            'count_vote' => 0,
            'path' => '27_OKI_Muhammad Faqih Muslihudin.jpg',
            'persentase' => 0,
            'asal_daerah' => 'OKI',
        ]);

        PaslonPutra::create([
            'name'   => "31 Castra Winata",
            'count_vote' => 0,
            'path' => '31_Muratara_Castra Winata.jpg',
            'persentase' => 0,
            'asal_daerah' => 'Muratara',
        ]);

        PaslonPutra::create([
            'name'   => "33 Gustiansyah",
            'count_vote' => 0,
            'path' => '33_Musi Banyuasin_Gustiansyah.jpg',
            'persentase' => 0,
            'asal_daerah' => 'Musi Banyuasin',
        ]);

        PaslonPutra::create([
            'name'   => "35 Refki Hefringgo",
            'count_vote' => 0,
            'path' => '35_OKUS_Refki Hepringgo.jpg',
            'persentase' => 0,
            'asal_daerah' => 'OKU Selatan',
        ]);
    }
}
