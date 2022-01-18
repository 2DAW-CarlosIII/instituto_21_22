<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Aulas;
use Illuminate\Http\Request;
use App\Http\Resources\AulasResource;

class AulasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AulasResource::collection(Aulas::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aulas = json_decode($request->getContent(), true);

        $aulas = Aulas::create($aulas);

        return new AulasResource($aulas);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aulas  $aulas
     * @return \Illuminate\Http\Response
     */
    public function show(Aulas $aulas)
    {
        return new AulasResource($aulas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aulas  $aulas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aulas $aulas)
    {
        $aulasData = json_decode($request->getContent(), true);
        $aulas->update($aulasData);

        return new AulasResource($aulas);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aulas  $aulas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aulas $aulas)
    {
        $aulas->delete();
    }
}
