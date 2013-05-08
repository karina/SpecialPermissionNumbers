<?php

/*
 * Controller to handle all account actions
 */
class Account_Controller extends Base_Controller {
  
  /* Login functionality */ 
  public function get_login(){
    return View::make('account.login');
  }

  public function post_login() {

    $params = array(
      'username' => Input::get('netid'),
      'password' => Input::get('passwd')
    );

    if(Auth::attempt($params)) {

      if($student = Student::where('net_id', '=', Auth::user()->net_id)->first())
        return Redirect::to('special/all_requests');
       
      else
        return Redirect::to('special/prof_view_requests');
    }
    else
      return Redirect::to('account/login')->with('login_errors', true);
  }

  /* Log out */
  public function get_logout() {
    Auth::logout();

    return Redirect::home()->with('status', 'You have been logged out');
  }

  // PROFESSOR SIDE
  // Creating a professor account
  public function get_professor() {
    return View::make('account.professor');
  }
  
  public function post_professor(){
    // Make new professor and add to professors table
    $params = array(
      'net_id' => Input::get('net_id'),
      'email_addr' => Input::get('email_addr'),
      'passwd' => Hash::make(Input::get('passwd'))
    ); 

    $prof = new Professor;
    $prof->fill($params); 
    $prof->save();

    // Make new user and add to users table
    $param = array('net_id' => $params['net_id'], 'passwd' => $params['passwd']);
    $user = User::create($param);
    $user->save();

    Auth::login($user);

    // TO DO: CHANGE THIS TO SOMETHING ELSE
    return Redirect::to('special/create_sp');
  }

  // STUDENT SIDE
  // Creating a student account
  public function get_student() {

    return View::make('account.student');
  }

  public function post_student() {
    // Make new student and add to students table
    $params = array(
      'ruid' => Input::get('ruid'), 
      'net_id'=> Input::get('net_id'),
      'passwd'=> Hash::make(Input::get('passwd')), 
      'email_addr' => Input::get('email_addr'), 
      'grad_year' => Input::get('grad_year'), 
      'major' => Input::get('major'), 
      'credits' => Input::get('credits'), 
      'gpa' => Input::get('gpa')
    );
    
    $student = new Student;
    $student->fill($params);
    $student->save();
    
    $param = array('net_id' => $params['net_id'], 'passwd' => $params['passwd']);
    $user = User::create($param);
    $user->save();

    Auth::login($user);

    return Redirect::to('account/studentedit');
  }
  
  /* Editing Student Account */
  public function get_studentedit() {
    if(Auth::check()) {
      $student = Student::where('net_id', '=', Auth::user()->net_id)->first(); 
      return View::make('account.student_edit')->with_student($student);
    
    }
    else
      return Redirect::to('/');
  }

  public function post_studentedit () {
    
    $params = array(
      'email_addr' => Input::get('email_addr'), 
      'grad_year' => Input::get('grad_year'), 
      'major' => Input::get('major'), 
      'credits' => Input::get('credits'), 
      'gpa' => Input::get('gpa')
    );

    $student = Student::where('net_id', '=', Auth::user()->net_id)->first();
    $student->fill($params);
    $student->save();
    
    return Redirect::to('account/studentedit')->with('success', true);
  }

  public function get_courses () {

    return View::make('account/courses');
  }

  public function post_courses () {

    $registered = new Registeredcourse;

    $registered->fill(array('net_id' => Auth::user()->net_id, 'course_id' => Input::get('course_id'), 'grade' => Input::get('grade')));

    $registered->save();

    return Redirect::to('account/courses'); 
  }

}
