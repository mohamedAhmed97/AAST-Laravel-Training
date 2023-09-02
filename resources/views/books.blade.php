@vite(['resources/sass/app.scss', 'resources/js/app.js'])


@extends('admin.index')
@section('title')
    books
@endsection

@section('content')
    <h4> book : </h4>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">price</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{ $book['name'] }}</td>
                    <td>{{ $book['price'] }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
