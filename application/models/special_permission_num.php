<?php

Class Special_permission_num extends Eloquent {

  public static $table = 'Special_permission_nums';
  public static $timestamps = false;

  protected $fillable = array('course_id','section_num','sp_num','status','student');
}