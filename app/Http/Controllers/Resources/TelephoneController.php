<?php

namespace App\Http\Controllers\Resources;

use App\Resources\Telephone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TelephoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $telephones = Telephone::All();
        return view('resources/telephone/index')
            ->with('telephones', $telephones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = \app\User::doesnthave('Telephone')->get();
        return view('resources/telephone/create')->withUsers($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $telephone = new Telephone($request->All());
        
        if ($request->has('user')) {
            if ($request->filled('user')) {
                $telephone->user()->associate($request->input('user'));
            }
            else {
                $telephone->user()->dissociate();
            }
        }

        $telephone->save();

        session()->flash('info', 'El telefono '.$telephone->number.' ha sido creado.');

        return redirect()->route('resources.telephones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recurso\Telephone  $telephone
     * @return \Illuminate\Http\Response
     */
    public function show(Telephone $telephone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recurso\Telephone  $telephone
     * @return \Illuminate\Http\Response
     */
    public function edit(Telephone $telephone)
    {
        $users = \app\User::doesnthave('Telephone')->get();
        return view('resources/telephone/edit')->withTelephone($telephone)->withUsers($users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recurso\Telephone  $telephone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Telephone $telephone)
    {
        $telephone->fill($request->all());

        if ($request->has('user')) {
            if ($request->filled('user')) {
                $telephone->user()->associate($request->input('user'));
            }
            else {
                $telephone->user()->dissociate();
            }
        }

        $telephone->save();

        session()->flash('success', 'El telefono '.$telephone->number.' ha sido actualizado.');

        return redirect()->route('resources.telephones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recurso\Telephone  $telephone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Telephone $telephone)
    {
        $telephone->delete();

        session()->flash('success', 'El telefono '.$telephone->number.' ha sido eliminado');

        return redirect()->route('resources.telephones.index');
    }
}