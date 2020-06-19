<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelCarro;

class CarroController extends Controller
{
    private $objCarro;
    public function __Construct()
    {
        $this->objCarro = new ModelCarro();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     
        $carros = $this->objCarro->all();
        return view ('index', compact('carros'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carros = $this->objCarro->all();
        return view ('cadastro',compact('carros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad=$this->objCarro->create([
            'marca'=>$request->marca,
            'modelo'=>$request->modelo,
            'ano'=>$request->ano,
            'km'=>$request->km,
            'price'=>$request->price

         ]);
         if($cad){
             return redirect('carros');
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $carros = $this->objCarro->find($id);
        return view ('visualizar',compact('carros'));

        
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
