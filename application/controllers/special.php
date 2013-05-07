<?php

class Special_Controller extends Base_Controller{

  // STUDENT SIDE
  public function get_request_sp(){
    
    return View::make('special.request_sp');
  }

  public function post_request_sp(){
    
    $params = array(
      "course_id" => Input::get('coursenum'),
      "net_id" => Student::where('net_id', '=', Auth::user()->net_id),
      "first" => Input::get('sec1'),
      "second" => Input::get('sec2'),
      "third" => Input::get('sec3')
    );

    $request = new Permrequest;

    $request->fill($params);
    $request->save();

    return Redirect::to('special/all_requests');
  }

  // PROFESSOR SIDE
  // this view doesn't exist yet
  public function get_all_requests() {

    $requests = Request::where('net_id', '=', Auth::user()->net_id);

    return View::make('special.all_requests')->with_requests('requests');
  } 

  public function get_create_sp() {
    return View::make('special.create_sp');
  }

  public function post_create_sp() {
    // Create new sp number and add to special_permission_nums table
    $params = array(
      "course_id" => Input::get('coursenumber'),
      "section_num" => Input::get('coursesection'),
      "sp_num" => Input::get("spnum"),

      "status" => 0,
      "student" => null
    );

    $sp_number = new SpecialPermissionNum;

    $sp_number->fill($params);
    $sp_number->save();

    return Redirect::to('special/create_sp');
  }
}
