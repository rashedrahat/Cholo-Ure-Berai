@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="/posts" class="btn btn-outline-success btn-sm" role="button">Go back</a>
        <div style="padding-top:20px">
                        <div>
                            <img style="width:100%; height:500px;" src="/storage/cover_images/{{$post->cover_image}}">
                        </div><br/>
                        <div>
                                <h1>{{$post->title}}</h1>
                                <p>{!!$post->body!!}</p>
                                <hr/>
                                <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                        </div><br/>
            @if (!Auth::guest())
                @if (Auth::user()->id == $post->user_id)
                    <a class="btn btn-outline-primary" href="/posts/{{$post->id}}/edit" role="button">Edit</a>
                    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-outline-danger'])}}
                    {!! Form::close() !!}
                @endif
            @endif
        </div>
    </div>
@endsection