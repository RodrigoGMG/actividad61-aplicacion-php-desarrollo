CREATE TABLE NISSAN (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  Modelo VARCHAR(100) NOT NULL,
  Motor VARCHAR(100) NOT NULL,
  Anio_fabricacion YEAR NOT NULL,
  Fiabilidad ENUM('Baja', 'Media', 'Alta') NOT NULL,
  Precio DECIMAL (10,2)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
 
INSERT INTO NISSAN (Modelo, Motor, Anio_fabricacion, Fiabilidad, Precio) VALUES('Patrol GR', '2.8L TD I6', 1997, 'Alta', 12000);
INSERT INTO NISSAN (Modelo, Motor, Anio_fabricacion, Fiabilidad, Precio) VALUES('Pathfinder', '4.0L V6', 2005, 'Media', 15000);
INSERT INTO NISSAN (Modelo, Motor, Anio_fabricacion, Fiabilidad, Precio) VALUES('Xtrail', '2.5L I4', 2010, 'Alta', 18000);
INSERT INTO NISSAN (Modelo, Motor, Anio_fabricacion, Fiabilidad, Precio) VALUES('R32', '2.6L RB26DETT I6', 1989, 'Alta', 40000);
INSERT INTO NISSAN (Modelo, Motor, Anio_fabricacion, Fiabilidad, Precio) VALUES('R34', '2.6L RB26DETT I6', 1999, 'Alta', 80000);
INSERT INTO NISSAN (Modelo, Motor, Anio_fabricacion, Fiabilidad, Precio) VALUES('R35', '3.8L VR38DETT V6', 2008, 'Alta', 100000);
INSERT INTO NISSAN (Modelo, Motor, Anio_fabricacion, Fiabilidad, Precio) VALUES('Silvia', '2.0L SR20DET I4', 1995, 'Media', 25000);
INSERT INTO NISSAN (Modelo, Motor, Anio_fabricacion, Fiabilidad, Precio) VALUES('350Z', '3.5L VQ35DE V6', 2003, 'Media', 18000);
INSERT INTO NISSAN (Modelo, Motor, Anio_fabricacion, Fiabilidad, Precio) VALUES('370Z', '3.7L VQ37VHR V6', 2009, 'Alta', 25000);
INSERT INTO NISSAN (Modelo, Motor, Anio_fabricacion, Fiabilidad, Precio) VALUES('Navara', '2.3L YS23DDTT I4', 2015, 'Media', 30000);
