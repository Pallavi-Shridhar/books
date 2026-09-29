@extends('layouts.app')

@section('content')
    <h2>Create a new book</h2>
        <form method="POST" action="/books/store">
            @csrf
            <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" required>
            </div>
            <div class="form-group">
            <label for="author">Author:</label>
            <input type="text" name="author" id="author" required>
            </div>
            <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" required></textarea>
            </div>
            <div class="form-group">
            <label for="rating">Rating (1-5):</label>
            <input type="number" name="rating" id="rating" min="1" max="5" required>
            </div>
            <button type="submit">Add Book</button>
        </form> 
@endsection
