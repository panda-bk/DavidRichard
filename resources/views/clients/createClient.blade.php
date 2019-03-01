
@extends('adminlte::page')
@section('title', 'David Richard')
@section('content')

{!! Form::open(['url' => '/client', 'method' => 'POST']) !!} 
<h1>Cadastro</h1>
@include('clients.formClient')
{!! Form::close() !!} {{-- Fechar formulário --}}

@stop
@section('content')
@stop
