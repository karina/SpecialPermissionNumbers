<?php

class Create_Rooms {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::create('rooms', function($table) {
      $table->increments('id');

      $table->integer('max_seats');
      $table->integer('room_num');
      
    });

  }

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
    Schema::drop('rooms');
  }


}
