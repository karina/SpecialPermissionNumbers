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
			$table->integer('section_num');
			
			$table->string('net_id',64);
			$table->integer('max_students');
			$table->integer('num_students');
			$table->integer('room_num');		// simple implementation where course meets in only one room

			// CONSTRAINTS
      $table->index('course_id');
      $table->index('section_num');

      $table->foreign('net_id')->references('net_id')->on('professors')->on_delete('cascade')->on_update('cascade');
      $table->foreign('room_num')->references('room_num')->on('rooms')->on_delete('restrict')->on_update('cascade');
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
