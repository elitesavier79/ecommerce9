<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit {{$p->name}}</title>
</head>
<body>
        <input type="text" name="name" value={{$p->name}}>
        <br>
        <input type="text" name="description" value={{$p->description}}>
        <br>
        <input type="number" name="price" value={{$p->price}}>
        <br>
        <input type="number" name="stock" value={{$p->stock}}>
        <br>
        <input type="file" name="image">
        <br>
        <button type="submit" >Submit Data</button>
</body>
</html>