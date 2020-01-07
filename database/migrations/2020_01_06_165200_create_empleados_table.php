<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE TABLE empleados (
                      IdEmpleado INT(7) auto_increment,
                      NrOferta VARCHAR(40),
                      FchRegistro VARCHAR(20),
                      Fingreso VARCHAR(20),
                      FchSalida VARCHAR(20),
                      TipDoc VARCHAR(3),
                      DocID VARCHAR(50),
                      LugExpe VARCHAR(40),
                      FchExpe VARCHAR(20),
                      Nombres VARCHAR(50),
                      SegundoNom VARCHAR(100),
                      Apellidos VARCHAR(50),
                      SegundoApe VARCHAR(100),
                      FchNacido VARCHAR(20),
                      LugNacido VARCHAR(50),
                      Genero TINYINT(2),
                      SCivil VARCHAR(20),
                      GroSangui VARCHAR(5),
                      FactorRh VARCHAR(2),
                      TelDomicilio VARCHAR(20),
                      Otro_Tel VARCHAR(10),
                      TelMobil VARCHAR(20),
                      Email VARCHAR(100),
                      emailCorp VARCHAR(100),
                      Direccion VARCHAR(50),
                      Barrio VARCHAR(50),
                      Localidad VARCHAR(30),
                      IdZona TINYINT(2),
                      Sector TINYINT(4),
                      IdCiud VARCHAR(50),
                      Departamento VARCHAR(50),
                      Pais VARCHAR(50),
                      IdEPS SMALLINT(3),
                      IdAFP SMALLINT(3),
                      IdCCF SMALLINT(3),
                      IdARP SMALLINT(3),
                      TipoRiesgo VARCHAR(30),
                      NEducativo VARCHAR(50),
                      Titulo VARCHAR(100),
                      Instituto VARCHAR(200),
                      FchInicio VARCHAR(20),
                      Culminacion VARCHAR(20),
                      NEducativo2 VARCHAR(50),
                      Titulo2 VARCHAR(100),
                      Instituto2 VARCHAR(200),
                      FchInicio2 VARCHAR(20),
                      Culminacion2 VARCHAR(20),
                      NEducativo3 VARCHAR(50),
                      Titulo3 VARCHAR(100),
                      Instituto3 VARCHAR(200),
                      FchInicio3 VARCHAR(20),
                      Culminacion3 VARCHAR(20),
                      IdNomina SMALLINT(2),
                      IdCargo SMALLINT(3),
                      Salario VARCHAR(15),
                      Vinculacion VARCHAR(30),
                      NomBanco VARCHAR(60),
                      Cuenta VARCHAR(50),
                      TipCuenta VARCHAR(50),
                      IdUser VARCHAR(5),
                      Estado TINYINT(1),
                      usuario_id INT NOT NULL,
                      created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                      updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                      constraint pk_idEmpleado PRIMARY KEY (IdEmpleado),
                      CONSTRAINT fk_empleados_usuario1 FOREIGN KEY (usuario_id)
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
        DB::statement('DROP TABLE empleados');
    }
}
