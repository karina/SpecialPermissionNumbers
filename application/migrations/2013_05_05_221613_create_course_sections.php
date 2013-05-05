<?php

class Create_Course_Sections {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course_sections', function($table) {
			$table->increments('id');

			$table->integer('cid');
			$table->integer('section_num');
			
			$table->string('professor',64);
			$table->integer('max_students');
			$table->integer('num_students'); 
			$table->integer('room_num');      // simple implementation where course meets in only one room
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('course_sections');
	}

}