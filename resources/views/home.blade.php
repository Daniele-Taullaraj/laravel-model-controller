@extends('layouts.app')

@section('content')

@foreach ($movies as $item)
    <p>{{$item}}</h1>
@endforeach

@endsection
