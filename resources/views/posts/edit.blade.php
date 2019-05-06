@extends('layouts.app')
@section('content')
        <div class="container">
            <h1>Edit Blog</h1>
            {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Write a title.'])}}
                </div>
                <div class="form-group">
                    {{Form::label('body', 'Body')}}
                    {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Write into body.'])}}
                </div>
                <div class="form-group">
                    {{Form::file('cover_image')}}
                </div>
                {{Form::hidden('_method', 'PUT')}}
                {{Form::submit('Update', ['class' => 'btn btn-outline-success'])}}
            {!! Form::close() !!}
        </div>
@endsection