-- DROP DATABASE instructorProfile;
CREATE DATABASE IF NOT EXISTS instructorProfile;
USE instructorProfile;

CREATE TABLE IF NOT EXISTS Profile (
  id INT PRIMARY KEY AUTO_INCREMENT,
  fullName   TEXT NOT NULL,
  wickIt        INT NOT NULL,
  email        TEXT NOT NULL,
  bio  		   BLOB,
  fav 		   TEXT,
  availability TEXT,
  picture	   LONGBLOB
);

INSERT INTO profile (fullName, wickIt, email)
VALUES ('Test User', 320, 'user'), ('Jared Jackson', 321, 'jacksonj@hartwick.edu'),
('Molly O\'Reilly', 322, 'oreillym@hartwick.edu'), ('Kristen Vaccarelli', 323, 'vaccarellik@hartwick.edu'), ('Jason Uhliger', 324, 'uhlingerj@hartwick.edu'), 
('Trevor Brink', 325, 'brinkt@hartwick.edu'); 


CREATE TABLE IF NOT EXISTS accessCode (
  idCode INT PRIMARY KEY
);

INSERT INTO `accessCode` VALUES ('1234'); 
