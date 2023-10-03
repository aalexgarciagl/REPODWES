

CREATE TABLE Usuarios (
  idUsuario INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(255),
  pass VARCHAR(255),
  correo VARCHAR(255),
  partidasJugadas INT,
  partidasGanadas INT
);


CREATE TABLE Partidas (
  idPartida INT AUTO_INCREMENT PRIMARY KEY,
  idPersona INT,
  tablaOculta TEXT,
  tablaJugador TEXT,
  finalizada TINYINT
);
