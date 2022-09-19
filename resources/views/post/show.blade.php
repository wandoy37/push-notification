@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row my-4">
        <div class="col-lg-12">
            <h3>Post Show</h3>
        </div>
    </div>

    <div class="row my-4">
        <div class="col-lg-12">
            <a href="{{ route('post.index') }}" class="btn btn-primary btn-rounded">Home</a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-6">
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->content }}</p>
        </div>
    </div>
</div>

@endsection
