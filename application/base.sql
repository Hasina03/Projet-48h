 CREATE TABLE objectifs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    objectif VARCHAR(255)
);

CREATE TABLE profil (
    id INT AUTO_INCREMENT PRIMARY KEY,
    idUser INT,
    id_objectif INT,
    genre VARCHAR(10),
    taille DECIMAL(10,2),
    poids DECIMAL(10,2),
    FOREIGN KEY (idUser) REFERENCES users(id),
    FOREIGN KEY (id_objectif) REFERENCES objectifs(id)
);

 CREATE TABLE status_code (
    id INT AUTO_INCREMENT PRIMARY KEY,
    isutilisable INT
);

CREATE TABLE code (
    id INT AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(255),
    user_id INT,
    valeur_ariary DECIMAL(10,2),
    id_status_code INT,
    FOREIGN KEY (user_id) REFERENCES User(id),
    FOREIGN KEY (id_status_code) REFERENCES status_code(id)
);

INSERT INTO objectifs (objectif) VALUES
    ('Perdre du poids'),
    ('Gagner du poids');


CREATE TABLE plat (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255),
    photo VARCHAR(255)
);

CREATE TABLE activite (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255),
    photo VARCHAR(255)
);

CREATE TABLE programme (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_plat INT,
    id_objectifs INT,
    id_activite INT,
    FOREIGN KEY (id_plat) REFERENCES plat(id),
    FOREIGN KEY (id_activite) REFERENCES activite(id),
    FOREIGN KEY (id_objectifs) REFERENCES objectifs(id)
);

create table  User(
    id int Not null auto_increment primary key,
    email VARCHAR(50) not null,
    nom VARCHAR (50) not null,
    datenaissance date not null,
    portefeuille DECIMAL,
    password varchar(50) not null,
    isadmin int not null
 );

 insert into User values
    (null,'irchad@gmail.com','irchad','2004/11/30',0,'bonjour',0),
    (null,'hasina@gmail.com','hasina','2002/07/02',0,'bonjour2',0),
    (null,'clara@gmail.com','clara','2005/01/22',0,'123456',0),
    (null,'morgane@gmail.com','morgane','2007/12/23',0,'mdp25',0);
insert into User (email,nom,datenaissance,portefeuille,password,isadmin) values ('jean@gmail.com','jean','2008-04-23',0,'jojo',0);
insert into User (email,nom,datenaissance,portefeuille,password,isadmin) values ('root@gmail.com','root','2002-04-20',0,'root',1);

INSERT INTO code (code, user_id, valeur_ariary, id_status_code) VALUES
('ABC12345', 1, 50.00, 1),
('DEF67890', 2, 25.00, 1),
('GHI54321', 1, 10.00, 2),
('JKL98765', 3, 100.00, 1);

INSERT INTO plat (nom, photo)
VALUES
    ('Salade de poulet', 'assets/img/plat/1.jpg'),
    ('Smoothie', 'assets/img/plat/2.jpg'),
    ('Soupe de légume', 'assets/img/plat/3.jpg'),
    ('Salade de poissons', 'assets/img/plat/4.jpg'),
    ('Salade', 'assets/img/plat/5.jpg'),
    ('Petit déjeuner Americain', 'assets/img/plat/6.jpg'),
    ('Bol de riz', 'assets/img/plat/7.jpg'),
    ('Sandwich', 'assets/img/plat/8.jpg'),
    ('Humberger', 'assets/img/plat/9.jpg'),
    ('Frite au fromage', 'assets/img/plat/10.jpg');


INSERT INTO activite (nom, photo)
VALUES
    ('Vélo electrique 30min', 'assets/img/activite/1.jpg'),
    ('Jogging 5km', 'assets/img/activite/2.png'),
    ('Saut à la corde 10min', 'assets/img/activite/3.jpg'),
    ('Traction', 'assets/img/activite/4.png'),
    ('Dormir 8h', 'assets/img/activite/5.png'),
    ('Football', 'assets/img/activite/6.png'),
    ('Abdo 10x3', 'assets/img/activite/7.png'),
    ('Soulver de poids', 'assets/img/activite/8.png'),
    ('Natation', 'assets/img/activite/9.png'),
    ('Yoga', 'assets/img/activite/10.png');


INSERT INTO programme (id_plat, id_objectifs, id_activite)
VALUES
    (1, 1, 1),
    (2, 1, 2),
    (3, 1, 3),
    (4, 1, 4),
    (5, 1, 5),
    (6, 2, 6),
    (7, 2, 7),
    (8, 2, 8),
    (9, 2, 9),
    (10, 2, 10);
