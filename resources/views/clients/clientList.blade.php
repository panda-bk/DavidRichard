
@extends('adminlte::page')

@section('title', 'David Richard')

@section('content')
<div class="row">
<a href="client/create">Cadastro</a>
<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Data de nascimento</th>
        <th>Sexo</th>
        <th>Action</th>
      </tr>
    </thead>
    </tr>
    @foreach($clients as $client)
    <tr>
        <th>{{$client['id']}}</th>
        <th>{{$client['name']}}</th>
        <th>{{$client['date_birth']}}</th>
        <th>{{$client['sex']}}</th>
        <td><a href="{{action('ClientController@edit', $client['id'])}}" class="btn btn- btn-primary btn-sm">Editar 
    <i class="fa fa-edit"></i></a></td>
    <td>
    <form action="{{action('ClientController@destroy', $client['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn- btn-danger btn-sm" type="submit">Delete</button>
        </form>
        @endforeach 
    </td>
    </tr>
    </div>
@stop
@section('content')
@stop
