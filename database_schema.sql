use test;

-- Student accounts
CREATE TABLE Student(
	net_id VARCHAR(64) PRIMARY KEY,
	passwd VARCHAR(64) NOT NULL,
	email_addr VARCHAR(64) NOT NULL,

	ruid INT NOT NULL,

	major VARCHAR(64) NOT NULL,
	credits INTEGER NOT NULL,
	gpa REAL NOT NULL,
	grad_year INTEGER NOT NULL
);

-- Courses that students have taken/are taking
-- course_id is NOT a foreign key
CREATE TABLE Registered_course(
	course_id INT,
	net_id VARCHAR(64),
	grade REAL,

	PRIMARY KEY(course_id, net_id),
	FOREIGN KEY(net_id) REFERENCES Student(net_id)
		ON DELETE CASCADE
		ON UPDATE CASCADE
);

-- Professor accounts
CREATE TABLE Professor(
	net_id VARCHAR(64) PRIMARY KEY,
	passwd VARCHAR(64) NOT NULL,
	email_addr VARCHAR(64) NOT NULL,
);

-- Students' special permission requests
CREATE TABLE Permrequest(
	course_id INT,
	net_id INT,

	status,			-- status of request
	rating REAL,
	ts TIMESTAMP,
	first INT,		-- first choice section
	second INT,		-- second choice
	third INT,		-- third choice
	comment VARCHAR(5000),
	PRIMARY KEY(course_id, net_id),
	FOREIGN KEY(course_id) REFERENCES Course(course_id)
		ON DELETE CASCADE
		ON UPDATE CASCADE,
	FOREIGN KEY(net_id) REFERENCES Student(net_id)
		ON DELETE CASCADE
		ON UPDATE CASCADE
);

-- Special permission numbers that prof manages
-- 10 numbers per section
CREATE TABLE Special_permission_num(
	course_id INT,
	section_num INT,
	sp_num INT,

	stud VARCHAR(64),
	status,

	PRIMARY KEY(course_id, section_num, sp_num),
	FOREIGN KEY(course_id) REFERENCES Course_section(course_id)
		ON DELETE CASCADE
		ON UPDATE CASCADE,
	FOREIGN KEY(section_num) REFERENCES Course_section(course_id)
		ON DELETE CASCADE
		ON UPDATE CASCADE,
	FOREIGN KEY(stud) REFERENCES Student(net_id)
		ON DELETE SET NULL
		ON UPDATE CASCADE
);

-- Course sections
-- course_id is in the form: XXXYYY, where xxx is the department number
-- and yyy is course number
CREATE TABLE Course_section(
	course_id INT,
	section_num INT,

	prof VARCHAR(64) NOT NULL,
	max_students INT NOT NULL,
	num_students INT NOT NULL,

	PRIMARY KEY(course_id, section_num),
	FOREIGN KEY(prof) REFERENCES Professor(net_id)
		ON DELETE CASCADE
		ON UPDATE CASCADE
);

-- Prerequisites
CREATE TABLE Prerequisite(
	course_id INT,
	set_id INT,
	prereq INT,

	PRIMARY KEY(course_id, set_id, prereq),
	FOREIGN KEY(course_id) REFERENCES Course_section(course_id)
		ON DELETE CASCADE
		ON UPDATE CASCADE
)

-- Needs constraint: every room must meet in at least one location
-- Times and locations of courses
CREATE TABLE Located_In(
	course_id INT,
	section_num INT,
	room_num VARCHAR(64),
	meeting_time TIME, -- HOW TO STORE MEETING TIMES?

	PRIMARY KEY(course_id, section_num, room_num, meeting_time),
	FOREIGN KEY(course_id) REFERENCES Course_section(course_id)
		ON DELETE CASCADE
		ON UPDATE CASCADE,
	FOREIGN KEY(section_num) REFERENCES Course_section(course_id)
		ON DELETE CASCADE
		ON UPDATE CASCADE,
	FOREIGN KEY(room_num) REFERENCES Room(room_num)
		ON DELETE NO ACTION
		ON UPDATE CASCADE,
	CHECK ()
);

-- Rooms
-- Currently, building info is stored in room_num as "BUILDING-NUM"
-- ex. "HILL-252"
CREATE TABLE Room(
	room_num VARCHAR(64) PRIMARY KEY,
	max_seats INT
);

CREATE TABLE Email(
	net_id VARCHAR(64),
	email_body TEXT,
	ts TIMESTAMP,

	PRIMARY KEY(net_id, ts),
	FOREIGN KEY(net_id) REFERENCES Professor(net_id)
		ON DELETE CASCADE,
		ON UPDATE CASCADE
);