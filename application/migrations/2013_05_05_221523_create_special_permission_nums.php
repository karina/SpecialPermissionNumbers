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
			$table->increments('id');

			$table->integer('cid');
			$table->integer('section_num');
			$table->integer('sp_num');

			// Status mapping:
			// 0 = not taken
			// 1 = taken
			// add as needed?
			$table->integer('status');
			$table->string('student',64)->nullable();
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