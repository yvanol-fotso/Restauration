DROP DATABASE IF EXISTS uv_projet;

CREATE DATABASE IF NOT EXISTS uv_projet;
USE uv_projet;



# -----------------------------------------------------------------------------
#       TABE : cathegorie
# -----------------------------------------------------------------------------


CREATE TABLE cathegorie
 (
  id INT(10) AUTO_INCREMENT,
  libelle VARCHAR(100) NOT NULL,
  img VARCHAR(100) NOT NULL
  ,PRIMARY KEY(id)
 ) 
 comment = "";


 