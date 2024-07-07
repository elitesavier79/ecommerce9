<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
</head>
<body>
    @if($errors->any())
    @foreach ($errors->all() as $error)
        <P>{{$error}}</P>
    @endforeach
    @endif


        @foreach ( $carts as $c)
        <img src="{{url('storage/' . $c->product->image)}}" alt="" height="100px">
        <p>Name : {{$c->product->name}}</p>
        <br>
        <form action="{{route('update_cart', $c)}}" method="post">
            @method('patch')
            @csrf
            <input type="number" name="amount" value="{{$c->amount}}">
            <button type="submit">Update Quantity</button>
        </form>
        <form action="{{route('delete_cart', $c)}}" method="post">
            @method('delete')
            @csrf
            <button type="submit">Delete Cart</button>
        </form>
        @endforeach
</body>
</html>