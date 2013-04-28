<?php

/*
 * Controller to handle all account actions
 */
class Account_Controller extends Base_Controller {

  public function get_professor() {
    return View::make('account.professor');
  }
  
  public function post_professor(){
    
    $email = Input::get('email');
    $netid = Input::get('netid');
    $password = Hash::make(Input::get('password'));

    $params = array('netid'=> $netid,'password'=>$password, 'email' => $email);
    
    $professor = new Professor($params);
    $professor->save(); 
    return Redirect::home()->with('status', 'You have now registered!');
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

    $net_id = Input::get('netid');
    $passwd = Input::get('password');

    $params = array(
      'net_id' => $net_id,
      'passwd' => $passwd
    );

    if(Auth::attempt($params)) {

    $is_student = Student::lookup($params);
    $is_prof = Professor::lookup($params);

    if($is_student || $is_prof)
      return View::make('account.loginsucess');
    }
    else
      return Redirect::to('account/login')->with('login_errors', true);
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
      'ruid' => Input::get('ruid'), 
      'net_id'=> Input::get('net_id'),
      'passwd'=> Hash::make(Input::get('password')), 
      'email_addr' => Input::get('email'), 
      'grad_year' => Input::get('grad_year'), 
      'major' => Input::get('major'), 
      'credits' => Input::get('credits'), 
      'gpa' => Input::get('gpa')
    );

    $student = Student::where('net_id', '=', $params['net_id']);
    $student->fill($params);
    $student->save();

    $user = User::where('net_id', '=', $params['net_id']);
    $user->fill(array($params['net_id'],$params['passwd']));
    $user->save();

  }

}
