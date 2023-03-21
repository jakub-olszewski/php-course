CREATE USER 'Janek'@'localhost' IDENTIFIED BY 'hasło';
grant usage on *.* to Janek@localhost identified by 'hasło';

CREATE DATABASE IF NOT EXISTS ksiegarnia;
grant all privileges on ksiegarnia.* to Janek@localhost ;

CREATE TABLE IF NOT EXISTS Klient (
    klient_id INT AUTO_INCREMENT PRIMARY KEY,
    imie VARCHAR(32) NOT NULL,
    nazwisko VARCHAR(32) NOT NULL,
    pesel VARCHAR(11) NOT NULL
)

INSERT INTO `Klient` (`klient_id`, `imie`, `nazwisko`, `pesel`) VALUES (NULL, 'Anna', 'Nowak', '99010123921');
INSERT INTO Klient (nazwisko, imie, pesel) VALUES  ("Piłsudski", "Józef", "45178254645");
