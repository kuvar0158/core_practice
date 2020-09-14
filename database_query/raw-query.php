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

$sql = 'SELECT * FROM vocetis_answers va JOIN vocetis_incomings vi ON (va.incomingId = vi.incomingId) WHERE vi.hungup = 0 AND ( va.hungup = 0 OR (va.hungup = 1 AND va.hold =1) ) AND nimdaId = :nimdaId ';


raw query-:
SELECT * FROM `admin`  where role in (8,6,9)
 ORDER BY `id` DESC
 