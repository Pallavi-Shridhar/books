@extends('layouts.app')

@section('content')
    <div class="card">
        <img src="https://img.magnific.com/free-vector/book-floating-cartoon-vector-icon-illustration-education-object-icon-isolated-flat-vector_138676-13661.jpg?semt=ais_hybrid&w=740&q=80" alt="Book Cover" style="width:100%">
        <div class="container">
            <h4><b>{{ $book->title }}</b></h4>
            <p>{{ $book->description }}</p>
            <p><strong>Author:</strong> {{ $book->author }}</p>
            <p><strong>Rating:</strong> {{ $book->rating }}</p>
            <a href="/books/{{$book->id}}/edit" class="btn btn-primary">Edit</a>
            <a href="/" class="btn btn-primary">Back</a>
        </div>
    </div>
@endsection