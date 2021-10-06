@extends("layout")
@section("content")
<h1 class="card-title">Product Details</h1>
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