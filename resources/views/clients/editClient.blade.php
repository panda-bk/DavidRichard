
@extends('home')
    <h1>Edit</h1>
    {!! Form::model($clients, ['route' => ['client.update', $id], 'method' => 'PUT']) !!} 
    @include('clients.formClient')
    {!! Form::close() !!} {{-- Fechar formulário --}}