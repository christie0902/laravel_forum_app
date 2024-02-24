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
        @endforeach
        </div>
    </section>
    <div class="container d-flex justify-content-end">
        <div class="btn btn-primary mt-2">
            <a href="{{route('questions.add')}}" style="color: white;" >Ask a question</a>
        </div>
    </div>
    @endsection
</body>
</html>

