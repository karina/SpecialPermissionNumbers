<?php

class Add_Constraints {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// Schema::table('students', function($table) {
		// 	$table->foreign('net_id')->references('net_id')->on('users')->on_delete('restricted')->on_update('restricted');
		// });
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// Schema::table('students', function($table) {
		// 	$table->drop_foreign('students_net_id_foreign');
		// });
	}

}