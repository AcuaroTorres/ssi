<?php

namespace App\Http\Controllers\rrhh;

use App\rrhh\OrganizationalUnit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrganizationalUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organizationalunits = OrganizationalUnit::All();
        return view('rrhh/organizationalunit/index')
            ->with('organizationalunits', $organizationalunits);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rrhh/organizationalunit/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $organizationalunit = new OrganizationalUnit($request->All());

        $organizationalunit->save();

        session()->flash('info', 'La Unidad Organizacional '.$organizationalunit->name.' ha sido creada.');

        return redirect()->route('rrhh.organizationalunit.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\rrhh\OrganizationalUnit  $organizationalUnit
     * @return \Illuminate\Http\Response
     */
    public function show(OrganizationalUnit $organizationalUnit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\rrhh\OrganizationalUnit  $organizationalUnit
     * @return \Illuminate\Http\Response
     */
    public function edit(OrganizationalUnit $organizationalUnit)
    {
        return view('rrhh/organizationalunit/edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\rrhh\OrganizationalUnit  $organizationalUnit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrganizationalUnit $organizationalUnit)
    {
        $organizationalunit->fill($request->all());

        $organizationalunit->save();

        session()->flash('info', 'La Unidad Organizacional '.$organizationalunit->name.' ha sido actualizada.');

        return redirect()->route('rrhh.organizationalunit.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\rrhh\OrganizationalUnit  $organizationalUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrganizationalUnit $organizationalUnit)
    {
        $organizationalunit->delete();

        session()->flash('success', 'La Unidad Organizacional '.$organizationalunit->name.' ha sido eliminado.');

        return redirect()->route('rrhh.organizationalunit.index');
    }
}
