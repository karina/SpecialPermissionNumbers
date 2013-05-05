<?php

class  Special_Controller extends Base_Controller{
  public function get_request_sp(){
      return View::make('special.request_sp');
  }
  public function post_request_sp(){
  return Redirect::to('special/request_sp.php');
  } 
  public function get_create_sp() {
      return View::make('special.create_sp');
  }
  public function get_addcourses () {
       return View::make('special.addcourses');
         }

  public function post_addcourses() {
          
        }
  public function get_profcourses () {


        }
}
