<?php

class User extends Eloquent {
  
  public static $table = 'users';
  public static $timestamps = false;

  protected $fillable = array('net_id', 'passwd');
}
