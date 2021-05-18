
-- Pour éviter les erreur lors de l'exécution du script
DROP DATABASE IF EXISTS Tallyos_test_ruche;


-- Création de la base de donnée

CREATE DATABASE Tallyos_test_ruche;

-- Création de la table Ruche


CREATE TABLE `tallyos_test_ruche`.`ruche`
 (`Id` INT unsigned NOT NULL AUTO_INCREMENT,
`Nom` VARCHAR(30) NOT NULL,
`Latitude` DECIMAL(11,6) NOT NULL,
`Longitude` DECIMAL(11,6) NOT NULL,
    PRIMARY KEY (`Id`)) ENGINE = InnoDB;

INSERT INTO Tallyos_test_ruche.RUCHE (Nom, Latitude, Longitude)
VALUES
('Ruche A', 49.107976, 6.182309),
('Ruche A', 49.107976, 6.182309),
('Ruche A', 49.107976, 6.182309),
('Ruche A', 49.107976, 6.182309),
('Ruche B', 49.107976, 6.182309),
('Ruche B', 49.107976, 6.182309),
('Ruche B', 49.107976, 6.182309),
('Ruche B', 49.107976, 6.182309);





CREATE TABLE `tallyos_test_ruche`.`infoRuche`
(`Id` INT  NOT NULL AUTO_INCREMENT,
`dateCollect` DATETIME NOT NULL,
`Poids` DECIMAL(11,1) NOT NULL,
`Temperature` INT NOT NULL,
`Humidite` INT NOT NULL,
`idR` INT unsigned NOT NULL,
 PRIMARY KEY (`Id`),
 CONSTRAINT fk_ruche_info FOREIGN KEY (idR) REFERENCES ruche(Id)
 ) ENGINE = InnoDB;

INSERT INTO `tallyos_test_ruche`.`inforuche` (`dateCollect`, `Poids`, `Temperature`, `Humidite`, `idR`)
VALUES
( '2021-05-18 08:00:40', '44.5', '15', '79', '1'),
( '2021-05-18 08:30:40', '45', '16', '77', '2'),
( '2021-05-18 09:00:40', '45', '17', '80', '3'),
( '2021-05-18 09:30:40', '44', '14', '76', '4'),
( '2021-05-18 08:00:40', '44.5', '15', '79', '5'),
( '2021-05-18 08:30:40', '45', '16', '77', '6'),
( '2021-05-18 09:00:40', '45', '17', '80', '7'),
( '2021-05-18 09:30:40', '45', '14', '76', '8');
