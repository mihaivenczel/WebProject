@extends('components.main')

@section('title', '| Create New Post')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>

            {!! Form::open(['route' => 'posts.store']) !!}
            {{ Form::label('title', 'Title: ') }}
            {{ Form::text('title', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '255']) }}

            {{ Form::label('slug', 'Slug:') }}
            {{ Form::text('slug', null, ['class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255']) }}

            {{ Form::label('body', 'Post body: ') }}
            {{ Form::textarea('body', null, ['class' => 'form-control', 'required' => '']) }}

            {{ Form::submit('Create Post', ['class' => 'btn btn-success btn-lg', 'style' => 'margin-top:20px;']) }}
            {!! Form::close() !!}

        </div>
    </div>

@endsection
