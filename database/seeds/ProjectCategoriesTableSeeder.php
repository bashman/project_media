<?php

use Illuminate\Database\Seeder;

class ProjectCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('project_categories')->delete();
        
        \DB::table('project_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Cannabis',
                'created_at' => '2020-06-05 13:02:04',
                'updated_at' => '2020-06-05 13:02:04',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Estratégico',
                'created_at' => '2020-06-05 13:02:13',
                'updated_at' => '2020-06-05 13:02:13',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Tecnológico',
                'created_at' => '2020-06-05 13:02:24',
                'updated_at' => '2020-06-05 13:02:24',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Gobernabilidad',
                'created_at' => '2020-06-05 13:02:37',
                'updated_at' => '2020-06-05 13:02:37',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}