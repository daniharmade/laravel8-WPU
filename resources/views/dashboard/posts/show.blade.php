@extends('dashboard.layouts.main')

@section('container')
    <div class="container" style="margin-top:-11%">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8">
                <h2>{{ $post->title }}</h2>
                <a href="/dashboard/posts" class="btn btn-success mt-2"><i class="bi bi-arrow-left-circle"> </i> Back To All My
                    Posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning mt-2"> <i
                        class="bi bi-pencil-square"></i> Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger mt-2" onclick="return confirm('Are You Sure?')"><i
                            class="bi bi-trash"></i>
                        Delete</button>
                </form>
                <img src="https://picsum.photos/1200/400?{{ $post->category->name }}" alt="{{ $post->category->name }}"
                    class="img-fluid mt-3">

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                <a href="/dashboard/posts" class="d-block mt-3 ">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection
