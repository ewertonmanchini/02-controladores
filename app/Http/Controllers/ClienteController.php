<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //array de cliente so para ter dados de pesquisa
    private $clientes = [
        ['id' => 10 ,'name' =>'Adam'],
        ['id' => 20 ,'name' =>'Jony'],
        ['id' => 30 ,'name' =>'Marco'],
        ['id' => 40 ,'name' =>'Pamela']
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = session('clientes', $this->clientes);
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = session('clientes', $this->clientes); //leitura da sessao
        $ultimo = end($clientes);
        $id = ($ultimo) ? ($ultimo['id'] + 10) : 10;//pega o ultimo e soma 10 caso nao exista ultimo cria o 10
        $name = $request->name;
        $clientes[]=['id'=>$id, 'name'=>$name];
        session(['clientes'=> $clientes]); //grava array clientes ja com o novo
        return redirect()->route('clientes.index');//apos salvar rediciona para index
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
