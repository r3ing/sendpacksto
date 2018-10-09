<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
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
				'name' 			=> 'Samsung Galaxy Note9',
				'slug' 			=> 'samsung-galaxy-note9',
				'description' 	=> 'Galaxy Note siempre ha ofrecido una tecnología poderosa para los exigentes.
				                    Ahora, el nuevo Galaxy Note9 supera incluso estas altas expectativas y se
				                    centra en lo que más importa en el mundo móvil actual, siempre conectado.',
				'extract' 		=> 'Samsung Galaxy Note9.',
				'price' 		=> 99.95,
				'weight' 		=> 10,
				'visible' 		=> 1,
				'identifier'    => '1538938483',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Huawei P20 Lite',
				'slug' 			=> 'huawei-p20-lite',
				'description' 	=> 'Vive tu equipo al máximo con la pantalla HUAWEI FullView de nueva generación.
				                    Diseñado para vivir tu vida sin límites, El HUAWEI P20 lite integra un marco
				                    diseñado para disfrutar la pantalla Full HD+ de 5,84”.
				                    *La pantalla FHD+ de 5,84" del HUAWEI P20 lite está medida de manera diagonal desde
				                    la esquina de sus orillas redondeadas (el área visible es una fracción más pequeña).',
				'extract' 		=> 'Huawei P20 Lite.',
				'price' 		=> 90.95,
				'weight' 		=> 8,
				'visible' 		=> 1,
				'identifier'    => '1538939888',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'LG K11 Plus',
				'slug' 			=> 'lg-k11-plus',
				'description' 	=> 'Una cubierta de metal resistente a rayones que agrega una capa adicional de resistencia
				                    para mantener el diseño elegante por más tiempo. Creado de acuerdo a los estándares de MIL-SPEC
				                    de los Estados Unidos, su diseño es resistente a golpes y puede soportar cualquier cosa que se
				                    atreviese en el camino.',
				'extract' 		=> 'LG K11 Plus',
				'price' 		=> 80.95,
				'weight' 		=> 6,
				'visible' 		=> 1,
				'identifier'    => '1538939909',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Led Samsung 50" 4K ultra HD Smart TV UN50NU7090GXZS',
				'slug' 			=> 'led-samsung-50-4k-ultra-hd-smart-tv-un50nu7090gxzs',
				'description' 	=> 'Led Samsung 50" 4K
									Disfruta de los contenidos HDR con mayor claridad y detalles de color.
									Los televisores UHD de Samsung entregan detalles más precisos en escenas claras y oscuras.',
				'extract' 		=> 'Led Samsung 50" 4K ultra HD',
				'price' 		=> 300.95,
				'weight' 		=> 50,
				'visible' 		=> 1,
				'identifier'    => '1538940734',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 3
			],
			[
				'name' 			=> 'LED Samsung 55" UHD 4K Smart TV NU7300GXZS',
				'slug' 			=> 'led-samsung-55-uhd-4k-smart-tv-nu7300gxzs',
				'description' 	=> 'Led Samsung 55" UHD 4K
									Disfruta de una imagen más nítida y clara con la TV UHD 4K que
									tiene 4 veces más pixeles que los televisores FHD. Ahora puedes ver hasta los
									detalles más pequeños en cada escena.',
				'extract' 		=> 'LED Samsung 55" UHD 4K',
				'price' 		=> 300.95,
				'weight' 		=> 50,
				'visible' 		=> 1,
				'identifier'    => '1538941176',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 3
			],
			[
				'name' 			=> 'Notebook HP 14" Intel Core i3, 4GB RAM, 1TB DD',
				'slug' 			=> 'notebook-hp-14-intel-core-i3-4gb-ram-1tb-dd',
				'description' 	=> 'Con el Notebook HP 14" no tendrás que restringir tu desempeño nunca más.
				                    Su moderno procesador Intel Core i3 de dos núcleos, junto con la memoria RAM de 4 GB
				                    te harán sentir que vuelas. Además, su gran espacio en el disco duro te permite guardar
				                    todos tus contenidos en un solo lugar. No obstante, este gigante nunca será una carga,
				                    ya que sus 14" pulgadas de pantalla y 1.9 kilogramos, te harán la vida más cómoda.',
				'extract' 		=> 'Notebook HP 14" Intel Core i3',
				'price' 		=> 200.95,
				'weight' 		=> 50,
				'visible' 		=> 1,
				'identifier'    => '1538941488',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 4
			],
			[
				'name' 			=> 'Notebook Lenovo 14" HD, Intel Celeron N3350, 4GB, 128GB, IdeaPad 120s',
				'slug' 			=> 'notebook-lenovo-14-hd-intel-celeron-n3350-4gb-128gb-ideapad-120s',
				'description' 	=> 'Con el Notebook HP 14" no tendrás que restringir tu desempeño nunca más.
									Su moderno procesador Intel Core i3 de dos núcleos, junto con la memoria RAM de 4 GB
									te harán sentir que vuelas. Además, su gran espacio en el disco duro te permite guardar
									todos tus contenidos en un solo lugar. No obstante, este gigante nunca será una carga,
									ya que sus 14" pulgadas de pantalla y 1.9 kilogramos, te harán la vida más cómoda.',
				'extract' 		=> 'Notebook Lenovo 14" HD',
				'price' 		=> 180.95,
				'weight' 		=> 50,
				'visible' 		=> 1,
				'identifier'    => '1538941795',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 4
			]

		);

		Product::insert($data);
    }
}
