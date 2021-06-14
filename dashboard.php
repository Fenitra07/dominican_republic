<!DOCTYPE html>
<html lang="fr-FR">
<head>
  <!-- Charset -->
  <meta charset="utf-8">
  <!-- mobile setting -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Title -->
  <title>Mon Projet</title>
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
          <table id="myTable">
            <tr class="header">
              <th style="width:16%;">Name</th>
              <th style="width:9%;">Last Name</th>
              <th style="width:16%;">Permanent address</th>
              <th style="width:16%;">Passport number</th>
              <th style="width:5%;">View</th>
              <th style="width:8%;">Action</th>
            </tr>
            <tr>
              <td>Alfreds Futterkiste</td>
              <td>Germany</td>
              <td>LOT IVH GT</td>
              <td>PASSEPORT 121398</td>
              <td><i class="fa fa-eye"></i></td>
              <td><button class="btn btn-info"><i class="fa fa-edit"></i></button> <button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
            </tr>
            <tr>
              <td>Berglunds snabbkop</td>
              <td>Sweden</td>
              <td>LOT IVH GT</td>
              <td>PASSEPORT 121398</td>
              <td><i class="fa fa-eye"></i></td>
              <td><button class="btn btn-info"><i class="fa fa-edit"></i></button> <button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
            </tr>
          </table>

        </div>
      </div>
    </div>
  </section>



  <!-- SCRIPTS -->
    <script src="assets/js/table.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>

