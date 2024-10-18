CREATE DATABASE rechangerBus;
use rechangerBus;

CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    cpf_user VARCHAR(11) NOT NULL UNIQUE,
    dt_nasct DATE NOT NULL,
    cell_user VARCHAR(15) NOT NULL,
    email_user VARCHAR(100) NOT NULL UNIQUE,
    password_user VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

select * from user
