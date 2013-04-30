<?php

class Create_Profs {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::create('professors', function($table) {
      $table->increments('id');
  
      $table->string('net_id', 64);
      $table->string('email_addr',64);
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
    Schema::drop('professors');
	}

}
