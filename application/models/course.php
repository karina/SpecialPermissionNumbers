<?php 

Class Course_section extends Eloquent {

  public static $table = 'course_sections';
  public static $timestamps = false;

  public function net () {

    return $this->belongs_to('Professor');
  }

  public function room () {

    return $this->has_one('Room');
  }

}
