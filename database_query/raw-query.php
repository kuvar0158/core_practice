<?php 
$DbExt=new DbExt;
      $stmt="SELECT SUM(rating) as ratings ,COUNT(*) AS count
		FROM
		{{review}}
		WHERE
		merchant_id= ".FunctionsV3::q($merchant_id)."
		AND
		status in ('publish','published');

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
  PRIMARY KEY (Id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;