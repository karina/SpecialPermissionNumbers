<?php

class Create_Professors {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('professors', function($table) {
			$table->engine = 'InnoDB';

			// ATTRIBUTES
			$table->increments('id');

			$table->string('net_id', 64);
			$table->string('passwd', 64);
			$table->string('email_addr', 64);

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
		Schema::drop('professors');
	}

}