-- Create a new database
CREATE DATABASE get_name;

-- Switch to the new database
USE get_name;

-- Create a new table
CREATE TABLE Names (
    id int(11) NOT NULL AUTO_INCREMENT,
    name varchar(255),
    PRIMARY KEY (ID)
);

-- Insert some data into the table
INSERT INTO Names (id, name)
VALUES (1, 'Tom B. Erichsen');


