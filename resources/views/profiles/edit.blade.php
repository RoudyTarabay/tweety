@extends('layouts.app')
@section('content')

<form action="{{$user->path()}}" method="POST" enctype="multipart/form-data">
@csrf
@method('PATCH')
<div class="form-group">
  <label for="name">Name</label>
  <input  value="{{$user->name}}" type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
    @error('name')
        <p>{{$message}}</p>
    @enderror
</div>

<div class="form-group">
  <label for="username">Username</label>
  <input value="{{$user->username}}"  type="text" name="username" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
    @error('username')
        <p>{{$message}}</p>
    @enderror
</div>
<div class="form-group">
  <label for="avatar">Avatar</label>
  <input type="file" class="form-control-file" name="avatar" id="" placeholder="" aria-describedby="fileHelpId">
  <small id="fileHelpId" class="form-text text-muted">Help text</small>
</div>
<div class="form-group">
  <label for="email">Email</label>
  <input value="{{$user->email}}"  type="text" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
    @error('email')
        <p>{{$message}}</p>
    @enderror
</div>

<div class="form-group">
  <label for="password">Password</label>
  <input   type="text" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId" >
    @error('password')
        <p>{{$message}}</p>
    @enderror
</div>

<div class="form-group">
  <label for="password_confirmation">Password Confirmation</label>
  <input   type="text" name="password_confirmation" id="" class="form-control" placeholder="" aria-describedby="helpId" >
    @error('password_confirmation')
        <p>{{$message}}</p>
    @enderror
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
