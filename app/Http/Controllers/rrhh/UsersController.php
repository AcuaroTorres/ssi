<?php

namespace App\Http\Controllers\rrhh;

use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Http\Requests\rrhh\updatePassword;
use App\Http\Requests\rrhh\StoreUser;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        /* Middleware Especificado en las rutas por que el directorio no lleva auth */
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        //$users = User::orderBy('name','Asc')->paginate(10);
        $users = User::Search($request->get('name'))->orderBy('name','Asc')->paginate(15);

        /*
        $users->each(function($users){
            $users->roles;
            
        });
        */
        return view('rrhh/index')->withUsers($users);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function directory(Request $request)
    {
        $users=\App\User::has('telephone')->Search($request->get('name'))->orderBy('name','Asc')->paginate(20);
        return view('rrhh/directory')->withUsers($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $organizationalunits = \App\rrhh\OrganizationalUnit::All()->sortBy('name');
        return view('rrhh/create')->withOrganizationalunits($organizationalunits);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {
        $user = new User($request->All());
        $user->password = bcrypt($request->id);
        
        if ($request->has('organizationalunit')) {
            if ($request->filled('organizationalunit')) {
                $user->organizationalunit()->associate($request->input('organizationalunit'));
            }
            else {
                $user->organizationalunit()->dissociate();
            }
        }

        $user->save();

        if($request->hasFile('photo')){
            $path = $request->file('photo')
            ->storeAs('public',$user->id.'.'.$request->file('photo')->clientExtension());
        }


        $user->roles()->attach(Role::where('name','Usuario')->first());

        session()->flash('info', 'El usuario '.$user->name.' ha sido creado.');

        return redirect()->route('rrhh.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $organizationalunits = \App\rrhh\OrganizationalUnit::All()->sortBy('name');
        return view('rrhh.edit')
            ->withUser($user)
            ->withOrganizationalunits($organizationalunits);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->fill($request->all());

        if ($request->has('organizationalunit')) {
            if ($request->filled('organizationalunit')) {
                $user->organizationalunit()->associate($request->input('organizationalunit'));
            }
            else {
                $user->organizationalunit()->dissociate();
            }
        }

        $user->save();

        session()->flash('success', 'El usuario '.$user->name.' ha sido actualizado.');

        return redirect()->route('rrhh.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {        
        /* Primero Limpiamos todos los roles */
        $user->roles()->detach();

        $user->delete();

        session()->flash('success', 'El usuario '.$user->name.' ha sido eliminado');

        return redirect()->route('rrhh.users.index');
    }


    /**
     * Show the form for change password.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function editPassword() {
        return view('rrhh.edit_password');
    }

    /**
     * Update the current loged user password
     *
     * @param  \Illuminate\Http\updatePassword  $request
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(updatePassword $request) {
        if(Hash::check($request->password, Auth()->user()->password)) {
            Auth()->user()->password = bcrypt($request->newpassword);
            Auth()->user()->save();

            session()->flash('success', 'Su clave ha sido cambiada con éxito.');
        }
        else {
            session()->flash('danger', 'La clave actual es erronea.');
        }
        
        return redirect()->route('password.edit');
    }

    /**
     * Reset user password.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function resetPassword(User $user) {
        $user->password = bcrypt($user->id);
        $user->save();

        session()->flash('success', 'La clave ha sido reseteada a: '.$user->id);
        
        return redirect()->route('rrhh.users.edit', $user->id);
    }

}