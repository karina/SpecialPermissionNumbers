<?php

/*
 * Controller to handle all account actions
 */
class Account_Controller extends Base_Controller {

  public function get_professor() {
    return View::make('account.professor');
  }
  
  public function post_professor(){

    $prof = new Professor;

    $params = array(
      'net_id' => Input::get('net_id'),
      'email_addr' => Input::get('email_addr'),
      'passwd' => Hash::make(Input::get('passwd'))
    ); 

    $prof->fill($params); 
    $prof->save();

    $param = array('net_id' => $params['net_id'], 'passwd' => $params['passwd']);
    $user = User::create($param);
    $user->save();

    Auth::login($user);

    return Redirect::to('special/addcourses');
  }

  /* Creating a Student Account */ 
  public function get_student() {
    $student = array();

    return View::make('account.student', $student);
  }

  public function post_student() {
    
    $student = new Student;
    
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
    
    $student->fill($params);
    $student->save();
    
    $param = array('net_id' => $params['net_id'], 'passwd' => $params['passwd']);
    $user = User::create($param);
    $user->save();

    Auth::login($user);

    return Redirect::to('account/studentedit');
  }
  
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
        return Redirect::to('account/studentedit');
      else
        return Redirect::to('special/create_sp');
        return Redirect::to('special/addcourses'); //TODO whatever we build for profs, redirect here
     
    }
    else
      return Redirect::to('account/login')->with('login_errors', true);
  }

  /* Log out */
  public function get_logout() {
    Auth::logout();

    return Redirect::home()->with('status', 'You have been logged out');
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

}
