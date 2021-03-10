<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CenDocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        $request->validate([
            'denominacion'=>'required',
            'codigo'=>'required',
            'CIF'=>'required',
            'titularidad'=>'required',
            'dir_postal'=>'required',
            'cp'=>'required', 
            'director_nom'=>'required',
            'director_apel1'=>'required', 
            'director_apel2'=>'required',   
            'identificada'=>'required',
            'tipo_identificada'=>'required',
        ]);

        DB::table('cen_docentes')->insert([
            "denominacion" => $request->denominacion,
            "codigo" => $request->codigo,
            "CIF" => $request->CIF,
            "titularidad" => $request->titularidad,
            "dir_postal" => $request->dir_postal,
            "cp" => $request->cp,
            "director_nom" => $request->director_nom,
            "director_apel1" => $request->director_apel1,
            "director_apel2" => $request->director_apel2,
            "identificada" => $request->identificada,
            "tipo_identificada" => $request->tipo_identificada
        ]);

        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        //
    }
}
