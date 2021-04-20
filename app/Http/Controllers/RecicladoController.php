<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecicladoRequest;
use App\Models\Centro;
use App\Models\Ciudadano;
use App\Models\Reciclado;
use Exception;
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
    public function create(Request $request)
    {
        try {
            $centro = Centro::findOrFail($request->id);
            $ciudadanos = Ciudadano::all();
        }catch(Exception $e) {
            return back()->withErrors("Hubo algun problema, intenta mas tarde");
        }
        return view('models.reciclado.create',['centro' => $centro,'ciudadanos' => $ciudadanos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RecicladoRequest $request)
    {
        $validados = $request->validated();
        try {
            Reciclado::create($validados);
        }catch(Exception $e) {
            return back()->withInput($validados)->withErrors("Hubo problemas al intentar crear un nuevo el reciclado.");
        }
        return redirect()->route('centros.show',$validados['centro_id'])->with(['message' => "El nuevo reciclado fue agregado exitosamente."]);
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
