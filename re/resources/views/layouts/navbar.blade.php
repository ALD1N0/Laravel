<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muasok</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            display: flex;
            min-height: 100vh;
            background-color: #161313;
            color: #262626;
        }
        .sidebar {
            width: 250px;
            background-color: #000000;
            color: white;
            display: flex;
            flex-direction: column;
            padding: 20px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
        }
        .sidebar a {
            text-decoration: none;
            color: white;
            margin: 15px 0;
            font-size: 18px;
            display: block;
            padding: 10px;
            border-radius: 5px;
        }
        .sidebar a:hover {
            background-color: #444;
        }
    </style>
</head>
<body>

   
    

<div class="sidebar">
   <h2><div>{{ Auth::user()->name }}</div></h2>
    <a href="{{ route('home.index') }}">Home</a>
    <a href="{{ route('messages.index') }}">Messages</a>
    <a href="{{ route('notifications.index') }}">Notifications</a>
    <a href="{{ route('profiles.index') }}">Profile</a>
    <a href="{{ route('more.index') }}">More</a>
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-dropdown-link>
    </form>
</div>

</body>
</html>