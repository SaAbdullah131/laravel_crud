<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
</head>
<body>
 <h1>Edit Product</h1>

 <form action="{{route('product.update',['product'=>$product])}}"method='post'>
    @csrf
    @method('put')
    <div>
        <label>Name</label>
        <input type="text"name='name'placeholder='name' value="{{$product->name}}">
    </div>
    <div>
        <label>Qty</label>
        <input type="text"name='qty'placeholder='qty'value="{{$product->qty}}">
    </div>
    <div>
        <label>Price</label>
        <input type="text"name='price'placeholder='price'value="{{$product->price}}">
    </div>
    <div>
        <label>Description</label>
        <textarea name="description" id="" cols="30" rows="10">{{$product->description}}</textarea>
    </div>
    <div>
        <input type="submit"value='Update Product'>
    </div>
 </form>
</body>
</html>
