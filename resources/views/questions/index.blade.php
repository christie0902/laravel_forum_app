<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Questions</title>
</head>

<body>
    @extends('layouts.layout')
    @section('content')
    <section id="banner">
        <div class="container">
            <h1>Questions</h1>
        </div>
    </section>
    <div class="container d-flex justify-content-start">
        <div class="btn btn-primary mt-4">
            <a href="{{route('questions.add')}}" style="color: white;" >Ask a question</a>
        </div>
    </div>
    @if (Session::has('success_message'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success_message') }}
      </div>
    @endif

    <section id="questions">
        <div class="container">
        @foreach($questions as $question)
            <div class="question">
                <div class="question-left">
                    <div class="question-name">
                        <a href="{{route('answers.display',['id'=>$question->id])}}">{{$question->title}}</a>
                    </div>
                    <div class="question-info">
                        {{$question->updated_at->format('F d, Y h:i A')}} by <a href="">slavo</a>
                    </div>
                </div>
                <div class="question-right">
                    <div class="question-stat">
                        <span>{{$question->answer_count}}</span>
                        <label>responses</label>
                    </div>
                </div>
            </div>
            <div class="d-flex">
             <div class="btn btn-outline-secondary btn-sm mb-4 ml-4">
            <a href="{{route('question.edit',['id'=>$question->id])}}" style="color:rgb(0, 0, 0);" >Edit</a>
        </div>
        <form action="{{route('question.delete',['id'=>$question->id])}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-outline-danger btn-sm  mb-4 ml-4" onclick="return confirm('Are you sure you want to delete?')"> DELETE</button>
        </form>   
            </div>
        
        @endforeach
        </div>
    </section>
 
    @endsection
</body>
</html>

