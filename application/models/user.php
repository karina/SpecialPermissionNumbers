<?php

class User extends Eloquent {
  
  public static $table = 'users';
  public static $timestamps = false;

  public function __construct ($params) {

    $this->net_id = $params['net_id'];
    $this->passwd = $params['passwd'];
  
  }
}
