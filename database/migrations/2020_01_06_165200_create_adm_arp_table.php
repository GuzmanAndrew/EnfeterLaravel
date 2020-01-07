<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

class CreateAdmArpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE TABLE adm_arp (
                      IdArp MEDIUMINT(3) auto_increment,
                      Comprobantes VARCHAR(5),
                      Nombre_Administradora VARCHAR(200),
                      Nombre VARCHAR(70),
                      CodArp VARCHAR(20),
                      Estado TINYINT(1),
                      created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                      update_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                      constraint pk_idArp PRIMARY KEY (IdArp)
                      );');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TABLE adm_arp');
    }
}
