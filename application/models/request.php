<?php

class Request extends Eloquent {

  public static $table = 'requests';

  protected $fillable = array('cid', 'net_id', 'first', 'second', 'third');
}

