<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
</head>

<body>
    @if(auth()->user()->user_type)
    <h1>Seller Panel {{auth()->user()->user_type}}</h1>
    <a href="{{url('logout')}}">Logout</a>
</body>

</html>