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
                    <a href="/posts/create" class="btn btn-outline-primary" role="button">Create Blog</a>
                    @if (count($posts) > 0)
                        <h3 style="padding-top:7px;">Your posted blogs:</h3>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Title</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                @foreach ($posts as $post)
                                    <tbody>
                                    <tr>
                                    <td scope="row">{{$post->title}}</td>
                                    <td>
                                        <a class="btn btn-outline-primary btn-sm" href="/posts/{{$post->id}}/edit" role="button">Edit</a>
                                        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-outline-danger btn-sm'])}}
                                        {!! Form::close() !!}
                                    </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>
                    @else
                        <h4 style="padding-top:7px;">You don't post any blog yet!</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
