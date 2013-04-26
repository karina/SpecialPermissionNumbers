<?php

class Student extends Eloquent {

  public static $table = 'students';
  public static $timestamps = false; 
  
  protected  $fillable = array ('net_id','ruid', 'passwd', 'email_addr', 'major', 'grad_year', 'gpa', 'credits');
  
}
  

