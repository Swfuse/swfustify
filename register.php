<?php
    include("includes/classes/Account.php");
    include("includes/classes/Constants.php");
    $account = new Account();
    
    include("includes/handlers/register-handler.php");
    include("includes/handlers/login-handler.php");

    function getInputValue($name) {
        if(isset($_POST[$name])){
             echo $_POST[$name];
        }
    }
?>

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
                <?php echo $account->getError(Constants::$userNameSize);  ?>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" type="text" placeholder="Name" value="<?php getInputValue('username') ?>" required>
            </p>

            <p>
                <?php echo $account->getError(Constants::$firstNameSize);  ?>
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" name="firstName" type="text" placeholder="First Name" value="<?php getInputValue('firstName') ?>" required>
            </p>

            <p>
                <?php echo $account->getError(Constants::$lastNameSize);  ?>
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" name="lastName" type="text" placeholder="Last name" value="<?php getInputValue('lastName') ?>" required>
            </p>

            <p>
                <?php echo $account->getError(Constants::$emailsDoNoMatch);  ?>
                <?php echo $account->getError(Constants::$emailInvalid);  ?>
                <label for="email">Email</label>
                <input type="text" id="email" name="email" type="email" placeholder="email@mail.com" value="<?php getInputValue('email') ?>" required>
            </p>

            <p>
                <label for="emailConfirm">Confirm email</label>
                <input type="text" id="emailConfirm" name="emailConfirm" type="email" placeholder="email@mail.com" value="<?php getInputValue('emailConfirm') ?>" required>
            </p>

            <p>
                <?php echo $account->getError(Constants::$passwordsDoNoMatch);  ?>
                <?php echo $account->getError(Constants::$passwordIncorrect);  ?>
                <?php echo $account->getError(Constants::$passwordSize);  ?>
                <label for="passwd">Password</label>
                <input type="text" id="passwd" name="passwd" type="password" placeholder="password" value="<?php getInputValue('passwd') ?>" required>
            </p>

            <p>
                <label for="passwdConfirm">Confirm Password</label>
                <input type="text" id="passwdConfirm" name="passwdConfirm" type="password" value="<?php getInputValue('passwdConfirm') ?>" placeholder="Confirm password" required>
            </p>
            <button name="registerButton" type="submit">SIGN UP</button>
            
        </form>

    </div>
</body>
</html>