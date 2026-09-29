@extends('layouts.app')

@section('content')
    <h2>Book Reviews</h2>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Author</th>
                <th>Rating</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->description }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->rating }}</td>
                    <td>
                    <a href="/books/{{$book->id}}" class="btn btn-primary">View</a>
                    {{-- <a href="/books/{{$book->id}}/edit" class="btn btn-secondary">Edit</a>   --}}
                    <a href="/books/{{$book->id}}/delete" class="btn btn-danger">Delete</a>  
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>   
    <button type="add" onclick="window.location.href='/books/create'">Add Book Review</button>     
@endsection