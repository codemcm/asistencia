/*
Db: asistenciabd
*/

CREATE TABLE Carrera(
    CarreraId INTEGER  AUTO_INCREMENT,
    NombreCarrera VARCHAR(50) NOT NULL,
    Active BOOLEAN,
    PRIMARY KEY (CarreraId)
);
