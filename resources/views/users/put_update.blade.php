<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User edit</title>
</head>

<body>
    <h1>User Edit</h1>
    <form action="{{route('users.put.update', 1)}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" placeholder="Enter your name"><br><br>
        <input type="email" name="email" placeholder="Enter your email"><br><br>
        <input type="number" name="age" placeholder="Enter your age"><br><br>
        <input type="password" name="password" placeholder="Enter your password"><br><br>
        <button type="submit">Update</button>
    </form>
</body>

</html>