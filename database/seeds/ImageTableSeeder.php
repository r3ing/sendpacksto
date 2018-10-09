<?php

use Illuminate\Database\Seeder;
use App\Image;

class ImageTableSeeder extends Seeder
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
				'img1' => '1_Samsung_Note9_black_DN.png',
				'img2' => '2_Samsung_Note9_black_DN.png',
				'img3' => '3_Samsung_Note9_black_DN.png',
				'img4' => '3_Samsung_Note9_black_DN.png',
				'img5' => '2_Samsung_Note9_black_DN.png',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'product_id' 	=> 1
			],
			[
				'img1' => '1_P20_Lite_black_DN.png',
				'img2' => '2_P20_Lite_black_DN.png',
				'img3' => '3_P20_Lite_black_DN.png',
				'img4' => '2_P20_Lite_black_DN.png',
				'img5' => '3_P20_Lite_black_DN.png',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'product_id' 	=> 2
			],
			[
				'img1' => '1_LG_K11PLUS_DN.png',
				'img2' => '2_LG_K11PLUS_DN.png',
				'img3' => '1_LG_K11PLUS_DN.png',
				'img4' => '2_LG_K11PLUS_DN.png',
				'img5' => '1_LG_K11PLUS_DN.png',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'product_id' 	=> 3
			],
			[
				'img1' => '1_1127536F13.jpg',
				'img2' => '2_1127783F23.jpg',
				'img3' => '3_1127783F42.jpg',
				'img4' => '2_1127783F23.jpg',
				'img5' => '3_1127783F42.jpg',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'product_id' 	=> 4
			],
			[
				'img1' => '1_1125357F13.jpg',
				'img2' => '2_1125357F23.jpg',
				'img3' => '1_1125357F13.jpg',
				'img4' => '2_1125357F23.jpg',
				'img5' => '2_1125357F23.jpg',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'product_id' 	=> 5
			],
			[
				'img1' => '1_107784F23.jpg',
				'img2' => '2_107784F33.jpg',
				'img3' => '3_1107784F13.jpg',
				'img4' => '2_107784F33.jpg',
				'img5' => '3_1107784F13.jpg',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'product_id' 	=> 6
			],
			[
				'img1' => '1_121516F13.jpg',
				'img2' => '2_121516F23.jpg',
				'img3' => '3_121516F33.jpg',
				'img4' => '4_121516F42.jpg',
				'img5' => '3_121516F33.jpg',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'product_id' 	=> 7
			]
		);

		Image::insert($data);
    }
}
