<?php

namespace App\Http\Controllers;

use App\Models\Reciclado;
use Illuminate\Http\Request;

class RecicladoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reciclados = Reciclado::all()->take(10);
        return $reciclados;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reciclado  $reciclado
     * @return \Illuminate\Http\Response
     */
    public function show(Reciclado $reciclado)
    {
        return view('models.reciclado.show',["reciclado" => $reciclado]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reciclado  $reciclado
     * @return \Illuminate\Http\Response
     */
    public function edit(Reciclado $reciclado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reciclado  $reciclado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reciclado $reciclado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reciclado  $reciclado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reciclado $reciclado)
    {
        //
    }
}
