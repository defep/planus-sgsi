<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThreatAssetTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('threat_asset_types', function (Blueprint $table) {
            $table->unsignedBigInteger('threat_id');
            $table->unsignedBigInteger('asset_type_id');
            $table->foreign('threat_id')->references('id')->on('threats')
                ->onDelete('cascade');
            $table->foreign('asset_type_id')->references('id')->on('asset_types')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('threat_asset_types');
    }
}
