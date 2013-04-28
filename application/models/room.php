<?php

class Room extends Eloquent {

  public static $timestamp = false;
  public static $table = 'rooms';

  protected $fillable = array('room_num', 'max_seats');

}
