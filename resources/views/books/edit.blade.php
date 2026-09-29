@extends('layouts.app')

@section('content')
    <h2>Edit Book Review</h2>
        <form method="POST" action="/books/{{ $book->id }}/update">
            @csrf
            <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ $book->title }}" required>
            </div>
            <div class="form-group">
            <label for="author">Author:</label>
            <input type="text" name="author" id="author" value="{{ $book->author }}" required>
            </div>
            <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" required>{{ $book->description }} </textarea>
            </div>
            <div class="form-group">
            <label for="rating">Rating (1-5):</label>
            <input type="number" name="rating" id="rating" min="1" max="5" value="{{ $book->rating }}" required>
            </div>
            <button type="submit">Update Book</button>
        </form> 
@endsection
