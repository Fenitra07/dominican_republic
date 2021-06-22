<?php 

	include('../connexion/connexion.php');

	/*table demande billet*/

	if (!empty($_POST["accept_condition_generale"])) {
		$accept_condition_generale = "true";
	}else{
		$accept_condition_generale = "false";
	}
	if (!empty($_POST["demande_immediat"])) {
		$demande_immediat = "true";
	}else{
		$demande_immediat = "false";
	}

	$apport_nourriture = $_POST["apport_nourriture"];
	$apport_marchandise_taxable = $_POST["apport_marchandise_taxable"];
	$ammount = $_POST["ammount"];
	$currency = $_POST["currency"];
	$declare_origin_security = $_POST["declare_origin_security"];

	/*table information_adresse*/
	$adresse_permanent = $_POST["adresse_permanent"];
	$ville	= $_POST["ville"];
	$etat = $_POST["etat"];
	$code_postal = $_POST["code_postal"];
	$type_voyage = $_POST["type_voyage"];
	$is_arret_frequent = $_POST["is_arret_frequent"];

	$accept_sejour_hotel = $_POST["accept_sejour_hotel"];


	/*table passasger*/
	$noms = $_POST["noms"];
	$nom_famille = $_POST["nom_famille"];
	$date_naissance = $_POST["date_naissance"];
	$genre = $_POST["genre"];
	$pays_naissance	 = $_POST["pays_naissance"];
	$pays_nationnalite = $_POST["pays_nationnalite"];
	$numero_passport = $_POST["numero_passport"];
	$email = $_POST["email"];
	$numero = $_POST["numero"];
	$province = $_POST["province"];
	$municipality = $_POST["municipality"];
	$section = $_POST["section"];
	$hotel_name = $_POST["hotel_name"];
	$travel_purpose = $_POST["travel_purpose"];
	$days_staying = $_POST["days_staying"];
	$origin_port = $_POST["origin_port"];
	$disembarkation_port = $_POST["disembarkation_port"];
	$transportation_company = $_POST["transportation_company"];
	$name_bard_port = $_POST["name_bard_port"];
	$flight_number = $_POST["flight_number"];
	$flight_date = $_POST["flight_date"];


	/*table civlité*/
	$etat_civil = $_POST["etat_civil"];

	/*table profession, libelle = occupation*/
	$libelle = $_POST["libelle"];
	

	if (!empty($_POST["none"])) {
		$none = "true";
	}
	if (!empty($_POST["sorethoat"])) {
		$sorethoat = "true";
	}
	if (!empty($_POST["muscle_paain"])) {
		$muscle_paain = "true";
	}
	if (!empty($_POST["headache"])) {
		$headache = "true";
	}
	if (!empty($_POST["runny_nose"])) {
		$runny_nose = "true";
	}
	if (!empty(["cough"])) {
		$cough = "true";
	}
	if (!empty($_POST["shaking_chills"])) {
		$shaking_chills = "true";
	}
	if (!empty($_POST["breathing_difficulty"])) {
		$breathing_difficulty = "true";
	}
	if (!empty($_POST["fatigue"])) {
		$fatigue = "true";
	}
	if (!empty($_POST["fever"])) {
		$fever = "true";
	}
	else{ 
		$none = "false";
		$sorethoat = "false";
		$muscle_paain = "false";
		$headache = "false";
		$runny_nose = "false";
		$cough = "false";
		$shaking_chills = "false";
		$breathing_difficulty = "false";
		$fatigue = "false";
		$fever = "false";
	}

	
	$sql1 = "INSERT INTO information_adresse (adresse_permanent, ville, etat, code_postal, type_voyage, is_arret_frequent)
	VALUES ('$adresse_permanent', '$ville', '$etat', '$code_postal', '$type_voyage', '$is_arret_frequent')";
	$conn->query($sql1);

	$sqlSelectIdInfoAdres = "SELECT max(id) FROM information_adresse";
	$result = $conn->query($sqlSelectIdInfoAdres);
	$InfoAdres = $result->fetch()['0'];

	$sql2 = "INSERT INTO civilite (etat_civil)
	VALUES ('$etat_civil')";
	$conn->query($sql2);

	$sqlSelectIdCivilite = "SELECT max(id) FROM civilite";
	$result = $conn->query($sqlSelectIdCivilite);
	$Civilite = $result->fetch()['0'];

	/*tokony mbola apina id infrmation adresse sy id etat_civil*/
	$sql3 = "INSERT INTO passager (noms, nom_famille, date_naissance, genre, pays_naissance, pays_nationnalite, numero_passport,accept_sejour_hotel, email, numero,province,municipality,section,travel_purpose,days_staying,origin_port,disembarkation_port, transportation_company,name_bard_port,flight_number,flight_date, profession_id, civilite_id)
	VALUES ('$noms', '$nom_famille', '$date_naissance', '$genre', '$pays_naissance', '$pays_nationnalite', '$numero_passport','$accept_sejour_hotel', '$email', '$numero','$province','$municipality','$section','$travel_purpose', '$days_staying', '$origin_port', '$disembarkation_port', '$transportation_company', '$name_bard_port', '$flight_number', '$flight_date', '$Civilite', '$InfoAdres')";
	$row = $conn->query($sql3);

	$sqlSelectIdPassager = "SELECT max(id) FROM passager";
	$result = $conn->query($sqlSelectIdPassager);
	$Passager = $result->fetch()['0'];

	 $sql4 = "INSERT INTO demande_billet (ammount, currency, declare_origin_security, apport_nourriture, apport_marchandise_taxable, accept_condition_generale, demande_immediat, passager_id )
	 VALUES ('$ammount', '$currency', '$declare_origin_security', '$apport_nourriture', '$apport_marchandise_taxable', '$accept_condition_generale', '$demande_immediat', '$Passager')";
	$conn->query($sql4);


	$sql5 = " INSERT INTO symptome (none,sorethoat,muscle_paain,headache,runny_nose,cough,shaking_chills,breathing_difficulty,fatigue,fever) VALUES ('$none','$sorethoat','$muscle_paain','$headache','$runny_nose','$cough','$shaking_chills','$breathing_difficulty','$fatigue','$fever')";
	$conn->query($sql5);


	 header('location:../index.php');
	

 ?>