<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/user/create" method = "post">
      
       @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="">
        <br><br>
        <label for="email">Email</label>
        <input type="email" name="email" id="">
        <br><br>
        <label for="password ">Password</label>
        <input type="password" name="password" id="">
        <br><br>
        <input type="submit" value="Submit">

    </form>
</body>
</html>