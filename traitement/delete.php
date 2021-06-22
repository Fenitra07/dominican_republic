<?php
	include('../connexion/connexion.php');

	if (isset($_GET["id"])) {
	 	$id = $_GET["id"]; 

	$sqlDelete = "DELETE FROM demande_billet WHERE passager_id = 9;
	DELETE FROM profession WHERE p.`id` = 9;
	DELETE FROM symptome_has_passager WHERE symptome_id = 9;
	DELETE FROM passager WHERE id = 9;";

	$result = $conn->query($sqlDelete);
	header('location:../dashboard.php');
?>