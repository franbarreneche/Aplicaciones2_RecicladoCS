<?php

namespace App\Http\Controllers;

use App\Http\Requests\CentroRequest;
use App\Models\Centro;
use App\Models\Ciudadano;
use Exception;
use Illuminate\Http\Request;

class CentroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('view-any',Centro::class);

        $centros = Centro::paginate(15);

        return view('models.centro.index',["centros" => $centros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create',Centro::class);

        $ciudadanos = Ciudadano::all();

        return view('models.centro.create',["ciudadanos" => $ciudadanos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CentroRequest $request)
    {
        $this->authorize('create',Centro::class);

        $validados = $request->validated();

        try {
            Centro::create($validados);
        }catch(Exception $e) {
            return back()->withInput($validados)->withErrors($e->getMessage());
        }

        return redirect()->route('centros.index')->with(["message" => "El nuevo centro fue creado exitosamente"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Centro  $centro
     * @return \Illuminate\Http\Response
     */
    public function show(Centro $centro)
    {
        $this->authorize('view',$centro);

        $ciudadanos = [];
        try {
            $ciudadanos = Ciudadano::orderBy('apellido')->get();
        }catch(Exception $e) {
            back()->withErrors($e->getMessage());
        }

        return view('models.centro.show',["centro" => $centro, "ciudadanos" => $ciudadanos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Centro  $centro
     * @return \Illuminate\Http\Response
     */
    public function edit(Centro $centro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Centro  $centro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Centro $centro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Centro  $centro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Centro $centro)
    {
        $this->authorize('delete',$centro);

        try {
            $centro->delete();
        }catch(Exception $e) {
            return back()->withErrors("Hubo un error al intentar borrar el centro");
        }

        return back()->with(['message' => "El centro $centro->nombre_completo ha sido eliminado."]);
    }

    /**
     * Registers a Ciudadado to the specified Centro.
     *
     * @param  \App\Models\Centro  $centro
     * @return \Illuminate\Http\Response
     */
    public function attach(Request $request, Centro $centro)
    {
        $this->authorize('update',$centro);

        $request->validate([
            "recolector_id" => ["required","integer"]
        ]);

        try {
          $resultado = $centro->recolectores()->syncWithoutDetaching($request->recolector_id);
        }catch(Exception $e) {
            return back()->withErrors("Hubo un progblema al querer registrar al recolector.");
        }

        if(empty($resultado["attached"])) return back()->withErrors(['message' => "El recolector ya se encuentra registrado en este centro."]);

        return back()->with(['message' => "Se ha registrado exitosamente al recolector."]);
    }

    /**
     * Remove a relationship of a Ciudadado to the specified Centro.
     *
     * @param  \App\Models\Centro  $centro
     * @return \Illuminate\Http\Response
     */
    public function detach(Request $request, Centro $centro)
    {
        $this->authorize('update',$centro);

        $request->validate([
            "recolector_id" => ["required","integer"]
        ]);

        try {
          $centro->recolectores()->detach($request->recolector_id);
        }catch(Exception $e) {
            return back()->withErrors("Hubo un progblema al querer registrar al recolector.");
        }

        return back()->with(['message' => "Se ha quitado exitosamente al recolector de este centro."]);
    }

}
