<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

class CreateAdmEpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('  CREATE TABLE adm_eps (
                      IdEps SMALLINT(3) auto_increment,
                      TipoEps VARCHAR(5),
                      Nombre_Administradora VARCHAR(150),
                      Nombre VARCHAR(70),
                      CodEps VARCHAR(20),
                      Estado TINYINT(1),
                      created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                      updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                      constraint pk_idEps PRIMARY KEY (IdEps)
                      );');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TABLE adm_eps');
    }
}
