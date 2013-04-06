<?php

class Professor extends Eloquent {


  public function __construct($params){
    
    $this->netid = $params['netid'];
    $this->passwd = $params['password'];
    $this->email_addr = $params['email'];
    
  }

  public function save(){
    

    $bindings = array(
        '0' => $this->netid,
        '1' => $this->passwd,
        '2' => $this->email_addr
      );
    $success = DB::query('insert into professor values (?, ?, ?)', $bindings);
    
    return $success;
  }
}
  

