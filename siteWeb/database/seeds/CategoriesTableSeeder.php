<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'category_id' => 2,
                'category_name' => 'aliments',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'category_id' => 3,
                'category_name' => 'actions',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'category_id' => 4,
                'category_name' => 'activités',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'category_id' => 5,
                'category_name' => 'hygiène',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'category_id' => 6,
                'category_name' => 'santé',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'category_id' => 7,
                'category_name' => 'sorties',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'category_id' => 8,
                'category_name' => 'loisirs',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'category_id' => 9,
                'category_name' => 'humeurs',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'category_id' => 10,
                'category_name' => 'temps',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'category_id' => 11,
                'category_name' => 'interdit',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'category_id' => 12,
                'category_name' => 'intéractions',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'category_id' => 13,
                'category_name' => 'sports',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'category_id' => 14,
                'category_name' => 'lieux',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'category_id' => 15,
                'category_name' => 'évènements',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'category_id' => 16,
                'category_name' => 'objets',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'category_id' => 17,
                'category_name' => 'habits',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'category_id' => 18,
                'category_name' => 'gestes',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'category_id' => 19,
                'category_name' => 'intéractions avec pros',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'category_id' => 20,
                'category_name' => 'émotions',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'category_id' => 21,
                'category_name' => 'états',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}