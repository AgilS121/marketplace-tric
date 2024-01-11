
@extends('dashboard.home')

@section('container')

<h1 class="text-center">{{ $title }}</h1>

{{-- fitur pencarian --}}
{{-- <div class="row justify-content-center">
    <div class="col-md-6">
        <form action="/blog" method="GET"> --}}
            {{-- query filter --}}
            {{-- @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif

            @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
                <input type="search" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                <button class="btn btn-danger" type="submit">Search</button>
              </div>
        </form>
    </div>
</div> --}}

@if ($posts->count())
<div class="card mb-3">
    {{-- pengecekan gambar kosong atau ada --}}
    @if ($posts[0]->image)
    <div style="max-height: 300px; overflow:hidden;">

        <img src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
    </div>
    @else
        <img src="https://source.unsplash.com/800x250?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
    @endif
    <div class="card-body text-center">
      <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
      <p>
        <small>
            By. <a href="/?user={{ $posts[0]->user->username }}" class="text-decoration-none">{{ $posts[0]->user->name }}</a> 
            {{-- Query filter blog?category= --}}
            in <a href="/?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a>
            {{ $posts[0]->created_at->diffForHumans() }}
    
        </small>
      </p>
      
      <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
    </div> 
   
    

<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
            
        
        <div class="col-md-4">
            <div class="card">
                {{-- Menambah link kategori --}}
                <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.5)">
                    {{-- Query filter blog?category= --}}
                    <a href="/?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a>
                </div>

                {{-- pengecekan gambar kosong atau ada --}}
                @if ($post->image)

                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->category->name }}">
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                @endif
               <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p>
                    <small>
                        By. <a href="/?user={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a>
                        {{ $post->created_at->diffForHumans() }}
                
                      </small>
                  </p>
                  <p class="card-text">{{ $post->excerpt }}</p>
                  <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>


{{-- @foreach ($posts->skip(1) as $post)
    
<article class="mb-5 border-bottom pb-4">
    <h2>
        <a href="/posts/{{ $post->slug }}"class="text-decoration-none">{{ $post->title }}</a>
    </h2>
    <p>By. <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

    <h5>{{ $post->author }}</h5>
    <p>
        {{ $post->excerpt }}
    </p>

    <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more..</a>
</article>
@endforeach --}}

@else
    <p class="text-center fs-4">No Post Found</p>   
    @endif

    {{-- link pagination --}}
    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>
     

@endsection
    
