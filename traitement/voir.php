<?php 

include('../connexion/connexion.php');

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
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../assets/css/main.css" rel="stylesheet" media="all">
    <link rel="../shortcut icon" href="assets/favicon/favicon.ico">
</head>
<style type="text/css">
  html {
  scroll-behavior: smooth;
}
</style>

<body>
    <div class="page-wrapper" id="section1">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-body" >


              <!-- <form method="POST" action="traitement/traitementEnglshFormSubmission.php"> -->


                  <div id="part1">
                      <!-- GENERAL INFORMATION -->
                      <h3 class="form_title">1ST STEP - GENERAL INFORMATION</h3>
                      <p class="form_paragraph">Please provide your address</p>
                        <div class="form-row">
                            <div class="name">Permanent address (*)</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="adresse_permanent">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">City (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="" value="<?= isset($data["ville"])? $data["ville"]: '' ?>" name="ville" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">State (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="" value="<?= isset($data["etat"])? $data["etat"]: '' ?>" name="etat" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Zip code (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="" value="<?= isset($data["code_postal"])? $data["code_postal"]: '' ?>" name="code_postal" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Arrival or Departure (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6 select_style" value="<?= isset($data["type_voyage"])? $data["type_voyage"]: '' ?>" name="type_voyage" id="movement" onclick="myMovement()">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Do you make stops in other countries ? (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6 select_style" value="<?= isset($data["is_arret_frequent"])? $data["is_arret_frequent"]: '' ?>" name="is_arret_frequent" id="stopcountry" onclick="stopCountry()">
                                </div>
                            </div>
                        </div>


                        <!-- PASSENGER INFORMATION -->
                        <h3 class="form_title">PASSENGER INFORMATION</h3>
                        <div class="form-row">
                            <div class="name">Names (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="" value="<?= isset($data["noms"])? $data["noms"] : ''  ?>" name="noms" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Last Names (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="" value="<?= isset($data["nom_famille"])? $data["nom_famille"]: '' ?>" name="nom_famille" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Date of birth (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="date" value="<?= isset($data["date_naissance"])? $data["date_naissance"]: '' ?>" name="date_naissance">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Gender (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6 select_style" value="<?= isset($data["genre"])? $data["genre"]: '' ?>" name="genre">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Country of birth (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="" name="pays_naissance" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Country of nationality (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="" value="<?= isset($data["pays_nationnalite"])? $data["pays_nationnalite"]: '' ?>" name="pays_nationnalite" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Passport number (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" value="<?= isset($data["numero_passport"])? $data["numero_passport"]: '' ?>" type="" name="numero_passport" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Civil status (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input value="<?= isset($data["etat_civil"])? $data["etat_civil"]: '' ?>" name="etat_civil" class="input--style-6 select_style">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Ocupation (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6 select_style" value="<?= isset($data["libelle"])? $data["libelle"]: '' ?>" name="libelle">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Are you going to stay at a hotel?  (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6 select_style" value="<?= isset($data["accept_sejour_hotel"])? $data["accept_sejour_hotel"]: '' ?>" name="accept_sejour_hotel"  id="operation1" onclick="myOperation1()">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" id="r_yes1" >
                            <div class="name"><span class="name_option">Hotel name (*)</span></div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="" value="<?= isset($data["hotel_name"])? $data["hotel_name"]: '' ?>" name="hotel_name" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div id="r_no1" >
                          <div class="form-row">
                              <div class="name"><span class="name_option">PROVINCE  (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6 select_style" value="<?= isset($data["province"])? $data["province"]: '' ?>" name="province">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">MUNICIPALITY (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="" value="<?= isset($data["municipality"])? $data["municipality"]: '' ?>" name="municipality" placeholder="">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">SECTION</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="" value="<?= isset($data["section"])? $data["section"]: '' ?>" name="section" placeholder="">
                                  </div>
                              </div>
                          </div>
                        </div>


                        <!-- FLIGHT INFORMATION -->
                        <!-- Arrival Condition Begin -->
                        <div id="r_arrival" >
                          <!-- "Do you make stops in other countries" = NO -->
                          <div id="r_no3" >
                            <h3 class="form_title">FLIGHT INFORMATION</h3>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Name of the boarding port (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="" value="<?= isset($data["name_bard_port"])? $data["name_bard_port"]: '' ?>" name="name_bard_port" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Flight number (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="" value="<?= isset($data["flight_number"])? $data["flight_number"]: '' ?>" name="flight_number" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Flight date (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="date" value="<?= isset($data["flight_date"])? $data["flight_date"]: '' ?>" name="flight_date">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Disembarkation port (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6 select_style" value="<?= isset($data["disembarktion_port"])? $data["disembarktion_port"]: '' ?>" name="disembarktion_port">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Transportation company (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="" value="<?= isset($data["transportation_company"])? $data["transportation_company"]: '' ?>" name="transportation_company" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Travel purpose (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6 select_style" value="<?= isset($data["travel_purpose"])? $data["travel_purpose"]: '' ?>" name="travel_purpose">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Days of staying (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="" value="<?= isset($data["day_staying"])? $data["day_staying"]: '' ?>" name="days_staying" placeholder="">
                                    </div>
                                </div>
                            </div>
                          </div>
                          <!-- "Do you make stops in other countries" = NO -->

                          <!-- "Do you make stops in other countries" = YES -->
                          <div id="r_yes3" >
                            <h3 class="form_title">FLIGHT INFORMATION</h3>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Origin Port (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="" value="<?= isset($data["origin_port"])? $data["origin_port"]: '' ?>" name="origin_port" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Flight number (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="" value="<?= isset($data["flight_number"])? $data["flight_number"]: '' ?>" name="flight_number" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Flight date (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="date" value="<?= isset($data["flight_date"])? $data["flight_date"]: '' ?>" name="flight_date">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Name of the boarding port (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="" value="<?= isset($data["name_bard_port"])? $data["name_bard_port"]: '' ?>" name="name_bard_port" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Flight number (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="" value="<?= isset($data["flight_number"])? $data["flight_number"]: '' ?>" name="flight_number" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Flight date (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="date" value="<?= isset($data["flight_date"])? $data["flight_date"]: '' ?>" name="flight_date">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Disembarkation port (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6 select_style" value="<?= isset($data["disembarkation_port"])? $data["disembarkation_port"]: '' ?>" name="disembarkation_port">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Transportation company (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="" value="<?= isset($data["transportation_company"])? $data["transportation_company"]: '' ?>" name="transportation_company" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Travel purpose (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <select class="input--style-6 select_style" value="<?= isset($data["travel_purpose"])? $data["travel_purpose"]: '' ?>" name="travel_purpose">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Days of staying (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="" value="<?= isset($data["day_staying"])? $data["day_staying"]: '' ?>" name="day_staying" placeholder="">
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <!-- "Do you make stops in other countries" = YES -->

                        <!-- Arrival Condition End -->

                        <!-- Departure Condition Begin -->
                        <div id="r_departure" >
                          <h3 class="form_title">FLIGHT INFORMATION</h3>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Name of the boarding port (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6 select_style" value="<?= isset($data["name_bard_port"])? $data["name_bard_port"]: '' ?>" name="name_bard_port">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Flight number (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="" value="<?= isset($data["flight_number"])? $data["flight_number"]: '' ?>" name="flight_number" placeholder="">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Flight date (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" value="<?= isset($data["flight_date"])? $data["flight_date"]: '' ?>" type="date" name="flight_date">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Disembarkation port  (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="" value="<?= isset($data["disembarktion_port"])? $data["disembarktion_port"]: '' ?>" name="disembarktion_port" placeholder="">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Transportation company (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="" value="<?= isset($data["transportation_company"])? $data["transportation_company"]: '' ?>" name="transportation_company" placeholder="">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Travel purpose (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6 select_style" value="<?= isset($data["travel_purpose"])? $data["travel_purpose"]: '' ?>" name="travel_purpose">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Days of staying (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="" value="<?= isset($data["day_staying"])? $data["day_staying"]: '' ?>" name="days_staying" placeholder="">
                                  </div>
                              </div>
                          </div>
                        </div>
                        <!-- Departure Condition End -->


            </div>

            <!-- PARTIE 2 du formulaire -->

            <div  id="part2">

          <!-- FINAL STEP -->
          <!-- <div> SCRIPT JS : Begin 2nd part of FORM -->

                          <h3 class="form_title">FINAL STEP - Customs and public health information</h3>
                        <div class="form-row">
                        </div>
                        <!-- yes condition begin -->
                        <div id="r_yes2" >
                          <div class="form-row">
                              <div class="name"><span class="name_option">AMMOUNT (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="" value="<?= isset($data["ammount"])? $data["ammount"]: '' ?>" name="ammount" placeholder="">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">CURRENCY (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="" value="<?= isset($data["currency"])? $data["currency"]: '' ?>" name="currency" placeholder="">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">DECLARE ORIGIN OF THE SECURITIES (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="" value="<?= isset($data["declare_origin_security"])? $data["declare_origin_security"]: '' ?>" name="declare_origin_security" placeholder="">
                                  </div>
                              </div>
                          </div>
                        </div>
                        <!-- yes condition end -->
                        <div class="form-row">
                            <div class="name">Do you bring food, plants or animals with you or in your luggage?</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6 select_style" value="<?= isset($data["apport_nourriture"])? $data["apport_nourriture"]: '' ?>" name="apport_nourriture">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Do you bring taxable goods with you or in your luggage? </div>
                            <div class="value">
                                <div class="input-group">
                                    <select class="input--style-6 select_style" value="<?= isset($data["apport_marchandise_taxable"])? $data["apport_marchandise_taxable"]: '' ?>" name="apport_marchandise_taxable">
                                </div>
                            </div>
                        </div>



                        <!-- FINAL STEP SUITE -->
                        <h3 class="form_title">PUBLIC HEALTH</h3>
                        <p>Reporting of symptoms</p>
                        <p>Which of the following symptoms have you experienced in the last 72 hours? (*)</p>
                        <div class="form-row">
                            <table>
                              <tr>
                              	<?php 
	                            	if ($data["none"] == "true") {
	                            		$none = true;
	                            	} else{
	                            		$none = false;
	                            	}
                            	?>
                                <td><input class="" type="checkbox" <?= $none? "checked": ""  ?> name="none"><p>None</p></td>
                                <?php 
                                	if ($data["sorethoat"] == "true") {
	                            		$sorethoat = true;
	                            	} else {
	                            		$sorethoat = false;
	                            	}
                                 ?>
                                <td><input class="" type="checkbox" <?= $sorethoat? "checked": ''  ?> name="sorethoat"><p>Sore throat</p></td>
                                <td><input class="" type="checkbox" name="muscle_paain"><p>Muscle pain</p></td>
                              </tr>
                              <tr>
                                <td><input class="" type="checkbox" name="headache"><p>Headache</p></td>
                                <td><input class="" type="checkbox" name="runny_nose"><p>Runny nose</p></td>
                                <td><input class="" type="checkbox" name="cough"><p>Cough</p></td>
                              </tr>
                              <tr>
                                <td><input class="" type="checkbox" name="shaking_chills"><p>Shaking chills</p></td>
                                <td><input class="" type="checkbox" name="breathing_difficulty"><p>Breathing difficulty</p></td>
                                <td><input class="" type="checkbox" name="fatigue"><p>Fatigue</p></td>
                              </tr>
                              <tr>
                                <td><input class="" type="checkbox" name="fever"><p>Fever</p></td>
                              </tr>
                            </table>
                        </div>


                        <!-- CONTACT DETAILS -->
                        <h3 class="form_title">YOUR CONTACT DETAILS</h3>
                        <div class="form-row">
                            <div class="name">Your e-mail address to receive your E-ticket (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="mail" value="<?= isset($data["email"])? $data["email"]: '' ?>" name="email" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Your phone number (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="test" value="<?= isset($data["numero"])? $data["numero"]: '' ?>" name="numero" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name"><input value="false" type="checkbox" name="accept_condition_generale"></div>
                            <div class="value">
                                <div class="input-group">
                                    <span>I accept the general conditions of sale and use and I certify on my honour the accuracy of the information provided. It's reminded that any person making a false declaration on behalf of himself or herself or another person may be liable to the penalties provided for in articles 441-1 of the penal code and following. </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name"><input value="false" type="checkbox" name="demande_immediat"></div>
                            <div class="value">
                                <div class="input-group">
                                    <span>I would like my E-ticket request to start immediately. I expressly waive my right of withdrawal so that the service can begin before the end of the legal withdrawal period.</span>
                                </div>
                            </div>
                        </div>

                        <!-- SUBMIT BOUTTON -->
                       <!--  <div class="card-footer">
                            <button class="btn btn--radius-2 btn--blue-2" type="submit">Finalise the application</button>
                        </div> -->
                        <!-- SUBMIT BOUTTON -->

          </div>
          <!-- FIN de la partie 2 du formulaire -->

                  <!-- </form> -->

                  <!-- BOUTTON SUIVANT & PREVIOUS-->
                       <!--  <div class="button_previous card_button_previous">
                           <button class="btn btn--radius-2 btn--blue-2"  id="previous" onclick="MyFunctionprevious()"><a href="#section1">Previous</a></button>
                        </div>
                        <div class="card_button_next">
                            <button class="btn btn--radius-2 btn--blue-2" id="next" onclick="MyFunctionNext()"><a href="#section1">Next</a></button>
                        </div> -->


                <!-- </div> SCRIPT JS : End 2nd part of FORM -->

              </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <!-- Main JS-->
    <!-- <script src="../assets/js/global.js"></script> -->
    <!-- Form script (Select/option) + Button Next&Previous -->
   <!--  <script src="../assets/js/form_script.js"></script -->

</body>

</html>
<!-- end document-->

