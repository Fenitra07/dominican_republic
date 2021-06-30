<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="assets/css/main.css" rel="stylesheet" media="all">
    <link rel="shortcut icon" href="assets/favicon/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap5/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../assets/bootstrap5/css/bootstrap.min.css">

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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


              <form method="POST" action="traitement/traitementEnglshFormSubmission.php" id="">


                  <div id="part1">
                      <!-- GENERAL INFORMATION -->
                      <h3 class="form_title">1ST STEP - GENERAL INFORMATION</h3>
                      <p class="form_paragraph">Please provide your address</p>
                        <div class="form-row">
                            <div class="name">
                              <label class="text-inverse" >Permanent address (*)</label>
                            </div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="adresse_permanent" id="validation01">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">
                              <label class="text-inverse" for="">City (*)</label>
                            </div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="" name="ville" id="validation02">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">
                              <label for="">
                                State (*)
                              </label>
                            </div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="" name="etat" id="validation03">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Zip code (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="" name="code_postal" id="validation04">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">
                              <label for="select-menu">
                                Arrival or Departure (*)
                              </label>
                            </div>
                            <div class="value">
                                <div class="input-group">
                                    <select class="input--style-6 select_style custom-select" name="type_voyage" id="movement" onclick="myMovement()">
                                      <option>Select an option</option>
                                      <option>Arrival</option>
                                      <option>Departure</option>
                                    </select>
                                    <div class="invalid-feedback">
                                      Please selected any option.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Do you make stops in other countries ? (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <select class="input--style-6 select_style" name="is_arret_frequent" id="stopcountry" onclick="stopCountry()">
                                      <option>Select an option</option>
                                      <option>No</option>
                                      <option>Yes</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <!-- PASSENGER INFORMATION -->
                        <h3 class="form_title">PASSENGER INFORMATION</h3>
                        <div class="form-row">
                            <div class="name">Names (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="" name="noms" id="validation07">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Last Names (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="" name="nom_famille" id="validation08">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Date of birth (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="date" name="date_naissance" id="validation09">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Gender (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <select class="input--style-6 select_style" name="genre" id="validation10">
                                      <option>Select an option</option>
                                      <option>Masuline</option>
                                      <option>Feminine</option>
                                      <option>Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Country of birth (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="" name="pays_naissance" id="validation11">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Country of nationality (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="" name="pays_nationnalite" id="validation12">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Passport number (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="" name="numero_passport" id="validation13">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Civil status (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <select name="etat_civil" class="input--style-6 select_style" id="validation14">
                                      <option>Select an option</option>
                                      <option value="Free Union">Free Union</option>
                                      <option value="Concubinage">Concubinage</option>
                                      <option value="Married">Married</option>
                                      <option value="Single">Single</option>
                                      <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Ocupation (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <select class="input--style-6 select_style" name="libelle" id="validation15">
                                      <option>Select an option</option>
                                      <option value="Actor">Actor</option>
                                      <option value="Analyst">Analyst</option>
                                      <option value="Artist">Artist</option>
                                      <option value="Baker">Baker</option>
                                      <option value="Blacksmith">Blacksmith</option>
                                      <option value="Carpenter">Carpenter</option>
                                      <option value="Cashier">Cashier</option>
                                      <option value="CEO">CEO</option>
                                      <option value="Consultant">Consultant</option>
                                      <option value="Craftman">Craftman</option>
                                      <option value="Doctor">Doctor</option>
                                      <option value="Electrician">Electrician</option>
                                      <option value="Engineer">Engineer</option>
                                      <option value="Entrepreneur">Entrepreneur</option>
                                      <option value="Firefighter">Firefighter</option>
                                      <option value="Freelancer">Freelancer</option>
                                      <option value="Graphic Designer">Graphic Designer</option>
                                      <option value="Journalist">Journalist</option>
                                      <option value="Lawyer">Lawyer</option>
                                      <option value="Merchant">Merchant</option>
                                      <option value="Painter">Painter</option>
                                      <option value="Private employee">Private employee</option>
                                      <option value="Public employee">Public employee</option>
                                      <option value="Salesman">Salesman</option>
                                      <option value="Shoemaker">Shoemaker</option>
                                      <option value="Student">Student</option>
                                      <option value="Teacher">Teacher</option>
                                      <option value="Truck driver">Truck driver</option>
                                      <option value="Worker">Worker</option>
                                      <option value="Others">Others</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Are you going to stay at a hotel?  (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <select class="input--style-6 select_style" name="accept_sejour_hotel"  id="operation1" onclick="myOperation1()">
                                      <option>Select an option</option>
                                      <option>No</option>
                                      <option>Yes</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row" id="r_yes1" style="display: none">
                            <div class="name"><span class="name_option">Hotel name (*)</span></div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="" name="hotel_name" onmouseout="checkElementFilling(this)">
                                </div>
                            </div>
                        </div>
                        <div id="r_no1" style="display: none">
                          <div class="form-row">
                              <div class="name"><span class="name_option">PROVINCE  (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <select class="input--style-6 select_style" name="province">
                                        <option>Select an option</option>
                                        <option>Azua</option>
                                        <option>Bahoruco</option>
                                        <option>Barahona</option>
                                        <option>Dajabón</option>
                                        <option>Distrito Nacional</option>
                                        <option>Duarte</option>
                                        <option>El Seibo</option>
                                        <option>Elías Piña</option>
                                        <option>Espaillat</option>
                                        <option>Hato Mayor</option>
                                        <option>Hermanas Mirabal</option>
                                        <option>Independencia</option>
                                        <option>La Altagracia</option>
                                        <option>La Romana</option>
                                        <option>La Vega</option>
                                        <option>María Trinidad Sánchez</option>
                                        <option>Monseñor Nouel</option>
                                        <option>Monte Crísti</option>
                                        <option>Monte Plata</option>
                                        <option>Pedernales</option>
                                        <option>Peravia</option>
                                        <option>Puerto Plata</option>
                                        <option>Samaná</option>
                                        <option>San Cristóbal</option>
                                        <option>San José de Ocoa</option>
                                        <option>San JuanSan José de Ocoa</option>
                                        <option>San Pedro de Macorís</option>
                                        <option>Sanchez Ramírez</option>
                                        <option>Santiago</option>
                                        <option>Santiago Rodríguez</option>
                                        <option>Valverde</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">MUNICIPALITY (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="" name="municipality" onmouseout="checkElementFilling(this)">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">SECTION</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="" name="section" onmouseout="checkElementFilling(this)">
                                  </div>
                              </div>
                          </div>
                        </div>


                        <!-- FLIGHT INFORMATION -->
                        <!-- Arrival Condition Begin -->
                        <div id="r_arrival" style="display: none">
                          <!-- "Do you make stops in other countries" = NO -->
                          <div id="r_no3" style="display: none">
                            <h3 class="form_title">FLIGHT INFORMATION</h3>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Name of the boarding port (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="" name="name_board_port" onmouseout="checkElementFilling(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Flight number (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="" name="flight_number" onmouseout="checkElementFilling(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Flight date (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="date" name="flight_date" onmouseout="checkElementFilling(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Disembarkation port (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <select class="input--style-6 select_style" name=disembarkation_port >
                                          <option>Select an option</option>
                                          <option>SDQ - AEROPUERTO INTERNACIONAL DE LAS AMERICAS</option>
                                          <option>PUJ - AEROPUERTO INTERNACIONAL DE PUNTA CANA</option>
                                          <option>STI - AEROPUERTO INTERNACIONAL DEL CIBAO</option>
                                          <option>POP - AEROPUERTO INTERNACIONAL GREGORIO LUPERON, PUERTO PLATA</option>
                                          <option>JBQ - AEROPUERTO INTERNACIONAL LA ISABELA, JOAQUIN BALAGUER</option>
                                          <option>LRM - AEROPUERTO INTERNACIONAL LA ROMANA</option>
                                          <option>BRX - AEROPUERTO INTERNACIONAL MARIA MONTEZ, BARAHONA</option>
                                          <option>AZS - AEROPUERTO INTERNACIONAL PRESIDENTE JUAN BOSH</option>
                                          <option>SAI - BASE AEREA DE SAN ISIDRO</option>
                                          <option>XXX - OTHER</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Transportation company (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="" name="transportation_company" onmouseout="checkElementFilling(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Travel purpose (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <select class="input--style-6 select_style" name="travel_purpose">
                                          <option>Select an option</option>
                                          <option>Visit friends and/or family</option>
                                          <option>Studies</option>
                                          <option>Convention – Conference</option>
                                          <option>Business</option>
                                          <option>Professionnal</option>
                                          <option>Medical reasons</option>
                                          <option>Leisure</option>
                                          <option>Others</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Days of staying (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="" name="days_staying" onmouseout="checkElementFilling(this)">
                                    </div>
                                </div>
                            </div>
                          </div>
                          <!-- "Do you make stops in other countries" = NO -->

                          <!-- "Do you make stops in other countries" = YES -->
                          <div id="r_yes3" style="display: none">
                            <h3 class="form_title">FLIGHT INFORMATION</h3>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Origin Port (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="" name="origin_port" onmouseout="checkElementFilling(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Flight number (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="" name="flight_number_yes" onmouseout="checkElementFilling(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Flight date (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="date" name="flight_date_yes" onmouseout="checkElementFilling(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Name of the boarding port (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="" name="boarding_port_yes" onmouseout="checkElementFilling(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Flight number (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="" name="flight_number_yes_2" onmouseout="checkElementFilling(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Flight date (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="date" name="flight_date_yes_2" onmouseout="checkElementFilling(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Disembarkation port (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <select class="input--style-6 select_style" name="disembarkation_port_yes">
                                          <option>Select an option</option>
                                          <option>SDQ - AEROPUERTO INTERNACIONAL DE LAS AMERICAS</option>
                                          <option>PUJ - AEROPUERTO INTERNACIONAL DE PUNTA CANA</option>
                                          <option>STI - AEROPUERTO INTERNACIONAL DEL CIBAO</option>
                                          <option>POP - AEROPUERTO INTERNACIONAL GREGORIO LUPERON, PUERTO PLATA</option>
                                          <option>JBQ - AEROPUERTO INTERNACIONAL LA ISABELA, JOAQUIN BALAGUER</option>
                                          <option>LRM - AEROPUERTO INTERNACIONAL LA ROMANA</option>
                                          <option>BRX - AEROPUERTO INTERNACIONAL MARIA MONTEZ, BARAHONA</option>
                                          <option>AZS - AEROPUERTO INTERNACIONAL PRESIDENTE JUAN BOSH</option>
                                          <option>SAI - BASE AEREA DE SAN ISIDRO</option>
                                          <option>XXX - OTHER</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Transportation company (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="" name="transportation_company_yes" onmouseout="checkElementFilling(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Travel purpose (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <select class="input--style-6 select_style" name="travel_purpose_yes">
                                          <option>Select an option</option>
                                          <option>Visit friends and/or family</option>
                                          <option>Studies</option>
                                          <option>Convention – Conference</option>
                                          <option>Business</option>
                                          <option>Professionnal</option>
                                          <option>Medical reasons</option>
                                          <option>Leisure</option>
                                          <option>Others</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Days of staying (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="" name="days_staying_yes" onmouseout="checkElementFilling(this)">
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <!-- "Do you make stops in other countries" = YES -->

                        <!-- Arrival Condition End -->

                        <!-- Departure Condition Begin -->
                        <div id="r_departure" style="display: none">
                          <h3 class="form_title">FLIGHT INFORMATION</h3>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Name of the boarding port (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <select class="input--style-6 select_style" name="boarding_port_departure">
                                        <option>Select an option</option>
                                        <option>SDQ - AEROPUERTO INTERNACIONAL DE LAS AMERICAS</option>
                                        <option>PUJ - AEROPUERTO INTERNACIONAL DE PUNTA CANA</option>
                                        <option>STI - AEROPUERTO INTERNACIONAL DEL CIBAO</option>
                                        <option>POP - AEROPUERTO INTERNACIONAL GREGORIO LUPERON, PUERTO PLATA</option>
                                        <option>JBQ - AEROPUERTO INTERNACIONAL LA ISABELA, JOAQUIN BALAGUER</option>
                                        <option>LRM - AEROPUERTO INTERNACIONAL LA ROMANA</option>
                                        <option>BRX - AEROPUERTO INTERNACIONAL MARIA MONTEZ, BARAHONA</option>
                                        <option>AZS - AEROPUERTO INTERNACIONAL PRESIDENTE JUAN BOSH</option>
                                        <option>SAI - BASE AEREA DE SAN ISIDRO</option>
                                        <option>XXX - OTHER</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Flight number (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="" name="flight_number_departure" onmouseout="checkElementFilling(this)">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Flight date (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="date" name="flight_date_departure" onmouseout="checkElementFilling(this)">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Disembarkation port  (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="" name="disemarkation_port_departure" onmouseout="checkElementFilling(this)">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Transportation company (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="" name="transportation_company_departure" onmouseout="checkElementFilling(this)">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Travel purpose (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <select class="input--style-6 select_style" name="travel_purpose_departure">
                                        <option>Select an option</option>
                                        <option>Visit friends and/or family</option>
                                        <option>Studies</option>
                                        <option>Convention – Conference</option>
                                        <option>Business</option>
                                        <option>Professionnal</option>
                                        <option>Medical reasons</option>
                                        <option>Leisure</option>
                                        <option>Others</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Days of staying (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="" name="days_staying_departure" onmouseout="checkElementFilling(this)">
                                  </div>
                              </div>
                          </div>
                        </div>
                        <!-- Departure Condition End -->


            </div>

            <!-- PARTIE 2 du formulaire -->

            <div style="display: none" id="part2">

          <!-- FINAL STEP -->
          <!-- <div> SCRIPT JS : Begin 2nd part of FORM -->

                          <h3 class="form_title">FINAL STEP - Customs and public health information</h3>
                        <div class="form-row">
                            <div class="name">Do you bring with you or in your luggage a sum of money or other means of payment exceeding USD 10,000 or the equivalent in another currency?</div>
                            <div class="value">
                                <div class="input-group">
                                    <select class="input--style-6 select_style" id="operation2" onclick="myOperation2()" name="apportMontant">
                                      <option>Select an option</option>
                                      <option>No</option>
                                      <option>Yes</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- yes condition begin -->
                        <div id="r_yes2" style="display: none">
                          <div class="form-row">
                              <div class="name"><span class="name_option">AMMOUNT (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="" name="ammount" onmouseout="checkElementFilling(this)">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">CURRENCY (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="" name="currency" onmouseout="checkElementFilling(this)">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">DECLARE ORIGIN OF THE SECURITIES (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="" name="declare_origin_security" onmouseout="checkElementFilling(this)">
                                  </div>
                              </div>
                          </div>
                        </div>
                        <!-- yes condition end -->
                        <div class="form-row">
                            <div class="name">Do you bring food, plants or animals with you or in your luggage?</div>
                            <div class="value">
                                <div class="input-group">
                                    <select class="input--style-6 select_style" name="apport_nourriture" id="validation18">
                                      <option>Select an option</option>
                                      <option>No</option>
                                      <option>Yes</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Do you bring taxable goods with you or in your luggage? </div>
                            <div class="value">
                                <div class="input-group">
                                    <select class="input--style-6 select_style" name="apport_marchandise_taxable" id="validation19">
                                      <option>Select an option</option>
                                      <option>No</option>
                                      <option>Yes</option>
                                    </select>
                                </div>
                            </div>
                        </div>



                        <!-- FINAL STEP SUITE -->
                        <h3 class="form_title">PUBLIC HEALTH</h3>
                        <p>Reporting of symptoms</p>
                        <p>Which of the following symptoms have you experienced in the last 72 hours? (*)</p>
                        <p style="color: red; display: none;" id="alertSymptome">(*)Please check at least one</p>
                        <div class="form-row">
                            <table>
                              <tr>
                                <td><input class="" type="checkbox" name="none" id="none" value="none"><p>None</p></td>
                                <td><input class="" id="sorethoat" type="checkbox" name="sorethoat" value="sorethoat"><p>Sore throat</p></td>
                                <td><input class="" type="checkbox" name="muscle_paain" value="muscle_paain" id="muscle_paain"><p>Muscle pain</p></td>
                              </tr>
                              <tr>
                                <td><input class="" type="checkbox" name="headache" value="headache" id="headache"><p>Headache</p></td>
                                <td><input class="" type="checkbox" name="runny_nose" value="runny_nose" id="runny_nose"><p>Runny nose</p></td>
                                <td><input class="" type="checkbox" name="cough" value="cough" id="cough"><p>Cough</p></td>
                              </tr>
                              <tr>
                                <td><input class="" type="checkbox" name="shaking_chills" value="shaking_chills" id="shaking_chills"><p>Shaking chills</p></td>
                                <td><input class="" type="checkbox" name="breathing_difficulty" id="breathing_difficulty" value="breathing_difficulty"><p>Breathing difficulty</p></td>
                                <td><input class="" type="checkbox" name="fatigue" value="fatigue" id="fatigue"><p>Fatigue</p></td>
                              </tr>
                              <tr>
                                <td><input class="" type="checkbox" name="fever" value="fever" id="fever"><p>Fever</p></td>
                              </tr>
                            </table>
                        </div>


                        <!-- CONTACT DETAILS -->
                        <h3 class="form_title">YOUR CONTACT DETAILS</h3>
                        <div class="form-row">
                            <div class="name">Your e-mail address to receive your E-ticket (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="mail" name="email" id="validation20" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Your phone number (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="test" name="numero"id="validation21" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">
                              <input value="false" type="checkbox" name="accept_condition_generale" id="accept_condition_generale" required>
                              <span class="custom-control-indicator"></span>
                            </div>
                            <div class="value">
                                <div class="input-group">
                                    <span id="obligationOne">I accept the general conditions of sale and use and I certify on my honour the accuracy of the information provided. It's reminded that any person making a false declaration on behalf of himself or herself or another person may be liable to the penalties provided for in articles 441-1 of the penal code and following. </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">
                              <input value="false" type="checkbox" id="demande_immediat" name="demande_immediat" required>
                            </div>
                            <div class="value">
                                <div class="input-group">
                                    <span id="obligationTwo">I would like my E-ticket request to start immediately. I expressly waive my right of withdrawal so that the service can begin before the end of the legal withdrawal period.</span>
                                </div>
                            </div>
                        </div>

                        <!-- SUBMIT BOUTTON -->
                        <div class="card-footer">
                            <button onclick="return confirm('Please confirm the sending of your information!')" class="btn btn-success" type="submit" id="finaliseApplication">FINALISE THE APPLICATION</button>
                        </div>
                        <!-- SUBMIT BOUTTON -->

          </div>
          <!-- FIN de la partie 2 du formulaire -->

                  </form>

                  <!-- BOUTTON SUIVANT & PREVIOUS-->
                        <div class="button_previous card_button_previous">
                           <a href="#section1">
                              <button class="btn btn-info" style="display: none" id="previous" onclick="MyFunctionprevious()">PREVIOUS</button>
                            </a>
                        </div>

                        <div class="alert alert-danger alert-dismissible" id="errorMessage" style="display: none;">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <p><strong>(*)</strong> Please fill in the required fields</p>
                        </div>
                        <div class="card_button_next">
                            <a href="#section1">
                              <button class="btn btn-info" id="next" style="" type="submit">NEXT</button>
                            </a>
                        </div>

                        <!-- <div class="card_button_next">
                            <a href="#section1">
                              <button class="btn btn--radius-2 btn--blue-2" id="next" style="" onclick="MyFunctionNext()" type="submit">NEXT</button>
                            </a>
                        </div> -->

                <!-- </div> SCRIPT JS : End 2nd part of FORM -->

              </div>
            </div>
        </div>
    </div>

<!-- FORM VALIDATION -->

 <script type="text/javascript">


 </script>



<!-- FORM VALIDATION -->

    <!-- Jquery JS-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <!-- Main JS-->
    <script src="assets/js/global.js"></script>
    <!-- Form script (Select/option) + Button Next&Previous -->
    <script src="assets/js/form_script.js"></script>

</body>

</html>
<!-- end document-->

