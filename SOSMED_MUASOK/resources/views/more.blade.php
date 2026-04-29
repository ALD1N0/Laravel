@include('layout.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neon Logout Button</title>
   <link rel="stylesheet" href="{{asset('css/more.css')}}">
</head>
<body>
<form action="{{route("logout")}}" method="POST">
    <button><span>Logout</span></button>
</form>
</body>
</html>
