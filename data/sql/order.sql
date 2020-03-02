CREATE TABLE `order`
(
    id         int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    created_at timestamp                    DEFAULT CURRENT_TIMESTAMP,
    user_id    int(11)             NOT NULL,
    status     int(11)                      DEFAULT '0',
    CONSTRAINT order_user_fk FOREIGN KEY (user_id) REFERENCES users (id)
);

CREATE TABLE order_item
(
    id         int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    product_id int(11)             NOT NULL,
    order_id   int(11)             NOT NULL,
    quantity   int(11),
    CONSTRAINT order_item_product_fk FOREIGN KEY (product_id) REFERENCES product (id),
    CONSTRAINT order_item_order_fk FOREIGN KEY (order_id) REFERENCES `order` (id)
);