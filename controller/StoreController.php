<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/StoreDAO.php';
require_once __DIR__ . '/../dao/UserDAO.php';

class StoreController extends Controller{

	function __construct() {
		$this->storeDAO = new StoreDAO();
		$this->userDAO = new UserDAO();
	}

	public function index() {
		$yearlyEvent = $this->storeDAO->getYearlyEvent();
		if(!empty($_SESSION["auth"])) {
            $purchaseHistory = $this->userDAO->getAllPurchaseHistoryByUserId($_SESSION["auth"]["id"]);
            $this->set("history", $purchaseHistory);
        }

		if(!empty($_POST['action'])){
		    if($_POST["action"] == "selectPackage") {
                $_SESSION["package_id"] = $_POST["package"];

                switch ($_POST["package"]) {
                    case "1":
                        $_SESSION["package_name"] = "Tourist Pass";
                        $_SESSION["package_price"] = 25;
                        break;
                    case "2":
                        $_SESSION["package_name"] = "Invader Pass";
                        $_SESSION["package_price"] = 50;
                        break;
                    case "3":
                        $_SESSION["package_name"] = "Habitant Pass";
                        $_SESSION["package_price"] = 100;
                        break;
                }
            }

            if($_POST["action"] == "checkout") {
                $matchingUserId = $this->storeDAO->getMatchingUser($_POST["email"]);
                $this->userDAO->register($_POST);

                $_SESSION["package_firstname"] = $_POST["firstname"];
                $_SESSION["package_lastname"] = $_POST["lastname"];
                $_SESSION["package_email"] = $_POST["email"];
                $_SESSION["package_quantity"] = $_POST["quantity"];
                header("location: index.php?page=checkout");
                exit();
            }
		}

		$this->set("yearlyEvent", $yearlyEvent);
	}

	public function checkout() {
        $yearlyEvent = $this->storeDAO->getYearlyEvent();
        $matchingUserId = $this->storeDAO->getMatchingUser($_SESSION["package_email"]);
        $getMatchingUser = $this->userDAO->getMatchingUser($_SESSION["package_email"]);

        if(!empty($_SESSION["logged"]) == false) {
            $_SESSION["package_userid"] = $matchingUserId["id"];
        } elseif($_SESSION["logged"] == true) {
            $_SESSION["package_userid"] = $_SESSION["auth"]["id"];
        }

        $_SESSION["auth"]["id"] = $getMatchingUser["id"];
        $_SESSION["auth"]["username"] = $getMatchingUser["username"];
        $_SESSION["auth"]["email"] = $getMatchingUser["email"];
        $_SESSION["auth"]["firstname"] = $getMatchingUser["firstname"];
        $_SESSION["auth"]["lastname"] = $getMatchingUser["lastname"];
        $_SESSION["logged"] = true;

        if(!empty($_POST['action'])) {
            if ($_POST["action"] == "purchase") {
                $this->storeDAO->purchase($_POST);
                unset($_SESSION["package_id"]);
                unset($_SESSION["package_name"]);
                unset($_SESSION["package_price"]);
                unset($_SESSION["package_firstname"]);
                unset($_SESSION["package_lastname"]);
                unset($_SESSION["package_email"]);
                unset($_SESSION["package_quantity"]);
                unset($_SESSION["package_userid"]);
            }
        }

        $this->set("yearlyEvent", $yearlyEvent);
    }

}
