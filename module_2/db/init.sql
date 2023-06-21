CREATE DATABASE IF NOT EXISTS reg1;
CREATE USER IF NOT EXISTS 'user' @'%' IDENTIFIED BY 'password';
GRANT 
SELECT 
  , 
UPDATE 
  , 
  INSERT ON reg1.* TO 'user' @'%';
FLUSH PRIVILEGES;
USE reg1;
CREATE TABLE IF NOT EXISTS customers (
  id INT (100) NOT NULL PRIMARY KEY, 
  name VARCHAR(100) NOT NULL, 
  salary FLOAT (10) NOT NULL
);
INSERT INTO customers (id, name, salary) 
VALUES
  (1, 'Vanya', 100000.0),
  (2, 'Misha', 200000.0),
  (3, 'Oleg', 300000.0);
