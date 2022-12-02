<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validarLibros;
use DB;
use Carbon\Carbon;

class controllertblibros extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $consultaA=DB::table('tbautores')->get();
        return view('bookRegister',compact('consultaA'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validarLibros $request)
    {
        DB::table('tblibros')->insert([
            "ISBN"=>$request->input('txtISBN'),
            "titulo"=>$request->input('txtTitulo'),
            "autorId"=>$request->input('txtAutor'),
            "paginas"=>$request->input('txtPaginas'),
            "editorial"=>$request->input('txtEditorial'),
            "email"=>$request->input('txtEmail'),
            "updated_at"=>Carbon::now()
        ]);
        return redirect('bookRegister/create')->with('libroRegistrado','Exitosamente');
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
        //
    }
}
