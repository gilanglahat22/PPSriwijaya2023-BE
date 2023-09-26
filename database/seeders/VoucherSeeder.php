<?php

namespace Database\Seeders;

use App\Models\Voucher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0; $i<1000; $i++){
            Voucher::create([
                'kode_voucher' => $this->generateRandomString(7),
                'nominal' => "10",
            ]);
        }

        for($i=0; $i<500; $i++){
            Voucher::create([
                'kode_voucher' => $this->generateRandomString(7),
                'nominal' => "25",
            ]);
        }

        for($i=0; $i<500; $i++){
            Voucher::create([
                'kode_voucher' => $this->generateRandomString(7),
                'nominal' => "50",
            ]);
        }

        for($i=0; $i<250; $i++){
            Voucher::create([
                'kode_voucher' => $this->generateRandomString(7),
                'nominal' => "100",
            ]);
        }

        for($i=0; $i<100; $i++){
            Voucher::create([
                'kode_voucher' => $this->generateRandomString(7),
                'nominal' => "500",
            ]);
        }
    }

    public function generateRandomString($length = 25) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ%^&*()!@#$~{}[]?<>';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
