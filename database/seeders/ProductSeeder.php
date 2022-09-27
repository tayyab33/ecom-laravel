<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('products')->insert([
        'name'=>"lg mobile",
        'price'=>"200",
        "description" =>"A gut and destiny of hormony",
        "category"=>"mobile",
        "gallery"=>"https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.whatmobile.com.pk%2FLG_Velvet&psig=AOvVaw2kOvdh2_k9MD6qtIimUG0m&ust=1663988212541000&source=images&cd=vfe&ved=0CAwQjRxqFwoTCMCrnKf1qfoCFQAAAAAdAAAAABAD",

  ]);
    }
}
