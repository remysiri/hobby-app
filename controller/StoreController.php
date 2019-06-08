<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/StoreDAO.php';

class StoreController extends Controller{

  function __construct() {
    $this->storeDAO = new StoreDAO();
  }
  public function index() {

  }

}
