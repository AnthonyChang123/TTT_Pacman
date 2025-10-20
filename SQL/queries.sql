-- How to use (Local Backup)
--Instructions:
-- 1. Launch XAMPP and start both Apache and MySQL services.
-- 2. Open phpMyAdmin by visiting http://localhost/phpmyadmin.
-- 3. Create a new database named `campustrade`.
-- 4. Copy and paste the SQL code below to create the two tables: `Accounts` and `BookListings`.
-- 5. The `Database.php` file is already configured to connect to the database automatically,
--    so once the tables are created, you should be all set.

-- db/schema.sql
SET NAMES utf8mb4;

CREATE TABLE IF NOT EXISTS Accounts (
  id            INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  email         VARCHAR(190) NOT NULL UNIQUE,
  password      VARCHAR(255) NOT NULL,
  first_name    VARCHAR(80)  NOT NULL,
  last_name     VARCHAR(80)  NOT NULL,
  school_name   VARCHAR(160) NOT NULL,
  major         VARCHAR(120) NOT NULL,
  acad_role     ENUM('Student','Alumni') NOT NULL,
  market_role   ENUM('Buyer','Seller')   NOT NULL,
  created_at    TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS BookListings (
  id          INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  seller_id   INT UNSIGNED NOT NULL,
  title       VARCHAR(200) NOT NULL,
  author      VARCHAR(200),
  isbn        VARCHAR(32),
  image_path  VARCHAR(500),
  price       INT UNSIGNED NOT NULL DEFAULT 0,
  book_state  ENUM('New','like New','Good','Fair') NOT NULL DEFAULT 'Good',
  status      ENUM('Active','Sold','Archived')      NOT NULL DEFAULT 'Active',
  course_id   VARCHAR(40),
  created_at  TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (seller_id) REFERENCES Accounts(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
