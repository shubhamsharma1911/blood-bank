create database bbank;
use bbank;
CREATE TABLE hospital (
   user_id INTEGER NOT NULL
     AUTO_INCREMENT KEY,
   name VARCHAR(128),
   email VARCHAR(128),
   phno VARCHAR(128),
   usercode VARCHAR(128),
   city VARCHAR(128),
  password VARCHAR(128),
   INDEX(usercode)
) ENGINE=InnoDB CHARSET=utf8;

CREATE TABLE receiver (
   user_id INTEGER NOT NULL
     AUTO_INCREMENT KEY,
   name VARCHAR(128),
   email VARCHAR(128),
   phno VARCHAR(128),
    usercode VARCHAR(128),
   blood_type VARCHAR(128),
  password VARCHAR(128),
   INDEX(usercode)
) ENGINE=InnoDB CHARSET=utf8; 

CREATE TABLE requests (
   user_id INTEGER NOT NULL
     AUTO_INCREMENT KEY,
   rname VARCHAR(128),
   blood VARCHAR(128),
   phno VARCHAR(128),
   
   city VARCHAR(128),
  
   INDEX(phno)
) ENGINE=InnoDB CHARSET=utf8; 

CREATE TABLE blood_sample_info (
   user_id INTEGER NOT NULL
     AUTO_INCREMENT KEY,
   hname VARCHAR(128),
   email VARCHAR(128),
   phno VARCHAR(128),
   blood VARCHAR(128),
   city VARCHAR(128),
 
   INDEX(email)
) ENGINE=InnoDB CHARSET=utf8;