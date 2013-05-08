<?php

class Create_Prerequisites {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prerequisites', function($table) {
			$table->engine = 'InnoDB';

			// ATTRIBUTES
			$table->increments('id');

			$table->integer('course_id');
			$table->integer('set_id');
			$table->integer('prereq');

			// CONSTRAINTS
			// $table->foreign('course_id')->references('course_id')->on('courses')->on_delete('cascade')->on_update('cascade');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('prerequisites');
	}

}