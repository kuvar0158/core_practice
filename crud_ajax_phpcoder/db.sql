CREATE TABLE `userinfo` (
`id` int(5) NOT NULL,
`name` varchar(100) NOT NULL,
`username` varchar(100) NOT NULL,
`password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);