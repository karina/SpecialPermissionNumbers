<?php

class Room extends Eloquent {

  public static $table = 'rooms';
  public static $timestamps = false;

  protected $fillable = array('room_num', 'max_seats');

}
