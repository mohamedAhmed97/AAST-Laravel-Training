@extends('admin.index')
@section('title')
    create books
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('books.store') }}">
                @csrf
                <div class="form-group">
                    <label for="exampleNameInput">Name of Book</label>
                    <input type="text" class="form-control" id="exampleNameInput" aria-describedby="emailHelp"
                        placeholder="Enter Name" name="name" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPrice">Price</label>
                    <input type="text" class="form-control" id="exampleInputPrice" placeholder="price" name="price"
                        value="{{ old('price') }}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{ old('description') }}</textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
@endsection
