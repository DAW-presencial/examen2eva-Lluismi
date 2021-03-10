<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CenDocente;

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("$cendocente");
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

        DB::table('$cendocente')->insert([
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

        $cendocente1 = new cendocente;
        $cendocente1->denominacion = "BorjaMoll";
        $cendocente1->codigo = "4575";
        $cendocente1->CIF = "432432432D";
        $cendocente1->titularidad = "concertado";
        $cendocente1->dir_postal = "Calle Luca de tena";
        $cendocente1->cp = "07002";
        $cendocente1->director_nom = "Adrian";
        $cendocente1->director_apel1 = "Calafell";
        $cendocente1->director_apel2 = "Bennasar";
        $cendocente1->identificada = "43472933E";
        $cendocente1->tipo_identificada = "nif";

        $cendocente2 = new cendocente;
        $cendocente2->denominacion = "Santa Monica";
        $cendocente2->codigo = "3235";
        $cendocente2->CIF = "432432432D";
        $cendocente2->titularidad = "privado";
        $cendocente2->dir_postal = "Calle Aragon";
        $cendocente2->cp = "07004";
        $cendocente2->director_nom = "Manuel";
        $cendocente2->director_apel1 = "Morey";
        $cendocente2->director_apel2 = "Brotons";
        $cendocente2->identificada = "43471232D";
        $cendocente2->tipo_identificada = "nie";

        $cendocente1->save();
        $cendocente2->save();
        
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
