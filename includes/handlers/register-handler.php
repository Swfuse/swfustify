<?php

function clearForm($inputText, $cap=false, $paswd=false) {
    $inputText = strip_tags($inputText);
    if ($paswd) $inputText = str_replace(" ", "", $inputText);
    if ($cap) $inputText = ucfirst(strtolower($inputText));
    return $inputText;
}





if(isset($_POST['registerButton'])) {
   // register button pressed
   $username = clearForm($_POST['username']);
   $firstName = clearForm( $_POST['firstName'], true);
   $lastName = clearForm( $_POST['lastName'], true);
   $email = clearForm( $_POST['email']);
   $email_confirm = clearForm($_POST['emailConfirm']);
   $password = clearForm( $_POST['passwd'], false, true);
   $password_confirm = clearForm( $_POST['passwdConfirm'], false, true);

   $wasSuccessful = $account->register($username, $firstName, $lastName, $email, $email_confirm, $password, $password_confirm);
   if($wasSuccessful == true){
        header("Location: index.php");
   }

   
   
}

?>