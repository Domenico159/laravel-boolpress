@extends('layouts.app')


@section('content')

    <h1 class="text-center">Create new post</h1>

    <main class="pt-5 container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form class="mt-3 pb-5" action="{{ route('admin.posts.store') }}" method="POST">
                    @csrf
                    @method('POST')

                    <div class="mb-3">
                        <label class="control-label" for="title">Title</label>
                        <input name="title" class="form-control" id="title" type="text">
                    </div>

                    <div class="mb-3">
                        <label class="control-label" for="content">Content</label>
                        <textarea rows="6" name="content" class="form-control" id="content"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="control-label" for="img">Url image</label>
                        <input name="img" class="form-control" id="img" type="text">
                    </div>

                    <button class="btn btn-primary" type="submit">
                        Create
                    </button>

                </form>
            </div>
        </div>

    </main>

@endsection
