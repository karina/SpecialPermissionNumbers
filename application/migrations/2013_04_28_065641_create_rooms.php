<?php

class Create_Rooms {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// Currently, building info is stored in room_num as "BUILDING-NUM"
		// ex. "HILL-252"
		Schema::create('rooms', function($table) {
			$table->increments('id');

			$table->integer('room_num');
			$table->integer('max_seats');
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