<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Centro;
use App\Models\Rol;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(15);
        return view('models.user.index',['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Rol::all();
        $ciudadanos = Centro::join('ciudadanos','ciudadanos.id','coordinador_id')->where('coordinador_id',"!=",null)->get();
        return view('models.user.create',['roles' => $roles,'ciudadanos' => $ciudadanos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $validados = $request->validated();
        try {
            $user = new User();
            $user->name = $validados['name'];
            $user->email = $validados['email'];
            $user->password = Hash::make($validados['password']);
            $user->rol_id = $validados['rol_id'];
            $user->ciudadano_id = $validados['ciudadano_id'] ? $validados['ciudadano_id'] : null;
            $user->email_verified_at = now();
            $user->save();
        }catch(Exception $e) {
            return back()->withInputs($validados)->withErrors($e->getMessage());
        }
        return back()->with(['message' => "Se agregó el nuevo usuario correctamente."]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('models.user.show',['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $resultado = User::destroy($id);
        }catch(Exception $e) {
            return back()->withErrors("Hubo un error al intentar borrar el usuario");
        }
        return redirect()->route('users.index')->with(['message' => "El usuario ha sido eliminado exitosamente."]);
    }
}
