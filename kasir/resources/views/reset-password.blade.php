<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">

    <title>
        Ganti Password
    </title>


    <link rel="stylesheet"
          href="{{ asset('css/gantipassword.css') }}">

</head>

<body class="reset-page">


    <!-- BUBBLES -->
    <div class="bubble bubble-1"></div>

    <div class="bubble bubble-2"></div>


    <!-- CARD -->
    <div class="reset-wrapper">

        <div class="reset-card">


            <!-- HEADER -->
            <div class="reset-header">

                <h2 class="reset-title">

                    Ganti Password

                </h2>

                <p class="reset-subtitle">

                    Password harus kuat dan aman

                </p>

            </div>


            <!-- FORM -->
            <form 
                method="POST"
                action="/reset-password"
                class="reset-form"
                id="resetForm">

                @csrf


                <!-- PASSWORD -->
                <div class="input-group">

                    <span class="input-icon">

                        🔒

                    </span>

                    <input 
                        type="password"

                        name="password"

                        id="password"

                        class="password-input"

                        placeholder="Password Baru"

                        autocomplete="new-password"

                        required>

                </div>


                <!-- ERROR PASSWORD -->
                <div 
                    id="passwordError"
                    class="password-error">

                </div>


                <!-- CONFIRM -->
                <div class="input-group">

                    <span class="input-icon">

                        🔑

                    </span>

                    <input 
                        type="password"

                        name="password_confirmation"

                        id="confirmPassword"

                        class="password-input"

                        placeholder="Konfirmasi Password"

                        autocomplete="new-password"

                        required>

                </div>


                <!-- BUTTON -->
                <button 
                    type="submit"
                    class="reset-button">

                    Simpan Password

                </button>

            </form>

        </div>

    </div>


    <!-- JAVASCRIPT -->
    <script>

        document.addEventListener(
            "DOMContentLoaded",
            function(){

                const form =
                    document.getElementById(
                        "resetForm"
                    );


                const password =
                    document.getElementById(
                        "password"
                    );


                const confirmPassword =
                    document.getElementById(
                        "confirmPassword"
                    );


                const errorBox =
                    document.getElementById(
                        "passwordError"
                    );


                form.addEventListener(
                    "submit",
                    function(e){

                        const pass =
                            password.value;

                        const confirm =
                            confirmPassword.value;


                        /*
                            RULE:
                            - 8 karakter
                            - uppercase
                            - lowercase
                            - number
                            - symbol
                        */
                        const regex =
                            /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z0-9]).{8,}$/;


                        /* PASSWORD RULE */
                        if(
                            !regex.test(pass)
                        ){

                            e.preventDefault();


                            errorBox.innerHTML = `

                                Password harus memiliki:
                                <br><br>

                                ✓ Minimal 8 karakter
                                <br>

                                ✓ Huruf besar (A-Z)
                                <br>

                                ✓ Huruf kecil (a-z)
                                <br>

                                ✓ Angka (0-9)
                                <br>

                                ✓ Simbol (!@#$ dll)

                            `;


                            password.focus();

                            return false;

                        }


                        /* CONFIRM PASSWORD */
                        if(
                            pass !== confirm
                        ){

                            e.preventDefault();


                            errorBox.innerHTML = `

                                Password konfirmasi
                                tidak sama

                            `;


                            confirmPassword.focus();

                            return false;

                        }


                        errorBox.innerHTML = "";

                    }
                );


                password.addEventListener(
                    "input",
                    function(){

                        errorBox.innerHTML = "";

                    }
                );


                confirmPassword.addEventListener(
                    "input",
                    function(){

                        errorBox.innerHTML = "";

                    }
                );

            }
        );

    </script>


</body>

</html>