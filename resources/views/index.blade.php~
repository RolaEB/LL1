

@extends('layout.master')

@section('content')
<!--Nav bar-->
 <!-- A grey horizontal navbar that becomes vertical on small screens -->
 <nav class="navbar navbar-expand-sm bg-light">

<!-- Links -->
<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="#">Link 1</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link 2</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link 3</a>
  </li>
</ul>

</nav> 
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
      <a href="/posts/{post}/edit" class="btn btn-primary">Edit </a>
      <form action="posts/{post}" method="post">
      
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="_method" value="DESTROY" />
       <input type="submit" value="delete " class="btn btn-danger">
       </form>
      
      
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>


@endsection