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
                      <h3 class="form_title">1ERE TAPE - INFORMATIONS GENERALES</h3>
                      <p class="form_paragraph">Merci de renseigner vos addresses</p>
                        <div class="form-row">
                            <div class="name">
                              <label class="text-inverse" >Adresse (*)</label>
                            </div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="adresse_permanent" id="validation01">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">
                              <label class="text-inverse" for="">Ville (*)</label>
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
                                Pays (*)
                              </label>
                            </div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="" name="etat" id="validation03">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Code postale (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="" name="code_postal" id="validation04">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">
                              <label for="select-menu">
                                Arrivé ou Départ (*)
                              </label>
                            </div>
                            <div class="value">
                                <div class="input-group">
                                    <select class="input--style-6 select_style custom-select" name="type_voyage" id="movement" onclick="myMovement()">
                                      <option>Choisir votre réponse</option>
                                      <option>Arrivé</option>
                                      <option>Départ</option>
                                    </select>
                                    <div class="invalid-feedback">
                                      Please selected any option.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Transitez-vous dans d'autres pays avant votre arrivé ? (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <select class="input--style-6 select_style" name="is_arret_frequent" id="stopcountry" onclick="stopCountry()">
                                      <option>Choisir votre réponse</option>
                                      <option>Non</option>
                                      <option>Oui</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <!-- PASSENGER INFORMATION -->
                        <h3 class="form_title">INFORMATIONS SUR LE PASSAGER</h3>
                        <div class="form-row">
                            <div class="name">Nom de naissance (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="" name="noms" id="validation07">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Prénoms (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="" name="nom_famille" id="validation08">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Date de naissance (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="date" name="date_naissance" id="validation09">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Genre (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <select class="input--style-6 select_style" name="genre" id="validation10">
                                      <option>Choisir votre réponse</option>
                                      <option>Masculin</option>
                                      <option>Feminin</option>
                                      <option>Autre</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Pays de naissance (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="" name="pays_naissance" id="validation11">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Pays de nationalité (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="" name="pays_nationnalite" id="validation12">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Numéro de passepor (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="" name="numero_passport" id="validation13">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Etat civil  (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <select name="etat_civil" class="input--style-6 select_style" id="validation14">
                                      <option>Choisir votre réponse</option>
                                      <option value="Free Union">Union Libre</option>
                                      <option value="Concubinage">Concubinage</option>
                                      <option value="Married">Marrié-e-</option>
                                      <option value="Single">Célibataire</option>
                                      <option value="Other">Autre</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Profession (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <select class="input--style-6 select_style" name="libelle" id="validation15">
                                      <option>Choisir votre réponse</option>
                                      <option value="Actor">Acteur</option>
                                      <option value="Analyst">Analyst</option>
                                      <option value="Artist">Artiste</option>
                                      <option value="Lawyer">Avocat</option>
                                      <option value="Baker">Boulanger</option>
                                      <option value="Carpenter">Charpentier</option>
                                      <option value="Cashier">Caissier de banque</option>
                                      <option value="Student">Conducteur de camion</option>
                                      <option value="CEO">CEO</option>
                                      <option value="Consultant">Consultant</option>
                                      <option value="Craftman">Cordonnier</option>
                                      <option value="Graphic Designer">Designer graphique</option>
                                      <option value="Doctor">Docteur</option>
                                      <option value="Electrician">Electricien</option>
                                      <option value="Private employee">Employé privé</option>
                                      <option value="Public employee">Employé public</option>
                                      <option value="Blacksmith">Forgeron</option>
                                      <option value="Entrepreneur">Homme d'affaires</option>
                                      <option value="Engineer">Ingénieur</option>
                                      <option value="Freelancer">Indépendant</option>
                                      <option value="Journalist">Journaliste</option>
                                      <option value="Merchant">Marchande</option>
                                       <option value="Painter">Ouvrier</option>
                                      <option value="Firefighter">Pompier</option>
                                      <option value="Salesman">PDG</option>
                                      <option value="Shoemaker">Peintre</option>
                                      <option value="Teacher">Prof</option>
                                      <option value="Truck driver">Technicien</option>
                                      <option value="Worker">Vendeur</option>
                                      <option value="Others">Autres</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Séjournez-vous dans un hotel?  (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <select class="input--style-6 select_style" name="accept_sejour_hotel"  id="operation1" onclick="myOperation1()">
                                      <option>Choisir votre réponse</option>
                                      <option>Non</option>
                                      <option>Oui</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row" id="r_yes1" style="display: none">
                            <div class="name"><span class="name_option">Nom de votre hotel (*)</span></div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="" name="hotel_name" onmouseover="checkElementFilling(this)">
                                </div>
                            </div>
                        </div>
                        <div id="r_no1" style="display: none">
                          <div class="form-row">
                              <div class="name"><span class="name_option">PROVINCE  (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <select class="input--style-6 select_style" name="province">
                                        <option>Choisir votre réponse</option>
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
                              <div class="name"><span class="name_option">MUNICIPALITE (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="" name="municipality" onmouseover="checkElementFilling(this)">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">SECTION</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="" name="section" onmouseover="checkElementFilling(this)">
                                  </div>
                              </div>
                          </div>
                        </div>


                        <!-- INFORMATIONS SUR VOTRE VOL -->
                        <!-- Arrival Condition Begin -->
                        <div id="r_arrival" style="display: none">
                          <!-- "Do you make stops in other countries" = NO -->
                          <div id="r_no3" style="display: none">
                            <h3 class="form_title">INFORMATIONS SUR VOTRE VOL</h3>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Aéroport d'embarquement (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="" name="name_board_port" onmouseout="checkElementFilling(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Numéro de vol (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="" name="flight_number" onmouseout="checkElementFilling(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Date du vol (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="date" name="flight_date" onmouseout="checkElementFilling(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Aéroport de débaquement (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <select class="input--style-6 select_style" name=disembarkation_port >
                                          <option>Choisir votre réponse</option>
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
                                <div class="name"><span class="name_option">Nom de la compagnie aérienne (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="" name="transportation_company" onmouseover="checkElementFilling(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Raison de votre voyage (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <select class="input--style-6 select_style" name="travel_purpose">
                                          <option>Choisir votre réponse</option>
                                          <option>Visiter des amis et/ou la famille</option>
                                          <option>Études</option>
                                          <option>Convention - Conférence</option>
                                          <option>Affaires</option>
                                          <option>Professionnel</option>
                                          <option>Raisons médicales</option>
                                          <option>Loisirs</option>
                                          <option>Autres</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Durée de votre séjour (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="" name="days_staying" onmouseover="checkElementFilling(this)">
                                    </div>
                                </div>
                            </div>
                          </div>
                          <!-- "Do you make stops in other countries" = NO -->

                          <!-- "Do you make stops in other countries" = YES -->
                          <div id="r_yes3" style="display: none">
                            <h3 class="form_title">INFORMATIONS SUR VOTRE VOL</h3>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Aéroport d'embarquement (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="" name="origin_port" onmouseover="checkElementFilling(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Numéro de vol (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="" name="flight_number_yes" onmouseover="checkElementFilling(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Date du vol (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="date" name="flight_date_yes" onmouseover="checkElementFilling(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Aéroport de transit (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="" name="boarding_port_yes" onmouseover="checkElementFilling(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Numéro de vol (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="" name="flight_number_yes_2" onmouseover="checkElementFilling(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Date du vol (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="date" name="flight_date_yes_2" onmouseover="checkElementFilling(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Aéroport de débaquement (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <select class="input--style-6 select_style" name="disembarkation_port_yes">
                                          <option>Choisir votre réponse</option>
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
                                <div class="name"><span class="name_option">Nom de la compagnie aérienne (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="" name="transportation_company_yes" onmouseover="checkElementFilling(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Raison de votre voyage (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <select class="input--style-6 select_style" name="travel_purpose_yes">
                                          <option>Choisir votre réponse</option>
                                          <option>Visiter des amis et/ou la famille</option>
                                          <option>Études</option>
                                          <option>Convention - Conférence</option>
                                          <option>Affaires</option>
                                          <option>Professionnel</option>
                                          <option>Raisons médicales</option>
                                          <option>Loisirs</option>
                                          <option>Autres</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Durée de votre séjour (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="" name="days_staying_yes" onmouseover="checkElementFilling(this)">
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <!-- "Do you make stops in other countries" = YES -->

                        <!-- Arrival Condition End -->

                        <!-- Departure Condition Begin -->
                        <div id="r_departure" style="display: none">
                          <h3 class="form_title">INFORMATIONS SUR VOTRE VOL</h3>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Aéroport d'embarquement (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <select class="input--style-6 select_style" name="boarding_port_departure">
                                        <option>Choisir votre réponse</option>
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
                              <div class="name"><span class="name_option">Numéro de vol (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="" name="flight_number_departure" onmouseover="checkElementFilling(this)">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Date du vol (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="date" name="flight_date_departure" onmouseover="checkElementFilling(this)">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Aéroport de débaquement (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="" name="disemarkation_port_departure" onmouseover="checkElementFilling(this)">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Nom de la compagnie aérienne (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="" name="transportation_company_departure" onmouseover="checkElementFilling(this)">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Raison de votre voyage  (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <select class="input--style-6 select_style" name="travel_purpose_departure">
                                        <option>Choisir votre réponse</option>
                                          <option>Visiter des amis et/ou la famille</option>
                                          <option>Études</option>
                                          <option>Convention - Conférence</option>
                                          <option>Affaires</option>
                                          <option>Professionnel</option>
                                          <option>Raisons médicales</option>
                                          <option>Loisirs</option>
                                          <option>Autres</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Durée de votre séjour (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="" name="days_staying_departure" onmouseover="checkElementFilling(this)">
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

                          <h3 class="form_title">ÉTAPE FINALE - informations douanières et de santé publique</h3>
                          <h3 class="form_title">INFORMATIONS DOUANIERES</h3>
                        <div class="form-row">
                            <div class="name">Emportez-vous avec vous ou dans vos bagages une somme d'argent ou un autre moyen de paiement supérieur à 10.000 USD ou l'équivalent de la somme dans une autre devise ? </div>
                            <div class="value">
                                <div class="input-group">
                                    <select class="input--style-6 select_style" id="operation2" onclick="myOperation2()" name="apportMontant">
                                      <option>Choisir votre réponse</option>
                                      <option>Non</option>
                                      <option>Oui</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- yes condition begin -->
                        <div id="r_yes2" style="display: none">
                          <div class="form-row">
                              <div class="name"><span class="name_option">MONTANT (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="" name="ammount" onmouseover="checkElementFilling(this)">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">DEVISE (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="" name="currency" onmouseover="checkElementFilling(this)">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">DECLARATION DES ORIGINES DE LA SOMMES (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="" name="declare_origin_security" onmouseover="checkElementFilling(this)">
                                  </div>
                              </div>
                          </div>
                        </div>
                        <!-- yes condition end -->
                        <div class="form-row">
                            <div class="name">Emmenez-vous des produits alimentaires, des plantes ou des animaux dans vos bagages?</div>
                            <div class="value">
                                <div class="input-group">
                                    <select class="input--style-6 select_style" name="apport_nourriture" id="validation18">
                                      <option>Choisir votre réponse</option>
                                      <option>Non</option>
                                      <option>Oui</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Emenez vous des marchandises taxables dans vos bagages?  </div>
                            <div class="value">
                                <div class="input-group">
                                    <select class="input--style-6 select_style" name="apport_marchandise_taxable" id="validation19">
                                      <option>Choisir votre réponse</option>
                                      <option>Non</option>
                                      <option>Oui</option>
                                    </select>
                                </div>
                            </div>
                        </div>



                        <!-- FINAL STEP SUITE -->
                        <h3 class="form_title">INFORMATIONS POUR LA SANTE PUBLIC</h3>
                        <p>Déclaration des symptômes </p>
                        <p>Parmi les symptômes suivants, quels sont ceux que vous avez ressentis au cours des 72 dernières heures ? (*)</p>
                        <p style="color: red; display: none;" id="alertSymptome">(*)Please check at least one</p>
                        <div class="form-row">
                            <table>
                              <tr>
                                <td><input class="" type="checkbox" name="none" value="none"><p>Aucun</p></td>
                                <td><input class="" type="checkbox" name="sorethoat" value="sorethoat"><p>Mal de gorge</p></td>
                                <td><input class="" type="checkbox" name="muscle_paain" value="muscle_paain"><p>Douleur musculaire</p></td>
                              </tr>
                              <tr>
                                <td><input class="" type="checkbox" name="headache" value="headache"><p>Mal de tête</p></td>
                                <td><input class="" type="checkbox" name="runny_nose" value="runny_nose"><p>Nez qui coule</p></td>
                                <td><input class="" type="checkbox" name="cough" value="cough"><p>Toux</p></td>
                              </tr>
                              <tr>
                                <td><input class="" type="checkbox" name="shaking_chills" value="shaking_chills"><p>Frissons tremblants</p></td>
                                <td><input class="" type="checkbox" name="breathing_difficulty" value="breathing_difficulty"><p>Difficulté respiratoire</p></td>
                                <td><input class="" type="checkbox" name="fatigue" value="fatigue"><p>Fatigue</p></td>
                              </tr>
                              <tr>
                                <td><input class="" type="checkbox" name="fever" value="fever"><p>Fièvre</p></td>
                              </tr>
                            </table>
                        </div>


                        <!-- CONTACT DETAILS -->
                        <h3 class="form_title">DETAILS DE VOS CONTACTS</h3>
                        <div class="form-row">
                            <div class="name">Votre mail pour recevoir l'E-ticket en PDF (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="mail" name="email" id="validation20">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Votre numéro de téléphone (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="test" name="numero"id="validation21">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">
                              <input value="false" type="checkbox" name="accept_condition_generale">
                              <span class="custom-control-indicator"></span>
                            </div>
                            <div class="value">
                                <div class="input-group">
                                    <span>J'accepte les conditions générales de vente et d'utilisation et je certifie sur l'honneur l'exactitude des informations fournies. Il est rappelé que toute personne faisant une fausse déclaration pour elle-même ou pour une autre personne s'expose aux sanctions prévues par les articles 441-1 du code pénal et suivants.  </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name"><input value="false" type="checkbox" name="demande_immediat"></div>
                            <div class="value">
                                <div class="input-group">
                                    <span>Je souhaite que ma demande d'E-ticket commence immédiatement. Je renonce expressément à mon droit de rétractation afin que le service puisse commencer avant la fin du délai légal de rétractation.</span>
                                </div>
                            </div>
                        </div>

                        <!-- SUBMIT BOUTTON -->
                        <div class="card-footer">
                            <button class="btn btn--radius-2 btn--blue-2" type="submit" id="finaliseApplication">FINALISER LA DEMANDE</button>
                        </div>
                        <!-- SUBMIT BOUTTON -->

          </div>
          <!-- FIN de la partie 2 du formulaire -->

                  </form>

                  <!-- BOUTTON SUIVANT & PREVIOUS-->
                        <div class="button_previous card_button_previous">
                           <a href="#section1">
                              <button class="btn btn--radius-2 btn--blue-2" style="display: none" id="previous" onclick="MyFunctionprevious()">PRÉCÉDANT</button>
                            </a>
                        </div>

                        <div class="alert alert-danger alert-dismissible" id="errorMessage" style="display: none;">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <p><strong>(*)</strong> Veuillez remplir les champs obligatoires</p>
                        </div>
                        <div class="card_button_next">
                            <a href="#section1">
                              <button class="btn btn--radius-2 btn--blue-2" id="next" style="" type="submit">SUIVANT</button>
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

