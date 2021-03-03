drop table if exists utilisateur;
drop table if exists parking;
drop table if exists reservation;

Create Table utilisateur
(
	numutilisateur int(3),
	nomutilisateur VARCHAR(50),
	prenomutilisateur VARCHAR(50),
	adressemailutilisateur VARCHAR(50),
	motdepasseutilisateur VARCHAR(50),
	estadmin boolean,
	Constraint PK_utilisateur PRIMARY KEY (numutilisateur)
)Engine = Innodb;

Create Table parking
(
	codeplace int(3),
	Constraint PK_parking PRIMARY KEY (codeplace)
)Engine = Innodb;

Create table reservation
(
	numutilisateur int(3),
	codeplace int(3),
	datedebut date,
	datefin date,
	CONSTRAINT PK_reservation PRIMARY KEY (numutilisateur, codeplace)
)Engine = Innodb;