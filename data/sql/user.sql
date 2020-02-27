CREATE TABLE users
(
    id       int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    login    varchar(255)        NOT NULL,
    password varchar(255)        NOT NULL
);
CREATE UNIQUE INDEX users_login_uindex
    ON users (login);