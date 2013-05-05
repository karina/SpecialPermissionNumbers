<?php

class  Special_Controller extends Base_Controller{
  public function get_request_sp(){
    
    return View::make('special.request_sp');
  }

  public function post_request_sp(){
    
    $params = array(
      "cid" => Input::get('coursenum'),
      "net_id" => Student::where('net_id', '=', Auth::user()->net_id),
      "first" => Input::get('sec1'),
      "second" => Input::get('sec2'),
      "third" => Input::get('sec3')
    );

    $request = new Request;

    $request->fill($params);
    $request->save();

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
