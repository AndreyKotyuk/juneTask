@extends('app')

@section('content')
    <h1>Write a new Letter</h1>
    <hr/>
    {!! Form::open(['url'=>'letters']) !!} {{--post запрос--}}
    {{csrf_field()}}
    @include('letters._form',['submitButtonName'=>'Send letter'])
    {!! Form::close() !!}

    @include('errors.list')
@stop