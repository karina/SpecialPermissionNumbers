<?php

class Prereq extends Eloquent {

  public static $table = 'prerequisites';
  public static $timestamps = false;

  protected $fillable = array('course_id', 'set_id', 'prereq');
}

