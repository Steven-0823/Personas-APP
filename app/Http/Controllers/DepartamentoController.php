<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Departamento;
use  Illuminate\Support\Facades\DB;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $departamentos = Departamento::all();
        // return view('departamento.index',['departamentos'=>$departamentos]);
        $departamentos = DB::table('tb_departamento')
        ->join('tb_pais','tb_departamento.pais_codi','=','tb_pais.pais_codi')
        ->select('tb_departamento.*', "tb_pais.pais_nomb")
        ->get();
        return view('departamento.index',['departamentos'=>$departamentos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paises = DB::table('tb_pais')
        ->orderby('pais_nomb')
        ->get();
        return view('departamento.new',['paises' => $paises]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Departamento = new Departamento();
        // $comuna->comu codi $request->id;
        // El código de comuna es auto incremental
        $Departamento->depa_nomb = $request->name;
        $Departamento->pais_codi = $request->code;
        $Departamento->save();

        $departamentos = DB::table('tb_departamento')
        ->join('tb_pais','tb_departamento.pais_codi','=','tb_pais.pais_codi')
        ->select('tb_departamento.*', "tb_pais.pais_nomb")
        ->get();
        return view('departamento.index',['departamentos'=>$departamentos]);
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
        $departamento = Departametnto::find($id);
        $departamento->delete();

        $departamentos = DB::table('tb_departamento')
        ->join('tb_pais','tb_departamento.pais_codi','=','tb_pais.pais_codi')
        ->select('tb_departamento.*', "tb_pais.pais_nomb")
        ->get();
        return view('departamento.index',['departamentos'=>$departamentos]);
    }
}
