<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Project create!</h1>

    <a href="{{route('project.index')}}">Home</a>
<br>
<br>
    <form method="POST" action="{{route('project.store')}}" enctype="multipart/form-data"> 
        @csrf
        <label>Title: </label>
        <input type="text" name='title'/>
        <br>
        @error('title')
            <p style='color:red'>{{$message}}</p>
        @enderror
        <br>
        <br>
        <label>Description: </label>
        <input type="text" name='description'/>
        <br>
        @error('description')
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
        <label>web: </label>
        <input type="text" name='web'/>
        <br>
        @error('web')
            <p style='color:red'>{{$message}}</p>
        @enderror
        <br>
        <br>
        <label for="technology_id">Tecnology:</label>

        <select name="technology_id" id="technology_id">
        <option value="">--Please choose an option--</option>

        @foreach($technologies as $technology)
        <option value={{$technology->id}}>{{$technology->name}}</option>    
        @endforeach
        </select>
        <br>
        @error('technology_id')
            <p style='color:red'>{{$message}}</p>
        @enderror
        <br>
        <br>
        <input type="submit" value="Create"/>
    </form>

</body>
</html>