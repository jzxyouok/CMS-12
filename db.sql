create database cms_db;
use database cms_db;
create table cms_user(id int primary key auto_increment,username varchar(20) NOT NULL,password varchar(20) NOT NULL,email varchar(20));
create table top_user(id int primary key auto_increment,username varchar(20),email varchar(20));