<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Falta_alumno;
use Illuminate\Http\Request;
use App\Http\Resources\Falta_alumnoResource;

class Faltas_alumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Falta_alumnoResource::collection(Falta_alumno::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $falta_alumno = json_decode($request->getContent(), true);

        $falta_alumno = Falta_alumno::create($falta_alumno);

        return new Falta_alumnoResource($falta_alumno);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Falta_alumno  $falta_alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Falta_alumno $falta_alumno)
    {
        return new Falta_alumnoResource($falta_alumno);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Falta_alumno  $falta_alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Falta_alumno $falta_alumno)
    {
        $falta_alumnoData = json_decode($request->getContent(), true);
        $falta_alumno->update($falta_alumnoData);

        return new Falta_alumnoResource($falta_alumno);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Falta_alumno $falta_alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Falta_alumno $falta_alumno)
    {
        $falta_alumno->delete();
    }
}
