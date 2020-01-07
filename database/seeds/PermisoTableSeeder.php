<?php

use Illuminate\Database\Seeder;
use App\Models\Permiso;

class PermisoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Para crear un model factory con cierta candidad de registros es así:
        // factory(Permiso::class, 20)->create();

        factory(Permiso::class, 20)->create();
    }
}
