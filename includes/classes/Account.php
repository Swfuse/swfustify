<?php

class Account {
    private $errorArray;

    public function __construct() {
        $this->errorArray = array();
    }

    public function register($username, $firstName, $lastName, $email, $email_confirm, $password, $password_confirm) {
        $this->validateUsername($username);
        $this->validateFirstName($firstName);
        $this->validateLastName($lastName);
        $this->validateEmails($email, $email_confirm);
        $this->validatePasswords($password, $password_confirm);

        if(empty($this->errorArray) == true) {
            // Insert into db
            return true;
        } else {
            return false;
        }
    }

    public function getError($error) {
        if(!in_array($error, $this->errorArray)) {
            $error = "";
        }
        return "<span class='errorMessage'>$error</span>";
    }

    private function validateUsername($un) {
        if(strlen($un) >= 25 || strlen($un) <= 5) {
            array_push($this->errorArray, "User name must be between 5 and 25 letters");
            return;
        }

        // Check username exist
    }
    
    private function validateFirstName($fn) {
        if(strlen($fn) >= 25 || strlen($fn) <= 2) {
            array_push($this->errorArray, "User First name must be between 5 and 25 letters");
            return;
        }
    }
    
    private function validateLastName($ln) {
        if(strlen($ln) >= 25 || strlen($ln) <= 2) {
            array_push($this->errorArray, "User Last name must be between 2 and 25 letters");
            return;
        }
    }
    
    private function validateEmails($em, $confemail) {
        if($em != $confemail) {
            array_push($this->errorArray, "emails don't match");
            return;
        }
        if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
            array_push($this->errorArray, "Email is invalid");
            return;
        }

        // Check username already used
    }
    
    private function validatePasswords($pswd, $confswd) {
        if($pswd != $confswd) {
            array_push($this->errorArray, "Passwords don't match");
            return;
        }
        
        if(preg_match('/[^A-Za-z0-9]/', $password)) {
            array_push($this->errorArray, "Passwords is incorrect, please use A-Z, 0-9");
            return;
        }
        if(strlen($password) >= 30 || strlen($password) <= 5) {
            array_push($this->errorArray, "Password must be between 5 and 30 symbols");
            return;
        }
    
    }
}

?>