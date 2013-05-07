<?php

class Special_Controller extends Base_Controller{

  public function get_request_sp(){
    
    return View::make('special.request_sp');
  }

  public function post_request_sp(){
    
    $params = array(
      "cid" => Input::get('coursenum'),
      "net_id" => Auth::user()->net_id,
      "first" => Input::get('sec1'),
      "second" => Input::get('sec2'),
      "third" => Input::get('sec3')
    );

    $request = new Permrequest;

    $request->fill($params);
    $request->save();

    return Redirect::to('special/all_requests');
  }

  public function get_all_requests() {

    $requests = Permrequest::where('net_id', '=', Auth::user()->net_id)->get();

    return View::make('special.all_requests')->with_requests($requests);
  } 

  public function get_create_sp() {
      return View::make('special.create_sp');
  }
}
