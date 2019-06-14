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
                    $_SESSION["auth"]["id"] = $checkUser["id"];
                    $_SESSION["auth"]["username"] = $checkUser["username"];
                    $_SESSION["auth"]["email"] = $checkUser["email"];
                    $_SESSION["auth"]["firstname"] = $checkUser["firstname"];
                    $_SESSION["auth"]["lastname"] = $checkUser["lastname"];
                    $_SESSION["logged"] = true;
                    header("location: index.php");
                }
            }
        }
    }

    public function logout() {
                $_SESSION = array();
                header('location: index.php');
                exit();
    }


    public function register() {
        if(!empty($_POST['action'])){
            if($_POST["action"] == "register") {
                $registerUser = $this->userDAO->register($_POST);
                if(!$registerUser) {
                    $errors = $this->userDAO->validate($_POST);
                    $this->set("errors", $errors);
                } else {
                    $getMatchingUser = $this->userDAO->getMatchingUser($_POST);
                    $_SESSION["auth"]["id"] = $getMatchingUser["id"];
                    $_SESSION["auth"]["username"] = $getMatchingUser["username"];
                    $_SESSION["auth"]["email"] = $getMatchingUser["email"];
                    $_SESSION["auth"]["firstname"] = $getMatchingUser["firstname"];
                    $_SESSION["auth"]["lastname"] = $getMatchingUser["lastname"];
                    $_SESSION["logged"] = true;
                }
            }
        }
    }

}