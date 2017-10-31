@extends('app')
@section('content')
    <h1>Articles</h1>
    <hr>
    @foreach($letters as $letter)
        <article>
            <h2>
                <a href="{{action('LettersController@show',[$letter->id])}}">
                    {{$letter->userName}}
                </a>
            </h2>
            <div class="body">{{$letter->HomePage}}</div>
            <div class="body">{{$letter->email}}</div>
            <div class="body">{{$letter->text}}</div>
            <div class="body">{{$letter->created_at}}</div>
        </article>


    @endforeach
@stop