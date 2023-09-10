-- Deleting the DATABASE to start with a empty database (used in previous tutorials)
DROP DATABASE IF EXISTS code_pills;

CREATE DATABASE IF NOT EXISTS code_pills DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;
USE code_pills;
CREATE TABLE IF NOT EXISTS listado_usuarios(
		email VARCHAR(255) NOT NULL,
		password VARCHAR(255) NOT NULL,
		PRIMARY KEY (email)
)  ENGINE=INNODB;