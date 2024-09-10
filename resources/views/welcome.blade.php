<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resource</title>
</head>

<body>
    <h1>Linklar orqali shu pagelarga o'ting</h1>
    <h5>1.Get orqali malumot kiritish uchun↓</h5>
    <a href="{{route('users.create')}}">User Create</a>
    <h5>2.Post orqali malumot kiritish uchun↓</h5>
    <a href="{{route('users.post.create')}}">User Create</a>
    <h5>3.Put orqali malumot yangilash uchun↓</h5>
    <a href="{{route('users.put.edit')}}">Update</a>
    <h5>3.Patch orqali malumot yangilash uchun↓</h5>
    <a href="{{route('users.patch.edit')}}">Update</a>
    <h5>3.Delete orqali o'chirish uchun↓</h5>
    <a href="{{route('users.delete')}}">Delete</a>
</body>

</html>