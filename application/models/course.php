<?php 

Class Course extends Eloquent {

  public static $table = 'courses';
  public static $timestamps = false;

  public function net () {

    return $this->belongs_to('Professor');
  }

  public function room () {

    return $this->has_one('Room');
  }

  public function permrequests () {

    return $this->has_many('Permrequest', 'course_id');
  }
}
