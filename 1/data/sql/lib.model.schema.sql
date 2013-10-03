
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- tblStudent
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `tblStudent`;


CREATE TABLE `tblStudent`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`student_id` INTEGER,
	`first_name` VARCHAR(255),
	`last_name` VARCHAR(255),
	`middle_name` VARCHAR(255),
	`address` TEXT,
	`profile_pict` VARCHAR(255),
	`date_of_birth` DATETIME,
	`date_added` DATETIME,
	`is_active` TINYINT,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- tblStudentCourse
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `tblStudentCourse`;


CREATE TABLE `tblStudentCourse`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`student_id` INTEGER,
	`section` VARCHAR(255),
	`course_id` INTEGER,
	`year_level_id` INTEGER,
	`school_year` DATETIME,
	`is_active` TINYINT,
	PRIMARY KEY (`id`),
	INDEX `tblStudentCourse_FI_1` (`student_id`),
	CONSTRAINT `tblStudentCourse_FK_1`
		FOREIGN KEY (`student_id`)
		REFERENCES `tblStudent` (`id`),
	INDEX `tblStudentCourse_FI_2` (`course_id`),
	CONSTRAINT `tblStudentCourse_FK_2`
		FOREIGN KEY (`course_id`)
		REFERENCES `tblCourse` (`id`),
	INDEX `tblStudentCourse_FI_3` (`year_level_id`),
	CONSTRAINT `tblStudentCourse_FK_3`
		FOREIGN KEY (`year_level_id`)
		REFERENCES `tblYearLevel` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- tblCourse
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `tblCourse`;


CREATE TABLE `tblCourse`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`course_name` VARCHAR(255),
	PRIMARY KEY (`id`),
	UNIQUE KEY `tblCourse_U_1` (`course_name`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- tblYearLevel
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `tblYearLevel`;


CREATE TABLE `tblYearLevel`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`year_level` VARCHAR(255),
	`semester` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- tblStudentSchedule
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `tblStudentSchedule`;


CREATE TABLE `tblStudentSchedule`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`student_course_id` INTEGER,
	`day` VARCHAR(20),
	`start_hour` TIME,
	`end_hour` TIME,
	`subject_id` TIME,
	`room_id` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `tblStudentSchedule_FI_1` (`student_course_id`),
	CONSTRAINT `tblStudentSchedule_FK_1`
		FOREIGN KEY (`student_course_id`)
		REFERENCES `tblStudentCourse` (`id`),
	INDEX `tblStudentSchedule_FI_2` (`subject_id`),
	CONSTRAINT `tblStudentSchedule_FK_2`
		FOREIGN KEY (`subject_id`)
		REFERENCES `tblSubject` (`id`),
	INDEX `tblStudentSchedule_FI_3` (`room_id`),
	CONSTRAINT `tblStudentSchedule_FK_3`
		FOREIGN KEY (`room_id`)
		REFERENCES `tblRoom` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- tblSubject
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `tblSubject`;


CREATE TABLE `tblSubject`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`subject_name` VARCHAR(255),
	PRIMARY KEY (`id`),
	UNIQUE KEY `tblSubject_U_1` (`subject_name`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- tblRoom
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `tblRoom`;


CREATE TABLE `tblRoom`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255),
	`description` VARCHAR(1000),
	PRIMARY KEY (`id`),
	UNIQUE KEY `tblRoom_U_1` (`name`)
)Type=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
