<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

class CreatePermisoRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE TABLE permiso_rol(
                    id  int auto_increment,
                    rol_id int,
                    permiso_id int,
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                    updated_at_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                    constraint pk_id_permiso_rol primary key(id),
                    constraint fk_permiso_rol_rol foreign key(rol_id)
                    references rol(id),
                    constraint fk_permiso_rol_permiso foreign key(permiso_id)
                    references permiso(id)
                  );');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TABLE permiso_rol');
    }
}
