<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\rrhh\OrganizationalUnit;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_role = Role::where('name','Admin')->first();
        $usuario_role = Role::where('name','Usuario')->first();

        $user = new User();
        $user->id = 12345678;
        $user->dv = 9;
        $user->name = "Administrador";
        $user->email = "soporte.ssi@redsalud.gob.cl";
        $user->password = bcrypt('admin');
        $user->save();
        $user->roles()->attach($admin_role);
        $user->roles()->attach($usuario_role);
        
        $ouTIC = OrganizationalUnit::Where('name','Unidad de Informática y Tecnología')->first();
        $ouDPCR = OrganizationalUnit::Where('name','Departamento de Planificación y Control de Redes')->first();
        
        $user = new User();
        $user->id = 15287582;
        $user->dv = 7;
        $user->name = "Alvaro Torres Fuchslocher";
        $user->email = "alvaro.torres@redsalud.gob.cl";
        $user->password = bcrypt('admin');
        $user->position = "Profesional SIDRA";
        $user->organizationalUnit()->associate($ouTIC);
        $user->save();
        $user->roles()->attach($admin_role);
        $user->roles()->attach($usuario_role);

        $user = User::Create(
            ['id'=>10278387, 'dv'=>5, 'name'=>'José Donoso Carrera','email'=>'jose.donosoc@resalud.gob.cl','password'=>bcrypt('password'), 'position'=>'Jefe','organizational_unit_id'=>$ouDPCR->id]);

        $user = User::Create(
            ['id'=>14107361, 'dv'=>3, 'name'=>'Pamela Villagrán Alvarez','email'=>'pamela.villagran@redsalud.gob.cl','password'=>bcrypt('password'), 'position'=>'Administrativa','organizational_unit_id'=>$ouDPCR->id]);

        $user = User::Create(
            ['id'=>16966444, 'dv'=>7, 'name'=>'Jorge Miranda Lopez','email'=>'jorge.miranda@resalud.gob.cl','password'=>bcrypt('password'), 'position'=>'Profesional SIDRA','organizational_unit_id'=>$ouTIC->id]);

        $user = User::Create(
            ['id'=>15924400, 'dv'=>8, 'name'=>'Cristian Carpio','email'=>'cristian.carpio@resalud.gob.cl','password'=>bcrypt('password'), 'position'=>'Profesional SIDRA','organizational_unit_id'=>$ouTIC->id]);

        
        /*
        factory(App\User::class, 5)->create()->each(function ($u) {
            $u->roles()->attach(Role::where('name','Usuario')->first());
        });
        */
    }
}
