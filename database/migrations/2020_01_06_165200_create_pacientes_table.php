<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE TABLE pacientes (
                      IdCliente INT(11) auto_increment,
                      CodigoCamaV VARCHAR(30),
                      FechaIngreso VARCHAR(25),
                      FechaRegistro VARCHAR(25),
                      FechaSalida VARCHAR(25),
                      TipDocId VARCHAR(2),
                      NumDoc VARCHAR(30),
                      Nombres VARCHAR(50),
                      Apellidos VARCHAR(50),
                      Nacimiento VARCHAR(25),
                      Ocupacion VARCHAR(100),
                      Estrato VARCHAR(25),
                      GpoSanguineo VARCHAR(5),
                      FactorRh VARCHAR(2),
                      Genero VARCHAR(25),
                      EstCivil VARCHAR(25),
                      ClasePcte VARCHAR(30),
                      Fijo VARCHAR(20),
                      Celular VARCHAR(20),
                      Oficina VARCHAR(20),
                      Mail VARCHAR(100),
                      Pais VARCHAR(40),
                      Dtpo VARCHAR(40),
                      Ciudad VARCHAR(50),
                      Localidad VARCHAR(100),
                      Barrio VARCHAR(50),
                      Direccion VARCHAR(80),
                      DescripcionLugar VARCHAR(130),
                      Zona VARCHAR(10),
                      Sector VARCHAR(30),
                      Eps VARCHAR(100),
                      TipVinc VARCHAR(50),
                      PlanEps VARCHAR(30),
                      PersResponsable VARCHAR(500),
                      ParentescoResp VARCHAR(500),
                      TelResponsable VARCHAR(20),
                      CelParentesco VARCHAR(15),
                      CorreoParentesco VARCHAR(200),
                      EnvioInf VARCHAR(10),
                      IdUser VARCHAR(50),
                      Activo TINYINT(1),
                      usuario_id INT,
                      created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                      update_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                      constraint pk_idCliente PRIMARY KEY (IdCliente),
                      CONSTRAINT fk_pacientes_usuario
                        FOREIGN KEY (usuario_id)
                        REFERENCES usuario (id)
                    );');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TABLE pacientes');
    }
}
