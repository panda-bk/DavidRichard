<?php 
namespace App\Repositories;

use App\Client;

class ClientRepository implements ClientInterface {
    public function all()
    {
        return Client::all();
    }
    public function find($id)
    {
    return Client::find($id);
    }
    public function store($request)
    {
        $clients = new Client;
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
    }
    public function update($request, $id)
    {
        $clients= Client::find($id);
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
    }
    public function destroy($id)
    {
        $clients= Client::find($id);
        $clients->delete();
    }

}