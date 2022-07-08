DROP DATABASE IF EXISTS uv_projet;

CREATE DATABASE IF NOT EXISTS uv_projet;
USE uv_projet;



# -----------------------------------------------------------------------------
#       TABLE : restaurateur
# -----------------------------------------------------------------------------
CREATE TABLE restaurateur
(
  _id INT PRIMARY KEY AUTO_INCREMENT,
  nom VARCHAR(100) NOT NULL,
  prenom VARCHAR(100) NOT NULL,
  pseudo VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  passwd VARCHAR(100) NOT NULL
  restaurateur_id VARCHAR(5) NOT NULL UNIQUE
  
);
comment = "";
