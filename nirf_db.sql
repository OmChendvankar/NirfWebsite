-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 05:30 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nirf_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_peers`
--

CREATE TABLE `academic_peers` (
  `A_YEAR` varchar(255) NOT NULL,
  `DEPT_ID` int(11) NOT NULL,
  `TITLE` varchar(255) NOT NULL,
  `FIRST_NAME` varchar(255) NOT NULL,
  `LAST_NAME` varchar(255) NOT NULL,
  `JOB_TITLE` varchar(255) NOT NULL,
  `INSTITUTION` varchar(255) NOT NULL,
  `DEPARTMENT` varchar(255) NOT NULL,
  `LOCATION` varchar(255) NOT NULL,
  `EMAIL_ID` varchar(255) NOT NULL,
  `PHONE` varchar(15) NOT NULL,
  `TY_PE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `annual_operation_expenditure`
--

CREATE TABLE `annual_operation_expenditure` (
  `A_YEAR` varchar(255) NOT NULL,
  `SALARIES` float NOT NULL,
  `MAINTENANCE_OF_ACADEMIC_INFRA` float NOT NULL,
  `SEMINARS_WORKSHOPS` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consultancy_projects`
--

CREATE TABLE `consultancy_projects` (
  `A_YEAR` varchar(255) NOT NULL,
  `DEPT_ID` int(11) NOT NULL,
  `TOTAL_NO_OF_CP` int(11) NOT NULL,
  `TOTAL_NO_OF_CLIENT` int(11) NOT NULL,
  `TOTAL_AMT_RECEIVED` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `consultancy_projects`
--

INSERT INTO `consultancy_projects` (`A_YEAR`, `DEPT_ID`, `TOTAL_NO_OF_CP`, `TOTAL_NO_OF_CLIENT`, `TOTAL_AMT_RECEIVED`) VALUES
('2022-2023', 1, 5, 10, 15000),
('2022-2023', 2, 6, 12, 25000);

-- --------------------------------------------------------

--
-- Table structure for table `country_master`
--

CREATE TABLE `country_master` (
  `COUNTRY_CODE` int(11) NOT NULL,
  `COUNTRY_NAME` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `country_wise_student`
--

CREATE TABLE `country_wise_student` (
  `A_YEAR` varchar(255) NOT NULL,
  `DEPT_ID` int(11) NOT NULL,
  `PROGRAM_CODE` int(11) NOT NULL,
  `PROGRAM_NAME` varchar(255) NOT NULL,
  `COUNTRY_CODE` int(11) NOT NULL,
  `NO_OF_STUDENT_COUNTRY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `department_master`
--

CREATE TABLE `department_master` (
  `DEPT_ID` int(11) NOT NULL,
  `DEPT_NAME` varchar(255) NOT NULL,
  `HOD_NAME` varchar(100) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `PASS_WORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department_master`
--

INSERT INTO `department_master` (`DEPT_ID`, `DEPT_NAME`, `HOD_NAME`, `ADDRESS`, `EMAIL`, `PASS_WORD`) VALUES
(1, 'UDIT', 'UDIT', 'UDIT', 'UDIT@gmail.com', 'UDIT'),
(2, 'CS', 'CS', 'CS', 'CS@gmail.com', 'cs');

-- --------------------------------------------------------

--
-- Table structure for table `employers_details`
--

CREATE TABLE `employers_details` (
  `A_YEAR` varchar(255) NOT NULL,
  `DEPT_ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(255) NOT NULL,
  `LAST_NAME` varchar(255) NOT NULL,
  `DESIGNATION` varchar(255) NOT NULL,
  `TYPE_OF_INDUSTRY` varchar(255) NOT NULL,
  `COMPANY` varchar(255) NOT NULL,
  `LOCATION` varchar(255) NOT NULL,
  `EMAIL_ID` varchar(255) NOT NULL,
  `PHONE` int(11) NOT NULL,
  `TYPE_INDIAN_FOREIGN` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exec_dev`
--

CREATE TABLE `exec_dev` (
  `A_YEAR` varchar(255) NOT NULL,
  `DEPT_ID` int(11) NOT NULL,
  `NO_OF_EXEC_PROGRAMS` int(11) NOT NULL,
  `TOTAL_PARTICIPANTS` int(11) NOT NULL,
  `TOTAL_INCOME` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_count`
--

CREATE TABLE `faculty_count` (
  `A_YEAR` varchar(255) NOT NULL,
  `DEPT_ID` int(11) NOT NULL,
  `NUM_OF_INTERN_MALE_FACULTY` int(11) NOT NULL,
  `NUM_OF_INTERN_FEMALE_FACULTY` int(11) NOT NULL,
  `NUM_OF_INTERN_OTHER_FACULTY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_details`
--

CREATE TABLE `faculty_details` (
  `A_YEAR` varchar(255) NOT NULL,
  `DEPT_ID` int(11) NOT NULL,
  `FACULTY_NAME` varchar(255) NOT NULL,
  `GENDER` varchar(255) NOT NULL,
  `DESIGNATION` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `AGE` int(11) NOT NULL,
  `QUALIF` varchar(255) NOT NULL,
  `EXPERIENCE` int(11) NOT NULL,
  `PAN_NUM` varchar(255) NOT NULL,
  `FACULTY_ASSO_IN_PREV_YEAR` tinyint(1) NOT NULL,
  `FACULTY_EXP_TEACHING` int(11) NOT NULL,
  `FACULTY_EXP_INDUSTRIAL` int(11) NOT NULL,
  `JOINING_INSTITUTE_DATE` date NOT NULL,
  `LATEST_DATE` date NOT NULL,
  `ASSOC_TYPE` varchar(255) NOT NULL,
  `EMAIL_ID` varchar(255) NOT NULL,
  `MOBILE_NUM` int(11) NOT NULL,
  `NAME_OF_AWARD` varchar(255) DEFAULT NULL,
  `LEVEL_OF_AWARD` varchar(255) DEFAULT NULL,
  `NAME_OF_AWARD_AGENCY` varchar(255) DEFAULT NULL,
  `ADD_OF_AWARD_AGENCY` varchar(255) DEFAULT NULL,
  `YEAR_OF_RECEIVED_AWARD` year(4) DEFAULT NULL,
  `EMAIL_OF_AGENCY` varchar(255) DEFAULT NULL,
  `CONTACT_OF_AGENCY` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `financial_expenditure`
--

CREATE TABLE `financial_expenditure` (
  `A_YEAR` varchar(255) NOT NULL,
  `LIBRARY_AMT` float NOT NULL,
  `EQUIPEMENTS_FOR_LAB_AMT` float NOT NULL,
  `ENGINEERING_WORKSHOPS_AMT` float NOT NULL,
  `STUDIOS_AMT` float NOT NULL,
  `OTHER_EXPEN_ON_CREATION_OF_CAPITALASSET__AMT` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `intake_actual_strength`
--

CREATE TABLE `intake_actual_strength` (
  `A_YEAR` varchar(255) NOT NULL,
  `DEPT_ID` int(11) DEFAULT NULL,
  `PROGRAM_CODE` int(11) NOT NULL,
  `PROGRAM_NAME` varchar(255) NOT NULL,
  `DURATION` varchar(255) NOT NULL,
  `NO_STUDENT_INTAKE` int(11) NOT NULL,
  `NO_MALE_STUDENT` int(11) NOT NULL,
  `NO_FEMALE_STUDENT` int(11) NOT NULL,
  `NO_STUDENT_WITHIN_STATE_MALE` int(11) NOT NULL,
  `NO_STUDENT_WITHIN_STATE_FEMALE` int(11) NOT NULL,
  `NO_STUDENT_OUTSIDE_STATE_MALE` int(11) NOT NULL,
  `NO_STUDENT_OUTSIDE_STATE_FEMALE` int(11) NOT NULL,
  `NO_STUDENT_OUTSIDE_COUNTRY_MALE` int(11) NOT NULL,
  `NO_STUDENT_OUTSIDE_COUNTRY_FEMALE` int(11) NOT NULL,
  `NO_STUDENT_ECONOMIC_BACKWARD_MALE` int(11) NOT NULL,
  `NO_STUDENT_ECONOMIC_BACKWARD_FEMALE` int(11) NOT NULL,
  `NO_STUDENT_SOCIAL_BACKWARD_SC_ST_OBC_MALE` int(11) NOT NULL,
  `NO_STUDENT_SOCIAL_BACKWARD_SC_ST_OBC_FEMALE` int(11) NOT NULL,
  `NO_STUDENT_RECEIVING_SCHOLARSHIP_GOVERN_MALE` int(11) NOT NULL,
  `NO_STUDENT_RECEIVING_SCHOLARSHIP_GOVERN_FEMALE` int(11) NOT NULL,
  `NO_STUDENT_RECEIVING_SCHOLARSHIP_INSTIT_MALE` int(11) NOT NULL,
  `NO_STUDENT_RECEIVING_SCHOLARSHIP_INSTIT_FEMALE` int(11) NOT NULL,
  `NO_STUDENT_RECEIVING_SCHOLARSHIP_PRIVATE_BODY_MALE` int(11) NOT NULL,
  `NO_STUDENT_RECEIVING_SCHOLARSHIP_PRIVATE_BODY_FEMALE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inter_faculty`
--

CREATE TABLE `inter_faculty` (
  `A_YEAR` varchar(255) NOT NULL,
  `DEPT_ID` int(11) NOT NULL,
  `TOTAL_NO_INBOUND_FAC_MALE` int(11) NOT NULL,
  `TOTAL_NO_INBOUND_FAC_FEMALE` int(11) NOT NULL,
  `TOTAL_NO_OUTBOUND_FAC_MALE` int(11) NOT NULL,
  `TOTAL_NO_OUTBOUND_FAC_FEMALE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `online_education_details`
--

CREATE TABLE `online_education_details` (
  `A_YEAR` varchar(255) NOT NULL,
  `DEPT_ID` int(11) NOT NULL,
  `PORTAL_NAME` int(11) NOT NULL,
  `NO_STUDENT_OFFER_OS` int(11) NOT NULL,
  `NO_OF_ONLINE_COURSES` int(11) NOT NULL,
  `TOTAL_NO_CREDIT_TRANS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patent_details`
--

CREATE TABLE `patent_details` (
  `A_YEAR` varchar(255) NOT NULL,
  `DEPT_ID` int(11) NOT NULL,
  `PATENT_APPLICATION_NO` varchar(255) NOT NULL,
  `STATUS_OF_PATENT` varchar(255) NOT NULL,
  `INVENTOR_NAME` varchar(255) NOT NULL,
  `TITLE_OF_PATENT` varchar(255) NOT NULL,
  `APPLICANT_NAME` varchar(255) NOT NULL,
  `PATENT_DATE` date NOT NULL,
  `PATENT_NUMBER` int(11) NOT NULL,
  `PATENT_AMT` int(11) NOT NULL,
  `ASIGNEES_NAME` varchar(255) NOT NULL,
  `URL` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patent_info`
--

CREATE TABLE `patent_info` (
  `A_YEAR` varchar(255) NOT NULL,
  `DEPT_ID` int(11) NOT NULL,
  `NO_OF_PATENT_FILLED_1_YEAR` int(11) DEFAULT NULL,
  `NO_OF_PATENT_FILLED_2_YEAR` int(11) DEFAULT NULL,
  `NO_OF_PATENT_FILLED_3_YEAR` int(11) DEFAULT NULL,
  `NO_OF_PATENT_PUBLISHED_1_YEAR` int(11) DEFAULT NULL,
  `NO_OF_PATENT_PUBLISHED_2_YEAR` int(11) DEFAULT NULL,
  `NO_OF_PATENT_PUBLISHED_3_YEAR` int(11) DEFAULT NULL,
  `NO_OF_PATENT_GRANTED_1_YEAR` int(11) DEFAULT NULL,
  `NO_OF_PATENT_GRANTED_2_YEAR` int(11) DEFAULT NULL,
  `NO_OF_PATENT_GRANTED_3_YEAR` int(11) DEFAULT NULL,
  `TOTAL_AMT_GRANTED` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phd_details`
--

CREATE TABLE `phd_details` (
  `A_YEAR` varchar(255) NOT NULL,
  `DEPT_ID` int(11) NOT NULL,
  `FULL_TIME_MALE_STUDENTS` int(11) NOT NULL,
  `FULL_TIME_FEMALE_STUDENTS` int(11) NOT NULL,
  `PART_TIME_MALE_STUDENTS` int(11) NOT NULL,
  `PART_TIME_FEMALE_STUDENTS` int(11) NOT NULL,
  `PHD_AWARDED_MALE_STUDENTS_FULL` int(11) NOT NULL,
  `PHD_AWARDED_FEMALE_STUDENTS_FULL` int(11) NOT NULL,
  `PHD_AWARDED_MALE_STUDENTS_PART` int(11) NOT NULL,
  `PHD_AWARDED_FEMALE_STUDENTS_PART` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `placement_details`
--

CREATE TABLE `placement_details` (
  `A_YEAR` varchar(255) NOT NULL,
  `DEPT_ID` int(11) NOT NULL,
  `PROGRAM_CODE` int(11) NOT NULL,
  `PROGRAM_NAME` varchar(255) NOT NULL,
  `DURATION` varchar(255) NOT NULL,
  `TOTAL_NO_OF_STUDENT` int(11) NOT NULL,
  `NUM_OF_STUDENTS_ADMITTED_LATERAL_ENTRY` int(11) NOT NULL,
  `TOTAL_NUM_OF_STUDENTS_GRADUATED` int(11) NOT NULL,
  `TOTAL_NUM_OF_STUDENTS_PLACED` int(11) NOT NULL,
  `NUM_OF_STUDENTS_IN_HIGHER_STUDIES` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `program_master`
--

CREATE TABLE `program_master` (
  `PROGRAM_CODE` int(11) NOT NULL,
  `PROGRAM_NAME` varchar(255) NOT NULL,
  `DURATION` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `program_master`
--

INSERT INTO `program_master` (`PROGRAM_CODE`, `PROGRAM_NAME`, `DURATION`) VALUES
(1, 'UG', '3'),
(2, 'UG', '4'),
(3, 'UG', '5'),
(4, 'UG', '6'),
(5, 'PG', '1'),
(6, 'PG', '2'),
(7, 'PG', '3'),
(8, 'PG Intergrated', '5'),
(9, 'PG Intergrated', '6');

-- --------------------------------------------------------

--
-- Table structure for table `research_staff`
--

CREATE TABLE `research_staff` (
  `A_YEAR` varchar(255) NOT NULL,
  `DEPT_ID` int(11) NOT NULL,
  `TOTAL_NUM_OF_RESEARCH_STAFF_MALE` int(11) NOT NULL,
  `TOTAL_NUM_OF_RESEARCH_STAFF_FEMALE` int(11) NOT NULL,
  `AGENCY_SPONSORING` varchar(255) NOT NULL,
  `AMOUNT_RECEIVED` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `research_staff`
--

INSERT INTO `research_staff` (`A_YEAR`, `DEPT_ID`, `TOTAL_NUM_OF_RESEARCH_STAFF_MALE`, `TOTAL_NUM_OF_RESEARCH_STAFF_FEMALE`, `AGENCY_SPONSORING`, `AMOUNT_RECEIVED`) VALUES
('2022-2023', 1, 5, 3, 'TCS', 15000),
('2022-2023', 2, 3, 4, 'GERMANINS', 23000);

-- --------------------------------------------------------

--
-- Table structure for table `salary_details`
--

CREATE TABLE `salary_details` (
  `A_YEAR` varchar(255) NOT NULL,
  `DEPT_ID` int(11) NOT NULL,
  `PROGRAM_CODE` int(11) NOT NULL,
  `PROGRAM_NAME` varchar(255) NOT NULL,
  `ROLL_NO` int(11) NOT NULL,
  `STUDENT_NAME` varchar(255) NOT NULL,
  `COMPANY_NAME` varchar(255) NOT NULL,
  `DESIGNATION` varchar(255) NOT NULL,
  `SALARY` float NOT NULL,
  `JOB_ORDER` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sponsored_project_details`
--

CREATE TABLE `sponsored_project_details` (
  `A_YEAR` varchar(255) NOT NULL,
  `DEPT_ID` int(11) NOT NULL,
  `TOTAL_SPONSORED_PROJECTS` int(11) NOT NULL,
  `TOTAL_SPONSORED_PROJECTS_AGENCIES` int(11) NOT NULL,
  `TOTAL_AMT_RECEIVED_AGENCIES` float NOT NULL,
  `TOTAL_PROJECTS_SPONSORED_INDUSTRIES` int(11) NOT NULL,
  `TOTAL_AMT_RECEIVED_INDUSTRIES` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_peers`
--
ALTER TABLE `academic_peers`
  ADD KEY `DEPT_ID` (`DEPT_ID`);

--
-- Indexes for table `consultancy_projects`
--
ALTER TABLE `consultancy_projects`
  ADD KEY `DEPT_ID` (`DEPT_ID`);

--
-- Indexes for table `country_master`
--
ALTER TABLE `country_master`
  ADD PRIMARY KEY (`COUNTRY_CODE`);

--
-- Indexes for table `country_wise_student`
--
ALTER TABLE `country_wise_student`
  ADD KEY `COUNTRY_CODE` (`COUNTRY_CODE`);

--
-- Indexes for table `department_master`
--
ALTER TABLE `department_master`
  ADD PRIMARY KEY (`DEPT_ID`);

--
-- Indexes for table `employers_details`
--
ALTER TABLE `employers_details`
  ADD KEY `DEPT_ID` (`DEPT_ID`);

--
-- Indexes for table `exec_dev`
--
ALTER TABLE `exec_dev`
  ADD KEY `DEPT_ID` (`DEPT_ID`);

--
-- Indexes for table `faculty_details`
--
ALTER TABLE `faculty_details`
  ADD KEY `DEPT_ID` (`DEPT_ID`);

--
-- Indexes for table `intake_actual_strength`
--
ALTER TABLE `intake_actual_strength`
  ADD PRIMARY KEY (`PROGRAM_CODE`) USING BTREE;

--
-- Indexes for table `online_education_details`
--
ALTER TABLE `online_education_details`
  ADD KEY `DEPT_ID` (`DEPT_ID`);

--
-- Indexes for table `patent_details`
--
ALTER TABLE `patent_details`
  ADD KEY `DEPT_ID` (`DEPT_ID`);

--
-- Indexes for table `patent_info`
--
ALTER TABLE `patent_info`
  ADD KEY `DEPT_ID` (`DEPT_ID`);

--
-- Indexes for table `phd_details`
--
ALTER TABLE `phd_details`
  ADD KEY `DEPT_ID` (`DEPT_ID`);

--
-- Indexes for table `placement_details`
--
ALTER TABLE `placement_details`
  ADD KEY `DEPT_ID` (`DEPT_ID`),
  ADD KEY `PROGRAM_CODE` (`PROGRAM_CODE`);

--
-- Indexes for table `program_master`
--
ALTER TABLE `program_master`
  ADD PRIMARY KEY (`PROGRAM_CODE`);

--
-- Indexes for table `research_staff`
--
ALTER TABLE `research_staff`
  ADD KEY `DEPT_ID` (`DEPT_ID`);

--
-- Indexes for table `salary_details`
--
ALTER TABLE `salary_details`
  ADD KEY `DEPT_ID` (`DEPT_ID`),
  ADD KEY `PROGRAM_CODE` (`PROGRAM_CODE`);

--
-- Indexes for table `sponsored_project_details`
--
ALTER TABLE `sponsored_project_details`
  ADD KEY `DEPT_ID` (`DEPT_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academic_peers`
--
ALTER TABLE `academic_peers`
  ADD CONSTRAINT `academic_peers_ibfk_1` FOREIGN KEY (`DEPT_ID`) REFERENCES `department_master` (`DEPT_ID`);

--
-- Constraints for table `consultancy_projects`
--
ALTER TABLE `consultancy_projects`
  ADD CONSTRAINT `consultancy_projects_ibfk_1` FOREIGN KEY (`DEPT_ID`) REFERENCES `department_master` (`DEPT_ID`);

--
-- Constraints for table `country_wise_student`
--
ALTER TABLE `country_wise_student`
  ADD CONSTRAINT `country_wise_student_ibfk_1` FOREIGN KEY (`COUNTRY_CODE`) REFERENCES `country_master` (`COUNTRY_CODE`);

--
-- Constraints for table `employers_details`
--
ALTER TABLE `employers_details`
  ADD CONSTRAINT `employers_details_ibfk_1` FOREIGN KEY (`DEPT_ID`) REFERENCES `department_master` (`DEPT_ID`);

--
-- Constraints for table `exec_dev`
--
ALTER TABLE `exec_dev`
  ADD CONSTRAINT `exec_dev_ibfk_1` FOREIGN KEY (`DEPT_ID`) REFERENCES `department_master` (`DEPT_ID`);

--
-- Constraints for table `faculty_details`
--
ALTER TABLE `faculty_details`
  ADD CONSTRAINT `faculty_details_ibfk_1` FOREIGN KEY (`DEPT_ID`) REFERENCES `department_master` (`DEPT_ID`);

--
-- Constraints for table `intake_actual_strength`
--
ALTER TABLE `intake_actual_strength`
  ADD CONSTRAINT `intake_actual_strength_ibfk_1` FOREIGN KEY (`PROGRAM_CODE`) REFERENCES `program_master` (`PROGRAM_CODE`);

--
-- Constraints for table `online_education_details`
--
ALTER TABLE `online_education_details`
  ADD CONSTRAINT `online_education_details_ibfk_1` FOREIGN KEY (`DEPT_ID`) REFERENCES `department_master` (`DEPT_ID`);

--
-- Constraints for table `patent_details`
--
ALTER TABLE `patent_details`
  ADD CONSTRAINT `patent_details_ibfk_1` FOREIGN KEY (`DEPT_ID`) REFERENCES `department_master` (`DEPT_ID`);

--
-- Constraints for table `patent_info`
--
ALTER TABLE `patent_info`
  ADD CONSTRAINT `patent_info_ibfk_1` FOREIGN KEY (`DEPT_ID`) REFERENCES `department_master` (`DEPT_ID`);

--
-- Constraints for table `phd_details`
--
ALTER TABLE `phd_details`
  ADD CONSTRAINT `phd_details_ibfk_1` FOREIGN KEY (`DEPT_ID`) REFERENCES `department_master` (`DEPT_ID`);

--
-- Constraints for table `placement_details`
--
ALTER TABLE `placement_details`
  ADD CONSTRAINT `placement_details_ibfk_1` FOREIGN KEY (`DEPT_ID`) REFERENCES `department_master` (`DEPT_ID`),
  ADD CONSTRAINT `placement_details_ibfk_2` FOREIGN KEY (`PROGRAM_CODE`) REFERENCES `program_master` (`PROGRAM_CODE`);

--
-- Constraints for table `research_staff`
--
ALTER TABLE `research_staff`
  ADD CONSTRAINT `research_staff_ibfk_1` FOREIGN KEY (`DEPT_ID`) REFERENCES `department_master` (`DEPT_ID`);

--
-- Constraints for table `salary_details`
--
ALTER TABLE `salary_details`
  ADD CONSTRAINT `salary_details_ibfk_1` FOREIGN KEY (`DEPT_ID`) REFERENCES `department_master` (`DEPT_ID`),
  ADD CONSTRAINT `salary_details_ibfk_2` FOREIGN KEY (`PROGRAM_CODE`) REFERENCES `program_master` (`PROGRAM_CODE`);

--
-- Constraints for table `sponsored_project_details`
--
ALTER TABLE `sponsored_project_details`
  ADD CONSTRAINT `sponsored_project_details_ibfk_1` FOREIGN KEY (`DEPT_ID`) REFERENCES `department_master` (`DEPT_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
