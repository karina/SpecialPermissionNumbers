<?php

// NOTE: This probably shouldn't be run yet...

class Create_All_Tables_Wo_Constraints {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('students', function($table) {
			$table->increments('id');

			$table->string('net_id',64);
			$table->string('passwd', 64);
			$table->string('email_addr', 64);

			$table->string('ruid',64);

			$table->string('major', 32);
			$table->integer('grad_year');
			$table->integer('credits');
			$table->float('gpa');
		});

		Schema::create('registered_courses', function($table) {
			$table->increments('id');

			$table->string('net_id',64);
			$table->integer('cid');
			$table->float('grade');
		});

		Schema::create('professors', function($table) {
			$table->increments('id');

			$table->string('net_id',64);
			$table->string('passwd',64);
			$table->string('email_addr',64);
		});

		Schema::create('requests', function($table) {
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

		Schema::create('special_permission_nums', function($table) {
			$table->increments('id');

			$table->integer('cid');
			$table->integer('section_num');
			$table->integer('sp_num');

			$table->integer('status');
			$table->string('student',64)->nullable();
		});

		Schema::create('course_sections', function($table) {
			$table->increments('id');

			$table->integer('cid');
			$table->integer('section_num');
			
			$table->string('professor',64);
			$table->integer('max_students');
			$table->integer('num_students'); 
			$table->integer('room_num');      // simple implementation where course meets in only one room
		});

		Schema::create('prerequisites', function($table) {
			$table->increments('id');

			$table->integer('cid');
			$table->integer('set_id');
			$table->integer('prereq');
		});

		// Rooms
		// Currently, building info is stored in room_num as "BUILDING-NUM"
		// ex. "HILL-252"
		Schema::create('rooms', function($table) {
			$table->increments('id');

			$table->integer('room_num');
			$table->integer('max_seats');
		});

		// CREATE TABLE Located_In(
		//  cid INT,
		//  section_num INT,
		//  room_num VARCHAR(64),
		//  meeting_time TIME, -- HOW TO STORE MEETING TIMES?

		//  PRIMARY KEY(cid, section_num, room_num, meeting_time),
		//  FOREIGN KEY(cid) REFERENCES Course_section(cid)
		//    ON DELETE CASCADE
		//    ON UPDATE CASCADE,
		//  FOREIGN KEY(section_num) REFERENCES Course_section(cid)
		//    ON DELETE CASCADE
		//    ON UPDATE CASCADE,
		//  FOREIGN KEY(room_num) REFERENCES Room(room_num)
		//    ON DELETE NO ACTION
		//    ON UPDATE CASCADE,
		//  CHECK ()
		// );
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}