<?php

class Permrequest extends Eloquent {

  public static $table = 'permrequests';

  protected $fillable = array('course_id', 'net_id', 'first', 'second', 'third');
}

