CREATE TABLE users (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    lastname VARCHAR(100),
    email VARCHAR(200),
    password VARCHAR(200),
    image VARCHAR(200),
    token VARCHAR(200),
    bio TEXT
);