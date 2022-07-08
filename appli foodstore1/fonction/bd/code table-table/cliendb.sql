DROP DATABASE IF EXISTS uv_projet;

CREATE DATABASE IF NOT EXISTS uv_projet;
USE uv_projet;


# -----------------------------------------------------------------------------
#       TABLE : user
# -----------------------------------------------------------------------------
CREATE TABLE client
(
  id INT PRIMARY KEY AUTO_INCREMENT,
  nom VARCHAR(100) NOT NULL,
  prenom VARCHAR(100) NOT NULL,
  pseudo VARCHAR(100) NOT NULL,
  sexe VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  passwd VARCHAR(100) NOT NULL
  
);
-- comment = "";