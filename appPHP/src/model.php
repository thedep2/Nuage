<?php 

// retourne les 4 dernieres actu
function getActu() {

	// creation du la connexion avec la bdd
	$bdd = new PDO('mysql:host=localhost;dbname=nuage;charset=utf8', 'nuage_user', 'secret');
	
	// recuperation des 4 dernieres actus
	$photosActu = $bdd->query('SELECT * FROM t_photo ORDER BY photo_id LIMIT 0, 4');
	
	return $photosActu;
}

