<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="assets/css/main.css" rel="stylesheet" media="all">
    <link rel="shortcut icon" href="assets/favicon/favicon.ico">
</head>

<body>
    <div class="page-wrapper">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-body">

              <form method="POST" action="contact.php">

                  <div id="part1">
                      <!-- GENERAL INFORMATION -->
                        <div class="form-row">
                            <div class="name">Names (*)</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="nom">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Last Names (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="prenom" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Phone (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="contact" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">E-mail (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="" name="email" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Message (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message" placeholder=""></textarea>
                                </div>
                            </div>
                        </div>

            </div>
            <!-- SUBMIT BOUTTON -->
                        <div class="card-footer">
                            <button class="btn btn--radius-2 btn--blue-2" type="submit">Send message</button>
                        </div>
            <!-- SUBMIT BOUTTON -->


                  </form>

                        </div>

              </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="assets/js/global.js"></script>



</body>

</html>
<!-- end document-->

