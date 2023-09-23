<?php

namespace Database\Seeders;

use App\Models\PaslonPutri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaslonPutriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaslonPutri::create([
            'name'   => "2 Debi Tripuanti",
            'count_vote' => 0,
            'path' => '02_Muara Enim_Debi Tripuanti.jpeg',
            'asal_daerah' => 'Muara Enim',
        ]);

        PaslonPutri::create([
            'name'   => "4 Nia Aprelia Fadilah",
            'count_vote' => 0,
            'path' => '04_OKUT_Nia Aprelia Fadilah.jpg',
            'asal_daerah' => 'OKU Timur',
        ]);

        PaslonPutri::create([
            'name'   => "6 Wenny Dwiyulianti",
            'count_vote' => 0,
            'path' => '06_Palembang1_ Wenny Dwiyulianti.JPG',
            'asal_daerah' => 'Palembang 1',
        ]);

        PaslonPutri::create([
            'name'   => "8 Fadila Vica Lestari",
            'count_vote' => 0,
            'path' => '08_Palembang2_Fadila Vica.PNG',
            'asal_daerah' => 'Palembang 2',
        ]);

        PaslonPutri::create([
            'name'   => "10 Hervi Windari",
            'count_vote' => 0,
            'path' => '10_Pagaralam_Hervi Windari.jpg',
            'asal_daerah' => 'Pagar Alam',
        ]);

        PaslonPutri::create([
            'name'   => "12 Dita Chantika Dharma",
            'count_vote' => 0,
            'path' => '12_OganIlir_Caca Chantika.jpg',
            'asal_daerah' => 'Ogan Ilir',
        ]);

        PaslonPutri::create([
            'name'   => "14 Cindy Putri Amalia",
            'count_vote' => 0,
            'path' => '14_MusiRawas_ Cindy Amalia.jpg',
            'asal_daerah' => 'Musi Rawas',
        ]);

        PaslonPutri::create([
            'name'   => "16 Jumi Oktasari",
            'count_vote' => 0,
            'path' => '16_PALI_Jumi Oktasari.jpeg',
            'asal_daerah' => 'PALI',
        ]);

        PaslonPutri::create([
            'name'   => "18 Angelita Elzy Merisca",
            'count_vote' => 0,
            'path' => '18_Banyuasin_ Angelita elzy merisca.jpg',
            'asal_daerah' => 'Banyuasin',
        ]);

        PaslonPutri::create([
            'name'   => "20 Siti Fatiya Hasanah",
            'count_vote' => 0,
            'path' => '20_Lubuk Linggau_Siti Fatiya Hasanah.jpg',
            'asal_daerah' => 'Lubuklinggau',
        ]);

        PaslonPutri::create([
            'name'   => "22 Wulandari",
            'count_vote' => 0,
            'path' => '22_Lahat_Wulandari.jpg',
            'asal_daerah' => 'Lahat',
        ]);

        PaslonPutri::create([
            'name'   => "24 Sela Septiana",
            'count_vote' => 0,
            'path' => '24_Empat Lawang_Sela Septiana.jpeg',
            'asal_daerah' => 'Empat Lawang',
        ]);

        PaslonPutri::create([
            'name'   => "26 Fakhirah Aprinilsya",
            'count_vote' => 0,
            'path' => '26_OKU_Fakhirah Aprinilsya.jpg',
            'asal_daerah' => 'OKU',
        ]);

        PaslonPutri::create([
            'name'   => "28 Ajeng DwiRatu Qaida Maharani",
            'count_vote' => 0,
            'path' => '28_Ogan Komering Ilir_ Ajeng DwiRatu Qaida Maharani.JPG',
            'asal_daerah' => 'OKI',
        ]);

        PaslonPutri::create([
            'name'   => "32 Risalatun Aulia",
            'count_vote' => 0,
            'path' => '32_Muratara_Risalatun Aulia.JPG',
            'asal_daerah' => 'Muratara',
        ]);

        PaslonPutri::create([
            'name'   => "34 Rukmana Sundari",
            'count_vote' => 0,
            'path' => '34_Muba_Rukmana Sundari.jpg',
            'asal_daerah' => 'Musi Banyuasin',
        ]);

        PaslonPutri::create([
            'name'   => "36 Ruby Vidya Mandala Putri",
            'count_vote' => 0,
            'path' => '36_OKUS_Ruby Vidya Mandala Putri.JPG',
            'asal_daerah' => 'OKU Selatan',
        ]);
    }
}
