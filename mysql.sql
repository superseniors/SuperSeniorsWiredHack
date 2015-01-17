use PROJECT;

DROP TABLES EVENT, POST, ORG, USER;

CREATE TABLE USER (
id INT UNSIGNED NOT NULL auto_increment PRIMARY KEY,
userName VARCHAR(20) NOT NULL UNIQUE,
email VARCHAR(30) NOT NULL UNIQUE,
salt CHAR(61) NOT NULL,
HASH CHAR(40),
avatar TINYINT UNSIGNED DEFAULT '1'
)ENGINE=InnoDB;

CREATE TABLE ORG (
id INT UNSIGNED NOT NULL auto_increment PRIMARY KEY,
coUserName VARCHAR(20) NOT NULL UNIQUE,
company VARCHAR(150) NOT NULL,
salt CHAR(61) NOT NULL,
HASH CHAR(40),
address VARCHAR(50) NOT NULL,
city VARCHAR (25) NOT NULL,
state VARCHAR(2) NOT NULL,
zip CHAR(5) NOT NULL,
phone VARCHAR(14) NOT NULL,
email VARCHAR(30) NOT NULL UNIQUE,
website VARCHAR(30) NOT NULL UNIQUE
)ENGINE=InnoDB;


CREATE TABLE POST (
id INT UNSIGNED NOT NULL auto_increment PRIMARY KEY,
title VARCHAR(50) NOT NULL,
orgName VARCHAR(150),
message VARCHAR(550) NOT NULL,
likeCount MEDIUMINT UNSIGNED DEFAULT "1",
userID INT UNSIGNED NOT NULL,
FOREIGN KEY (userID) REFERENCES USER(id) ON DELETE CASCADE ON UPDATE CASCADE
)ENGINE=InnoDB;

CREATE TABLE EVENT (
id INT UNSIGNED NOT NULL auto_increment PRIMARY KEY,
title VARCHAR(75) NOT NULL,
startDate CHAR(10) NOT NULL,
startTime VARCHAR(10) NOT NULL,
endTime VARCHAR(10) NOT NULL,
description VARCHAR(300) NOT NULL,
streetAddress VARCHAR(50) NOT NULL,
city VARCHAR (25) NOT NULL,
state VARCHAR(2) NOT NULL,
zip CHAR(5) NOT NULL,
orgID INT UNSIGNED NOT NULL,
FOREIGN KEY (orgID) REFERENCES ORG(id) ON DELETE CASCADE ON UPDATE CASCADE
)ENGINE=InnoDB;

insert into USER (id, username, email, salt, HASH, avatar) VALUES (NULL, "derksendesigner", "derksen@gmail.com", "MfdwT~DS8wuBGmk1fTwa4F=r6gKV|xGZKK=_G=SP_5JbXzjChC%wgCP*~I-q", "cbfc62607060c0112255f3764ca5ef1ea3ece4f8", "3");

insert into USER (id, username, email, salt, HASH, avatar) VALUES (NULL, "theallknowningmckim", "mckim@gmail.com", "D7EKToQtMGT4f~zoIIO4|4=w_DUR*VhQuZ35kRJxv3LiUzN-Ou2bHY5L4o_m", "fed77f6f80c54aa4083ef40d1a67fd5f74efd6f1", "2");

insert into USER (id, username, email, salt, HASH, avatar) VALUES (NULL, "frodo24", "frodo@gmail.com", "N6Zo%|CrTm5rXv2vgDs9L efDZ|bAE+Ha5D~F~-|r_hLi4Jv OPSTOWO6%GR", "638456d33c74953eebef2fa90e1f5e0f825ec203", "1");

insert into USER (id, username, email, salt, HASH, avatar) VALUES (NULL, "besmersthebest", "besmer@gmail.com", "gCfl%UmD5*NvUT8m0=|d~VO5e=2*99piGLmHtsjUS3n^wU+1KvMBfseP45nr", "b5a6c19f5e17a6ed5d6df2b5c4e686552a2911f5", "4");

insert into USER (id, username, email, salt, HASH, avatar) VALUES (NULL, "thackersurvivor", "thacker@gmail.com", "NV=ZgtM7bzlZ~NXpFj3y2uoPj+W6E1E2Y~z=S+z+bONp_N-Ii8S5VT3v|Lbf", "b982f29c249482c24a1252cbb98cf8ca9fa70660", "5");

insert into USER (id, username, email, salt, HASH, avatar) VALUES (NULL, "thegreatandpowerfulolsen", "olsen@gmail.com", "vix=SQu2I||y OzlKI7Yd1lyZIlsqO-8u=|WMbs2yB9IFaZc*B%EoVS=c^5_", "4e4c89d89019fec9aba14b05351c2ba37265bdcd", "3");

insert into USER (id, username, email, salt, HASH, avatar) VALUES (NULL, "dannleysprocess", "dannley@gmail.com", "^Q=YW1YCLjq4^hlr50AEZ9i*Vg-Ff-euRTa64d7Ur1uPDpYX|1Agsu=g_2v_", "34062b4bd4bd8d47d99468e8bb4fe34354efd755", "2");

insert into ORG (id, coUserName, company, salt, HASH, address, city, 
state, zip, phone, email, website) VALUES (NULL, "amredcross", "American Red Cross", "OBXLxMs oZRhqqs5eb*JALsznoaV+U~k%JkG|IPvS-u1cBo==J12EysdI^2y", "5b8afc64f89c1b8a2c917f201d3bd570a5daaa50", "200 Piedmont Blvd.", "Rock Hill", "SC", "29732", "803-329-6575", "schwartz37@gmail.com", "http://www.redcross.org/sc/rock-hill");

insert into ORG (id, coUserName, company, salt, HASH, address, city, 
state, zip, phone, email, website) VALUES (NULL, "bandgclub", "Boys & Girls clubs of York County", "Kdjbyh+ Ms=|2Z0EqK=nZfhHy2ahzXJSgsQZjEs=d 0~t0xsSmJrMsXm^Tx2 ", "17c4b8ff15278a5aa30aa553cd3e1a8dba820609", "410 E. Black Street", "Rock Hill", "SC", "29730", "803-324-7920", "bandgclub@gmail.com", "http://www.bgcyc.org");

insert into ORG (id, coUserName, company, salt, HASH, address, city, 
state, zip, phone, email, website) VALUES (NULL, "ycclinic", "York County Free Clinic", "4rha0qOFAtz-PxBC15oeQ3rFd2xwPStRpHn+^XxpCDapXjzv=Pz+zqfE4d|a ", "c515722e9b5d4a7c54510a18d87eff7f34ba1ca7", "410 Oakland Ave.", "Rock Hill", "SC", "29732", "803-366-6337", "freeschelter@gmail.com", "http://yorkcountyfreeclinic.org/index.php");

insert into ORG (id, coUserName, company, salt, HASH, address, city, 
state, zip, phone, email, website) VALUES (NULL, "unitedrockhill", "United Way", "jSh4=MIhIBtVzGttMq6fmit3Xr5EapXa3+kOnu=PVm~j0LH|lT~3Nz%K% g*", "b87793b9225407e237abdbbe0864af1dcb4129be", "226 NorthPark Drive Suite 100", "Rock Hill", "SC", "29731", "803-324-2735", "rhunitedway@gmail.com", "http://www.unitedwayofyc.org");

insert into ORG (id, coUserName, company, salt, HASH, address, city, 
state, zip, phone, email, website) VALUES (NULL, "pgrmsinn", "Pilgrims Inn", "1WmUYkueGv+gp29G9 p*9*bK5b*p4 n1|f|-_Mk^3hfRRH~i7jV|UBcG*o8m", "43e48c1ed09c37c89daedf0a7755065459065fd6", "825 N. Anderson Road", "Rock Hill", "SC", "29730", "803-328-1728", "rhunitedway@gmail.com", "http://pilgrimsinn.org/contact-us/");

insert into ORG (id, coUserName, company, salt, HASH, address, city, 
state, zip, phone, email, website) VALUES (NULL, "petcntr", "Animal Adoption League", "KcmpplujtPZ| Z=6W%O^205zaJsQFGhh85lUi QmbGAZ%L1mEGoBHys-9mH9", "5dabd300309ec592f46cb6758111433543708822", "PO Box 2453", "Rock Hill", "SC", "29732", "803-555-7620", "petcntr@gmail.com", "http://mynextpet.com/");

insert into POST (id, title, orgName, message, likeCount, userID) Values (NULL, "Red Cross Drive", "American Red Cross", "This was so fun!  We made giving blood fun.  I helped recruit people at a local school and gave them a free AJAX lesson for their donation.  We are helping those in need and educating at the same time.  This was a great collaboration.", "1", "4");

insert into POST (id, title, orgName, message, likeCount, userID) Values (NULL, "Bee Day", "Boys and Girls Club", "We took a group of girls and boys to a bee farms.  The kids really enjoyed it and we learned a lot too.  This event allowed us to see how the organization works and get involved.", "1", "5");

insert into POST (id, title, orgName, message, likeCount, userID) Values (NULL, "Meal Drive", "Meals on Wheels", "I took meals all over Rock Hill and met a lot of lovely people.  I really liked helping people and getting to know them at the same time.  I am consdering helping out at a local soup kitchen also.  This experience helped me realize how rewarding these opportunities can be for me while helping out in the community at the same time.", "1", "3");

insert into POST (id, title, orgName, message, likeCount, userID) Values (NULL, "United in Design", "United Way", "We helped United Way prepare for their yearly drive.  We not only assited with material distribution, but we helped them with the design.  Then we participated in a food drive and delivered the food to a local shelter.", "1", "1");   

insert into EVENT (id, title, startDate, startTime, endTime, description, streetAddress, city, state, zip, orgID) VALUES (NULL, "Morgan Freeman: A narration of life", "2015-02-14", "4:30 PM", "6:30 PM", "Morgan Freeman tells the creation of the world in his classical uplifiting style.  Enjoy an evening of Morgan Freeman.", "245 Morgan Freeman Center", "Rock Hill", "SC", "29730", "1");   

insert into EVENT (id, title, startDate, startTime, endTime, description, streetAddress, city, state, zip, orgID) VALUES (NULL, "Baskets for Books", "2015-03-08", "5:00 PM", "7:00 PM", "Children and their mentors will hit the basket ball court to raise funds for the Boys and Girls Club of York County.  Funds will be donated for every basket made.  Come out to Confederate Park and support the children and their sponsors in this fun event.", "490 N. Confederate Avenue", "Rock Hill", "SC", "29730", "2"); 

insert into EVENT (id, title, startDate, startTime, endTime, description, streetAddress, city, state, zip, orgID) VALUES (NULL, "Flu Shot Clinic", "2015-01-08", "6:00 PM", "8:00 PM", "Rock Hill is dedicated supporting its citizens in a healthy lifestyle.  The City of Rock Hill and York County Free Clinic are happy to announce a free flu shot clinic.  A staff of volunteer nurses will also be on hand to answer some of your medical questions.  Refreshments will also be provided.", "155 Johnston Street", "Rock Hill", "SC", "29730", "3");

insert into EVENT (id, title, startDate, startTime, endTime, description, streetAddress, city, state, zip, orgID) VALUES (NULL, "Pilgrims Inn Blood Drive", "2015-03-28", "12:00 PM", "5:00 PM", "Pilgrims Inn is sponsoring a Blood Drive for the American Red Cross.  Come down and help save lives with your donation while learning about the great service Pilgrims Inn provides for our community.", "236 W. Main Street", "Rock Hill", "SC", "29730", "5");

insert into EVENT (id, title, startDate, startTime, endTime, description, streetAddress, city, state, zip, orgID) VALUES (NULL, "SubWay Blood Drive", "2015-04-01", "12:00 PM", "5:00 PM", "It no joke, Subway is giving away one free sandwich to every person that participates in the blood drive on April fools day.  Come down an support the Red Cross and get a delicious sandwich.", "572 John Ross Parkway #101", "Rock Hill", "SC", "29730", "1");

insert into EVENT (id, title, startDate, startTime, endTime, description, streetAddress, city, state, zip, orgID) VALUES (NULL, "Meet Our Pets", "2015-04-03", "5:00 PM", "7:00 PM", "Come out to Cherry Park and meet some of the pets of Rock Hill that are looking for your love and care.  Take one home with you or bring a friend that is look to adopt.  These pets will appreciate even a visit and just a little bit of your attention.  So come down and give them some attention and let them brighten your day at the same time.", "1466 North Cherry Road", "Rock Hill", "SC", "29732", "6");
