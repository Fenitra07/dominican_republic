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
    include("navbar.php");
    ?>

  <section class="section_top fond_bleu_drapeau">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
          <h1 class="texte_blanc">ELECTRONIC TICKET TO ENTER OR EXIT THE DOMINICAN REPUBLIC</h1>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5 img_center">
          <img src="assets/img/tourist.png">
        </div>
      </div>
    </div>
  </section>

<!-- DEBUT DU FORMULAIRE -->
  <section class="section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="div_form_title">
            <h2 class="form_first_title">Contact form</h2>
            <p class="form_paragraph">For any help you need, do not hesitate to contact us.</p>
          </div>
          <!-- FORMULAIRE  -->
          <div>
            <?php
              include('contact_form.php');
             ?>

          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </section>
<!-- FIN DU FORMULAIRE -->


  <section>
    <?php
    include("footer.php");
    ?>
  </section>


  <!-- SCRIPTS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
