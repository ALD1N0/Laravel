<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>

   <link rel="stylesheet" href="{{ asset("css/masukkan_email.css") }}">
</head>

<body>

    <section class="container">
        <h1>Reset Password</h1>
        <p>Masukkan Email yang sesuai!!!</p>
        <form>
            <input type="email" placeholder="Masukkan Email Anda" required>
            <button type="submit">Kirim Link Reset</button>
           <button type="button" style="background-color: red" onclick="history.back()">
    Kembali menu sebelumnya
</button>
        </form>
        
    </section>

</body>

</html>