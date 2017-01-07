--
-- Table structure for `todo_items`
--

CREATE TABLE IF NOT EXISTS todo_items (
  id int(10) unsigned AUTO_INCREMENT PRIMARY KEY NOT NULL,
  title varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  completed tinyint(3) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
