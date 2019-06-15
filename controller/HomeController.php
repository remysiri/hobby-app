<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ActivityDAO.php';
require_once __DIR__ . '/../dao/UserDAO.php';

class HomeController extends Controller{

  function __construct() {
    $this->activityDAO = new ActivityDAO();
    $this->userDAO = new UserDAO();
  }
  public function index() {
      $events = $this->activityDAO->threeSoonestEvents();
      $date = DateTime::createFromFormat('Y/m/d', '2013/12/10');

      $this->set('events', $events);
      $this->set('currentPage', "about");
  }

  public function calendar() {
      $now = new DateTime();

      $keyword = "";
      if(!empty($_POST["keyword"])) {
          $keyword = $_POST["keyword"];
      }

      $date = $now->format('Y-m-d');
      if(!empty($_POST["date"])) {
          $date = $_POST["date"];
      }

      $category = false;
      if(!empty($_POST["category"])) {
          $category = $_POST["category"];
      }

      $events = $this->activityDAO->getAllEventsWithFilters($keyword, $date, $category);
      //$date = DateTime::createFromFormat('Y/m/d', '2013/12/10');

      $this->set('events', $events);

      if($_SERVER["HTTP_ACCEPT"] == "application/json") {
          echo json_encode($events);
          exit();
      }
  }

  public function contact() {
      if(!empty($_POST["submit"])) {
          if($_POST["submit"] == "submitform") {
              $sendMessage = $this->userDAO->sendMessage($_POST);
              if(!$sendMessage) {
                  $errors = $this->userDAO->validateForm($_POST);
                  $this->set("errors", $errors);
              } else {
                  header("location: index.php?page=contact");
                  exit();
              }
          }
      }
  }

}


