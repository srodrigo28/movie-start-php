CREATE TABLE reviews(
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    rating INT,
    review TEXT,
    users_id INT(11) UNSIGNED,
    movies_id INT(11) UNSIGNED,
    
    FOREIGN KEY(users_id) REFERENCES users(id),
    FOREIGN KEY(movies_id) REFERENCES movies(id)
);