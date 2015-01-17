use PROJECT;

DROP TABLES EVENT, POST, ORG, USER;

CREATE TABLE USER (
id INT UNSIGNED NOT NULL auto_increment PRIMARY KEY,
userName VARCHAR(20) NOT NULL UNIQUE,
email VARCHAR(30) NOT NULL UNIQUE,
salt CHAR(60) NOT NULL,
HASH CHAR(85),
avatar TINYINT UNSIGNED DEFAULT '1'
)ENGINE=InnoDB;

CREATE TABLE ORG (
id INT UNSIGNED NOT NULL auto_increment PRIMARY KEY,
coUserName VARCHAR(20) NOT NULL UNIQUE,
company VARCHAR(150) NOT NULL,
salt CHAR(60) NOT NULL,
HASH CHAR(85),
addressOne VARCHAR(50) NOT NULL,
addressTwo VARCHAR(50),
city VARCHAR (25) NOT NULL,
state VARCHAR(2) NOT NULL,
zip CHAR(5) NOT NULL,
phoneOne VARCHAR(10) NOT NULL,
phoneTwo VARCHAR(10),
fax VARCHAR(10),
email VARCHAR(30) NOT NULL UNIQUE,
website VARCHAR(30) NOT NULL UNIQUE
)ENGINE=InnoDB;


CREATE TABLE POST (
id INT UNSIGNED NOT NULL auto_increment PRIMARY KEY,
title VARCHAR(50) NOT NULL,
orgName VARCHAR(150),
message VARCHAR(300) NOT NULL,
likeCount MEDIUMINT UNSIGNED,
description VARCHAR(150) NOT NULL,
userID INT UNSIGNED NOT NULL,
FOREIGN KEY (userID) REFERENCES USER(id) ON DELETE CASCADE ON UPDATE CASCADE
)ENGINE=InnoDB;

CREATE TABLE EVENT (
id INT UNSIGNED NOT NULL auto_increment PRIMARY KEY,
title VARCHAR(75) NOT NULL,
startDate DATE NOT NULL,
startTime TIMESTAMP NOT NULL,
endTime TIMESTAMP NOT NULL,
description VARCHAR(300) NOT NULL,
streetAddress VARCHAR(50) NOT NULL,
city VARCHAR (25) NOT NULL,
state VARCHAR(2) NOT NULL,
zip CHAR(5) NOT NULL,
orgID INT UNSIGNED NOT NULL,
FOREIGN KEY (orgID) REFERENCES ORG(id) ON DELETE CASCADE ON UPDATE CASCADE
)ENGINE=InnoDB;

insert into ORG (id, coUserName, company, salt, hash, addressOne, addressTwo, city, 
state, zip, phoneOne, phoneTwo, fax, email, website) VALUES (NULL, "amredcross", "American Red Cross", salt, hash, "200 Piedmont Blvd.", "Rock Hill", "SC", "29732", "803-329-6575", "schwartz37@gmail.com", "http://www.redcross.org/sc/rock-hill");

insert into ORG (id, coUserName, company, salt, hash, addressOne, addressTwo, city, 
state, zip, phoneOne, phoneTwo, fax, email, website) VALUES (NULL, "amredcross", "American Red Cross", salt, hash, "200 Piedmont Blvd.", "Rock Hill", "SC", "29732", "803-329-6575", "schwartz37@gmail.com", "http://www.redcross.org/sc/rock-hill");

insert into ORG (id, coUserName, company, salt, hash, addressOne, addressTwo, city, 
state, zip, phoneOne, phoneTwo, fax, email, website) VALUES (NULL, "amredcross", "American Red Cross", salt, hash, "200 Piedmont Blvd.", "Rock Hill", "SC", "29732", "803-329-6575", "schwartz37@gmail.com", "http://www.redcross.org/sc/rock-hill");

insert into ORG (id, coUserName, company, salt, hash, addressOne, addressTwo, city, 
state, zip, phoneOne, phoneTwo, fax, email, website) VALUES (NULL, "amredcross", "American Red Cross", salt, hash, "200 Piedmont Blvd.", "Rock Hill", "SC", "29732", "803-329-6575", "schwartz37@gmail.com", "http://www.redcross.org/sc/rock-hill");

, 
