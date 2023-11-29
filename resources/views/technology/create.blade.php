<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Technology create!</h1>

    <a href="{{route('technology.index')}}">Home</a>
<br>
<br>
    <form method="POST" action="{{route('technology.store')}}" enctype="multipart/form-data"> 
        @csrf
        <label>Name: </label>
        <input type="text" name='name'/>
        <br>
        @error('name')
            <p style='color:red'>{{$message}}</p>
        @enderror
        <br>
        <br>
        <label>Image: </label>
        <input type="file" name="file" placeholder="File">
        <br>
        @error('file')
            <p style='color:red'>{{$message}}</p>
        @enderror
        <br>
        <br>
        <input type="submit" value="Create"/>
    </form>

</body>
</html>