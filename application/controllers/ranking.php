<?php
class Ranking_Controller extends Base_Controller{

  public function get_student_rank(){
    
    $prof_courses = Professor::where('net_id', '=', Auth::user()->net_id)->first()->courses()->get();

    $
    return View::make('ranking.student_rank');
  }
 
  public function post_student_rank(){
    
    return Redirect::to('special/student_rank');
  }

  public function action_student_rank(){
    

  }
}

