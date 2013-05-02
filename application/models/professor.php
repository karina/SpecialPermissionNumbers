<?php

class Professor extends Eloquent {

  public static $table = 'professors';
  public static $timestamps = false;

  protected $fillable = array('net_id','passwd','email_addr');

  public function courses () {

    return $this->has_many('Course', 'net_id');
  }

}

  

