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
            <div class="card">
                <div class="card-header" style="text-align: center;">
                  Contents
                </div>
                <div class="card-body">
                 <div>
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->description}}</p>
                 </div><hr>
                 <a href="/posts" class="btn btn-secondary">Back</a>
                </div>
              </div>
        </div>
    @endsection
</body>
</html>
