CREATE DATABASE store;

USE store;

CREATE TABLE items (
itemID int(11) NOT NULL auto_increment,
itemName varchar(255) NOT NULL default '',
itemPrice float NOT NULL default '0',
PRIMARY KEY (itemID) ) ENGINE=InnoDB;
