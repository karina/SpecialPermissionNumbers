<?php

class Create_Students {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::create('students', function($table) {
      $table->increments('id');

      $table->string('ruid',64);
      $table->string('net_id',64);
      $table->string('passwd', 64);
      $table->string('email_addr', 64);
      $table->string('major', 32);

      $table->integer('grad_year');
      $table->integer('credits');

      $table->float('gpa');

    });
  }
	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
    Schema::drop('students');
	}

}
