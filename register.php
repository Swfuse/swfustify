<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome swfustify</title>
</head>
<body>
    <div id="inputContainer">
        <form action="register.php" id="loginForm" method="POST">
            <h2>Login to your account</h2>
            <p>
                <label for="loginUsername">Username</label>
                <input type="text" id="loginUsername" name="loginUsername" type="text" placeholder="Name" required>
            </p>
            <p>
                <label for="loginPasswd">Password</label>
                <input type="text" id="loginPasswd" name="loginPasswd" type="password" placeholder="password" required>
            </p>
            <button name="loginButton" type="submit">LOG IN</button>
            
        </form>

        <form action="register.php" id="registyForm" method="POST">
            <h2>Create free account</h2>
            <p>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" type="text" placeholder="Name" required>
            </p>

            <p>
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" name="firstName" type="text" placeholder="First Name" required>
            </p>

            <p>
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" name="lastName" type="text" placeholder="Last name" required>
            </p>

            <p>
                <label for="email">Email</label>
                <input type="text" id="email" name="email" type="email" placeholder="email@mail.com" required>
            </p>

            <p>
                <label for="emailConfirm">Confirm email</label>
                <input type="text" id="emailConfirm" name="emailConfirm" type="email" placeholder="email@mail.com" required>
            </p>

            <p>
                <label for="passwd">Password</label>
                <input type="text" id="passwd" name="passwd" type="password" placeholder="password" required>
            </p>

            <p>
                <label for="passwdConfirm">Confirm Password</label>
                <input type="text" id="passwdConfirm" name="passwdConfirm" type="password" placeholder="Confirm password" required>
            </p>
            <button name="registerButton" type="submit">SIGN UP</button>
            
        </form>

    </div>
</body>
</html>