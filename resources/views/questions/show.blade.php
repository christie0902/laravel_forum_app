<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show answers</title>

</head>
<body>
    @extends('layouts.layout')
    
@section('content')
    <section id="banner">
        <div class="container">
            <h1>Question</h1>
        </div>
    </section>
    <section id="question">
        <div class="container"> 
            <div class="question-left">
                <h2>{{$question1->title}}</h2>
                <p>{{$question1->text}}</p>
            </div>
            <div class="question-right">
                <div class="user-avatar">
                    <img class="user-avatar" src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/user-male-icon.png"/>
                </div>
                <div class="user-name">by <a href="">slavo</a></div>
            </div>
        </div>
    </section>
    
    <section id="answers">
        <div class="container">
            <h2>{{count($answers)}} Answers</h2>
            
        @foreach($answers as $answer)
            <div class="answer">
                <div class="answer-right">
                    <p>{{$answer->text}}</p>
                </div>
                <div class="answer-left">
                    <div class="user-avatar">
                        <img class="img-fluid" src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/user-male-icon.png"/>
                    </div>
                    <div class="user-name">by <a href="">slavo</a></div>
                </div>
            </div>
        @endforeach
        </div>
    </section>
@endsection
</body>
</html>



