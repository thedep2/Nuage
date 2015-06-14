create database if not exists nuage character set utf8 collate utf8_unicode_ci;
use nuage;

grant all privileges on nuage.* to 'nuage_user'@'localhost' identified by 'secret';