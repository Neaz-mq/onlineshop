@extends('backend.master')

@section('content')

<h1>Product under category-</h1>



<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($category->products as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->price}}</td>
      
    </tr>
    @endforeach
  </tbody>
</table>




@endsection