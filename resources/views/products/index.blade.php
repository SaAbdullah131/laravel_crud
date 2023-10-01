<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Page Title</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
</style>
<script src=""></script>
<body>

<div class="">
 <h1>Product</h1>
 <div>
   <table class="table table-borderd table-sm border-1">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Description</th>
            <th>
                Action
            </th>
        </thead>
        <tbody>

            @foreach ($products as $product )
            <tr>

                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->qty}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td>
                    {{-- <a href="{{route('product.edit',['id'=>$product->id])}}"></a> --}}
                    <a href="{{route('product.edit',['product'=>$product])}}" class="btn btn-primary">Edit</a>
                    <a href="{{route('product.destroy',['product'=>$product])}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
   </table>
 </div>
</div>

</body>
</html>
