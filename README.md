address
CREATE TABLE `address` (
 `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `user_id` int(10) unsigned NOT NULL,
 `country` varchar(32) NOT NULL DEFAULT '',
 `city` varchar(32) NOT NULL DEFAULT '',
 `street` varchar(256) NOT NULL DEFAULT '',
 `zipcode` varchar(32) NOT NULL DEFAULT '',
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8


company
CREATE TABLE `company` (
 `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `user_id` int(11) NOT NULL,
 `name` varchar(32) NOT NULL DEFAULT '',
 `description` varchar(1024) NOT NULL DEFAULT '',
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8


users
CREATE TABLE `users` (
 `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `first_name` varchar(32) NOT NULL DEFAULT '',
 `last_name` varchar(32) NOT NULL DEFAULT '',
 `user_name` varchar(32) NOT NULL DEFAULT '',
 `email` varchar(128) NOT NULL DEFAULT '',
 `company` tinyint(1) NOT NULL DEFAULT '0',
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8



SQL1:
SELECT * from users left join company on users.id=company.user_id
SQL2:
SELECT * from users where id=(SELECT user_id from company where id=1)