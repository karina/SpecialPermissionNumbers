<?php

class Create_Requests {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('permrequests', function($table) {
		  $table->increments('id');
		
		  $table->string('net_id',64);
		  $table->integer('cid');
		  $table->timestamp('ts');
		
		  $table->integer('first');   // first choice section
		  $table->integer('second');  // second choice
		  $table->integer('third');   // third choice
		
		  $table->integer('status');
		  $table->float('rating');
		  $table->string('comment',1000);
		}); 
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('permrequests');
	}

}