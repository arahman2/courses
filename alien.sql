CREATE DATABASE IF NOT EXISTS courseRatings;
GRANT ALL PRIVILEGES ON courseRatings.* to 'root'@'localhost' identified by '';
USE courseRatings;
CREATE TABLE ratings (
  id int NOT NULL auto_increment,
  name VARCHAR(25),
  course VARCHAR(25),
  professor VARCHAR(25),
  comments BLOB(150),
  rating int,
  PRIMARY KEY (id)
);