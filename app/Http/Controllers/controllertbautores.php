<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validarAutores;
use DB;
use Carbon\Carbon;

class controllertbautores extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $consultaA=DB::table('tbautores')->get();
        return view('consultaAutores',compact('consultaA'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('autores');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validarAutores $request){
        DB::table('tbautores')->insert([
            "nombreAutor"=>$request->input('txtNombreAutor'),
            "fechaNacimiento"=>$request->input('txtNacimientoAutor'),
            "numLibros"=>$request->input('NLibrosPublicados'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()
        ]);
        return redirect('autores/create')->with('autorRegistrado','Exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $consultaId = DB::table('tbautores')->where('idAutor',$id)->frist();

        return view('deleteAutores',compact('consultaId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $consultaId = DB::table('tbautores')->where('idAutor',$id)->frist();

        return view('updateAutor',compact('consultaId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validarAutores $request, $id){
        DB::table('tbautores')->where('idAutor',$id)->update([
            "nombreAutor"=> $request->input('txtNombreAutor'),
            "fechaNacimiento"=> $request->input('txtNacimientoAutor'),
            "numLibros"=> $request->input('NLibrosPublicados'),
            "updated_at"=> Carbon::now()
        ]);

        return redirect('consultaAutores')->with('autorActualizado','Exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        DB::table('tbautores')->where('idAutor',$id)->delete();

        return redirect('consultaAutores')->with('autorEliminado','Exitosamente');
    }
}
