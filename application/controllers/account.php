<?php

/*
 * Controller to handle all account actions
 */
class Account_Controller extends Base_Controller {

  public $restful = TRUE;

  public function get_professor() {
    return View::make('account.professor');
  }

  public function action_createprof(){
    
    $email = Input::get('email');
    $netid = Input::get('netid');
    $password = Input::get('password');

    return Redirect::to('home/index');
  }

  public function get_login(){
    return View::make('account.login');
  }

}
