@extends('backend.master')

@section('content')
<h1>Product List</h1>

<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
Create Product
</button>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
      <th scope="col">Category Name</th>
      <th scope="col">price</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->name}}</td>
      <td>{{$product->category->name}}</td>
      <td>{{$product->price}} .BDT</td>
      
     
      <td>{{$product->status}}</td>
      <td>
        <a href="" class="btn btn-success">View</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="row">
  {{$products->links()}}
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

    <form action="{{route('product.store')}}" method="post">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{route('product.store')}}" method="post">
        @csrf

        <div class="form-group">
    <label for="product_name">Select Category</label>
   <select class="form-control" name="category_id" id="">
    @foreach($categories as $cat)
    <option value="{{$cat->id}}">{{$cat->name}}</option>
    @endforeach
    
   </select>
  </div>

  <div class="form-group">
    <label for="product_name">Name</label>
    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter product name">
  </div>
  <div class="form-group">
    <label for="product_price">Product price</label>
    <input type="number" class="form-control" id="product_price" name="product_price" placeholder="Enter product price">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" id="description" class="form-control" placeholder="Enter product description"></textarea>
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection