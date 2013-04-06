<?php

/*
 * Controller to handle all account actions
 */
class Account_Controller extends Base_Controller {

  public function get_professor() {
    return View::make('account.professor');
  }
  
  public function get_student() {
    return View::make('account.student');
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

  public function get_login(){
    return View::make('account.login');
  }

}
