@extends('dashboard.home')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-6">

                
                    <h2>{{ $post->title }}</h2>
                    <h5>{{ $post->author }}</h5>
                    
                    <p>By. <a href="/?user={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> 
                        in <a href="/?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                    
                        {{-- pengecekan gambar kosong atau ada --}}
                        @if ($post->image)
                        <div style="max-height: 400px; overflow:hidden;">

                            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->category->name }}">
                        </div>
                        @else

                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                        @endif

                    <article class="my-3">
                        {!! $post->body !!}
                    </article>
                    
                    <a href="/" class"d-block mt-3">Back to Posts</a>

            </div>
        </div>
    </div>


@endsection 