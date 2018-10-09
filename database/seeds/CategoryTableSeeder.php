<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$data = array(
			[
				'name' => 'Electrodomesticos',
				'slug' => 'electrodomesticos',
				'description' => 'Equipos electrodomésticos'
			],
			[
				'name' => 'Celulares',
				'slug' => 'celulares',
				'description' => 'Smartphone, Celulares básicos, Accesorios'
			],
			[
				'name' => 'TV Video',
				'slug' => 'tv-video',
				'description' => 'TV Video, Televisores'
			],
			[
			'name' => 'Computación',
			'slug' => 'computacion',
			'description' => 'Computadoras, Tablet, Notebook, Impresoras y Multifuncionales, Accesorios'
			]
		);

		Category::insert($data);
    }
}
