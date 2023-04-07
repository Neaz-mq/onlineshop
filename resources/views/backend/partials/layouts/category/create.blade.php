@extends('backend.master')

@section('content')

<h1>Create category</h1>

<form action="{{route('category.store')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="name">Enter Category Name</label>
    <input name="category_name" type="text" class="form-control" id="name" placeholder="Enter category name">
    
  </div>
  <div class="form-group">
    <label for="d">Description</label>
    <textarea name="description" class= "form-control" id="d" placeholder="Enter description"></textarea>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection