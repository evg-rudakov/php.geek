CREATE TABLE category
(
    id   int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL
);

CREATE TABLE product
(
    id          int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name        varchar(255)                  NOT NULL,
    description text,
    price       decimal(10, 2) DEFAULT '0.00' NOT NULL,
    quantity    int(11) DEFAULT '1',
    category_id int(11) NOT NULL
);

CREATE INDEX good_category_fk
    ON product (category_id);

CREATE TABLE sales
(
    id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    sale_size int DEFAULT 0,
    active_till timestamp NOT NULL
);
