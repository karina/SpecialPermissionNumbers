<?php

class Student extends Eloquent {


  public function __construct($params){
    
    $this->ruid = $params['ruid'];
    $this->passwd = $params['password'];
    $this->net_id = $params['netid'];
    $this->email_addr = $params['email'];
    $this->major = $params['major'];
    $this->grad_year = $params['grad_year'];
    $this->gpa = $params['gpa'];
    $this->credits = $params['credits'];

  }

  public function save() {
    

    $bindings = array($this->ruid, $this->net_id, $this->passwd, $this->email_addr, $this->grad_year, $this->major, $this->credits, $this->gpa);
    $success = DB::query('insert into students values (?, ?, ?, ?, ?, ?, ?, ?)', $bindings);
    
    return $success;
  }

  public static function lookup($params) {
    $pass_checked = false;

    $student = DB::only('select passwd from students where net_id = ?', $params['net_id']);
     
    if($student) {
      $pass_checked = Hash::check($params['passwd'], $student);
    }
    
    return $pass_checked; 
  }
}
  

