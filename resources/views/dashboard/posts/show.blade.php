@extends('dashboard.layout.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h3 class="mb-3">{{ $post->title }}</h3>
            <a href="/dashboard/posts" class="btn text-white"><span data-feather="arrow-left"></span> Back to my post</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn " style="background-color: rgb(255 193 7);"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn text-white" style="background-color: rgb(220 53 69);" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
              </form>
            @if ($post->image)
            <div style="max-height: 100%; overflow: hidden;">
            <img style="width: 100%" class="mt-3" src="{{ asset('storage/' . $post->image) }}" alt="" srcset=""> 
            </div>
            @else
            <img class="mt-3" src="https://source.unsplash.com/700x400?{{ $post->category->name }}" alt="" srcset="">  
            @endif
            
            <article class="py-3">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>
@endsection