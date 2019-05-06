@extends('layouts.app')
@section('content')
        <div class="container">
            <h1>Create Blog</h1>
            {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Write a title.'])}}
                </div>
                <div class="form-group">
                    {{Form::label('body', 'Body')}}
                    {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Write something into body.'])}}
                </div>
                <div class="form-group">
                    {{Form::file('cover_image')}}
                </div>
                {{Form::submit('Post', ['class' => 'btn btn-outline-success'])}}

            {!! Form::close() !!}
        </div>
@endsection