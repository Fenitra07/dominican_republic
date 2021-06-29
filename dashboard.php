<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Charset -->
  <meta charset="utf-8">
  <!-- mobile setting -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Title -->
  <title>Dashboard</title>
  <link rel="shortcut icon" href="assets/favicon/favicon.ico">
  <!-- CSS & Boostrap-->
  <link rel="stylesheet" type="text/css" href="assets/css/table.css">

  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <!-- <link rel="stylesheet" href="assets/css/ionicons.min.css"> -->
  <link rel="stylesheet" href="assets/css/button_style.css">
  <link rel="stylesheet" type="text/css" href="assets/bootstrap5/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="assets/bootstrap5/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/ionicons.min.css">

  <!-- Fonts & Fonticons -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/fonticons/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="assets/fonticons/css/font-awesome.min.css">


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>

    <?php
    include("dashboard_navbar.php");
    ?>

  <section class="section_top">
    <div class="container-fluid">
      <div class="row">
<!--         <div class="col-md-2"></div> -->

        <div class="col-md-12">

          <!-- SEARCH ICON -->
          <div class="input-icons">
            <i class="fa fa-search icon"></i>
            <input type="text" class="input-field" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
          </div>

          <!-- TABLE WITCH CONTENT FORM VALUES -->
          <?php

          ?>

          <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "dominican_republic";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Error connection: " . $conn->connect_error);
            }

            $sql = "SELECT passager.id,passager.noms, passager.nom_famille, passager.information_adresse_id, information_adresse.adresse_permanent, passager.numero_passport FROM passager LEFT JOIN information_adresse ON passager.information_adresse_id = information_adresse.id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
          ?>
          <table id="myTable">
            <tr class="header">
              <th style="width:16%;">Name</th>
              <th style="width:9%;">Last Name</th>
              <th style="width:16%;">Permanent address</th>
              <th style="width:16%;">Passport number</th>
              <th style="width:5%;">View</th>
              <th style="width:5%;">Delete</th>
              <th style="width:5%;">status</th>
            </tr>
          <?php
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  ?>
            <tr>
              <td><?php echo $row["noms"];?></td>
              <td><?php echo $row["nom_famille"];?></td>
              <td><?php echo $row["adresse_permanent"];?></td>
              <td><?php echo $row["numero_passport"];?></td>
              <td><a href="traitement/voir.php?id=<?= $row["id"]?>"><i class="fa fa-eye" style="color: black;"></i></a></td>
              <td><a href="traitement/delete.php?id=<?= $row["id"]?>"><button class="btn btn-danger" id="suppAlert"><i class="fa fa-trash" style="color: white;"></i></button></a></td>
              <td>Paid</td>
            </tr>

                  <?php
                    }
            } else {
                echo "0 results";
            }
            $conn->close();
          ?>
          <!--<table id="myTable">
            <tr class="header">
              <th style="width:16%;">Name</th>
              <th style="width:9%;">Last Name</th>
              <th style="width:16%;">Permanent address</th>
              <th style="width:16%;">Passport number</th>
              <th style="width:5%;">View</th>
              <th style="width:8%;">Delete</th>
            </tr>
            <tr>
              <td>Alfreds Futterkiste</td>
              <td>Germany</td>
              <td>LOT IVH GT</td>
              <td>PASSEPORT 121398</td>
              <td><i class="fa fa-eye"></i></td>
              <td><button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
            </tr>
            <tr>
              <td>Berglunds snabbkop</td>
              <td>Sweden</td>
              <td>LOT IVH GT</td>
              <td>PASSEPORT 121398</td>
              <td><i class="fa fa-eye"></i></td>
              <td><button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
            </tr>-->
          </table>

        </div>
      </div>
    </div>
  </section>


<script type="text/javascript">
 document.getElementById('suppAlert').onclick = function(){
  swal("The information has been successfully removed", "", "success");

};
</script>

<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">

  <!-- SCRIPTS -->
    <script src="assets/js/table.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>

