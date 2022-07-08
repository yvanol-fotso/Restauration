DROP DATABASE IF EXISTS uv_projet;

CREATE DATABASE IF NOT EXISTS uv_projet;
USE uv_projet;




CREATE TABLE facture
(
  _numfac INT PRIMARY KEY AUTO_INCREMENT,
  datefact DATE TIME,
  nomplat VARCHAR(100) NOT NULL,
  prix INT(5)  NOT NULL,
  restaurateur_id INT NOT NULL,
  client_id INT NOT NULL,
  nomclient VARCHAR(100) NOT NULL,
  nomrestaurateur VARCHAR(100) NOT NULL,
  CONSTRAINT restora_id_fk FOREIGN KEY (restaurateur_id) REFERENCES restaurateur(_id) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT client_id_fk FOREIGN KEY (client_id) REFERENCES client(_id) ON DELETE CASCADE ON UPDATE CASCADE



);

