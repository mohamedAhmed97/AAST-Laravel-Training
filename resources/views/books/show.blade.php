@extends('admin.index')
@section('title')
    create books
@endsection

@section('content')
<div class="card">
    <div class="card-header">
      {{$book->name}}
    </div>
    <div class="card-body">
      <h5 class="card-title">Desc</h5>
      <p class="card-text">{{$book->description}}</p>
      <a href="#" class="btn btn-primary">Buy</a>
    </div>
  </div>
@endsection
