<?php

namespace App\Http\Controllers;

use App\Http\Requests\CiudadanoRequest;
use App\Models\Ciudadano;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class CiudadanoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('view-any',Ciudadano::class);
        $ciudadanos = Ciudadano::simplePaginate(15);
        return view('models.ciudadano.index',["ciudadanos" => $ciudadanos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create',Ciudadano::class);
        return view('models.ciudadano.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CiudadanoRequest $request)
    {
        $this->authorize('create',Ciudadano::class);
        $validados = $request->validated();
        try{
            Ciudadano::create([
                "dni" => $validados['dni'],
                "nombre" => $validados['nombre'],
                "apellido" => $validados['apellido'],
                "domicilio" => $validados['domicilio'],
                "telefono" => $validados['telefono']
            ]);
        }catch(Exception $e) {
            return back()->withInput($validados)->withErrors("Hubo un error al intentar crear el ciudadano");
        }
        return redirect()->route('ciudadanos.index')->with(["message" => "El nuevo ciudadano fue creado exitosamente"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ciudadano  $ciudadano
     * @return \Illuminate\Http\Response
     */
    public function show(Ciudadano $ciudadano)
    {
        $this->authorize('view',$ciudadano);
        return view('models.ciudadano.show',["ciudadano" => $ciudadano]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ciudadano  $ciudadano
     * @return \Illuminate\Http\Response
     */
    public function edit(Ciudadano $ciudadano)
    {
        $this->authorize('update',$ciudadano);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ciudadano  $ciudadano
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ciudadano $ciudadano)
    {
        $this->authorize('update',$ciudadano);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ciudadano  $ciudadano
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ciudadano $ciudadano)
    {
        $this->authorize('delete',$ciudadano);
        try {
            $ciudadano->delete();
        }catch(Exception $e) {
            return back()->withErrors("Hubo un error al intentar borrar el ciudadano");
        }
        return back()->with(['message' => "El ciudadano $ciudadano->nombre_completo ha sido eliminado."]);
    }
}
