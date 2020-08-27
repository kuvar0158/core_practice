<!-- // ==================------ALTER TABLE - ADD new collumn in table---------==========
 -->  
   ALTER TABLE product
   ADD price DECIMAL(16,2) DEFAULT '0.00' NOT NULL;


   <!-- delete table query in mysql -->
	DROP TABLE table_name;

	<!-- drop database mysql -->
	DROP DATABASE databasename;

	<!-- for create database -->
	CREATE DATABASE databasename;

	<!-- create tables in mysql -->

   CREATE TABLE `tbl_new_client_meeting` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `meetingTitle` text NOT NULL,
  `meetingClientId` int(11) NOT NULL,
  `MeetingDescription` text DEFAULT NULL,
  `MeetingUserAttendent` varchar(500) NOT NULL,
  `MeetingType` int(11) DEFAULT 0 COMMENT '0-:new client, 1-:existing client',
  `MeetingStatus` int(11) NOT NULL,
  `MeetingStartDateTime` varchar(200) DEFAULT NULL,
  `MeetingEndDateTime` varchar(200) DEFAULT NULL,
  `MeetingNewClient` varchar(200) DEFAULT NULL,
  `MeetingCreatedDate` date NOT NULL,
  `Meetingprice` DECIMAL(16,2) DEFAULT '0.00' NOT NULL,
  PRIMARY KEY (Id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


   <!-- truncate table query in mysql -->
   TRUNCATE TABLE  table_name; 

    


