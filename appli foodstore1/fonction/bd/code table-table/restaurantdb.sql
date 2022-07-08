DROP DATABASE IF EXISTS uv_projet;

CREATE DATABASE IF NOT EXISTS uv_projet;
USE uv_projet;



# -----------------------------------------------------------------------------
#       TABLE : resto
# -----------------------------------------------------------------------------
CREATE TABLE restaurant
(
  id INT PRIMARY KEY AUTO_INCREMENT,
  nom VARCHAR(10) NOT NULL,
  images VARCHAR(10) NOT NULL,
  adresse VARCHAR(10) NOT NULL,
  proprietaire VARCHAR(10) NOT NULL,
  email VARCHAR(10) NOT NULL,
  services VARCHAR(10) NOT NULL, 
  autre VARCHAR(10) NOT NULL
 
);
-- comment = "";
