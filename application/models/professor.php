<?php

class Professor extends Eloquent {


  public function __construct($params){
    
    $this->net_id = $params['netid'];
    $this->passwd = $params['password'];
    $this->email_addr = $params['email'];
    
  }

  public function save(){
    

    $bindings = array(
        '0' => $this->net_id,
        '1' => $this->passwd,
        '2' => $this->email_addr
      );
    $success = DB::query('insert into professor values (?, ?, ?)', $bindings);
    
    return $success;
  }
  
  public static function lookup($params) {
    $pass_checked = false;

    $prof = DB::only('select passwd from professor where net_id = ?', $params['net_id']);
     
    if($prof) {
      $pass_checked = Hash::check($params['passwd'], $student);
    }
    
    return $pass_checked; 
  }
}
  

