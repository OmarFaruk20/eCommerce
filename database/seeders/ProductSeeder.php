<?php

namespace Database\Seeders;

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

        	['name' 			=> 'Acer Laptop',
        	'price' 		=> '52200',
        	'description'	=> 'Acer Latest Laptop collection',
        	'category' 		=> 'Laptop',
        	'gallery' 		=> 'https://images.unsplash.com/photo-1494548162494-384bba4ab999?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80',
        	],

        	['name' 		=> 'Vivo',
        	'price' 		=> '2200',
        	'description'	=> 'The company has launched the smartphone',
        	'category' 		=> 'Mobile',
        	'gallery' 		=> 'https://static.toiimg.com/photo/73078527.cms',
        	],

        	['name' 		=> 'Ladis Dress',
        	'price' 		=> '5000',
        	'description'	=> 'Latest winter ladies collection',
        	'category' 		=> 'Cloth',
        	'gallery' 		=> 'https://www.thoughtco.com/thmb/C7RiS4QG5TXcBG2d_Sh9i4hFpg0=/3620x2036/smart/filters:no_upscale()/close-up-of-clothes-hanging-in-row-739240657-5a78b11f8e1b6e003715c0ec.jpg',
        	],

        	['name' 		=> 'HP Laptop',
        	'price' 		=> '75000',
        	'description'	=> 'HP Latest Laptop collection',
        	'category' 		=> 'Laptop',
        	'gallery' 		=> 'https://cdn.mos.cms.futurecdn.net/6t8Zh249QiFmVnkQdCCtHK.jpg',
        	],
        	
        ]);
    }
}
