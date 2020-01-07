<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

class CreateProovedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE TABLE proveedores (
                      IdProve MEDIUMINT(6) auto_increment,
                      FchIngreso DATETIME,
                      TipDoc VARCHAR(4),
                      Identificacion VARCHAR(30),
                      DigitoVer VARCHAR(1),
                      NombreCorto VARCHAR(250),
                      RazonSocial VARCHAR(100),
                      Nombre_Repre VARCHAR(500),
                      Tipo_Doc_Rep VARCHAR(3),
                      Num_Iden_Rep VARCHAR(50),
                      ActEconomica VARCHAR(100),
                      Sector VARCHAR(10),
                      TipoRegimen VARCHAR(25),
                      TipoNaturaleza VARCHAR(12),
                      TipoCuenta VARCHAR(12),
                      CuentaBanco VARCHAR(50),
                      Direccion VARCHAR(50),
                      Barrio VARCHAR(30),
                      Ciudad VARCHAR(30),
                      Departamento VARCHAR(30),
                      Celular VARCHAR(10),
                      Telefono VARCHAR(10),
                      Email VARCHAR(100),
                      Web VARCHAR(200),
                      Activo TINYINT(1),
                      usuario_id INT,
                      created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                      update_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                      constraint pk_idProve PRIMARY KEY (IdProve),
                      CONSTRAINT fk_proveedores_usuario
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
        DB::statement('DROP TABLE proveedores');
    }
}
