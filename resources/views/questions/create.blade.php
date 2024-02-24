<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add question</title>
</head>
<body>
    @if (count($errors) > 0)
    <div>
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif

    <form action="{{route('questions.create')}}" method="post">
        @csrf
        <label for="title">Question title:</label>
        <input type="text" name="title" value={{old('title')}}>
    <br><br>
        <label for="text">Your question:</label>
        <input type="text" name="text" value={{old('text')}}>
    <br><br>
        <button>Submit</button>
    </form>

</body>
</html>