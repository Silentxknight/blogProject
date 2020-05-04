@extends('layouts.app')
@section('content')

<h1>Edit</h1>

    {!! Form::open(['action' => ['PostsController@update',$data->id],'method' => 'post']) !!}
    @method('put')
 {{-- this can be done with action too! --}}
    {{-- {!! Form::open(['action' => 'PostsController@store','method' => 'POST']) !!} --}}

    <div class="form-group">
    {{  Form::label('title', 'Title')}}
    {!! Form::text('title', $data->title, ['class'=>'form-control','placeholder'=>'Title']) !!}
 </div>
 <div class="form-group">
    {!! Form::label('body', 'Body' ) !!}
    {!! Form::textarea('body', $data->body, ['class'=>'form-control','placeholder'=>'body']) !!}
 </div>
    {!! Form::submit('Post', ['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}


@endsection
