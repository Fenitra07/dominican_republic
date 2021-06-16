<?php 

	include('../connexion/connexion.php');

	/*table demande billet*/
	$accept_condition_generale= $_POS["accept_condition_generale"];
	$demande_immediat = $_POST["demande_immediat"];
	$apport_nourriture = $_POST["apport_nourriture"];
	$apport_marchandise_taxable = $_POST["apport_marchandise_taxable"];
	$ammount = $_POST["ammount"];
	$currency = $_POST["currency"];
	$declare_origin_security = $_POST["declare_origin_security"];

	/*table information_adresse*/
	$adresse_permanent = $_POST["adresse_permanent"];
	$ville	= $_POST["ville	"];
	$etat = $_POST["etat"];
	$code_postal = $_POST["code_postal"];
	$type_voyage = $_POST["type_voyage"];
	$is_arret_frequent = $_POST["is_arret_frequent"];
	$accept_sejour_hotel = $_POST["stay_hotel"];

	/*table passasger*/
	$noms = $_POST["noms"];
	$nom_famille = $_["nom_famille"];
	$date_naissance = $_POST["date_naissance"];
	$genre = $_POST["genre"];
	$pays_naissance	 = $_POST["pays_naissance"];
	$pays_nationnalite = $_POST["pays_nationnalite"];
	$numero_passport = $_POST["numero_passport"];
	$email = $_POST["email"];
	$numero = $_POST["numero"];

	/*table civlité*/
	$etat_civil = $_POST["etat_civil"];

	/*table profession, libelle = occupation*/
	$libelle = $_POST["libelle"];

	$symptome = $_POST["symptome"];
	$apport_bagage = $_POST["apport_bagage"];


	$sql = "INSERT INTO information_adresse (adresse_permanent, ville, etat, code_postal, type_voyage, is_arret_frequent)
	 VALUES ('$adresse_permanent', '$ville', '$etat', '$code_postal', '$type_voyage', '$is_arret_frequent')";

	 $sql = "INSERT INTO civilite (etat_civil)
	 VALUES ('$etat_civil')";

	/*tokony mbola apina id infrmation adresse sy id etat_civil*/
	 $sql = "INSERT INTO passasger (noms, nom_famille, date_naissance, genre, pays_naissance, pays_nationnalite, numero_passport,stay_hotel, email, numero, profession_id, civilite_id)
	 VALUES ('$noms', '$nom_famille', '$date_naissance', '$genre', '$pays_naissance', '$pays_nationnalite', '$numero_passport','$accept_sejour_hotel', '$email', '$numero', '$libelle', '$etat_civil')";

	 $sql = "INSERT INTO demande_billet (ammount, currency, declare_origin_security, apport_nourriture, apport_marchandise_taxable, accept_condition_generale, demande_immediat)
	 VALUES ('$ammount', '$currency', '$declare_origin_security', '$apport_nourriture', '$apport_marchandise_taxable', '$accept_condition_generale', '$demande_immediat')";


	 

	 $conn->exec($sql);
	 echo "New record created successfully";
	} catch(PDOException $e) {
	  echo $sql . "<br>" . $e->getMessage();
	}


 ?>