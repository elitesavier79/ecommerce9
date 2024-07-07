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
     <img src="{{url('storage/'. $p->image)}}" alt="" height="100px">
     <form action="{{route('show_product', $p)}}" method="get">
         <button type="submit"> Show Detail Product</button>
     </form>
     
     <form action="{{route('delete_product', $p)}}" method="post">
        @method('delete')
        @csrf
        <button type="submit">Delete Product</button>
     </form>
    @endforeach
</body>
</html>