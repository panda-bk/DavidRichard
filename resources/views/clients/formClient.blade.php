@extends('home')
<div class="row">
        <div class="form-group col-sm-6">
            {!! Form::label('name', 'Nome', array('class' => 'control-label' )) !!} 
            {!! Form::text('name', null, ['class' => 'form-control','required']) !!}
        </div>
        <div class="form-group col-sm-6">
            {!! Form::label('date_birth', 'Data de Nascimento', array('class' => 'control-label' )) !!} 
            {!! Form::date('date_birth', null, ['class' => 'form-control','required']) !!}
        </div>
        <div class="form-group col-sm-6">
            {!! Form::label('sex', 'Sexo', array('class' => 'control-label' )) !!} 
            {!! Form::text('sex', null, ['class' => 'form-control','required']) !!}
        </div>
        <div class="form-group col-sm-6">
            {!! Form::label('cep', 'CEP', array('class' => 'control-label' )) !!} 
            {!! Form::text('cep', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-10">
            {!! Form::label('address', 'Endereço', array('class' => 'control-label' )) !!} 
            {!! Form::text('address', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-2">
            {!! Form::label('number', 'Nº', array('class' => 'control-label' )) !!} 
            {!! Form::number('number', null, ['class' => 'form-control']) !!}
        </div>  
        <div class="form-group col-sm-6">
            {!! Form::label('complement', 'Complemento', array('class' => 'control-label' )) !!} 
            {!! Form::text('complement', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-6">
            {!! Form::label('district', 'Bairro', array('class' => 'control-label' )) !!} 
            {!! Form::text('district', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-6">
            {!! Form::label('state', 'Estado', array('class' => 'control-label' )) !!} 
            {!! Form::text('state', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-6">
            {!! Form::label('city', 'Cidade', array('class' => 'control-label' )) !!} 
            {!! Form::text('city', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-md-6 col-md-offset-5">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
</div>