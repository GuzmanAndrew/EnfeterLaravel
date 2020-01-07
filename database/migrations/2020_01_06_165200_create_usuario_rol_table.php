<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

class CreateUsuarioRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('create table usuario_rol(
                        id int auto_increment,
                        rol_id int,
                        user_id int,
                        estado tinyint(1),
                        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                        constraint pk_usuario_rol primary key(id),
                        constraint fk_usuario_rol_usuario foreign key(user_id)
                        references usuario(id),
                        constraint fk_usuario_rol_rol foreign key(rol_id)
                        references rol(id)
                    );');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TABLE usuario_rol');
    }
}
