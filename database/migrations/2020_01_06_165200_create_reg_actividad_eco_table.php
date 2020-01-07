<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

class CreateRegActividadEcoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE TABLE reg_actividad_eco (
                        id SMALLINT(4) auto_increment,
                        division SMALLINT(3),
                        clasificacion SMALLINT(4),
                        codigo SMALLINT(4),
                        actividad VARCHAR(300),
                        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                        constraint pk_id_reg_actividad primary key(id)
                    );');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TABLE reg_actividad_eco');
    }
}
