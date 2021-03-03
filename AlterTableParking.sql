ALTER Table reservation
ADD CONSTRAINT FK_RES_UTI FOREIGN KEY (numutilisateur) REFERENCES utilisateur (numutilisateur);

ALTER Table reservation
ADD CONSTRAINT FK_RES_PAR FOREIGN KEY (codeplace) REFERENCES parking (codeplace);