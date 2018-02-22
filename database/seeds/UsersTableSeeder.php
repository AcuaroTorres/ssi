<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

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
        $user->organizational_unit_id = 2;
        $user->save();
        $user->roles()->attach($admin_role);
        $user->roles()->attach($usuario_role);

        $user = new User();
        $user->id = 15287582;
        $user->dv = 7;
        $user->name = "Alvaro Torres Fuchslocher";
        $user->email = "alvaro.torres@redsalud.gob.cl";
        $user->password = bcrypt('admin');
        $user->position = "Profesional SIDRA";
        $user->organizational_unit_id = 2;
        $user->save();
        $user->roles()->attach($admin_role);
        $user->roles()->attach($usuario_role);
        
        /*
        factory(App\User::class, 5)->create()->each(function ($u) {
            $u->roles()->attach(Role::where('name','Usuario')->first());
        });
        */
    }
}
