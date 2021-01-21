<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sites')->insert([
            'id' => '1',
            'facebook' => 'https://www.facebook.com/namaFacebook',
            'twitter' => 'https://www.twitter.com/namaTwitter',
            'email' => 'abc@gmail.com',
            'instagram' => 'https://www.instagram.com/namaInstagram',
            'nomor_wa' => '6281234567890',
            'alamat' => 'Jl. Akordion, Tunggulwulung, Kec. Lowokwaru, Kota Malang, Jawa Timur 65143', // password
            'about' => 'Hallo this is us grocery store Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, earum officia, a ut minus nesciunt itaque ab deserunt pariatur ipsam culpa sunt vitae vero temporibus minima quasi iusto maxime quam?',
            'created_at' => now(),
        ]);
    }
}
