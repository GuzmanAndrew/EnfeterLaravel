<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

class CreateAdmCcfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE TABLE adm_ccf (
                      IdCCF MEDIUMINT(6) auto_increment,
                      Componente VARCHAR(4),
                      Nombre_Administradora VARCHAR(200),
                      Nombre VARCHAR(70),
                      CodCcf VARCHAR(20),
                      Estado TINYINT(1),
                      created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                      update_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                      constraint pk_idCcf PRIMARY KEY (IdCCF)
                      );');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TABLE adm_ccf');
    }
}
