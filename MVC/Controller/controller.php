<?php 
require_once ("Model/students.php");
require_once ("View/view.php");

class StudentController {
   private $model;
   private $view;

   public function __construct(Student $model, StudentView $view){
      $this->model = $model;
      $this->view = $view;
   }

   public function setStudentName($name){
      $this->model->name = $name;		
   }

   public function getStudentName(){
      return $this->model->name;		
   }

   public function setStudentRA($ra){
      $this->model->ra = $ra;		
   }

   public function getStudentRA(){
      return $this->model->ra;		
   }

   public function updateView(){				
      $this->view->printStudentDetails($this::getStudentName(), $this::getStudentRA());
   }	
}

?>