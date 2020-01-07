<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

class CreateAdmAfpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE TABLE adm_afp (
                      IdAfp MEDIUMINT(3) auto_increment,
                      Comprobantes VARCHAR(5),
                      Nombre_Administradora VARCHAR(200),
                      Nombre VARCHAR(70),
                      CodAfp VARCHAR(20),
                      Estado TINYINT(1),
                      created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                      update_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                      constraint pk_idAfp PRIMARY KEY (IdAfp)
                      );');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TABLE adm_afp');
    }
}
