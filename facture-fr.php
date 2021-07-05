<?php

include('connexion/connexion.php');

if (!empty($_GET["id"])) {
  $id = $_GET["id"];

   $sqlVoir = "SELECT * FROM passager p
    LEFT JOIN demande_billet db ON p.id = db.passager_id
    LEFT JOIN profession pf ON p.profession_id = pf.id
    LEFT JOIN symptome_has_passager shp ON p.id = shp.passager_id
    LEFT JOIN symptome s ON shp.symptome_id= s.id
    LEFT JOIN civilite c ON p.civilite_id = c.id
    LEFT JOIN information_adresse ia ON p.information_adresse_id = ia.id
    WHERE p.id = $id";

     $result = $conn->query($sqlVoir);
       $data = $result->fetch();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Facture</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/bill.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap5/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap5/css/bootstrap.min.css">
    <link rel="shortcut icon" href="assets/favicon/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
</head>
<body>


<div class="container">
<div class="row">
    <div class="col-md-12">

      <p>Veuillez trouver ci-dessous la facture d'achat de nos services pour obtenir votre E-ticket pour la République Dominicaine</p>

      <div class="widget-box">
        <div class="widget-header widget-header-large">
          <h3 class="widget-title grey lighter">
            <i class="ace-icon fa fa-plane green"></i>
            go-dominican-republic.com
          </h3>
          <div class="widget-toolbar no-border invoice-info">
            <span class="invoice-info-label">FACTURE: </span>

            <!-- Atao auto-incrémenté -->
            <span class="red">#<?= isset($data["id"])? $data["id"]: '' ?></span>
          </div>
        </div>

        <div class="widget-body">
          <div class="widget-main padding-24">
            <div class="row">
              <div class="col-md-9">
                  <div class="">
                    <b>Company Info</b>
                  </div>
                  <div>
                    <ul class="list-unstyled spaced">
                      <li>Street, City</li>
                      <li>Zip Code</li>
                      <li>State, Country</li>
                      <li>Phone:</li>
                    </ul>
                  </div>
              </div>

              <div class="col-md-3">
                <div>
                  <ul class="list-unstyled spaced">
                      <li><input disabled type="" name="" value="<?php echo date('Y/m/d') ?>"></li>
                      <li><input disabled class="input--style-6" type="" value="<?= isset($data["noms"])? $data["noms"] : ''  ?>" name="noms" placeholder=""></li>
                      <li><input disabled class="input--style-6" type="" value="<?= isset($data["nom_famille"])? $data["nom_famille"]: '' ?>" name="nom_famille" placeholder=""></li>
                      <li><input disabled class="input--style-6" type="mail" value="<?= isset($data["email"])? $data["email"]: '' ?>" name="email" placeholder=""></li>
                      <li><input disabled class="input--style-6" type="test" value="<?= isset($data["numero"])? $data["numero"]: '' ?>" name="numero" placeholder=""></li>
                    </ul>
                </div>
              </div><!-- /.col -->
            </div><!-- /.row -->

            <div class="space"></div>

            <div>
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Designation</th>
                    <th>Unit Price</th>
                    <th>TOTAL</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>SVC-E-ticket</td>
                    <td>69,9 €</td>
                    <td>69,9 €</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="hr hr8 hr-double hr-dotted"></div>

            <div class="row">
              <div class="col-md-4"></div>
              <div class="col-md-8">
                <h4>Total amount :<span class="red">69,9 €</span></h4>
                <p>Pénalités de retard (taux annuel) : 10,05 %</p>
                <p>Escompte pour paiement anticipé (taux mensuel) : 1,5 %</p>
                <p>Indemnité forfaitaire pour frais de recouvrement en cas de retard de paiement : 40,00 €</p>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</div>

</body>
</html>
