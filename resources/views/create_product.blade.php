<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
</head>
<body>
    <form action="{{ route('store_product')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Product Name">
        <br>
        <input type="text" name="description" placeholder="Product Description">
        <br>
        <input type="number" name="price" placeholder="Product Price">
        <br>
        <input type="number" name="stock" placeholder="Product Stock">
        <br>
        <input type="file" name="image">
        <br>
        <button type="submit" >Submit Data</button>
    </form>
</body>
</html>