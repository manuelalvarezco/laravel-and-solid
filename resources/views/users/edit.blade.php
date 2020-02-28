@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/users/{{$model->id}}" method="POST">
    @method('PUT')
    @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" id="name" aria-describedby="name" value="{{$model->name}}">
    </div>
    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" class="form-control" name="email" id="email" aria-describedby="email" value="{{$model->email}}">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" id="password"  placeholder="*******">
    </div>
    <div class="form-group">
      <label for="status">Status</label>
      <select class="form-control" id="status" name="status">
        <option value="1" >Active</option>
        <option value="0">Inacctive</option>
      </select>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection