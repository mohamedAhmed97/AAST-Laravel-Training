@extends('admin.index')
@section('title')
    books
@endsection

@section('content')
    <h4> book : </h4>
    <a href="{{ route('books.create') }}">
        <button type="button" class="btn btn-primary">Add Book</button>
    </a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">price</th>
                <th scope="col"> Actions </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <th scope="row">{{ $book['id'] }}</th>
                    <td>{{ $book['name'] }}</td>
                    <td>{{ $book['price'] }}</td>
                    <td>
                        <a href="{{route("books.show",$book['id'])}}"> <button type="button" class="btn btn-light">View</button></a>
                        <a href="#"> <button type="button" class="btn btn-primary">Edit</button> </a>
                        <a href="#"> <button type="button" class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
