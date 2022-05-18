CREATE TABLE `UtilisateursVoitures` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`nom` varchar(255) NOT NULL,
	`mdp` TEXT NOT NULL,
	`statut` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `vehicules` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`numero` varchar(30) NOT NULL,
	`marque` varchar(255) NOT NULL,
	`modele` varchar(255) NOT NULL,
	`type` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);



CREATE TABLE `trajets` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`id_chauffeur` INT NOT NULL,
	`id_voiture` INT NOT NULL,
	`date_depart` DATE,
	`heure_depart` TIME,
	`lieu_depart` varchar(255),
	`kilometre_depart` FLOAT,
	`date_arrivee` DATE,
	`heure_arrivee` TIME,
	`lieu_arrive` varchar(255),
	`kilometre_arrivee` FLOAT,
	`prix_carburant` FLOAT,
	`quantite_carburant` FLOAT,
	`motif` TEXT,
	PRIMARY KEY (`id`)
);


CREATE TABLE `assurances` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`id_voiture` INT NOT NULL,
	`date_emission` DATE NOT NULL,
	`heure_emission` TIME NOT NULL,
	`date_expiration` DATE NOT NULL,
	`heure_expiration` TIME NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `visiteTechniques` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`id_voiture` INT NOT NULL,
	`date_emission` DATE NOT NULL,
	`heure_emission` TIME NOT NULL,
	`date_expiration` DATE NOT NULL,
	`heure_expiration` TIME NOT NULL,
	PRIMARY KEY (`id`)
);



ALTER TABLE `trajets` ADD CONSTRAINT `trajets_fk0` FOREIGN KEY (`id_chauffeur`) REFERENCES `UtilisateursVoitures`(`id`);

ALTER TABLE `trajets` ADD CONSTRAINT `trajets_fk1` FOREIGN KEY (`id_voiture`) REFERENCES `vehicules`(`id`);

ALTER TABLE `assurances` ADD CONSTRAINT `assurances_fk0` FOREIGN KEY (`id_voiture`) REFERENCES `vehicules`(`id`);

ALTER TABLE `visiteTechniques` ADD CONSTRAINT `visiteTechniques_fk0` FOREIGN KEY (`id_voiture`) REFERENCES `vehicules`(`id`);



create view view_trajet as
select
		UtilisateursVoitures.id as id_chauffeur,
		UtilisateursVoitures.nom as nom_chauffeur,
		vehicules.numero ,
		vehicules.marque as marque,
		vehicules.modele as modele,
		vehicules.type as type_voiture,
		trajets.id as id_trajet,
		trajets.date_depart as date_depart,
		trajets.heure_depart as heure_depart,
		trajets.lieu_depart as lieu_depart,
		trajets.kilometre_depart as kilometre_depart,
		trajets.date_arrivee as date_arrivee,
		trajets.heure_arrivee as heure_arrivee,
		trajets.lieu_arrive as lieu_arrive,
		trajets.kilometre_arrivee as kilometre_arrive,
		trajets.prix_carburant as prix_carburant,
		trajets.quantite_carburant as quantite_carburant,
		trajets.motif as motif
from 
UtilisateursVoitures
inner join trajets on trajets.id_chauffeur = UtilisateursVoitures.id
inner join vehicules on trajets.id_voiture = vehicules.id;



create view view_vehicule_papiers as select
vehicules.id as id ,
vehicules.numero as numero ,
vehicules.marque as marque ,
vehicules.modele as modele ,
vehicules.type as type ,
assurances.id as assurances_id ,
assurances.date_emission as assurances_date_emission,
assurances.heure_emission as assurances_heure_emission,
assurances.date_expiration as assurances_date_expiration,
assurances.heure_expiration as assurances_heure_expiration,
DATEDIFF( assurances.date_expiration, Date(Now()) ) as assurance_reste_jour,
visiteTechniques.id as visiteTechniques_id ,
visiteTechniques.date_emission as visiteTechniques_date_emission,
visiteTechniques.heure_emission as visiteTechniques_heure_emission,
visiteTechniques.date_expiration as visiteTechniques_date_expiration,
visiteTechniques.heure_expiration as visiteTechniques_heure_expiration
DATEDIFF( visiteTechniques.date_expiration, Date(Now()) ) as visiteTechniques_reste_jour
from vehicules 
left join assurances on vehicules.id =assurances.id_voiture
left join visiteTechniques on vehicules.id = visiteTechniques.id_voiture;
