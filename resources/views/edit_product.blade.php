<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit {{$product->name}}</title>
</head>
<body>
    <form action="{{route('update_product', $product)}}" method="post" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <label for="">Product Name</label>
        <input type="text" name="name" value="{{$product->name}}">
        <br>
        <label for="">Product Description</label>
        <input type="text" name="description" value="{{$product->description}}">
        <br>
        <label for="">Product Price</label>
        <input type="number" name="price" value={{$product->price}}>
        <br>
        <label for="">Product Stock</label>
        <input type="number" name="stock" value={{$product->stock}}>
        <br>
        <label for="">Product Image</label>
        <input type="file" name="image">
        <br>
        <button type="submit" >Update Data</button>
    </form>
</body>
</html>