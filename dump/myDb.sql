-- put in ./dump directory 

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Insert fake data into users table
INSERT INTO `users` (`name`, `age`, `email`)
VALUES
  ('John Doe', FLOOR(RAND() * 30) + 20, 'john.doe@example.com'),
  ('Jane Smith', FLOOR(RAND() * 30) + 20, 'jane.smith@example.com'),
  ('Bob Johnson', FLOOR(RAND() * 30) + 20, 'bob.johnson@example.com'),
  ('Alice Williams', FLOOR(RAND() * 30) + 20, 'alice.williams@example.com'),
  ('Charlie Brown', FLOOR(RAND() * 30) + 20, 'charlie.brown@example.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
