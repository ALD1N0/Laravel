<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP </title>

   <link rel="stylesheet" href="{{ asset("css/otp_page.css") }}">
</head>

<body>

    <section class="container">
        <h1>Masukkan kode OTP</h1>

        <form>
            <div class="otp-container">
                <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*" class="otp-input">
                <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*" class="otp-input">
                <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*" class="otp-input">
                <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*" class="otp-input">
                <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*" class="otp-input">
                <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*" class="otp-input">
            </div>

            <button type="submit">Verifikasi</button>
        </form>
    </section>

</body>
<script>
    const inputs = document.querySelectorAll(".otp-input");

    inputs.forEach((input, index) => {

        input.addEventListener("input", (e) => {
            // Hanya angka
            input.value = input.value.replace(/[^0-9]/g, '');

            if (input.value.length === 1 && index < inputs.length - 1) {
                inputs[index + 1].focus();
            }
        });

        input.addEventListener("keydown", (e) => {
            if (e.key === "Backspace" && input.value === "" && index > 0) {
                inputs[index - 1].focus();
            }
        });

    });
</script>

</html>