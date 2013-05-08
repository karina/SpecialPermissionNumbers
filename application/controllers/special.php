<?php

class Special_Controller extends Base_Controller{

  // STUDENT SIDE
  public function get_request_sp(){
    
    return View::make('special.request_sp');
  }
//students request sp#
  public function post_request_sp(){
    // TODO: check that user is a student
    
    $course = Course::where('course_id', '=', Input::get('coursenum'))->first();

    if (is_null($course)) {
      return Redirect::to('special/request_sp')->with('error', 'Unknown Course Entered');
    }

    $params = array(
      "course_id" => $course->course_id,
      "net_id" => Auth::user()->net_id,
      "first" => Input::get('sec1'),
      "second" => Input::get('sec2'),
      "third" => Input::get('sec3')
    );


    $request = permrequest::create($params);

    return Redirect::to('special/all_requests');
  }

  // PROFESSOR SIDE
  // this view doesn't exist yet
  public function get_all_requests() {

    $requests = Permrequest::where('net_id', '=', Auth::user()->net_id)->get();

    return View::make('special.all_requests')->with_requests($requests);
  } 

  public function get_prof_view_requests(){
      
    $allrequests = Permrequest::order_by('course_id','desc')->get();

    return View::make('special.prof_view_requests')->with_allrequests($allrequests);
  
  }


  public function get_create_sp() {
    return View::make('special.create_sp');
  }

  public function get_addprereq(){
    return View::make('special.addprereq');
    
  }


  public function get_addcourses() {
    return View::make('special.addcourses');
  }
  
//professors add courses
   public function post_addcourses(){
    $params = array(
      
      "course_id"=> Input::get('c_id'), 
      "sec_num"=> Input::get('sec_num'),
      "net_id"=> Auth::user()->net_id,
      "max_students"=> Input::get('max_students'),
      "num_students"=> Input::get('num_students'),
      "room_num"=> Input::get('room_num')
      );
      
      $courses = new Course;
     
      $courses->fill($params);
      $courses->save();

      return Redirect::to('special/addprereq');
  
 }
 /*  public function post_addprereq(){
     
     $child=Prereq::where ('prereq','=', Input::get('child_id'))->first();
     
     
     $params = array(
        "prereq"=> $child->child_id
      );

      $prereq= new Prereq;

      $prereq = Prereq::create($params);
      
      return Redirect::to('special/addprereq');

 }*/
   





  public function post_create_sp() {
    // Create new sp number and add to special_permission_nums table
    $params = array(
      "course_id" => Input::get('coursenumber'),
      "section_num" => Input::get('coursesection'),
      "sp_num" => Input::get("spnum"),
      );

    $sp_number = new SpecialPermissionNum;

    $sp_number->fill($params);
    $sp_number->save();

    return Redirect::to('special/create_sp');
  }


}
