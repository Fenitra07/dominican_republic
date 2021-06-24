<?php
	include('../connexion/connexion.php');

	if (!empty($_GET["id"])) {
	 	$id = $_GET["id"]; 

		$sqlDelete = "DELETE FROM demande_billet WHERE passager_id = $id;
					  DELETE FROM profession WHERE id = $id;
					  DELETE FROM symptome_has_passager WHERE symptome_id = $id;
					  DELETE FROM passager WHERE id = $id";

		$result = $conn->query($sqlDelete);
		header("location: ../dashboard.php");
	}
?>