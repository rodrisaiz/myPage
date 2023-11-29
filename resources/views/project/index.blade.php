<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Project index!</h1>

    <a href="{{route('project.create')}}">Create a new project!</a>

<ul>
    @forelse ($projects as $project)
        <li><a href="{{route('project.show', $project->id)}}">Title = {{$project->title}}</a> | 
            <a href="{{route('project.edit', $project->id)}}">EDIT</a> | 
            <p>Description = {{$project->description}}</p>
            <p>Web = {{$project->web}}</p>
            <p>Technology id = {{$project->technology_id}}</p>
            <p>Technology name:</p>
            
            @foreach($project->technologies as $technology)
            <li>{{$technology->name}} 
            <br>
            <br>
            <img src="{{asset('storage/images/technologies/'.$technology->file_url)}}" alt="image" width="128" ></li>  
            <br>
            <br>
            @endforeach




            <p>File URL = {{$project->file_url}}</p>
            <p>Image</p>
            <li><img src="{{asset('storage/images/projects/'.$project->file_url)}}" alt="image" width="128" ></li>
            

            <form action="{{route('project.destroy', $project->id)}}"  method="POST">
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