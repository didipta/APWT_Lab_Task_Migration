@extends("layout")
@section("content")
<h1 class="card-title">Product Add</h1>
<form class=" g-3 needs-validation" action="{{route('/productadd')}}" method="POST">
{{csrf_field()}}
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Product Name</label>
    <input type="text" class="form-control" name="p_name" value="" >
    @error('p_name')
    <span style="color:red;" >{{$message}}</span>
  @enderror
  </div>
  
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Product Code</label>
    <input type="text" class="form-control" name="p_code" value="" >
    @error('_code')
    <span style="color:red;" >{{$message}}</span>
  @enderror
  </div>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Product Description</label>
    <input type="text" class="form-control" name="p_desc" value="" >
    @error('p_desc')
    <span style="color:red;" >{{$message}}</span>
  @enderror
  </div>

  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Product Price</label>
    <input type="text" class="form-control" name="p_price" value="" >
    @error('p_price')
    <span style="color:red;" >{{$message}}</span>
  @enderror
  </div>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Product Quantity</label>
    <input type="text" class="form-control" name="p_quantity" value="" >
    @error('p_quantity')
    <span style="color:red;" >{{$message}}</span>
  @enderror
  </div>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Product Stock datw</label>
    <input type="date" class="form-control" name="p_stock_date" value="" >
    @error('p_stock_date')
    <span style="color:red;" >{{$message}}</span>
  @enderror
  </div>

  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Product purchased</label>
    <input type="text" class="form-control" name="p_purchased" value="" >
    @error('p_purchased')
    <span style="color:red;" >{{$message}}</span>
  @enderror
  </div>

  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Product rating</label>
    <input type="text" class="form-control" name="p_ratig" value="" >
    @error('p_ratig')
    <span style="color:red;" >{{$message}}</span>
  @enderror
  </div>
  <div class="col-md-4">
    <label for="validationCustom04" class="form-label">Product Category</label><br>
    <select class="form-select" name="p_category" >
      <option selected disabled value="">Choose...</option>
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
</form><br>


<table class="table" style="width:1250px; font-size:0.9rem;">
        <tr>
            <th>P_Id</th>
            <th>P_Name</th>
            <th>P_Code</th>
            <th>P_Description</th>
            <th>P_Price</th>
            <th>P_Quantity</th>
            <th>P_Stock datw</th>
            <th>P_purchased</th>
            <th>P_rating</th>
            <th>P_Category</th>
            <th>Edit</th>
            <th>Delete</th>

        </tr>
        @foreach($product as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->p_name}}</td>
                <td>{{$product->p_code}}</td>
                <td>{{$product->p_desc}}</td>
                <td>{{$product->p_price}}</td>
                <td>{{$product->p_quantity}}</td>
                <td>{{$product->p_stock_date}}</td>
                <td>{{$product->p_purchased}}</td>
                <td>{{$product->p_ratig}}</td>
                <td>{{$product->p_category}}</td>
                <td><a href="/productedit/{{$product->id}}"class="btn btn-primary">Edit</a></td>
                <td><a href="/productdelete/{{$product->id}}" class="btn btn-danger">Delete</a></td>
            </tr>
        @endforeach
      
@endsection
@section("title")
 Product Add
@endsection