<?php 
require_once ("Model/students.php");
require_once ("View/view.php");
require_once ("Controller/controller.php");

$model  = retriveStudentFromDatabase();

$view = new StudentView();

$controller = new StudentController($model, $view);

$controller->updateView();


$controller->setStudentName("John");

$controller->updateView();

function retriveStudentFromDatabase(){
   $student = new Student(10, "Robert");
   return $student;
}

?>