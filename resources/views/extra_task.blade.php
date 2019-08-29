@extends('layout')

@section('title')
    {{$title}}
@endsection

@section('content')
    <div id="app">
        <form action="{{route('getResult')}}" method="post">
            @csrf
            <input type="text" name="a" placeholder="a">
            <input type="text" name="b" placeholder="a">
            <button type="submit">Определить сумму</button>
        </form>
    </div>
@endsection
