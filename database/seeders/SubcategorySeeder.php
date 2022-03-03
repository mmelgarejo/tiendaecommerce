<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            //Celulares y tablets
            [
                'category_id' => 1,
                'name' => 'Celulares y smartfones',
                'slug' => STR::slug('Celulares y smartfones'),
                'color' => true
            ],
            [
                'category_id' => 1,
                'name' => 'Accesorios para celulares',
                'slug' => STR::slug('Accesorios para celulares'),
            ],
            [
                'category_id' => 1,
                'name' => 'Smartwatches',
                'slug' => STR::slug('Smartwatches'),
            ],
            //TV, audio y video
            [
                'category_id' => 2,
                'name' => 'TV y video',
                'slug' => STR::slug('TV y video'),
            ],
            [
                'category_id' => 2,
                'name' => 'Audios',
                'slug' => STR::slug('Audios'),
            ],
            [
                'category_id' => 2,
                'name' => 'Audio para autos',
                'slug' => STR::slug('Audio para autos'),
            ],
            //Consola y videojuegos
            [
                'category_id' => 3,
                'name' => 'XBOX',
                'slug' => STR::slug('XBOX'),
            ],
            [
                'category_id' => 3,
                'name' => 'Playstation',
                'slug' => STR::slug('Playstation'),
            ],
            [
                'category_id' => 3,
                'name' => 'Videojuegos para PC',
                'slug' => STR::slug('Videjuegos para PC'),
            ],
            [
                'category_id' => 3,
                'name' => 'Nintendo',
                'slug' => STR::slug('Nintendo'),
            ],
            //Computacion
            [
                'category_id' => 4,
                'name' => 'Portatiles',
                'slug' => STR::slug('Portatiles'),
            ],
            [
                'category_id' => 4,
                'name' => 'PC Escritorio',
                'slug' => STR::slug('PC Escritorio'),
            ],
            [
                'category_id' => 4,
                'name' => 'Almacenamiento',
                'slug' => STR::slug('Almacenamiento'),
            ],
            [
                'category_id' => 4,
                'name' => 'Accesorios computadoras',
                'slug' => STR::slug('Accesorios computadoras'),
            ],
            //Moda
            [
                'category_id' => 5,
                'name' => 'Mujeres',
                'slug' => STR::slug('Mujeres'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' => 5,
                'name' => 'Hombres',
                'slug' => STR::slug('Hombres'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' => 5,
                'name' => 'Lentes',
                'slug' => STR::slug('Lentes'),
            ],
            [
                'category_id' => 5,
                'name' => 'Relojes',
                'slug' => STR::slug('Relojes'),
            ],
        ];
        foreach($subcategories as $subcategory) {
            Subcategory::factory(1)->create($subcategory);
        }
    }
}
