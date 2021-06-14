// Condition : Are you going to stay at a hotel?
    function myOperation1() {

      var operation1 = document.getElementById("operation1").value;
    console.log(operation1);

      if (operation1 == "No") {
        document.getElementById("r_no1").style.display = "block";
        document.getElementById("r_yes1").style.display = "none";
      }

      if (operation1 == "Yes") {
        document.getElementById("r_yes1").style.display = "flex";
        document.getElementById("r_no1").style.display = "none";
      }

      if (operation1 == "Select an option") {
        document.getElementById("r_yes1").style.display = "none";
        document.getElementById("r_no1").style.display = "none";
      }


    }

// Condition : Do you bring with you or in your luggage a sum of money or other means of payment exceeding USD 10,000 or the equivalent in another currency?
    function myOperation2() {

      var operation2 = document.getElementById("operation2").value;
    console.log(operation2);

      if (operation2 == "No") {
        document.getElementById("r_yes2").style.display = "none";
      }

      if (operation2 == "Yes") {
        document.getElementById("r_yes2").style.display = "block";
      }

      if (operation2 == "Select an option") {
        document.getElementById("r_yes2").style.display = "none";
      }


    }

// Condition : Arrival or Departure
function myMovement() {

      var movement = document.getElementById("movement").value;
    console.log(movement);

      if (movement == "Arrival") {
        document.getElementById("r_arrival").style.display = "block";
        document.getElementById("r_departure").style.display = "none";
      }

      if (movement == "Departure") {
        document.getElementById("r_departure").style.display = "block";
        document.getElementById("r_arrival").style.display = "none";
      }

      if (movement == "Select an option") {
        document.getElementById("r_departure").style.display = "none";
        document.getElementById("r_arrival").style.display = "none";
      }

}

// Condition : Do you make stops in other countries ?
function stopCountry() {

      var stopCountry = document.getElementById("stopCountry").value;
      console.log(stopCountry);

      if (stopCountry == "No") {
        document.getElementById("r_no1").style.display = "block";
        document.getElementById("r_yes2").style.display = "none";
      }

      if (stopCountry == "Yes") {
        document.getElementById("r_yes2").style.display = "block";
        document.getElementById("r_no1").style.display = "none";
      }

      if (stopCountry == "Select an option") {
        document.getElementById("r_yes2").style.display = "none";
        document.getElementById("r_no1").style.display = "none";
      }


}

