<?php

class Registeredcourse extends Eloquent {

  public static $table = 'registered_courses';
  public static $timestamps = false;

  protected $fillable = array('net_id','course_id','grade');

}
