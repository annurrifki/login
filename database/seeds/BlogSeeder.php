<?php

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Blog::insert([[
        		'judul' => 'ASUS ROG YANG MAHAL',
        		'deskripsi' => 'Menceritakan tentang asus rog yang mahal'
        	],
        	[
        		'judul' => 'Naruto',
        		'deskripsi' => 'Naruto menjadi hokage'
        	],
        	]);
    }
}
