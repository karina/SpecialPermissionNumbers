<?php

class Student extends Eloquent {


  public function __construct($params){
    
    $this->ruid = $params['ruid'];
    $this->passwd = $params['password'];
    $this->net_id = $params['netid'];
    $this->email_addr = $params['email'];
    
  }

  public function save(){
    

    $bindings = array($this->ruid, $this->net_id, $this->passwd, $this->email_addr);
    $success = DB::query('insert into student values (?, ?, ?, ?)', $bindings);
    
    return $success;
  }
}
  

