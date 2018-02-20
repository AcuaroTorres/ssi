<?php

use Illuminate\Database\Seeder;

class OrganizationalUnitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $organizationunit = new App\rrhh\OrganizationalUnit();
        $organizationunit->name = 'Direccion';
        $organizationunit->save();

        $organizationunit = new App\rrhh\OrganizationalUnit();
        $organizationunit->name = 'Departamento de Planificacion';
        $organizationunit->save();

        $organizationunit = new App\rrhh\OrganizationalUnit();
        $organizationunit->name = 'Departamento TIC';
        $organizationunit->save();

        $organizationunit = new App\rrhh\OrganizationalUnit();
        $organizationunit->name = 'Oficina de Partes';
        $organizationunit->save();
    }
}
