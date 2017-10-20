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
  `id` bigint(10) NOT NULL,
  `name` longtext NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `created_by` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `last_modified_by` varchar(50) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `student_id` bigint(10) DEFAULT NULL,
  `lecturer_id` bigint(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `student_attachment_id_idx` (`student_id`),
  KEY `lecturer_attachment_id_idx` (`lecturer_id`),
  CONSTRAINT `lecturer_attachment_id` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `student_attachment_id` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attachments`
--

LOCK TABLES `attachments` WRITE;
/*!40000 ALTER TABLE `attachments` DISABLE KEYS */;
/*!40000 ALTER TABLE `attachments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `configurations`
--

DROP TABLE IF EXISTS `configurations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `configurations` (
  `id` bigint(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `value` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `configurations`
--

LOCK TABLES `configurations` WRITE;
/*!40000 ALTER TABLE `configurations` DISABLE KEYS */;
/*!40000 ALTER TABLE `configurations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `drp_logs`
--

DROP TABLE IF EXISTS `drp_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `drp_logs` (
  `id` bigint(10) NOT NULL,
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
-- Dumping data for table `drp_logs`
--

LOCK TABLES `drp_logs` WRITE;
/*!40000 ALTER TABLE `drp_logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `drp_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `examiners`
--

DROP TABLE IF EXISTS `examiners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `examiners` (
  `id` bigint(10) NOT NULL,
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
  KEY `mock_viva_log_examiner_id_idx` (`mock_viva_log_id`),
  KEY `drp_log_examiner_id_idx` (`drp_log_id`),
  KEY `viva_log_examiner_id_idx` (`viva_log_id`),
  CONSTRAINT `drp_log_examiner_id` FOREIGN KEY (`drp_log_id`) REFERENCES `drp_logs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `lecturer_examiner_id` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `mock_viva_log_examiner_id` FOREIGN KEY (`mock_viva_log_id`) REFERENCES `mock_viva_logs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `viva_log_examiner_id` FOREIGN KEY (`viva_log_id`) REFERENCES `viva_logs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `examiners`
--

LOCK TABLES `examiners` WRITE;
/*!40000 ALTER TABLE `examiners` DISABLE KEYS */;
/*!40000 ALTER TABLE `examiners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lecturers`
--

DROP TABLE IF EXISTS `lecturers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lecturers` (
  `id` bigint(10) NOT NULL,
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
-- Dumping data for table `lecturers`
--

LOCK TABLES `lecturers` WRITE;
/*!40000 ALTER TABLE `lecturers` DISABLE KEYS */;
/*!40000 ALTER TABLE `lecturers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mock_viva_logs`
--

DROP TABLE IF EXISTS `mock_viva_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mock_viva_logs` (
  `id` bigint(10) NOT NULL,
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
-- Dumping data for table `mock_viva_logs`
--

LOCK TABLES `mock_viva_logs` WRITE;
/*!40000 ALTER TABLE `mock_viva_logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `mock_viva_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staffs`
--

DROP TABLE IF EXISTS `staffs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staffs` (
  `id` bigint(10) NOT NULL,
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
  KEY `user_id_idx` (`user_id`),
  CONSTRAINT `user_staff_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staffs`
--

LOCK TABLES `staffs` WRITE;
/*!40000 ALTER TABLE `staffs` DISABLE KEYS */;
/*!40000 ALTER TABLE `staffs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `id` bigint(10) NOT NULL,
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
  KEY `user_id_idx` (`user_id`),
  CONSTRAINT `user_student_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supervisors`
--

DROP TABLE IF EXISTS `supervisors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supervisors` (
  `id` bigint(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `last_modified_by` varchar(50) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `lecturer_id` bigint(10) DEFAULT NULL,
  `thesis_id` bigint(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lecturer_supervisor_id_idx` (`lecturer_id`),
  KEY `lecturer_thesis_id_idx` (`thesis_id`),
  CONSTRAINT `lecturer_supervisor_id` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `lecturer_thesis_id` FOREIGN KEY (`thesis_id`) REFERENCES `theses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supervisors`
--

LOCK TABLES `supervisors` WRITE;
/*!40000 ALTER TABLE `supervisors` DISABLE KEYS */;
/*!40000 ALTER TABLE `supervisors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `theses`
--

DROP TABLE IF EXISTS `theses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `theses` (
  `id` bigint(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `field_of_study` varchar(100) NOT NULL,
  `description` longtext,
  `status_drp` varchar(50) DEFAULT NULL,
  `count_drp` int(11) DEFAULT NULL,
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
  KEY `student_thesis_id_idx` (`student_id`),
  CONSTRAINT `student_thesis_id` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `theses`
--

LOCK TABLES `theses` WRITE;
/*!40000 ALTER TABLE `theses` DISABLE KEYS */;
/*!40000 ALTER TABLE `theses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(10) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password_hash` varchar(60) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `image_url` varchar(256) DEFAULT NULL,
  `activated` bit(1) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `viva_logs`
--

DROP TABLE IF EXISTS `viva_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `viva_logs` (
  `id` bigint(10) NOT NULL,
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

--
-- Dumping data for table `viva_logs`
--

LOCK TABLES `viva_logs` WRITE;
/*!40000 ALTER TABLE `viva_logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `viva_logs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-20 10:46:31
