<?php

class Room_Controller extends Base_Controller {

  public function get_view () {

    $rooms = Room::all();

    return View::make('room.view')->with_rooms($rooms);
  }

  public function get_add () {
    
    return View::make('room.add');
  }

  public function post_add () {

    $params = array(
      'room_num' => Input::get('room_num'),
      'max_seats' => Input::get('max_seats')
    );

    $room = new Room;

    $room->fill($params);
    $room->save();

    return Redirect::to('room/view');
  }
}
