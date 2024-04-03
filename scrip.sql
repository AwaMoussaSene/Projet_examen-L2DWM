-- insertion des elements de la table auteur
INSERT INTO auteur (id_auteur, Nom, Prenom, Profession) VALUES
(1, 'Dupont', 'Jean', 'Écrivain'),
(2, 'Martin', 'Marie', 'Poète'),
(3, 'Durand', 'Pierre', 'Historien'),
(4, 'Ba', 'Mariama', 'Écrivaine'),
(5, 'Oyono', 'Ferdinand', 'Historien');

-- insertion des elements de la table etatdemande
INSERT INTO etatdemande (idetatdmd, libelle) VALUES
(1, 'en cour'),
(2, 'valider'),
(1, 'rejeter');

-- insertion des elements de la table etatexemplaire
INSERT INTO etatexemplaire (idetatEx, libelle) VALUES
(1, 'reserver'),
(2, 'archiver'),
(3, 'disponible');

-- insertion des elements de la table etatpret
INSERT INTO etatepret (idetatpret, libelle) VALUES
(1, 'en cour'),
(2, 'retourner'),
(3, 'retarder');


-- insertion des elements de la table mot_cle
INSERT INTO Mot_cle (Id_mot, Mot) VALUES
(1, 'Roman'),
(2, 'Poésie'),
(3, 'Histoire'),
(4, 'amoure'),
(5, 'amitie'),
(6, 'culture'),
(7, 'politique'),
(8, 'ethenie'),
(9, 'sports'),
(10, 'education'),
(11, 'alphabetisme');

-- insertion des elements de la table rayon
INSERT INTO rayon (idrayon, nomrayon) VALUES
('Romans'),
('Poésie'),
('Histoire');

-- insertion des elements de la table ouvrage
INSERT INTO Ouvrage (Id_ouvrage, Titre, Date_edition) VALUES
("", 'Livre 1', '2022-01-01'),
("", 'Livre 2', '2021-05-15'),
("", 'Livre 3', '2023-02-28'),
("", 'Livre 4', '2023-02-28'),
("", 'Livre 5', '2023-02-28'),
("", 'Livre 6', '2023-02-28'),
("", 'Livre 7', '2023-02-28'),
("", 'Livre 8', '2023-02-28'),
("", 'Livre 9', '2023-02-28'),
("", 'Livre 10', '2023-02-28'),
("", 'Livre 11', '2023-02-28'),
("", 'Livre 12', '2023-02-28'),
("", 'Livre 13', '2023-02-28'),
("", 'Livre 14', '2023-02-28'),
("", 'Livre 15', '2023-02-28'),
("", 'Livre 16', '2023-02-28'),
("", 'Livre 17', '2023-02-28');


-- insertion des elements de la table profil
INSERT INTO profil (idprofil, libelle) VALUES
(1, 'RB'),
(2, 'RP'),
(3, 'Adherent'),
(4, 'visiteur');

-- insertion des elements de la table exemplaire
INSERT INTO `exemplaire` (`idexemplaire`, `id_ouvrage`, `idrayon`, `idetatEx`) VALUES 
(NULL, '1', '2', '3'), 
(NULL, '4', '1', '3'), 
(NULL, '7', '2', '1'), 
(NULL, '15', '2', '2'),
(NULL, '10', '2', '3'), 
(NULL, '7', '3', '3'),
(NULL, '14', '2', '3'), 
(NULL, '4', '3', '1');

-- insertion des elements de la table users
INSERT INTO users (iduser, nom, prenom, login, mdp, idprofil) VALUES
("", 'Sene', 'Awa', 'Awa@gmail.com', 'passer', 1),
("", 'diop', 'adama', 'adama@gmail.com', 'passer', 2),
("", 'ba', 'badara', 'badara@gmail.com', 'passer', 3),
("", 'ba', 'amadou', 'amadou@gmail.com', 'passer', 3),
("", 'diop', 'issa', 'issa@gmail.com', 'passer', 3),
("", 'diallo', 'jamilatou', 'jamilatou@gmail.com', 'passer', 3),
("", 'diop', 'madieme', 'madieme@gmail.com', 'passer', 3);


-- insertion des elements de la table demande_pret
INSERT INTO `demande_pret` (`iddemande`, `id_ouvrage`, `iduser`, `idetatdmd`) VALUES
(NULL, '2', '6', '3'),
(NULL, '14', '6', '1'), 
(NULL, '6', '1', '1'), 
(NULL, '17', '5', '2'), 
(NULL, '12', '4', '1'), 
(NULL, '8', '7', '3'), 
(NULL, '5', '5', '2');


-- insertion des elements de la table pret
INSERT INTO `pret` (`idpret`, `datepret`, `dateprevue`, `datereel`, `idetatpret`) VALUES 
(NULL, '2024-03-01', '2024-03-18', '2024-03-18', '2'), 
(NULL, '2024-02-10', '2024-03-25', '2024-03-27', '3'), 
(NULL, '2024-03-01', '2024-03-15', '', '1'), 
(NULL, '2024-02-27', '2024-03-12', '', '1'), 
(NULL, '2024-03-28', '2024-03-13', '', '1');

-- insertion des elements de la table avoirpret
INSERT INTO `avoirpret` (`iddemande`, `idpret`) VALUES 
('1', '1'), 
('3', '1'), 
('4', '2'), 
('7', '2'), 
('5', '3'), 
('2', '4');

-- insertion des elements de la table ouvrage_auteur
INSERT INTO `ouvrage_auteur` (`id_ouvrage`, `id_auteur`) VALUES 
('1', '1'), 
('2', '3'), 
('3', '1'), 
('4', '2'), 
('5', '4'), 
('6', '5'), 
('7', '2'), 
('8', '3'), 
('9', '5'), 
('10', '4'), 
('11', '1'), 
('12', '3'), 
('13', '4'), 
('14', '5'), 
('15', '3'), 
('16', '4'), 
('17', '5');

-- insertion des elements de la table motexemplaire
INSERT INTO `motexemplaire` (`id_mot`, `idexemplaire`) VALUES 
('5', '2'), 
('1', '7'), 
('6', '5'), 
('8', '3'), 
('4', '6'), 
('3', '4'), 
('1', '1'), 
('9', '1'), 
('10', '2'), 
('8', '8'), 
('5', '3'), 
('1', '5');




INSERT INTO departement (iddep, nomdep, descriptions, datecreation) VALUES
(1, 'Ressources Humaines', "Gère les ressources humaines de l'entreprise", '2023-05-15'),
(2, 'Informatique', 'S occupe du développement et de la maintenance des systèmes informatiques', '2022-02-20'),
(2, 'Markting', "S occupe du markting et de la communication  de l'entreprise", '2022-05-2');



INSERT INTO employer (idemployer, nom, prenom, datenss, email, tel, etat, iddep) VALUES
("", 'badara', 'ba', '1999-05-12', 'ba@gmail.com', '012243456789', 'Actif', 1),
("", 'awa', 'sene', '2004-07-20', 'sene@gmail.com', '098765124321', 'archiver', 3),
("", 'badara', 'diallo', '1999-05-12', 'diallo@gmail.com', '011123456789', 'Actif', 1),
("", 'issa', 'diop', '1899-05-12', 'diop@gmail.com', '012345336789', 'Actif',3),
("", 'madjeme', 'diop', '1999-05-12', 'diopba@gmail.com', '0124253456789', 'archiver', 2),
("", 'badara', 'ba', '1999-05-12', 'ba@gmail.com', '338663535', 'Actif', 1),
("", 'jami', 'ba', '2002-05-12', 'jamiba@gmail.com', '5678237838','archiver', 2),
("", 'amadou', 'diatta', '1999-05-1', 'diatta@gmail.com', '57738', 'Actif', 3);



INSERT INTO contrat (idcontrat, types) VALUES
("", 'contrat de développement logiciel'),
("", 'contrat de service');
("", 'contrat de""consultation');


INSERT INTO client (idclient, nom, prenom, adresse, email, tel, idcontrat) VALUES
("", 'sene', 'awa', 'medina', 'jamiaba@gmail.com', '34567890', 1),
("", 'sene', 'moussa', 'face', 'diatta@gmail.com', '987653210', 2),
("", 'diop', 'moussa', 'mermoz', 'diop@gmail.com', '98765410', 2),
("", 'diop', 'fatou', 'face', 'fatou@gmail.com', '987543210', 3),
("", 'sane', 'fatou', 'mbour', 'sane@gmail.com', '97543210', 3);


INSERT INTO projets (idprojet, nom, descriptions, datedebut, datefin, etat, idclient, iddep) VALUES
("", 'Projet A', 'Développement d une nouvelle application web', '2023-03-01', '2023-08-31', 'En cours', 1, 4),
("", 'Projet B', 'Migration vers un nouveau système de gestion', '2023-05-15', '2023-12-31', 'En attente', 2, 3),
("", 'Projet C', 'Développement d une nouvelle site web', '2023-05-15', '2023-12-31', 'En attente', 2, 5);
