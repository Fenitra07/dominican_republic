// Condition : Are you going to stay at a hotel?
    function myOperation1() {

      var operation1 = document.getElementById("operation1").value;
    console.log(operation1);

      if (operation1 == "No" || operation1 == "Non") {
        document.getElementById("r_no1").style.display = "block";
        document.getElementById("r_yes1").style.display = "none";
      }

      if (operation1 == "Yes" || operation1 == "Oui") {
        document.getElementById("r_yes1").style.display = "flex";
        document.getElementById("r_no1").style.display = "none";
      }

      if (operation1 == "Select an option" || operation1 == "Choisir votre réponse") {
        document.getElementById("r_yes1").style.display = "none";
        document.getElementById("r_no1").style.display = "none";
      }


    }

// Condition : Do you bring with you or in your luggage a sum of money or other means of payment exceeding USD 10,000 or the equivalent in another currency?
    function myOperation2() {

      var operation2 = document.getElementById("operation2").value;
    console.log(operation2);

      if (operation2 == "No" || operation2 == "Non") {
        document.getElementById("r_yes2").style.display = "none";
      }

      if (operation2 == "Yes" || operation2 == "Oui") {
        document.getElementById("r_yes2").style.display = "block";
      }

      if (operation2 == "Select an option" || operation2 == "Choisir votre réponse") {
        document.getElementById("r_yes2").style.display = "none";
      }


    }

// Condition : Arrival or Departure
function myMovement() {

      var movement = document.getElementById("movement").value;
    console.log(movement);

      if (movement == "Arrival" || movement == "Arrivé") {
        document.getElementById("r_arrival").style.display = "block";
        document.getElementById("r_departure").style.display = "none";
      }

      if (movement == "Departure" || movement == "Départ") {
        document.getElementById("r_departure").style.display = "block";
        document.getElementById("r_arrival").style.display = "none";
      }

      if (movement == "Select an option" || movement == "Choisir votre réponse") {
        document.getElementById("r_departure").style.display = "none";
        document.getElementById("r_arrival").style.display = "none";
      }

}

// Condition : Do you make stops in other countries ?
function stopCountry() {

      var stopcountry = document.getElementById("stopcountry").value;
      console.log(stopcountry);

      if (stopcountry == "No" || stopcountry == "Non") {
        document.getElementById("r_no3").style.display = "block";
        document.getElementById("r_yes3").style.display = "none";
      }

      if (stopcountry == "Yes" || stopcountry == "Oui") {
        document.getElementById("r_yes3").style.display = "block";
        document.getElementById("r_no3").style.display = "none";
      }

      if (stopcountry == "Select an option" || stopcountry == "Choisir votre réponse") {
        document.getElementById("r_yes3").style.display = "none";
        document.getElementById("r_no3").style.display = "none";
      }

}




// BUTTON NEXT & PREVIOUS

    function MyFunctionNext() {

    }

    function MyFunctionprevious() {
      var text2 = document.getElementById("part2").style.display = "none";
      var text1 = document.getElementById("part1").style.display = "block";
      var next = document.getElementById("next").style.display = "block";
      var previous = document.getElementById("previous").style.display = "none";
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }

// Form validation

var inputValidation01 = document.getElementById("validation01");
var inputValidation02 = document.getElementById("validation02");
var inputValidation03 = document.getElementById("validation03");
var inputValidation04 = document.getElementById("validation04");
var inputValidation05 = document.getElementById("movement");
var inputValidation06 = document.getElementById("stopcountry");
var inputValidation07 = document.getElementById("validation07");
var inputValidation08 = document.getElementById("validation08");
var inputValidation09 = document.getElementById("validation09");
var inputValidation10 = document.getElementById("validation10");
var inputValidation11 = document.getElementById("validation11");
var inputValidation12 = document.getElementById("validation12");
var inputValidation13 = document.getElementById("validation13");
var inputValidation14 = document.getElementById("validation14");
var inputValidation15 = document.getElementById("validation15");
var inputValidation16 = document.getElementById("operation1");
var nextButton = document.getElementById("next");
var errorMessagE = document.getElementById("errorMessage");


// FORM VALIDATION PART1
nextButton.onclick = function(){
  if (inputValidation01.value=='') {
    errorMessagE.style.display = "block";
    inputValidation01.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation01.style.borderColor = "#cccccc";
  }

  if (inputValidation02.value=='') {
    errorMessagE.style.display = "block";
    inputValidation02.style.borderColor = "red";

  } else {
    errorMessagE.style.display = "none";
    inputValidation02.style.borderColor = "#cccccc";
  }

  if (inputValidation03.value=='') {
    errorMessagE.style.display = "block";
    inputValidation03.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation03.style.borderColor = "#cccccc";
  }

  if (inputValidation04.value=='') {
    errorMessagE.style.display = "block";
    inputValidation04.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation04.style.borderColor = "#cccccc";
  }

  if (inputValidation05.value=='Select an option' || inputValidation05.value == "Choisir votre réponse") {
    errorMessagE.style.display = "block";
    inputValidation05.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation05.style.borderColor = "#cccccc";
  }

  if (inputValidation06.value=='Select an option' || inputValidation06.value == "Choisir votre réponse") {
    errorMessagE.style.display = "block";
    inputValidation06.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation06.style.borderColor = "#cccccc";
  }

  if (inputValidation07.value=='') {
    errorMessagE.style.display = "block";
    inputValidation07.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation07.style.borderColor = "#cccccc";
  }

  if (inputValidation08.value=='') {
    errorMessagE.style.display = "block";
    inputValidation08.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation08.style.borderColor = "#cccccc";
  }

  if (inputValidation09.value=='') {
    errorMessagE.style.display = "block";
    inputValidation09.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation09.style.borderColor = "#cccccc";
  }

  if (inputValidation10.value=='Select an option' || inputValidation10.value == "Choisir votre réponse") {
    errorMessagE.style.display = "block";
    inputValidation10.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation10.style.borderColor = "#cccccc";
  }

  if (inputValidation11.value=='') {
    errorMessagE.style.display = "block";
    inputValidation11.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation11.style.borderColor = "#cccccc";
  }

  if (inputValidation12.value=='') {
    errorMessagE.style.display = "block";
    inputValidation12.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation12.style.borderColor = "#cccccc";
  }

  if (inputValidation13.value=='') {
    errorMessagE.style.display = "block";
    inputValidation13.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation13.style.borderColor = "#cccccc";
  }

  if (inputValidation14.value=='Select an option' || inputValidation14.value == "Choisir votre réponse") {
    errorMessagE.style.display = "block";
    inputValidation14.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation14.style.borderColor = "#cccccc";
  }

  if (inputValidation15.value=='Select an option' || inputValidation15.value == "Choisir votre réponse") {
    errorMessagE.style.display = "block";
    inputValidation15.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation15.style.borderColor = "#cccccc";
  }

  if (inputValidation16.value=='Select an option' || inputValidation16.value == "Choisir votre réponse") {
    errorMessagE.style.display = "block";
    inputValidation16.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation16.style.borderColor = "#cccccc";
  }

  if (inputValidation01.value!=='' && inputValidation02.value!=='' && inputValidation03.value!=='' && inputValidation04.value!=='' && inputValidation05.value!=='Select an option' && inputValidation06.value!=='Select an option' && inputValidation07.value!=='' && inputValidation08.value!=='' && inputValidation09.value!=='' && inputValidation10.value!=='Select an option' && inputValidation11.value!=='' && inputValidation12.value!=='' && inputValidation13.value!=='' && inputValidation14.value!=='Select an option' && inputValidation15.value!=='Select an option' && inputValidation16.value!=='Select an option' || inputValidation01.value!=='' && inputValidation02.value!=='' && inputValidation03.value!=='' && inputValidation04.value!=='' && inputValidation05.value!=='Choisir votre réponse' && inputValidation06.value!=='Choisir votre réponse' && inputValidation07.value!=='' && inputValidation08.value!=='' && inputValidation09.value!=='' && inputValidation10.value!=='Choisir votre réponse' && inputValidation11.value!=='' && inputValidation12.value!=='' && inputValidation13.value!=='' && inputValidation14.value!=='Choisir votre réponse' && inputValidation15.value!=='Choisir votre réponse' && inputValidation16.value!=='Choisir votre réponse') {
      var text2 = document.getElementById("part2").style.display = "block";
      var text1 = document.getElementById("part1").style.display = "none";
      var next = document.getElementById("next").style.display = "none";
      var previous = document.getElementById("previous").style.display = "block";
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
  } else  {
      var text2 = document.getElementById("part2").style.display = "none";
      var text1 = document.getElementById("part1").style.display = "block";
      var next = document.getElementById("next").style.display = "block";
      var previous = document.getElementById("previous").style.display = "none";
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
  }

}

// HOVER for form validation

//   function checkElementFilling(element) {
//   console.log(element.value)
//   if (element.value =='') {
//     errorMessagE.style.display = "block";
//     element.style.borderColor = "red";
//   } else {
//     errorMessagE.style.display = "none";
//     element.style.borderColor = "#cccccc";
//   }
// }

// FORM VALIDATION PART2
var inputValidation17 = document.getElementById("operation2");
var inputValidation18 = document.getElementById("validation18");
var inputValidation19 = document.getElementById("validation19");
var inputValidation20 = document.getElementById("validation20");
var inputValidation21 = document.getElementById("validation21");
var finalButton = document.getElementById("finaliseApplication");
var errorMessagE = document.getElementById("errorMessage");
var alertSymptomeMessage = document.getElementById("alertSymptome");
var checked = document.querySelectorAll('input#none:checked') || document.querySelectorAll('input#sorethoat:checked') || document.querySelectorAll('input#muscle_paain:checked') || document.querySelectorAll('input#headache:checked') || document.querySelectorAll('input#runny_nose:checked') || document.querySelectorAll('input#cough:checked') || document.querySelectorAll('input#shaking_chills:checked') || document.querySelectorAll('input#breathing_difficulty:checked') || document.querySelectorAll('input#fatigue:checked') || document.querySelectorAll('input#fever:checked');
var checkedConditions = document.querySelectorAll('input#accept_condition_generale:checked') || document.querySelectorAll('input#demande_immediat:checked');
var obligationone = document.getElementById('obligationOne');
var obligationtwo = document.getElementById('obligationTwo');



finalButton.onclick = function(){
  if (inputValidation17.value=='Select an option' || inputValidation17.value == "Choisir votre réponse") {
    errorMessagE.style.display = "block";
    inputValidation17.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation17.style.borderColor = "#cccccc";
  }

  if (inputValidation18.value=='Select an option' || inputValidation18.value == "Choisir votre réponse") {
    errorMessagE.style.display = "block";
    inputValidation18.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation18.style.borderColor = "#cccccc";
  }

  if (inputValidation19.value=='Select an option' || inputValidation19.value == "Choisir votre réponse") {
    errorMessagE.style.display = "block";
    inputValidation19.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation19.style.borderColor = "#cccccc";
  }

  if (inputValidation20.value=='') {
    errorMessagE.style.display = "block";
    inputValidation20.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation20.style.borderColor = "#cccccc";
  }

  if (inputValidation21.value=='') {
    errorMessagE.style.display = "block";
    inputValidation21.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation21.style.borderColor = "#cccccc";
  }

// SYMPTOMES CHECKING
    if (checked.length === 0) {
      alertSymptomeMessage.style.display = "block";
    } else {
      alertSymptomeMessage.style.display = "none";
    }

// GENERAL CONDITION CHECKING

    if (checkedConditions.length === 0) {
      obligationone.style.color = "red";
      obligationtwo.style.color = "red";
    } else {
      obligationone.style.color = "red";
      obligationtwo.style.color = "red";
    }

// SUBMISSION IF ALL IS OK
   if (inputValidation17.value!=='Select an option' && inputValidation18.value!=='Select an option' && inputValidation19.value!=='Select an option' && inputValidation20.value!=='' && inputValidation21.value!=='') {
    // Conditions générales
     if(!form.accept_condition_generale.checked) {
        alert("Please indicate that you accept the Terms and Conditions");
        form.accept_condition_generale.focus();
        return false;
      }
      return true;
    }

}



