<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelCarro;

class CarroController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     
        $carros = ModelCarro::all();
        return view ('index', compact('carros'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carros = ModelCarro::all();
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

        $this->validate($request,[
            'marca' => 'required',
            'modelo' => 'required',
            'ano' => 'required',
            'km' => 'required',
            'price' => 'required',
            'image' => 'required'
        ]);
           
        $CarroObj = new ModelCarro;
        $CarroObj->marca = $request->marca;
        $CarroObj->modelo = $request->modelo;
        $CarroObj->ano = $request->ano;
        $CarroObj->km = $request->km;
        $CarroObj->price = $request->price;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = $extension;
            $file->move('upload/carros/', $filename);
            $CarroObj->image = $filename;
        }else{
            return $request;
            $CarroObj->image = '';

        }
        $CarroObj->save();
        return view(route('store'))->with('successMsg','Cadastro realizado com sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $carros = modelCarro::find($id);
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
        $carros = ModelCarro::find($id);
        return view ('editar', compact('carros'));
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
        $this->validate($request,[
            'marca' => 'required',
            'modelo' => 'required',
            'ano' => 'required',
            'km' => 'required',
            'price' => 'required',
            'image' => 'required'

        ]);
           
        $CarroObj = ModelCarro::find($id);
        $CarroObj->marca = $request->marca;
        $CarroObj->modelo = $request->modelo;
        $CarroObj->ano = $request->ano;
        $CarroObj->km = $request->km;
        $CarroObj->price = $request->price;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = $extension;
            $file->move('upload/carros/', $filename);
            $CarroObj->image = $filename;
        }else{
            return $request;
            $CarroObj->image = '';

        }
        $CarroObj->save();
        return redirect (route('update',$CarroObj->id))->with('successMsg','Cadastro foi atualizado com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carros = ModelCarro::find($id)->delete();
        return redirect(route ('home'))->with('successMsg','Cadastro Deletado com Sucesso');

    }

    public function cadastroImagem(Request $request)
    {
        return view('imagem');
    
    }
}
