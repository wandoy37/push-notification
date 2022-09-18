@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row my-4">
        <div class="col-lg-12">
            <h3>Post Edit</h3>
        </div>
    </div>

    <div class="row my-4">
        <div class="col-lg-12">
            <a href="{{ route('post.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>

    <div class="row my-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url("/post/$post->id/update") }}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $post->title }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Content</label>
                            <textarea class="form-control" rows="3" name="content" required>{{ $post->content }}</textarea>
                        </div>
                        <div class="mb-3 float-end">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
