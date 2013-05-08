<?php 

Class Course extends Eloquent {

  public static $table = 'courses';
  public static $timestamps = false;
  public static $fillable= array ( 'course_id', 'sec_num', 'net_id', 'max_students', 'num_students', 'room_num' );

  public function net () {

    return $this->belongs_to('Professor');
  }

  public function room () {

    return $this->has_one('Room');
  }
 
}
