@extends('layout.app')

@section('content')
    
    <h2>Catégories de produits</h2>
    {!! Form::open(['route' => 'admin.category.create', 'id'=>'form-create-product']) !!}
        {{ Form::text('name') }}
        {{ Form::hidden('category_type', 'product') }}
        {{ Form::submit('Ajouter') }}
    {!! Form::close() !!}

    <h2>Catégories de services traiteur</h2>
    {!! Form::open(['route' => 'admin.category.create', 'id'=>'form-create-product']) !!}
        {{ Form::text('name') }}
        {{ Form::hidden('category_type', 'service')}}
        {{ Form::submit('Ajouter') }}
    {!! Form::close() !!}
@endsection