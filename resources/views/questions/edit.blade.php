<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add question</title>
</head>
<body>
    @extends('layouts.layout')
    @section('content')
    @if (count($errors) > 0)
    <div>
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
        @endforeach
    </div>
    @endif
<div class="container ">
    
    <form action="{{route('question.save',['id'=>$question->id])}}" method="post" class="w-100 d-flex flex-column justify-content-center">
        @method('PUT')
        @csrf
        <label for="title">Question title:</label>
        <input type="text" name="title" value="{{old('title',$question->title)}}">
        <br><br>
        <label for="text">Your question:</label><br>
        <textarea type="text" name="text" col="20" rows="10" >{{old('text', $question->text)}}</textarea>
        <br><br>
        <button class="btn btn-primary">Submit</button>
    </form>
</div>
    @endsection
</body>
</html>