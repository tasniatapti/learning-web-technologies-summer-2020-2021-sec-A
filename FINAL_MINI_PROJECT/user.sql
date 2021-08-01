

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE 'user' (
  'name' varchar(100) NOT NULL,
  'email'varchar(100) NOT NULL,
  'password' varchar(100) NOT NULL,
  'confirm_pass' tinyint(1) NOT NULL,
  'type' tinyint(1) NOT NULL,
  'id'int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO 'user' ('name', 'email', 'password', 'confirm_pass','type' 'id') VALUES
('X', '15', '15', 1, 1);


ALTER TABLE 'user'
  ADD PRIMARY KEY ('id');


ALTER TABLE 'user'
  MODIFY 'id' int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

