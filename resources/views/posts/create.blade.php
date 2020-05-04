@extends('layouts.app')
@section('content')

<h1>Create</h1>

    {!! Form::open(['url' => 'posts','method' => 'POST']) !!}
 {{-- this can be done with action too! --}}
    {{-- {!! Form::open(['action' => 'PostsController@store','method' => 'POST']) !!} --}}

    <div class="form-group">
    {{  Form::label('title', 'Title')}}
    {!! Form::text('title', '', ['class'=>'form-control','placeholder'=>'Title']) !!}
 </div>
 <div class="form-group">
    {!! Form::label('body', 'Body' ) !!}
    {!! Form::textarea('body', '', ['class'=>'form-control','placeholder'=>'body']) !!}
 </div>
    {!! Form::submit('Post', ['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}


@endsection
