<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layout')
    @section('content')
        <div class="container">
            <div>
                <a href="/posts/create" class="btn btn-primary">New Post</a>
            </div>
            <br>
            <div class="card">
                <div class="card-header" style="text-align: center;">
                  Contents
                </div>
                <div class="card-body">
                 @foreach($data as $post )
                 <div>
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->description}}</p>
                    <a href="/posts/{{$post->id}}" class="btn btn-secondary">View</a>
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>
                    <form action="/posts/{{$post->id}}" method="POST"  style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-warning">DELETE</button>
                    </form>
                 </div><hr>
                 @endforeach
                </div>
              </div>
        </div>
    @endsection
</body>
</html>
