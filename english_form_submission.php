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


              <form method="POST">


                  <div id="part1">
                      <!-- GENERAL INFORMATION -->
                      <h3 class="form_title">1ST STEP - GENERAL INFORMATION</h3>
                      <p class="form_paragraph">Please provide your address</p>
                        <div class="form-row">
                            <div class="name">Permanent address (*)</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">City (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="" name="" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">State (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="" name="" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Zip code (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="" name="" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Arrival or Departure (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <select class="input--style-6 select_style" id="movement" onclick="myMovement()">
                                      <option>Select an option</option>
                                      <option>Arrival</option>
                                      <option>Departure</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Do you make stops in other countries ? (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <select class="input--style-6 select_style" id="stopcountry" onclick="stopCountry()">
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
                                    <input class="input--style-6" type="" name="" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Last Names (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="" name="" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Date of birth (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="date" name="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Gender (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <select class="input--style-6 select_style">
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
                                    <input class="input--style-6" type="" name="" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Country of nationality (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="" name="" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Passport number (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="" name="" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Civil status (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <select class="input--style-6 select_style">
                                      <option>Select an option</option>
                                      <option>Free Union</option>
                                      <option>Concubinage</option>
                                      <option>Married</option>
                                      <option>Single</option>
                                      <option>Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Ocupation (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <select class="input--style-6 select_style">
                                      <option>Select an option</option>
                                      <option>Actor</option>
                                      <option>Analyst</option>
                                      <option>Artist</option>
                                      <option>Baker</option>
                                      <option>Blacksmith</option>
                                      <option>Carpenter</option>
                                      <option>Cashier</option>
                                      <option>CEO</option>
                                      <option>Consultant</option>
                                      <option>Craftman</option>
                                      <option>Doctor</option>
                                      <option>Electrician</option>
                                      <option>Engineer</option>
                                      <option>Entrepreneur</option>
                                      <option>Firefighter</option>
                                      <option>Freelancer</option>
                                      <option>Graphic Designer</option>
                                      <option>Journalist</option>
                                      <option>Lawyer</option>
                                      <option>Merchant</option>
                                      <option>Painter</option>
                                      <option>Private employee</option>
                                      <option>Public employee</option>
                                      <option>Salesman</option>
                                      <option>Shoemaker</option>
                                      <option>Student</option>
                                      <option>Teacher</option>
                                      <option>Truck driver</option>
                                      <option>Worker</option>
                                      <option>Others</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Are you going to stay at a hotel?  (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <select class="input--style-6 select_style" id="operation1" onclick="myOperation1()">
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
                                    <input class="input--style-6" type="" name="" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div id="r_no1" style="display: none">
                          <div class="form-row">
                              <div class="name"><span class="name_option">PROVINCE  (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <select class="input--style-6 select_style">
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
                                      <input class="input--style-6" type="" name="" placeholder="">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">SECTION</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="" name="" placeholder="">
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
                                        <input class="input--style-6" type="" name="" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Flight number (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="" name="" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Flight date (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="date" name="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Disembarkation port (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <select class="input--style-6 select_style">
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
                                        <input class="input--style-6" type="" name="" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Travel purpose (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <select class="input--style-6 select_style">
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
                                        <input class="input--style-6" type="" name="" placeholder="">
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
                                        <input class="input--style-6" type="" name="" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Flight number (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="" name="" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Flight date (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="date" name="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Name of the boarding port (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="" name="" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Flight number (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="" name="" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Flight date (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="date" name="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Disembarkation port (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <select class="input--style-6 select_style">
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
                                        <input class="input--style-6" type="" name="" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Travel purpose (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <select class="input--style-6 select_style">
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
                                        <input class="input--style-6" type="" name="" placeholder="">
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
                                      <select class="input--style-6 select_style">
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
                                      <input class="input--style-6" type="" name="" placeholder="">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Flight date (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="date" name="">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Disembarkation port  (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="" name="" placeholder="">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Transportation company (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="" name="" placeholder="">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Travel purpose (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <select class="input--style-6 select_style">
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
                                      <input class="input--style-6" type="" name="" placeholder="">
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
                                    <select class="input--style-6 select_style" id="operation2" onclick="myOperation2()">
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
                                      <input class="input--style-6" type="" name="" placeholder="">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">CURRENCY (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="" name="" placeholder="">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">DECLARE ORIGIN OF THE SECURITIES (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="" name="" placeholder="">
                                  </div>
                              </div>
                          </div>
                        </div>
                        <!-- yes condition end -->
                        <div class="form-row">
                            <div class="name">Do you bring food, plants or animals with you or in your luggage?</div>
                            <div class="value">
                                <div class="input-group">
                                    <select class="input--style-6 select_style">
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
                                    <select class="input--style-6 select_style">
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
                        <div class="form-row">
                            <table>
                              <tr>
                                <td><input class="" type="checkbox" name=""><p>None</p></td>
                                <td><input class="" type="checkbox" name=""><p>Sore throat</p></td>
                                <td><input class="" type="checkbox" name=""><p>Muscle pain</p></td>
                              </tr>
                              <tr>
                                <td><input class="" type="checkbox" name=""><p>Headache</p></td>
                                <td><input class="" type="checkbox" name=""><p>Runny nose</p></td>
                                <td><input class="" type="checkbox" name=""><p>Cough</p></td>
                              </tr>
                              <tr>
                                <td><input class="" type="checkbox" name=""><p>Shaking chills</p></td>
                                <td><input class="" type="checkbox" name=""><p>Breathing difficulty</p></td>
                                <td><input class="" type="checkbox" name=""><p>Fatigue</p></td>
                              </tr>
                              <tr>
                                <td><input class="" type="checkbox" name=""><p>Fever</p></td>
                              </tr>
                            </table>
                        </div>

                        <!-- CONTACT DETAILS -->
                        <h3 class="form_title">YOUR CONTACT DETAILS</h3>
                        <div class="form-row">
                            <div class="name">Your e-mail address to receive your E-ticket (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="mail" name="" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Your phone number</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="mail" name="" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name"><input type="checkbox" name=""></div>
                            <div class="value">
                                <div class="input-group">
                                    <span>I accept the general conditions of sale and use and I certify on my honour the accuracy of the information provided. It's reminded that any person making a false declaration on behalf of himself or herself or another person may be liable to the penalties provided for in articles 441-1 of the penal code and following. </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name"><input type="checkbox" name=""></div>
                            <div class="value">
                                <div class="input-group">
                                    <span>I would like my E-ticket request to start immediately. I expressly waive my right of withdrawal so that the service can begin before the end of the legal withdrawal period.</span>
                                </div>
                            </div>
                        </div>

                        <!-- SUBMIT BOUTTON -->
                        <div class="card-footer">
                            <button class="btn btn--radius-2 btn--blue-2" type="submit">Finalise the application</button>
                        </div>
                        <!-- SUBMIT BOUTTON -->

          </div>
          <!-- FIN de la partie 2 du formulaire -->

                  </form>

                  <!-- BOUTTON SUIVANT & PREVIOUS-->
                        <div class="button_previous card_button_previous">
                           <button class="btn btn--radius-2 btn--blue-2" style="display: none" id="previous" onclick="MyFunctionprevious()">Previous</button>
                        </div>
                        <div class="card_button_next">
                            <button class="btn btn--radius-2 btn--blue-2" id="next" onclick="MyFunctionNext()">Next</button>
                        </div>


                <!-- </div> SCRIPT JS : End 2nd part of FORM -->


              </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <!-- Main JS-->
    <script src="assets/js/global.js"></script>
    <!-- Form script (Select/option) -->
    <script src="assets/js/form_script.js"></script>


<script type="text/javascript">
    function MyFunctionNext() {
      var text2 = document.getElementById("part2").style.display = "block";
      var text1 = document.getElementById("part1").style.display = "none";
      var next = document.getElementById("next").style.display = "none";
      var previous = document.getElementById("previous").style.display = "block";
    }

    function MyFunctionprevious() {
      var text2 = document.getElementById("part2").style.display = "none";
      var text1 = document.getElementById("part1").style.display = "block";
      var next = document.getElementById("next").style.display = "block";
      var previous = document.getElementById("previous").style.display = "none";

    }
  </script>





</body>

</html>
<!-- end document-->

