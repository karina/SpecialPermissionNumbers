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
			$table->increments('id');

			$table->string('net_id',64);
			$table->timestamp('created_at');
			$table->timestamp('updated_at');
			$table->text('email_body');
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
