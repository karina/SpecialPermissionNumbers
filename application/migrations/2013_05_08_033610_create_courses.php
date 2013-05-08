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
			$table->engine = 'InnoDB';

			// ATTRIBUTES
			$table->increments('id');

			$table->integer('course_id');
			$table->integer('sec_num');
			
			$table->string('net_id',64);
			$table->integer('max_students');
			$table->integer('num_students');
			$table->integer('room_num');		// simple implementation where course meets in only one room
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
