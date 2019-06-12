<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ActivityDAO.php';

class HomeController extends Controller{

  function __construct() {
    $this->activityDAO = new ActivityDAO();
  }
  public function index() {
      $events = $this->activityDAO->getAllEvents();
      $date = DateTime::createFromFormat('Y/m/d', '2013/12/10');

      $this->set('events', $events);
  }

  public function calendar() {
      $events = $this->activityDAO->getAllEvents();
      $date = DateTime::createFromFormat('Y/m/d', '2013/12/10');

      $this->set('events', $events);
  }

}


