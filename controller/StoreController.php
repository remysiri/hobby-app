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
			if($_POST["action"] == "purchase") {
				$this->storeDAO->purchase($_POST);
			}
		}

		$this->set("yearlyEvent", $yearlyEvent);
	}

}
