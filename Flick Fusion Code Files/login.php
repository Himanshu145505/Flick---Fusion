<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Page</title>
    <link rel="stylesheet" href="login.css">
    <style>
        body {
            margin: 0;

        }

/*         Error message input styling */

        .error {
            background-color: #FFD2D2;
        }

/*         error message display */

        .error-message {
            color: red;
            font-size: 18px;
            margin-top: 10px;
            margin-left: 250px;
        }

/*         after successfully login redirection transition styling */

        body.fade-out {
            transition: opacity 0.5s ease-in-out;
            opacity: 0;
        }
    </style>
</head>
<body>



<!--     Background Video Container -->
    
    <div class="container">
        <video style="width: 100%;" autoplay loop muted>
            <source src="Intro.mp4" type="video/mp4">
        </video>

<!--         Login bar container -->
        <div class="login-container">
            <div class="logo">
                <i id="Flick">Flick </i>
                <i id="Fussion">Fussion </i>
                <img src="logo.png" alt="">
            </div>

            <div class="form">

<!--                 text representation with input fields -->
                <h1>Login or Sign Up</h1>
                <form method="post" action="connect4.php" onsubmit="return validateForm()" id="loginForm">
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <input type="password" name="password" id="password" placeholder="Password" style="margin-top: 14px;" required>
                    <input type="submit" name="submit" value="Sign In" id="signInButton">
                </form>
            </div>

<!--             redirection to signup page -->

            <div class="content">
                <h2>New Here? <a href="signup.html">Sign up now.</a></h2>
            </div>
        </div>
    </div>

  

   <!--
    <script>
      document.addEventListener("DOMContentLoaded", function () {
    document.getElementById('signInButton').addEventListener('click', function (event) {
        event.preventDefault();
        if (validateForm()) {
            document.body.classList.add('fade-out');
            setTimeout(function () {
                window.location.href = '.php'; 
            }, 500);
        }
    });
});


        function validateForm() {
            var email = document.getElementById('email');
            var password = document.getElementById('password');

            if (email.value === '') {
                displayError(email, 'Email cannot be empty');
                return false;
            } else if (!email.value.includes('@')) {
                displayError(email, 'Email Sould Contain @');
                return false;
            }

            if (password.value === '') {
                displayError(password, 'Password cannot be empty');
                return false;
            }

            return true;
        }

        function displayError(field, message) {
            field.classList.add('error');

            var errorElement = document.createElement('div');
            errorElement.className = 'error-message';
            errorElement.textContent = message;

            field.parentNode.insertBefore(errorElement, field.nextSibling);

            setTimeout(function () {
                field.classList.remove('error');
                errorElement.remove();
            }, 2000);
        }
    </script>

    -->

</body>
</html>

<!---->
