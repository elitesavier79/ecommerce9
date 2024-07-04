<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Product</title>
</head>
<body>
    @foreach ($products as $p)
     <p>name : {{$p->name }}</p>
     <p>Description : {{$p->description }}</p>
     <p>Rp : {{$p->price }}</p>
     <p>stock : {{$p->stock }}</p>
     <img src="{{url('storage/'. $p->image)}}" alt="" height="100px">
    @endforeach
</body>
</html>