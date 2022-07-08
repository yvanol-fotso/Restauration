DROP DATABASE IF EXISTS uv_projet;

CREATE DATABASE IF NOT EXISTS uv_projet;
USE uv_projet;




# -----------------------------------------------------------------------------
#      TABLE : admins
# -----------------------------------------------------------------------------

CREATE TABLE admins
(
  id INT PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
  nom VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  passwd VARCHAR(100) NOT NULL 

);
