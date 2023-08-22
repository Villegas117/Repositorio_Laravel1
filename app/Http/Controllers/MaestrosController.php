<?php

namespace App\Http\Controllers;

use App\Models\Maestros;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MaestrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maestros = Maestros::all();
        return view('Maestros.index', compact('maestros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Maestros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            // Para la validación de numeros es necesario el parametro numeric
            //Al ser datos numericos no es posible usar el parametros max o min ya que son usados para 
            //ya que estos son para caracteres usando digits_between:1,10 se puede fijar un rango
            //"entre numero x:x"
            'codigo' => ['required', 'unique:maestros,codigo', 'numeric', 'digits_between:1,10'],
            'nombre' => ['required'],
            'app' => ['required'],
            'apm' => ['required'],
            'nss' => ['required', 'unique:maestros,nss', 'numeric', 'digits_between:1,12'],
            'correo' => ['required', 'email:rfc,dns', 'unique:maestros,correo']
        ]);

        $maestros = new Maestros();
        $maestros->codigo = $request->codigo;
        $maestros->nombre = $request->nombre;
        $maestros->app = $request->app;
        $maestros->apm = $request->apm;
        $maestros->nss = $request->nss;
        $maestros->correo = $request->correo;

        $maestros->save();

        return redirect('/maestros');
    }


    /**
     * Display the specified resource.
     */
    public function show(Maestros $maestros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $maestros = Maestros::find($id);

        return view('Maestros.edit', compact('maestros'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            // Para la validación de numeros es necesario el parametro numeric
            //Al ser datos numericos no es posible usar el parametros max o min ya que son usados para 
            //ya que estos son para caracteres usando digits_between:1,10 se puede fijar un rango
            //"entre numero x:x"
            'codigo' => ['required', Rule::unique('maestros', 'codigo')->ignore($id), 'numeric', 'digits_between:1,10'],
            'nombre' => ['required'],
            'app' => ['required'],
            'apm' => ['required'],
            'nss' => ['required', 'unique:maestros,nss', 'numeric', 'digits_between:1,12'],
            'correo' => ['required', 'email:rfc,dns', Rule::unique('maestros', 'correo')->ignore($id)]
        ]);

        $maestros = new Maestros();
        $maestros->codigo = $request->codigo;
        $maestros->nombre = $request->nombre;
        $maestros->app = $request->app;
        $maestros->apm = $request->apm;
        $maestros->nss = $request->nss;
        $maestros->correo = $request->correo;
        
        $maestros->save();

        return redirect('/maestros');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $maestros= Maestros::find($id);
        $maestros->delete();
        return redirect('/maestros');
    }
}