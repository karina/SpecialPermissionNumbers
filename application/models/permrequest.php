<?php

class Permrequest extends Eloquent {

  public static $table = 'permrequests';
  public static $timestamps = false;

  protected $fillable = array('cid', 'net_id', 'first', 'second', 'third');
}

