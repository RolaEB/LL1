@extends('layouts.app')

@section('content')
<h1>Update Post</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
 <form method="post" action="/posts/{{$post}}">
{{csrf_field()}}
{{method_field('PUT')}}
Title :- <input type="text" name="title">
<br><br>
Description :- 
<textarea name="description"></textarea>
<br>
<br>
Post Creator
<select class="form-control" name="user_id">
@foreach ($users as $user)
    <option value="{{$user->id}}">{{$user->name}}</option>
@endforeach

</select>
<br>
<input type="submit" value="Submit" class="btn btn-primary">
</form>


@endsection