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

      var stopcountry = document.getElementById("stopcountry").value;
      console.log(stopcountry);

      if (stopcountry == "No") {
        document.getElementById("r_no3").style.display = "block";
        document.getElementById("r_yes3").style.display = "none";
      }

      if (stopcountry == "Yes") {
        document.getElementById("r_yes3").style.display = "block";
        document.getElementById("r_no3").style.display = "none";
      }

      if (stopcountry == "Select an option") {
        document.getElementById("r_yes3").style.display = "none";
        document.getElementById("r_no3").style.display = "none";
      }

}




// BUTTON NEXT & PREVIOUS

    function MyFunctionNext() {
      var text2 = document.getElementById("part2").style.display = "block";
      var text1 = document.getElementById("part1").style.display = "none";
      var next = document.getElementById("next").style.display = "none";
      var previous = document.getElementById("previous").style.display = "block";
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }

    function MyFunctionprevious() {
      var text2 = document.getElementById("part2").style.display = "none";
      var text1 = document.getElementById("part1").style.display = "block";
      var next = document.getElementById("next").style.display = "block";
      var previous = document.getElementById("previous").style.display = "none";
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }

