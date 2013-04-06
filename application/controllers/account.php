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
    return Redirect::to('/');
  }
  
  public function get_student() {
    return View::make('account.student');
  }

  public function post_student() {

    $ruid = Input::get('ruid');
    $email = Input::get('email_addr');
    $netid = Input::get('netid');
    $password = Hash::make(Input::get('password'));

    $params = array('ruid' => $ruid, 'netid'=> $netid,'password'=>$password, 'email' => $email);
    
    $student = new Student($params);
    $student->save(); 
    return Redirect::to('/');
  }
 
  public function get_login(){
    return View::make('account.login');
  }

  public function post_login() {

    $netid = Input::get('netid');
    $passwd = Input::get('password');

    $params = array(
      'netid' => $netid,
      'passwd' => $passwd
    );

  }

}
