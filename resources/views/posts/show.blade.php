@extends('layouts.app')
@section('content')

<a href="/FirstApp/public/posts/ " class="btn btn-primary">Back</a>
  <h1>{{$data->title}}</h1>
 <div>
     {{$data->body}}
 </div>
 <small class="float-right" >Written on {{$data-> created_at}}</small>


{{-- @if(count($data)>1)
    @foreach ($data as $posts)
        <div class="card">
        <div class="card-body">
        <h4 class="card-title"><a href="/FirstApp/public/posts/{{$posts->id}}">{{$posts->title}}</a></h4>
        <p class="card-text">{{$posts -> body}}</p> --}}
        {{-- <small class="ml-auto" >Written on {{$posts->created_at}}</small>
        </div>
        </div> --}}
    {{-- @endforeach --}}

{{-- @else
 <p>No posts Found</p>
 @endif --}}

<hr>
<a class="btn btn-info" href="{{$data->id}}/edit">Edit Post</a>

{!! Form::open(['action' => ['PostsController@destroy',$data->id], 'method'=>'post','class'=>'float-right']) !!}
    @method('delete')
    {!! Form::submit('Delete Post', ['class'=>'btn btn-danger ','onclick'=>"alert('You are going to delete this post!')"]) !!}
{!! Form::close() !!}


@endsection
