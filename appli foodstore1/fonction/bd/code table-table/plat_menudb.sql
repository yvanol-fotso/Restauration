DROP DATABASE IF EXISTS uv_projet;

CREATE DATABASE IF NOT EXISTS uv_projet;
USE uv_projet;

 
# -----------------------------------------------------------------------------
#      TABLE : plats_menu
# -----------------------------------------------------------------------------


CREATE TABLE  plats_menu
 (
   id INT(100) NOT NULL AUTO_INCREMENT,
   CONSTRAINT plats_id_fk FOREIGN KEY (plats_id) REFERENCES plats (_id) ON DELETE CASCADE ON UPDATE CASCADE,
   CONSTRAINT menu_id_fk FOREIGN KEY (menu_id) REFERENCES menu (_id) ON DELETE CASCADE ON UPDATE CASCADE
   , PRIMARY KEY (id) 
 ) 
 comment = "";