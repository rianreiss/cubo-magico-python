<!-- resources/views/posts/create.blade.php -->

@extends('welcome') <!-- Se você estiver usando o layout padrão do Laravel -->

@section('content')
    <div class="container">
        <h2>Create Post</h2>

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="content">Content:</label>
                <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
