CREATE DATABASE Customer;
USE Customer

CREATE TABLE information(
id VARCHAR(16),
fullname VARCHAR(128),
email VARCHAR (50),
name VARCHAR(25),
password VARCHAR (16),
PRIMARY KEY (id)) ENGINE InnoDB;


INSERT INTO information(id, fullname, email, name, password)
VALUES('15545','Little Dorit','***@gmail.com','Little','1638917');
INSERT INTO information(id, fullname, email, name, password)
VALUES('15345','abcd','***@gmail.com','abcd','6368917');
INSERT INTO information(id, fullname, email, name, password)
VALUES('15145','abcd','***@gmail.com','abcd','1664917');
INSERT INTO information(id, fullname, email, name, password)
VALUES('15945','abcd','***@gmail.com','abcd','1683917');
INSERT INTO information(id, fullname, email, name, password)
VALUES('15245','abcd','***@gmail.com','abcd','1653637');
INSERT INTO information(id, fullname, email, name, password)
VALUES('15045','abcd','***@gmail.com','abcd','1633917');

SELECT * FROM customers;