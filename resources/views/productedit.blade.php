@extends("layout")
@section("content")
<h1 class="card-title">Product Edit</h1>
<form class=" g-3 needs-validation" action="{{route('/producteditSubmit')}}" method="POST">
{{csrf_field()}}
<input type="hidden" name="id" value="{{$product->id}}">
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Product Name</label>
    <input type="text" class="form-control" name="p_name" value="{{$product->p_name}}" >
    @error('p_name')
    <span style="color:red;" >{{$message}}</span>
  @enderror
  </div>
  
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Product Code</label>
    <input type="text" class="form-control" name="p_code" value="{{$product->p_code}}" >
    @error('_code')
    <span style="color:red;" >{{$message}}</span>
  @enderror
  </div>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Product Description</label>
    <input type="text" class="form-control" name="p_desc" value="{{$product->p_desc}}" >
    @error('p_desc')
    <span style="color:red;" >{{$message}}</span>
  @enderror
  </div>

  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Product Price</label>
    <input type="text" class="form-control" name="p_price" value="{{$product->p_price}}" >
    @error('p_price')
    <span style="color:red;" >{{$message}}</span>
  @enderror
  </div>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Product Quantity</label>
    <input type="text" class="form-control" name="p_quantity" value="{{$product->p_quantity}}" >
    @error('p_quantity')
    <span style="color:red;" >{{$message}}</span>
  @enderror
  </div>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Product Stock datw</label>
    <input type="date" class="form-control" name="p_stock_date" value="{{$product->p_stock_date}}" >
    @error('p_stock_date')
    <span style="color:red;" >{{$message}}</span>
  @enderror
  </div>

  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Product purchased</label>
    <input type="text" class="form-control" name="p_purchased" value="{{$product->p_purchased}}" >
    @error('p_purchased')
    <span style="color:red;" >{{$message}}</span>
  @enderror
  </div>

  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Product rating</label>
    <input type="text" class="form-control" name="p_ratig" value="{{$product->p_ratig}}" >
    @error('p_ratig')
    <span style="color:red;" >{{$message}}</span>
  @enderror
  </div>
  <div class="col-md-4">
    <label for="validationCustom04" class="form-label">Product Category</label><br>
    <select class="form-select" name="p_category" >
      <option selected disabled value="{{$product->p_category}}">{{$product->p_category}}</option>
      <option>Tv</option>
      <option>Mobile</option>
      <option>Laptop</option>
      <option>Computer</option>
      <option>Desktop</option>
    </select>
    @error('p_category')
    <span style="color:red;" >{{$message}}</span>
  @enderror
    <div>
  <div class="col-12">
   <br> <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>

      
@endsection
@section("title")
 Product Edit
@endsection