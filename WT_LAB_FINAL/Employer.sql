

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE 'employerinfo' (
  'employername' varchar(100) NOT NULL,
  'companyname'varchar(100) NOT NULL,
  'contactno' int(40) NOT NULL,
  'username' varchar(50) NOT NULL,
  'password'int(100) NOT NULL
  'id'int(100) NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO 'employeinfo' ('employername', 'companyname', 'contactno', 'username', 'password','id') VALUES
('x', 'z', '1555', '1111', 'w','234',1);


ALTER TABLE 'employerinfo'
  ADD PRIMARY KEY ('id');


ALTER TABLE 'employerinfo'
  MODIFY 'id' int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

