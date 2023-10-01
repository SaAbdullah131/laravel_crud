<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
</head>
<body>
 <h1>Create Product</h1>

 <form action="{{route('product.store')}}"method='post'>
    @csrf
    @method('post')
    <div>
        <label>Name</label>
        <input type="text"name='name'placeholder='name'>
    </div>
    <div>
        <label>Qty</label>
        <input type="text"name='qty'placeholder='name'>
    </div>
    <div>
        <label>Price</label>
        <input type="text"name='price'placeholder='name'>
    </div>
    <div>
        <label>Description</label>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
    </div>
    <div>
        <input type="submit"value='Add Product'>
    </div>
 </form>
</body>
</html>
