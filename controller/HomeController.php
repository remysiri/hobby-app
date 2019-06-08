<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ActivityDAO.php';

class HomeController extends Controller{

  function __construct() {
    $this->activityDAO = new ActivityDAO();
  }
  public function index() {

  }

}


