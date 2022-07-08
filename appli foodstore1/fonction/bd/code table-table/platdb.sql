DROP DATABASE IF EXISTS uv_projet;

CREATE DATABASE IF NOT EXISTS uv_projet;
USE uv_projet;




CREATE TABLE plats
 (
   _id INT(100) NOT NULL AUTO_INCREMENT,
   libelle VARCHAR(10) NOT NULL,
   prix_total VARCHAR(100) NOT NULL
   , PRIMARY KEY (id) 
 ) 
 comment = "";
