CREATE DATABASE  IF NOT EXISTS `uitmhea` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `uitmhea`;
-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: uitmhea
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `attachments`
--

DROP TABLE IF EXISTS `attachments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attachments` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `name` longtext NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `created_by` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `last_modified_by` varchar(50) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `student_id` bigint(10) DEFAULT NULL,
  `lecturer_id` bigint(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lecturer_attachment_id_idx` (`lecturer_id`),
  KEY `student_attachment_id_idx` (`student_id`),
  CONSTRAINT `lecturer_attachment_id` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `student_attachment_id` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `configurations`
--

DROP TABLE IF EXISTS `configurations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `configurations` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `value` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `drp_logs`
--

DROP TABLE IF EXISTS `drp_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `drp_logs` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `schedule_date` datetime NOT NULL,
  `comment` longtext,
  `result_status` varchar(50) DEFAULT NULL,
  `created_by` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `last_modified_by` varchar(50) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `thesis_id` bigint(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `thesis_drp_log_id_idx` (`thesis_id`),
  CONSTRAINT `thesis_drp_log_id` FOREIGN KEY (`thesis_id`) REFERENCES `theses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `examiners`
--

DROP TABLE IF EXISTS `examiners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `examiners` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `created_by` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `last_modified_by` varchar(50) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `lecturer_id` bigint(10) DEFAULT NULL,
  `drp_log_id` bigint(10) DEFAULT NULL,
  `mock_viva_log_id` bigint(10) DEFAULT NULL,
  `viva_log_id` bigint(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lecturer_examiner_id_idx` (`lecturer_id`),
  KEY `drp_log_examiner_id_idx` (`drp_log_id`),
  KEY `mock_viva_log_examiner_id_idx` (`mock_viva_log_id`),
  KEY `viva_log_examiner_id_idx` (`viva_log_id`),
  CONSTRAINT `drp_log_examiner_id` FOREIGN KEY (`drp_log_id`) REFERENCES `examiners` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `lecturer_examiner_id` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `mock_viva_log_examiner_id` FOREIGN KEY (`mock_viva_log_id`) REFERENCES `mock_viva_logs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `viva_log_examiner_id` FOREIGN KEY (`viva_log_id`) REFERENCES `viva_logs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lecturers`
--

DROP TABLE IF EXISTS `lecturers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lecturers` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `lecturer_id` varchar(50) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `internal` bit(1) NOT NULL,
  `field_of_study` varchar(250) DEFAULT NULL,
  `external_university` varchar(100) DEFAULT NULL,
  `contact_mobile` varchar(20) DEFAULT NULL,
  `contact_work` varchar(20) DEFAULT NULL,
  `contact_other` varchar(20) DEFAULT NULL,
  `created_by` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `last_modified_by` varchar(50) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` bigint(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lecturer_id_UNIQUE` (`lecturer_id`),
  KEY `user_lecturer_id_idx` (`user_id`),
  CONSTRAINT `user_lecturer_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `mock_viva_logs`
--

DROP TABLE IF EXISTS `mock_viva_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mock_viva_logs` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `schedule_date` datetime NOT NULL,
  `comment` longtext,
  `result_status` varchar(50) DEFAULT NULL,
  `created_by` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `last_modified_by` varchar(50) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `thesis_id` bigint(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `thesis_mock_viva_log_id_idx` (`thesis_id`),
  CONSTRAINT `thesis_mock_viva_log_id` FOREIGN KEY (`thesis_id`) REFERENCES `theses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `staffs`
--

DROP TABLE IF EXISTS `staffs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staffs` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `staff_id` varchar(50) NOT NULL,
  `rank` varchar(50) DEFAULT NULL,
  `contact_mobile` varchar(20) DEFAULT NULL,
  `contact_work` varchar(20) DEFAULT NULL,
  `contact_other` varchar(20) DEFAULT NULL,
  `created_by` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `last_modified_by` varchar(50) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` bigint(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `staffId_UNIQUE` (`staff_id`),
  KEY `user_staff_id_idx` (`user_id`),
  CONSTRAINT `user_staff_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(50) NOT NULL,
  `mode` int(11) NOT NULL,
  `course_code` varchar(20) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `igs` bit(1) NOT NULL,
  `tie` bit(1) NOT NULL,
  `contact_mobile` varchar(20) DEFAULT NULL,
  `contact_work` varchar(20) DEFAULT NULL,
  `contact_other` varchar(20) DEFAULT NULL,
  `overall_completion` bit(1) NOT NULL,
  `register_date` datetime DEFAULT NULL,
  `created_by` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `last_modified_by` varchar(50) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` bigint(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `student_id_UNIQUE` (`student_id`),
  KEY `user_student_id_idx` (`user_id`),
  CONSTRAINT `user_student_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `supervisors`
--

DROP TABLE IF EXISTS `supervisors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supervisors` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `last_modified_by` varchar(50) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `lecturer_id` bigint(10) DEFAULT NULL,
  `thesis_id` bigint(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lecturer_supervisor_id_idx` (`lecturer_id`),
  KEY `thesis_supervisor_id_idx` (`thesis_id`),
  CONSTRAINT `lecturer_supervisor_id` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `thesis_supervisor_id` FOREIGN KEY (`thesis_id`) REFERENCES `theses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `theses`
--

DROP TABLE IF EXISTS `theses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `theses` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `field_of_study` varchar(100) NOT NULL,
  `description` longtext,
  `status_drp` varchar(50) DEFAULT NULL,
  `count_drp` int(11) DEFAULT NULL,
  `count_mock_viva` int(11) DEFAULT NULL,
  `status_mock_viva` varchar(50) DEFAULT NULL,
  `count_viva` int(11) DEFAULT NULL,
  `status_viva` varchar(50) DEFAULT NULL,
  `status_to_submit` varchar(50) DEFAULT NULL,
  `submission_of_thesis` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `last_modified_by` varchar(50) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `student_id` bigint(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `student_attachment_id_idx` (`student_id`),
  CONSTRAINT `student_thesis_id` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `password_hash` varchar(60) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `image_url` varchar(256) DEFAULT NULL,
  `activated` tinyint(1) NOT NULL,
  `lang_key` varchar(5) DEFAULT NULL,
  `activation_key` varchar(20) DEFAULT NULL,
  `reset_key` varchar(20) DEFAULT NULL,
  `created_by` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `reset_date` datetime DEFAULT NULL,
  `last_modified_by` varchar(50) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login_UNIQUE` (`login`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `viva_logs`
--

DROP TABLE IF EXISTS `viva_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `viva_logs` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `schedule_date` datetime NOT NULL,
  `comment` longtext,
  `result_status` varchar(50) DEFAULT NULL,
  `correction_date` datetime DEFAULT NULL,
  `created_by` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `last_modified_by` varchar(50) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `thesis_id` bigint(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `thesis_viva_log_id_idx` (`thesis_id`),
  CONSTRAINT `thesis_viva_log_id` FOREIGN KEY (`thesis_id`) REFERENCES `theses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-02  0:32:21
