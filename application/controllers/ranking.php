<?php
class Ranking_Controller extends Base_Controller{

  public function get_edit_rank ($id) {

    $req = Permrequest::find($id);

    return View::make('ranking.edit_rank')->with_req($req);
  }
 
  public function post_edit_rank($id) {

    $req = Permrequest::find($id);

    $req->rating = Input::get('Ranking');
    $req->save();
    
    return Redirect::to('special/prof_view_requests');
  }

}

