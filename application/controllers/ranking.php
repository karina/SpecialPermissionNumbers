<?php
class Ranking_Controller extends Base_Controller{

  public function get_student_rank(){
   // echo eloquent_to_json(Student::all());
  // die;
    return View::make('ranking.student_rank');
  }
 
 public function post_student_rank(){
   return Redirect::to('ranking/student_rank');
 }
    



}

