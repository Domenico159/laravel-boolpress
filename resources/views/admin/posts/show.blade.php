@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="box-img">
            <img src="{{ $post->img }}" alt="{{ $post->title }}">
        </div>
        <div class="text-img">
            <h1>Your post selected is : {{ $post->title }}</h1>
            <h2>{{ $post->content }}</h2>

            <a class="btn btn-success mt-5 mr-5" href="{{ route('admin.posts.index') }}">Back</a>
            <a class="btn btn-warning mt-5 mr-5" href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>
            <a class="btn btn-danger mt-5 mr-5" href="{{ route('admin.posts.destroy', $post->id) }}">Delete</a>
        </div>
    </div>

@endsection
