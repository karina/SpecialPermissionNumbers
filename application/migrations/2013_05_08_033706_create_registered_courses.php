<?php

class Create_Registered_Courses {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('registered_courses', function($table) {
			$table->engine = 'InnoDB';

			// ATTRIBUTES
			$table->increments('id');

			$table->string('net_id',64);
			$table->integer('course_id');
			$table->float('grade');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('registered_courses');
	}

}