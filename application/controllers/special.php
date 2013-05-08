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

    $course1 = Course::where('course_id', '=', Input::get('coursenum'))->where('sec_num', '=', $params['first'])->first();
    $course2 = Course::where('course_id', '=', Input::get('coursenum'))->where('sec_num', '=', $params['second'])->first();
    $course3 = Course::where('course_id', '=', Input::get('coursenum'))->where('sec_num', '=', $params['third'])->first();

    if(is_null($course1))
      return Redirect::to('special/request_sp')->with('error', "Section 1 doesn't exist");
    if(is_null($course2))
      return Redirect::to('special/request_sp')->with('error', "Section 2 doesn't exist");
    if(is_null($course3))
      return Redirect::to('special/request_sp')->with('error', "Section 3 doesn't exist");

    if($course1->num_students >= $course1->max_students) {
      return Redirect::to('special/request_sp')->with('error', 'Your first choice is full');
    }
    elseif($course2->num_students >= $course2->max_students) {
      return Redirect::to('special/request_sp')->with('error', 'Your second choice is full');
    }
    elseif($course3->num_students >= $course3->max_students) {
      return Redirect::to('special/request_sp')->with('error', 'Your third choice is full');
    }

    $request = Permrequest::create($params);

    return Redirect::to('special/all_requests');
  }

  // PROFESSOR SIDE
  // this view doesn't exist yet
  public function get_all_requests() {

    $requests = Permrequest::where('net_id', '=', Auth::user()->net_id)->get();

    return View::make('special.all_requests')->with_requests($requests);
  } 

  public function get_prof_view_requests(){
      
    $allrequests = Professor::where('net_id', '=', Auth::user()->net_id)->first()->perm_requests();

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

  //Prof Changes Status
  
  public function get_comment($id) {

    $req = Permrequest::find($id);
    
    return View::make('special/status')->with_req($req);
  }

  public function post_comment($id) {
    
    $req = Permrequest::find($id);

    $req->comment = Input::get('comment');
    $req->save();

    return Redirect::to('special/prof_view_requests');
  }

  //Give Special Permission Number

  public function get_give_perm ($id, $sec) {

    $req = Permrequest::find($id);
    $specs = SpecialPermissionNum::where('course_id', '=', $req->course_id)->where('section_num', '=', $sec)->get();

    $arr = array();

    foreach ($specs as $spec){
      $arr[$spec->sp_num] = $spec->sp_num;
    }

    return View::make('special/give_perm')->with_arr($arr);
  }

  public function post_give_perm($id, $sec) {
    $req = Permrequest::find($id);
    $specs = SpecialPermissionNum::where('course_id', '=', $req->course_id)->where('section_num', '=', $sec)->where('sp_num', '=',Input::get('special_nums'))->first();

    $req->status = 1; //Means given Number
    $req->save();

    
    $specs->status = 1; //Given number
    $specs->student = $req->net_id;
    $specs->save();

    return Redirect::to('special/prof_view_requests');
  }


  public function get_check_num ($id) {

    $req = Permrequest::find($id);

    $num = SpecialPermissionNum::where('course_id', '=', $req->course_id)->where('student','=', Auth::user()->net_id)->first();

    return View::make('special/check_num')->with_num($num);
  }

  public function post_check_num ($id) {

    $req = Permrequest::find($id);
    $num = SpecialPermissionNum::where('course_id', '=', $req->course_id)->where('student','=', Auth::user()->net_id)->first();
    $course = Course::where('course_id', '=', $req->course_id)->where('sec_num', '=', $num->section_num)->first();

    $course->num_students++;
    $course->save();

    $num->status = 2; //Used Number!
    $num->save();

    $req->status = 2; //Used Number!
    $req->save();

    return Redirect::to('special/all_requests');
  }
}
