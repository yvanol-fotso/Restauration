DROP DATABASE IF EXISTS uv_projet;

CREATE DATABASE IF NOT EXISTS uv_projet;
USE uv_projet;





# -----------------------------------------------------------------------------
#      TABLE : reservation
# -----------------------------------------------------------------------------


CREATE TABLE reservation
 (
   _id INT(100) NOT NULL AUTO_INCREMENT,
   date_reserv DATE TIME ,
   date_repas DATE TIME,
   nb_convives INT(5) NOT NULL,
   etat BOOLEAN,
   CONSTRAINT client_id_fk FOREIGN KEY (client_id) REFERENCES client(_id) ON DELETE CASCADE ON UPDATE CASCADE
   , PRIMARY KEY (id) 
 ) 
 comment = "";


