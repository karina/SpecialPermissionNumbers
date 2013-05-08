<?php

class Professor extends Eloquent {

  public static $table = 'professors';
  public static $timestamps = false;

  protected $fillable = array('net_id','passwd','email_addr');

  public function courses () {

    return $this->has_many('Course', 'net_id');
  }

  public function perm_requests () {
    

    $profs = DB::table('permrequests')->join('courses', 'courses.course_id', '=', 'permrequests.course_id')->join('professors','professors.net_id','=', 'courses.net_id')->where('professors.net_id', '=', $this->net_id)->get('permrequests.*');
    return $profs;
  }
}

  

