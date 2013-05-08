<?php

class Create_Permrequests {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('permrequests', function($table) {
		  $table->engine = 'InnoDB';

			// ATTRIBUTES
			$table->increments('id');
		
		  $table->string('net_id',64);
		  $table->integer('course_id');
		  $table->timestamp('ts');
		
		  $table->integer('first');   // first choice section
		  $table->integer('second');  // second choice
		  $table->integer('third');   // third choice
		
		  $table->integer('status')->default(0);
			$table->string('comment',1000)->default('');
			$table->string('rating')->default('Undecided'); 

			// CONSTRAINTS
			// $table->foreign('net_id')->references('net_id')->on('students')->on_delete('cascade')->on_update('cascade');
			// $table->foreign('course_id')->references('course_id')->on('courses')->on_delete('cascade')->on_update('cascade');
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
