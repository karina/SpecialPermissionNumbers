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
      $table->engine = 'InnoDB';

      // ATTRIBUTES
      $table->increments('id');

      $table->string('net_id', 64);
      $table->string('passwd', 64);
      $table->string('email_addr', 64);

      $table->string('ruid', 64);

      $table->string('major', 32);
      $table->integer('grad_year');
      $table->float('gpa');
      $table->integer('credits');

      // CONSTRAINTS
      $table->index('net_id');

      $table->foreign('net_id')->references('net_id')->on('users')->on_delete('cascade')->on_update('cascade');
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
