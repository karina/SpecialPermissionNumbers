<?php

class Create_Special_Permission_Nums {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('special_permission_nums', function($table) {
			$table->engine = 'InnoDB';

			// ATTRIBUTES
			$table->increments('id');

			$table->integer('course_id');
			$table->integer('section_num');
			$table->integer('sp_num');

			// Status mapping:
			// 0 = not taken
			// 1 = taken
			// add as needed?
			$table->integer('status')->default(0);
			$table->string('student',64)->nullable();

			// CONSTRAINTS
			$table->foreign('course_id')->references('course_id')->on('courses')->on_delete('cascade')->on_update('cascade');
			$table->foreign('section_num')->references('section_num')->on('courses')->on_delete('cascade')->on_update('cascade');
		});
	}
	
	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('special_permission_nums');
	}

}