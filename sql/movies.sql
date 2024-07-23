CREATE TABLE movies(
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100),
    description TEXT,
    image VARCHAR(200),
    trailer VARCHAR(150),
    category VARCHAR(50),
    length VARCHAR(50),
    users_id INT(11) UNSIGNED,
    FOREIGN KEY(users_id) REFERENCES users(id)
);