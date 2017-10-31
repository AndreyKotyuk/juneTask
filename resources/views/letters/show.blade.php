@extends('app')
@section('content')
    <h1>{{$letter->created_at}}</h1>
    <article>

        {!! $letter->userName!!}
    </article>
    <article>
        {!! $letter->HomePage!!}
    </article>
    <article>
        {!! $letter->text!!}
    </article>
@stop