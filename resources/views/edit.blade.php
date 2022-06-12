@extends('layouts.app')
@section('title')
Edit Todo
@endsection
@section('content')

<form action="/update/$todos->id" method="post" class="mt-4 p-4">
    @csrf
    <div class="form-group m-3">
        <label for="name"> Name</label>
        <input type="text" class="form-control" value="{{$todos->name}}" name="name">
    </div>
    <div class="form-group m-3">
        <label for="email"> Email</label>
        <input type="email" class="form-control" value="{{$todos->email}}" name="email">
    </div>
    <div class="form-group m-3">
        <label for="password"> Password</label>
        <input type="password" class="form-control" name="password" rows="3"> {{$todos->password}}
    </div>
    <div class="form-group m-3">
        <input type="submit" class="btn btn-primary float-end" value="Submit">
    </div>
</form>

@endsection
