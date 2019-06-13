<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/StoreDAO.php';

class StoreController extends Controller{

	function __construct() {
		$this->storeDAO = new StoreDAO();
	}

	public function index() {
		$yearlyEvent = $this->storeDAO->getYearlyEvent();

		if(!empty($_POST['action'])){
		    if($_POST["action"] == "selectPackage") {
                $_SESSION["package_id"] = $_POST["package"];

                switch ($_POST["package"]) {
                    case "1":
                        $_SESSION["package_name"] = "Tourist Pass";
                        break;
                    case "2":
                        $_SESSION["package_name"] = "Invader Pass";
                        break;
                    case "3":
                        $_SESSION["package_name"] = "Habitant Pass";
                        break;
                }
            }
			if($_POST["action"] == "purchase") {
				//$this->storeDAO->purchase($_POST);
			}
		}

		$this->set("yearlyEvent", $yearlyEvent);
	}

}
