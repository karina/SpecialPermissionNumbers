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
			$table->increments('id');

			$table->integer('cid');
			$table->integer('set_id');
			$table->integer('prereq');
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