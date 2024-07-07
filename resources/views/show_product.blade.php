<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $product->name}}</title>
</head>
<body>
    <a href="{{route('index_product')}}">Back to Index Product</a>
     <p>name : {{$product->name }}</p>
     <p>Description : {{$product->description }}</p>
     <p>Price : {{$product->price }}</p>
     <p>stock : {{$product->stock }}</p>
     <img src="{{url('storage/'. $product->image)}}" alt="" height="100px">
     <form action="{{route('edit_product', $product)}}" method="get">
        <button type="submir">Edit Product</button>
     </form>

     <form action="{{route('add_to_cart', $product)}}" method="post">
        @csrf
        <input type="number" name="amount" value="1">
        <button type="submit">Add to Cart</button>
     </form>
     
     @if($errors->any())
     @foreach ($errors->all() as $error)
         <P>{{$error}}</P>
     @endforeach
     @endif


</body>
</html>