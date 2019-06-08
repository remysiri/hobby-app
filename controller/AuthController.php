<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/UserDAO.php';

class AuthController extends Controller{

    function __construct() {
        $this->userDAO = new userDAO();
    }

    public function login() {
        if(!empty($_POST['action'])){
            if($_POST["action"] == "login") {
                $checkUser = $this->userDAO->login($_POST);
                if(!$checkUser) {
                    $errors = $this->userDAO->validate($_POST);
                    $this->set("errors", $errors);
                    } else {
                    $_SESSION["username"] = $checkUser["username"];
                    $_SESSION["id"] = $checkUser["id"];
                    $_SESSION["role"] = $checkUser["role"];
                    $_SESSION["logged"] = true;
                    $_SESSION["info"] = "Logged in!";
                    header("location: index.php");
                }
            }
        }
    }


    public function register() {
        if(!empty($_POST['action'])){
            if($_POST["action"] == "register") {
                $this->userDAO->register($_POST);
            }
        }
    }

}