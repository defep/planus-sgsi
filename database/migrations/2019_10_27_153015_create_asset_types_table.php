<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });

        DB::table('asset_types')->insert(
            array(
                array('name' => 'Personas'),
                array('name' => 'Aplicaciones (software)'),
                array('name' => 'Aplicaciones (hardware)'),
                array('name' => 'Servicios'),
                array('name' => 'Información'),
                array('name' => 'Datos'),
                array('name' => 'Comunicaciones'),
                array('name' => 'Recursos administrativos'),
                array('name' => 'Recursos físicos')
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asset_types');
    }
}
