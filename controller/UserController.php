<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/UserDAO.php';

class UserController extends Controller{

    function __construct() {
        $this->userDAO = new userDAO();
    }

    public function history() {
        $getPurchaseHistory = $this->userDAO->getAllPurchaseHistoryByUserId($_SESSION["auth"]["id"]);

        $this->set('history', $getPurchaseHistory);
    }


}