<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Coche;

class CocheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coche = Coche::all();

        return response()->json($coche);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coche = new Coche();

        $coche->name = $request->name;
        $coche->descr = $request->descr;
        $coche->price = $request->price;
        $coche->cant = $request->cant;
        $coche->prov_id = $request->prov_id;
        $coche->save();

        return response()->json(["msj"=>"coche generado correctamente"]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $coche = Coche::findOrFail($request->id);
        return response()->json($coche);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $coche = Coche::findOrFail($request->id);
        $coche->name = $request->name;
        $coche->descr = $request->descr;
        $coche->price = $request->price;
        $coche->cant = $request->cant;
        $coche->prov_id = $request->prov_id;
        $coche->save();

        return $coche;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $coche = Coche::destroy($request->id);
        return $coche;
    }
}
