

@extends('layout.master')

@section('content')

<!--create  new post-->
<a href="/posts/create" class="btn btn-danger">Add </a>

 <!--table-->
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Author</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
   @foreach ($posts as $post)
    <tr>
      <th scope="row">{{$post->title}}</th>
      <td>{{$post->description}}</td>
      <td>{{$post->user->name}}</td>
      
      <td>
      <a href="/posts/{{$post->id}}" class="btn btn-info">View </a>
      <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit </a>
      <form action="posts/{{$post->id}}" method="post">
      
      {{csrf_field()}}
      {{method_field('DELETE')}}
       <input type="submit" value="delete " class="btn btn-danger">
       </form>
      
      
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>


@endsection