<?php
session_start();
if(isset($_SESSION['user']))
{
include('connexion/connexion.php');

10 mins in seconds
$inactive = 10;
if( !isset($_SESSION['timeout']) )
$_SESSION['timeout'] = time() + $inactive;

$session_life = time() - $_SESSION['timeout'];

if($session_life > $inactive)
{  session_destroy(); header("location:login.php");     }

$_SESSION['timeout']=time();


?>

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
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="assets/bootstrap5/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="assets/bootstrap5/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/ionicons.min.css">

  <!-- Datatable -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->

  <script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
  <script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
  <script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
  <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">





  <!-- Sweatalerts -->
  <script type="text/javascript" src="js/sweetalert2.all.js"></script>
  <script type="text/javascript" src="js/sweetalert2.all.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- Fonts & Fonticons -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/fonticons/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="assets/fonticons/css/font-awesome.min.css">


<style type="text/css">
  .pagination>li {
display: inline;
padding:0px !important;
margin:0px !important;
border:none !important;
}
.modal-backdrop {
  z-index: -1 !important;
}
/*
Fix to show in full screen demo
*/
iframe
{
    height:500px !important;
}

.select.input-sm {
    height: 30px;
    line-height: 0px !important;
}

</style>

</head>
<body>

    <?php
    include("dashboard_navbar.php");
    ?>

  <section class="section_top">
    <div class="container-fluid">
      <div class="row">

        <div class="col-md-12">

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
          <table id="datatable" class="table table-striped table-bordered" cellspacing="0" style="width: 100%">
            <thead>
              <tr class="header">
                <th>Name</th>
                <th>Last Name</th>
                <th>Permanent address</th>
                <th>Passport number</th>
                <th>View</th>
                <th>Invoice</th>
                <th>Delete</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
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
                  <td>
                    <a href="facture-fr.php?id=<?= $row["id"]?>"><button class="btn btn-info">FR</button></a>
                    <a href="facture-us.php?id=<?= $row["id"]?>"><button class="btn btn-primary">EN</button></a>
                  </td>
                  <td><a onclick="return confirm('Do you really want to delete this information?')" href="traitement/delete.php?id=<?= $row["id"]?>"><button class="btn btn-danger"><i class="fa fa-trash" style="color: white;"></i></button></a></td>
                  <td>Paid</td>
                </tr>

                      <?php
                        }
                } else {
                    echo "0 results";
                }
                $conn->close();
              ?>

              </tbody>
          </table>

        </div>
      </div>
    </div>
  </section>



    <!-- Datatable -->
    <script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').dataTable();

         $("[data-toggle=tooltip]").tooltip();

    } );
    </script>

<script type="text/javascript">
    var IDLE_TIMEOUT = 1 * 60;  // 10 minutes of inactivity
    var _idleSecondsCounter = 0;
    document.onclick = function() {
        _idleSecondsCounter = 0;
    };
    document.onmousemove = function() {
        _idleSecondsCounter = 0;
    };
    document.onkeypress = function() {
        _idleSecondsCounter = 0;
    };
    window.setInterval(CheckIdleTime, 1000);
    function CheckIdleTime() {
        _idleSecondsCounter++;
        var oPanel = document.getElementById("SecondsUntilExpire");
        if (oPanel)
            oPanel.innerHTML = (IDLE_TIMEOUT - _idleSecondsCounter) + "";
        if (_idleSecondsCounter >= IDLE_TIMEOUT) {
            // destroy the session in login.php
            document.location.href = "login.php";
        }
    }
</script>

  <!-- MAIN SCRIPTS -->
    <script src="assets/js/table.js"></script>
    <!-- <script src="assets/js/jquery.min.js"></script> -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>


<?php
}
else{
    header("location:login.php");
}

?>
