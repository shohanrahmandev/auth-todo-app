@extends('layouts.app')

@section('title')
Create Todo
@endsection

@section('content')

<form action="store-data" method="post" class="mt-4 p-4">
    <div class="form-group m-3">
        <label for="name"> Name</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group m-3">
        <label for="email"> Email</label>
        <input type="email" class="form-control" name="email">
    </div>
    <div class="form-group m-3">
        <label for="password"> Password</label>
        <input type="password" class="form-control" name="password">
    </div>
    <div class="form-group m-3">
        <input type="submit" class="btn btn-primary float-end" value="Submit">
    </div>
</form>

@endsection
