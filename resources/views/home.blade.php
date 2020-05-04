@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  Welcome To Our Blog System!

                </div>
                <a class="btn btn-warning text-white"  href="/FirstApp/public/posts/create" >Create Post</a>
            </div>
            <br>
            @if(count($posts)>0)
            @foreach ($posts as $post)
                <div class="card">
                <div class="card-body">
                <h4 class="card-title"><a href="/FirstApp/public/posts/{{$post->id}}">{{$post->title}}</a></h4>
                {{-- <p class="card-text">{{$posts -> body}}</p> --}}
                <small class="ml-auto" >Written on {{$post->created_at}}</small>
                </div>
                </div>
            @endforeach

        @else
         <p>No posts Found</p>
         @endif

        </div>
    </div>
</div>
@endsection
