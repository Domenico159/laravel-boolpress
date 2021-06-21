@extends('layouts.app')


@section('content')

    <div class="container">
        <h1>Your posts</h1>

        @if (session('deleted'))
            <div class="alert alert-success">
                <strong>{{ session('deleted') }}</strong>
                Succesfully deleted item.
            </div>
        @endif

        <div class="row">
            @foreach ($posts as $post)
                <div class="card-deck m-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ $post['img'] }}" alt="{{ $post['title'] }}">
                        <div class="card-body">
                            <h3 class="card-title">{{ $post['title'] }}</h3>
                            <p class="card-text">{{ $post['content'] }}</p>
                            <div class="actions d-flex justify-content-between">
                                <a href="{{ route('admin.posts.show', $post['id']) }}" class="btn btn-primary">SHOW</a>
                                <a href="{{ route('admin.posts.edit', $post['id']) }}"
                                    class="btn btn-success text-center"><i class="far fa-edit"></i></a>
                            </div>
                            <div class="delete">
                                <form action="{{ route('admin.posts.destroy', $post['id']) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

@endsection
