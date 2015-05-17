@extends('index') 

@section('main')
<div class="col-md-12">
    {{ Form::open(array('route'=>'category.store','role'=>'form')) }}
    <div class="form-group">
        {{ Form::label('name',name) }} 
        {{ Form::text('name','',array('class'=>'form-control text-right','placeholder'=>Lang::get('main.email'))) }}
    </div>
    <div class="form-group">
        {{ Form::label('description',description) }} 
        {{ Form::text('description','',array('class'=>'form-control text-right','placeholder'=>Lang::get('main.email'))) }}
    </div>
    <div>
        <div class="btn btn-group">
            {{ Form::submit('add',array('class'=>'btn btn-success') }}
        </div>
    </div>
    {{ Form::close() }}
@stop
