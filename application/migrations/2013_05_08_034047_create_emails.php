<?php

class Create_Emails {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('emails', function($table) {
			$table->engine = 'InnoDB';

			// ATTRIBUTES
			$table->increments('id');

			$table->string('net_id',64);
			$table->timestamp('created_at');
			$table->timestamp('updated_at');
			$table->text('email_body');

			// CONSTRAINTS
			$table->foreign('net_id')->references('net_id')->on('professors')->on_delete('cascade')->on_update('cascade');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('emails');
	}

}
