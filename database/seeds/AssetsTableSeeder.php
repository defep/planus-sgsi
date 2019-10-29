<?php

use Illuminate\Database\Seeder;
use App\Asset;

class AssetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array('name' => 'Servidor #1', 'asset_type_id' => 3, 'description' => 'Descripción de prueba', 'created_at' => DB::raw('now()')),
            array('name' => 'RESTful API', 'asset_type_id' => 2, 'description' => 'Descripción de prueba', 'created_at' => DB::raw('now()')),
            array('name' => 'Diseñador', 'asset_type_id' => 1, 'description' => 'Descripción de prueba', 'created_at' => DB::raw('now()'))
        );

        Asset::insert($data);
    }
}
