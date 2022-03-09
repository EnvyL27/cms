<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([ 
            'productName' => 'Sofa empuk', 
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. lorem Ipsum has been the industry', 
            ]);
    }
}
