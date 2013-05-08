<?php

class Create_Users {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::create('users', function($table) {
      $table->engine = 'InnoDB';

      // ATTRIBUTES
      $table->increments('id');

      $table->string('net_id', 64);
      $table->string('passwd', 64);

    });
  }

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
    Schema::drop('users');
  }

}
