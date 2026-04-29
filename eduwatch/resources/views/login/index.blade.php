<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('css/login_style.css') }}">
</head>
<body>
    <main>
        <section>
            <h1>
              <span>Welcome to<br><span style="color: blue">Edu</span>Watch </span> 
            </h1>
            <form id="form" >
                <label for="email">Email</label><br>
                <input type="email" id="email" required><br><br>
                <label for="password">Password</label><br>
                <input type="password" id="password" required><br>
                <h6> <a href="{{ route("forgot") }}">Lupa kata sandi</a></h6>

                <button type="submit" id="submit" value="Submit">Sign In</button>
            </form><br><br>
            <h4>Kamu belum memiliki akun <a href="{{ route("tampilan_register") }}">Register</a></h4>
        </section>
        <img src="{{ asset('image/coding3.jpg') }}" alt="coding image">
        {{-- <img src="{{ asset('image/phone.jpg') }}" alt="image"> --}}
    </main>
</body>
</html>