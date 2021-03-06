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
        $organizationalUnits = OrganizationalUnit::All();
        return view('rrhh/organizationalunit/index')
            ->with('organizationalUnits', $organizationalUnits);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $organizationalUnits = OrganizationalUnit::All();
        return view('rrhh/organizationalunit/create')->withOrganizationalUnits($organizationalUnits);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $organizationalUnit = new OrganizationalUnit($request->All());
        $organizationalUnit->father()->associate($request->input('father'));
        $organizationalUnit->save();

        session()->flash('info', 'La unidad organzacional '.$organizationalUnit->name.' ha sido creada.');

        return redirect()->route('rrhh.organizationalUnits.index');
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
        $organizationalUnits = OrganizationalUnit::All();
        return view('rrhh/organizationalunit/edit')
            ->withOrganizationalUnit($organizationalUnit)
            ->withOrganizationalUnits($organizationalUnits);
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
        $organizationalUnit->fill($request->all());
        $organizationalUnit->father()->associate($request->input('father'));
        $organizationalUnit->save();

        session()->flash('info', 'La unidad organzacional '.$organizationalUnit->name.' ha sido actualizada.');

        return redirect()->route('rrhh.organizationalUnits.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\rrhh\OrganizationalUnit  $organizationalUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrganizationalUnit $organizationalUnit)
    {
        $organizationalUnit->delete();

        session()->flash('success', 'La unidad organzacional '.$organizationalUnit->name.' ha sido eliminada.');

        return redirect()->route('rrhh.organizationalUnits.index');
    }
}
