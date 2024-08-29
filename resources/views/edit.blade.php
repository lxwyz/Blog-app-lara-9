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
            <form action="/posts/{{$post->id}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input value="{{$post->title}}" type="text" class="form-control" id="title" name="title" placeholder="Enter Title" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea  class="form-control" id="description" name="description" cols="30" rows="10" required>{{$post->description}}</textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-secondary">Submit</button>
                <a href="/posts" class="btn btn-success">Back</a>
            </form>
        </div>
    @endsection
</body>
</html>
