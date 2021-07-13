

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE 'productinfo' (
  'productName' varchar(100) NOT NULL,
  'buyingPrice'varchar(100) NOT NULL,
  'sellingPrice' varchar(100) NOT NULL,
  'display' tinyint(1) NOT NULL,
  'id'int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO 'productinfo' ('productName', 'buyingPrice', 'sellingPrice', 'display', 'id') VALUES
('X', '15', '15', 1, 1);


ALTER TABLE 'productinfo'
  ADD PRIMARY KEY ('id');


ALTER TABLE 'productinfo'
  MODIFY 'id' int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

