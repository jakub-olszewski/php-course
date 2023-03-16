CREATE USER 'Janek'@'localhost' IDENTIFIED BY 'hasło';
grant usage on *.* to Janek@localhost identified by 'hasło';

CREATE DATABASE IF NOT EXISTS ksiegarnia;
grant all privileges on ksiegarnia.* to Janek@localhost ;
