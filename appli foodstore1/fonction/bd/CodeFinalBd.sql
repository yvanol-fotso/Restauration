DROP DATABASE IF EXISTS uv_projet;

CREATE DATABASE IF NOT EXISTS uv_projet;
USE uv_projet;


# -----------------------------------------------------------------------------
#       TABLE : user
# -----------------------------------------------------------------------------
CREATE TABLE client
(
  id INT PRIMARY KEY AUTO_INCREMENT,
  nom VARCHAR(10) NOT NULL,
  prenom VARCHAR(10) NOT NULL,
  pseudo VARCHAR(10) NOT NULL,
  email VARCHAR(10) NOT NULL,
  passwd VARCHAR(10) NOT NULL
  
);
-- comment = "";



# -----------------------------------------------------------------------------
#       TABLE : restaurateur
# -----------------------------------------------------------------------------
CREATE TABLE restaurateur
(
  id INT PRIMARY KEY AUTO_INCREMENT NOT NULL UNIQUE,
  nom VARCHAR(10) NOT NULL,
  prenom VARCHAR(10) NOT NULL,
  pseudo VARCHAR(10) NOT NULL,
  email VARCHAR(10) NOT NULL,
  passwd VARCHAR(10) NOT NULL
  
);
-- comment = "";



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


# -----------------------------------------------------------------------------
#       TABE : cathegorie
# -----------------------------------------------------------------------------


CREATE TABLE cathegorie
 (
  id INT(10) PRIMARY KEY AUTO_INCREMENT ,
  libelle VARCHAR(10) NOT NULL,
  imag VARCHAR(10) NOT NULL
 );
 -- comment = "";


 
# -----------------------------------------------------------------------------
#      TABLE : plats
# -----------------------------------------------------------------------------


CREATE TABLE plats
 (
   id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
   libelle VARCHAR(10) NOT NULL,
   prix_total VARCHAR(10) NOT NULL
 );
 -- comment = "";




 
# -----------------------------------------------------------------------------
#      TABLE : menu
# -----------------------------------------------------------------------------


CREATE TABLE menu
 (
   id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
   libelle VARCHAR(10) NOT NULL,
   prix_total VARCHAR(10) NOT NULL
  
 ); 
 -- comment = "";



 
# -----------------------------------------------------------------------------
#      TABLE : plats_menu
# -----------------------------------------------------------------------------


CREATE TABLE  plats_menu
 (
   id INT(100) NOT NULL PRIMARY KEY AUTO_INCREMENT,
   CONSTRAINT plats_id_fk FOREIGN KEY (id) REFERENCES plats(id) ON DELETE CASCADE ON UPDATE CASCADE,
   CONSTRAINT menu_id_fk FOREIGN KEY (id) REFERENCES menu(id) ON DELETE CASCADE ON UPDATE CASCADE
 ); 
 -- comment = "";



# -----------------------------------------------------------------------------
#      TABLE : reservation
# -----------------------------------------------------------------------------


CREATE TABLE reservation
 (
   id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
   date_reserv DATETIME ,
   date_repas DATETIME,
   nb_convives INT NOT NULL, 
   etat BOOLEAN,
   CONSTRAINT client_id_fk FOREIGN KEY (id) REFERENCES client(id) ON DELETE CASCADE ON UPDATE CASCADE 
 );
 -- comment = "";






-- # -----------------------------------------------------------------------------
-- #      TABLE : cmd
-- # -----------------------------------------------------------------------------


-- CREATE TABLE commande
--  (
--    idcmd INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
--    id_client VARCHAR(10) NOT NULL,
--    prix_total VARCHAR(10) NOT NULL,
--    quantite INT(10) NOT NULL,
--    CONSTRAINT reservation_id_fk FOREIGN KEY (reservation_id) REFERENCES reservation(id) ON DELETE CASCADE ON UPDATE CASCADE,
--    CONSTRAINT menu_id_fk FOREIGN KEY (menu_id) REFERENCES menu(id) ON DELETE CASCADE ON UPDATE CASCADE
--  ); 
--  comment = "";




# -----------------------------------------------------------------------------
#      TABLE : admins
# -----------------------------------------------------------------------------

CREATE TABLE admins
(
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nom VARCHAR(10) NOT NULL,
  email VARCHAR(10) NOT NULL,
  passwd VARCHAR(10) NOT NULL 
);





# -----------------------------------------------------------------------------
#      TABLE : magazin mets
# -----------------------------------------------------------------------------

CREATE TABLE magazin_mets
(
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nom VARCHAR(100) NOT NULL,
  prix_total VARCHAR(100) NOT NULL,
 -- ici etat designe si c'est une :ENTREE, PLAT, DESERT
  etat VARCHAR(100) NOT NULL,
  CONSTRAINT admins_id_fk FOREIGN KEY (id) REFERENCES admins(id) ON DELETE CASCADE ON UPDATE CASCADE
);




CREATE TABLE facture
(
  numfac INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  datefact DATETIME,
  nomplat VARCHAR(10) NOT NULL,
  prix INT(5) NOT NULL,

  restaurateur_id INT NOT NULL,
  client_id INT NOT NULL,
  -- nomclient VARCHAR(100) NOT NULL,
  -- nomrestaurateur VARCHAR(100) NOT NULL,

  -- CONSTRAINT restaurant_id_fk FOREIGN KEY(restaurateur_id) REFERENCES restaurateur(id) ON DELETE CASCADE ON UPDATE CASCADE,
  -- CONSTRAINT client_id_fk FOREIGN KEY(client_id) REFERENCES client(id) ON DELETE CASCADE ON UPDATE CASCADE 

);




