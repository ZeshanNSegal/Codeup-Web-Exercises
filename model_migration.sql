USE users_db;

DROP TABLE IF EXISTS contacts;

CREATE TABLE contacts (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(200) NOT NULL,
    last_name VARCHAR(200) NOT NULL,
    email VARCHAR(200) NOT NULL UNIQUE,
    phone VARCHAR(200) NOT NULL,
    address VARCHAR(200) NOT NULL,
    city VARCHAR(200),
    state VARCHAR(200),
    zip VARCHAR(200) NOT NULL,
     
    PRIMARY KEY (id)
);