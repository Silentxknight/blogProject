@extends('layouts.app')
@section('content')
<br>
<a class="btn btn-warning text-white"  href="/FirstApp/public/posts/create" >Create Post</a>
<br>
<div class="" >{{session()->get('msg')}}</div>
<br>
@if(count($data)>0)
    @foreach ($data as $posts)
        <div class="card">
        <div class="card-body">
        <h4 class="card-title"><a href="/FirstApp/public/posts/{{$posts->id}}">{{$posts->title}}</a></h4>
        {{-- <p class="card-text">{{$posts -> body}}</p> --}}
        <small class="ml-auto" >Written on {{$posts->created_at}}</small>
        </div>
        </div>
    @endforeach

@else
 <p>No posts Found</p>
 @endif

@endsection
