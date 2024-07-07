<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
</head>
<body>
        @foreach ( $carts as $c)
        <img src="{{url('storage/' . $c->product->image)}}" alt="" height="100px">
        <p>Name : {{$c->product->name}}</p>
        <p>Quantity : {{$c->amount}}</p>
        @endforeach
</body>
</html>