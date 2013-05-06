<?php

class Email_Controller extends Base_Controller {

  public function get_new_email () {

    return View::make('email.new_email');
  }

  public function post_new_email () {

    $params = array(
      'net_id' => Auth::user()->net_id,
      'email_body' => Input::get('content')
    );

    $email = new Email;

    $email->fill($params);
    $email->save();

    return Redirect::to('email/view_all');
  }

  public function get_view_all () {

    return View::make('email.view_all');
  }

  public function get_view_email ($email) {

    return View::make('email.view_email')->with_email($email);
  }

}
