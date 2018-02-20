<?php

namespace App\Http\Controllers\Resources;

use App\Resources\Computer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $computers = Computer::All();
        return view('resources/computer/index')
            ->with('computers', $computers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resources/computer/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $computer = new computer($request->All());
        $computer->save();

        session()->flash('info', 'El computador '.$computer->brand.' ha sido creado.');

        return redirect()->route('resources.computer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Resources\Computer  $computer
     * @return \Illuminate\Http\Response
     */
    public function show(Computer $computer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resources\Computer  $computer
     * @return \Illuminate\Http\Response
     */
    public function edit(Computer $computer)
    {
        $users = \app\User::All();
        return view('resources/computer/edit')
            ->with('computer', $computer)
            ->with('users', $users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resources\Computer  $computer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Computer $computer)
    {
        $computer->fill($request->all());

        if ($request->has('user')) {
            if ($request->filled('user')) {
                $computer->user()->associate($request->input('user'));
            }
            else {
                $computer->user()->dissociate();
            }
        }

        $computer->save();

        session()->flash('success', 'El computador '.$computer->brand.' ha sido actualizado.');

        return redirect()->route('resources.computer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resources\Computer  $computer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Computer $computer)
    {
        $computer->delete();

        session()->flash('success', 'El computador '.$computer->brand.' ha sido eliminado');

        return redirect()->route('resources.computer.index');
    }
}
