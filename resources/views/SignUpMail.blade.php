<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Dear {{ $user->name }}, your account is sucessfully created!</h3>
    <h5>This is your email {{ $user->email }}.</h5>
</body>
</html>