<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Technology index!</h1>

    <a href="{{route('project.index')}}">HOME</a>
    <br>
    <br>
    <a href="{{route('technology.create')}}">Create a new project!</a>

<ul>
    @forelse ($technologies as $technology)
        <li><a href="{{route('technology.show', $technology->id)}}">Title = {{$technology->name}}</a> | 
            <a href="{{route('technology.edit', $technology->id)}}">EDIT</a> | 
            <p>File URL = {{$technology->file_url}}</p>
            <p>Image</p>
            <li><img src="{{asset('storage/images/technologies/'.$technology->file_url)}}" alt="image" width="128" ></li>
            

            <form action="{{route('technology.destroy', $technology->id)}}"  method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value='DELETE'/>
            </form>
           
        </li>
    @empty
        <p>No data to show!</p>
    @endforelse
</ul>    
</body>
</html>