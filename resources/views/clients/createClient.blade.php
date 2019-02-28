
@section('content')
{!! Form::open(['url' => '/client', 'method' => 'POST']) !!} 
<h1>Create</h1>
@include('clients.formClient')
{!! Form::close() !!} {{-- Fechar formulário --}}