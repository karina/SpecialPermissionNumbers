<?php

class Create_Courses {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::create('courses', function($table) {

      $table->increments('id');

      $table->integer('course_id');
      $table->integer('max_students');
      $table->integer('num_students');
      $table->integer('room_id');

      $table->string('net_id',64);
    });

  }


	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
	  Schema::drop('courses');
	}

}
