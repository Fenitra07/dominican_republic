<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Charset -->
  <meta charset="utf-8">
  <!-- mobile setting -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Title -->
  <title>Go-dominican-republic</title>

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
    include("cookie.php");
    ?>

    <?php
    include("navbar.php");
    ?>

  <section class="section_top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5">
          <div class="mobile_img"><img class="under_logo" src="assets/img/under_logo.png"></div>
        </div>
        <div id="portal" class="col-md-5 mobile_padding_bottom">
            <p>PORTAL TO APPLY FOR E-TICKETS TO ENTER OR LEAVE THE DOMINICAN REPUBLIC</p>
            <center>
              <a href="e-ticket-application.php">
                <button type="button" class="btn mb-2 mb-md-0 btn-secondary btn-block btn-round"><span>FILL THE FORM</span>
                  <div class="icon icon-round d-flex align-items-center justify-content-center">
                    <i class="fa fa-paper-plane"></i>
                  </div>
                 </button>
               </a>
            </center>
        </div>
      </div>
    </div>
  </section>

  <section class="fond_bleu section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <h3 class="texte_blanc interligne">WHAT IS THE E-TICKET</h3>
          <p class="texte_blanc interligne">The E-Ticket is a mandatory document that provides the necessary information to each passenger wishing to enter and leave the Dominican Republic. This information is required by the General Office of Immigration and Customs and the Ministry of Public Health of the Dominican Republic.</p>
          <center>
              <a href="e-ticket-application.php">
                <button type="button" class="btn mb-2 mb-md-0 btn-secondary btn-block btn-round" ><span>FILL THE FORM</span>
                  <div class="icon icon-round d-flex align-items-center justify-content-center">
                    <i class="fa fa-paper-plane"></i>
                  </div>
                </button>
              </a>
            </center>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </section>

  <section class="section_index">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1"></div>
          <div class="col-md-10">
            <div class="col-md-12">
          <h3 class="texte_get">GET YOUR E-TICKET IN 3 STEPS</h3>
            <div class="row">
              <div class="col-md-4">
                <div class="icons"><img class="form_icon" src="assets/img/form.png"></div>
                <p>Fill the application form</p>
              </div>
              <div class="col-md-4">
                <div class="icons"><img class="form_icon" src="assets/img/paiement.png"></div>
                <p>Finalise and pay your application with a secure payment system</p>
              </div>
              <div class="col-md-4">
                <div class="icons"><img class="form_icon" src="assets/img/mail.png"></div>
                <p>Receive your E-Ticket by email in PDF format</p>
              </div>
            </div>
          <center>
            <a href="e-ticket-application.php">
              <button id="enter_the_form" type="button" class="btn mb-2 mb-md-0 btn-secondary btn-block btn-round"><span>FILL THE FORM</span>
                <div class="icon icon-round d-flex align-items-center justify-content-center">
                  <i class="fa fa-paper-plane"></i>
                </div>
               </button>
            </a>
            </center>
            </div>
          </div>

        <div class="col-md-1"></div>
      </div>
    </div>
  </section>

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
