create table image
(
    id          int auto_increment
        primary key,
    path        varchar(255)  not null,
    title       varchar(255)  null,
    width       int           not null,
    height      int           not null,
    size        int           null,
    alt         varchar(255)  null,
    description varchar(255)  null,
    name        varchar(255)  null,
    mime        varchar(50)   not null,
    rating      int default 0 null
);
create table image_comment
(
    id         int auto_increment
        primary key,
    text       text null,
    created_at int  null,
    image_id   int  null,
    user_id    int  null
);