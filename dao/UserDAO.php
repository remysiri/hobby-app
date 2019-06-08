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
            $sql = "INSERT INTO `users` (`username`,`password`,`email`) VALUES (:username, :password, :email)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue('username', $data['username']);
            $stmt->bindValue('password', $hashedpw);
            $stmt->bindValue('email', $data['email']);
            $stmt->execute();
        }
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

            if($_POST["action"] == "register") {
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
            }
        }

        return $errors;
    }


}