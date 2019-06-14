<?php

require_once __DIR__ . '/DAO.php';

class UserDAO extends DAO {

    public function login($data) {
        $errors = $this->validate($data);
        if(empty($errors)) {
            $sql = "SELECT * FROM users WHERE username = :username";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue("username", $data["username"]);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }

    public function register($data) {
        $errors = $this->validate($data);
        $hashedpw = password_hash($data['password'], PASSWORD_DEFAULT);
        if(empty($errors)) {
            $sql = "INSERT INTO `users` (`username`,`password`,`email`, `firstname`, `lastname`) VALUES (:username, :password, :email, :firstname, :lastname)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue('username', $data['username']);
            $stmt->bindValue('password', $hashedpw);
            $stmt->bindValue('email', $data['email']);
            $stmt->bindValue('firstname', $data["firstname"]);
            $stmt->bindValue('lastname', $data["lastname"]);
            $stmt->execute();
        }
    }

    public function getMatchingUser($data) {
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue("email", $data);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllPurchaseHistoryByUserId($id) {
        $sql = "SELECT * FROM user_purchases INNER JOIN events ON user_purchases.product_id = events.id WHERE user_id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue('id', $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function sendMessage($data) {
        $errors = $this->validateForm($data);
        if(empty($errors)) {
            $sql = "INSERT INTO `messages` (`firstname`, `lastname`, `email`, `phone`, `subject`, `body`) VALUES (:firstname, :lastname, :email, :phone, :subject, :body)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue("firstname", $data["firstname"]);
            $stmt->bindValue("lastname", $data["lastname"]);
            $stmt->bindValue("email", $data["email"]);
            $stmt->bindValue("phone", $data["phone"]);
            $stmt->bindValue("subject", $data["subject"]);
            $stmt->bindValue("body", $data["body"]);
            $stmt->execute();
        }
    }

    public function validateForm($data) {
        $errors = [];

        if(!empty($_POST["submit"])) {
            if($_POST["submit"] == "submitform") {
                if(empty($data["firstname"])) {
                    $errors["firstname"] = "Firstname required";
                }

                if(empty($data["lastname"])) {
                    $errors["lastname"] = "Lastname required";
                }

                if(!filter_var($data["email"], FILTER_VALIDATE_EMAIL)) {
                    $errors["email"] = "Email is not valid";
                }

                if(!preg_match("/^[0-9]*$/", $data["phone"])) {
                    $errors["phone"] = "Phone number is not valid";
                }

                if(empty($data["subject"])) {
                    $errors["subject"] = "Subject required";
                }

                if(empty($data["body"])) {
                    $errors["body"] = "Message required";
                }
            }
        }

        return $errors;
    }

    public function validate($data) {
        $errors = [];

        $sql = "SELECT username, password, email FROM users WHERE username = :username";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue("username", $data["username"]);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if(!empty($_POST["action"])) {
            if($_POST["action"] == "login") {
                if($result["username"] !== $data["username"]) {
                    $errors["username"] = "Username does not exists";
                }
                if (!password_verify($data["password"], $result["password"])) {
                    $errors["password"] = "Password inccorect";
                }
            }

            if($_POST["action"] == "register" || $_POST["action"] == "checkout") {
                if($result["username"] == $data["username"]) {
                    $errors["username"] = "Username already taken.";
                } else if (empty($data["username"])) {
                    $errors["username"] = "Username required";
                }

                if($result["email"] == $data["email"]) {
                    $errors["email"] = "Email already taken.";
                } else if (empty($data["email"])) {
                    $errors["email"] = "E-mail required";
                }

                if (!empty($data["password"])) {
                    if(strlen($data["password"]) < 6) {
                        $errors["password"] = "Password must be longer than 6 characters.";
                    }
                } else if (empty($data["password"])) {
                    $errors["password"] = "Password required";
                }
        
                if (!empty($data["confirm-password"])) {
                    if($data["password"] !== $data["confirm-password"]) {
                        $errors["confirm-password"] = "Password does not match";
                    }
                } else if (empty($data["confirm-password"])) {
                    $errors["confirm-password"] = "Password confirmation is required.";
                }

                if(empty($data["firstname"])) {
                    $errors["firstname"] = "Firstname required";
                }

                if(empty($data["lastname"])) {
                    $errors["lastname"] = "Lastname required";
                }
            }
        }

        return $errors;
    }


}