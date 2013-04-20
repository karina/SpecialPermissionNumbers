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
  
  public function get_student() {
    return View::make('account.student');
  }

  public function post_student() {

    $ruid = Input::get('ruid');
    $email = Input::get('email_addr');
    $netid = Input::get('netid');
    $major = Input::get('major');
    $grad_year = Input::get('grad_year');
    $gpa = Input::get('gpa');
    $credits = Input::get('credits');
    $password = Hash::make(Input::get('password'));

    $params = array('ruid' => $ruid, 'netid'=> $netid,'password'=>$password, 'email' => $email, 'grad_year' => $grad_year, 'major' => $major, 'credits' => $credits, 'gpa' => $gpa);
    
    $student = new Student($params);
    $student->save(); 
    return Redirect::home()->with('status', 'You have now registered!');
  }
 
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
    
    $is_student = Student::lookup($params);
    $is_prof = Professor::lookup($params);

    if($is_student || $is_prof)
      return View::make('account.loginsucces');
    else
      return Redirect::to('account/login')->with('login_errors', true);
  }

}
