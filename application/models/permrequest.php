<?php

class Permrequest extends Eloquent {

  public static $table = 'permrequests';
  public static $timestamps = false;

  protected $fillable = array('course_id', 'net_id', 'first', 'second', 'third');
  
  public function course() {

    return $this->belongs_to('Course', 'course_id');
  }
}

