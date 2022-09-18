@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row my-4">
        <div class="col-lg-12">
            <h3>Post Index</h3>
        </div>
    </div>

    <div class="row my-4">
        <div class="col-lg-12">
            <a href="{{ route('post.create') }}" class="btn btn-primary btn-rounded">Create Post</a>
        </div>
    </div>

    <div class="row col-lg-12">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <div class="row">
        <div class="col-lg-6">
            <table class="table">
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td>
                            <form action="{{ url("/post/$post->id/delete") }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{ url("/post/$post->id/edit") }}" class="btn btn-warning">Edit</a>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
