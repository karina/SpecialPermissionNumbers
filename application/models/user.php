<?php

class User extends Eloquent {

  public function __construct ($params) {

    $this->net_id = $params['net_id'];
    $this->passwd = $params['passwd'];

  }
