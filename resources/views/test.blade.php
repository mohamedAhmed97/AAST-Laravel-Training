@extends('admin.index')
@section('title')
    fruits
@endsection
@section('content')
<h2>fruits</h2>
<ul>
    @foreach ($fruits as $fruit)
        <li>{{$fruit['name']}} - {{$fruit['price']}} EGP</li>
    @endforeach
</ul>     
@endsection