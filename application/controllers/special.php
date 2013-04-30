<?php

class Special_Controller extends Base_Controller {

  public function get_addcourses () {
    return View::make('special.addcourses');
  }

  public function post_addcourses() {

    $params = array(
      'course_id' => Input::get('course_id'),
      'sec_num' => Input::get('sec_num'),
      'max_students' => Input::get('max_students'),
      'room_id' => Input::get('room_id')
    );

    $prof = Professor::where('net_id', '=', Auth::user()->net_id);

    $prof->courses()->save($params);

    return Redirect::to('special/profcourses');
  }
  public function get_profcourses () {


  }

}
