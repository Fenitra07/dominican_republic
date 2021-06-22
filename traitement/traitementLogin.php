<?php 
	
	include('../connexion/connexion.php');

    if (isset($_POST["login"]) && isset($_POST["mdp"])) {
        $login = $_POST["login"];
        $mdp = $_POST["mdp"];

        $sqlLogin = "SELECT * FROM user WHERE login = '$login' and mdp = '$mdp'";
        $result = $conn->query($sqlLogin);
        $Passager = $result->fetch()['0'];
        
        if ($Passager) {
        	header('location:../dashboard.php');
        } else {
        	header('location: ../login.php');
        }
    }
?>