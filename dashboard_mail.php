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


  <!-- Fonts & Fonticons -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/fonticons/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="assets/fonticons/css/font-awesome.min.css">


</head>
<body>

  <section class="section_top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
        <a href="dashboard.php">
           <button type="button" class="btn btn-secondary" style="border-radius: 50%; margin-top: 10px;">
              <i class="fa fa-home"></i>
           </button>
        </a>
        </div>
      </div>
    </div>
  </section>


  <section class="section_top">
    <div class="container-fluid">
      <div class="row">
<!--         <div class="col-md-2"></div> -->

        <div class="col-md-12">
          <?php
          include("message.html");
          ?>

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
