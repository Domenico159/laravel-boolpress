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

        <table class="table mt-5">
            <thead>
               <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Create</th>
                <th colspan="3" >Actions</th>
               </tr>
            </thead>

            <tbody>
                @foreach ($posts as $post )
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>

                        <td>
                            <div>{{ $post->created_at->format('l d/m/y') }}</div>
                            <div>{{ $post->created_at->diffForHumans() }}</div>
                        </td>

                        <td>
                            <a class="btn btn-success" href="{{ route('admin.posts.show' , $post->id) }}">Show</a>
                        </td>


                        <td>
                            <a class="btn btn-warning" href="{{ route('admin.posts.edit', $post->id) }}"><i
                                class="far fa-edit"></i></a>
                        </td>

                        <td>
                            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">
                                    <i class="far fa-trash-alt "></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>

    </div>

@endsection
