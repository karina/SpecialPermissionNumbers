<?php

Class SpecialPermissionNum extends Eloquent {

  public static $table = 'special_permission_nums';
  public static $timestamps = false;

  protected $fillable = array('course_id','section_num','sp_num','status','student');
}