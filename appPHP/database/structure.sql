drop table if exists t_photo;

create table t_photo (
photo_id integer not null primary key auto_increment,
photo_src varchar(100) not null,
photo_nom varchar(100) not null,
photo_portfolio BOOLEAN,
photo_astro BOOLEAN
) engine=innodb character set utf8 collate utf8_unicode_ci;