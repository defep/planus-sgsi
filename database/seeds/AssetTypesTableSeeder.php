<?php

use Illuminate\Database\Seeder;
use App\AssetType;

class AssetTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array('name' => 'Personas'),
            array('name' => 'Aplicaciones (software)'),
            array('name' => 'Aplicaciones (hardware)'),
            array('name' => 'Servicios'),
            array('name' => 'Información'),
            array('name' => 'Datos'),
            array('name' => 'Comunicaciones'),
            array('name' => 'Recursos administrativos'),
            array('name' => 'Recursos físicos')
        );

        AssetType::insert($data);
    }
}
