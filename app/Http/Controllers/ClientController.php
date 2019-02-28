<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = \App\Client::all();
        return view('clients.clientList', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('clients.createClient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$this->_validade($request);        
        $clients = new \App\Client;
        $clients->name=$request->get('name');
        $clients->date_birth=$request->get('date_birth');
        $clients->sex=$request->get('sex');
        $clients->cep=$request->get('cep');
        $clients->address=$request->get('address');
        $clients->number=$request->get('number');
        $clients->complement=$request->get('complement');
        $clients->district=$request->get('district');
        $clients->state=$request->get('state');
        $clients->city=$request->get('city');
        $clients->save();
        return redirect('/client');
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
        $clients= \App\Client::find($id);
        return view('clients.editClient', compact('clients','id'));
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
        $clients= \App\Client::find($id);
        $clients->name=$request->get('name');
        $clients->date_birth=$request->get('date_birth');
        $clients->sex=$request->get('sex');
        $clients->cep=$request->get('cep');
        $clients->address=$request->get('address');
        $clients->number=$request->get('number');
        $clients->complement=$request->get('complement');
        $clients->district=$request->get('district');
        $clients->state=$request->get('state');
        $clients->city=$request->get('city');
        $clients->save();
        return redirect('/client');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clients= \App\Client::find($id);
        $clients->delete();
        return redirect('/client');
    }
}
