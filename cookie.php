<!DOCTYPE html>
<html>
<head>
  <!-- Charset -->
  <meta charset="utf-8">
  <!-- mobile setting -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Title -->
  <title>Dashboard</title>
  <link rel="shortcut icon" href="assets/favicon/favicon.ico">
  <!-- CSS & Boostrap-->
  <link rel="stylesheet" type="text/css" href="assets/css/table.css">

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

<!-- coockie -->
<script
  src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
  integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
  crossorigin="anonymous">
</script>
<style type="text/css">
.cookie-banner {
  position: fixed;
  bottom: 40px;
  left: 10%;
  right: 10%;
  width: 80%;
  padding: 5px 14px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  background-color: #eee;
  border-radius: 5px;
  box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.2);
}
.close {
  height: 20px;
  background-color: #777;
  border: none;
  color: white;
  border-radius: 2px;
  cursor: pointer;
}
</style>

</head>
<body>

<!-- COOKIES -->
<!-- <div id="cookieSeen" style="display: none">
  <p style="margin-top:18px;">
    By using our website, you agree to our privacy policy. Please enter your name below <br>
    <input type="" name="firstName" id="firstNameTaker">
    <a href="privacyPolicy.html">cookie policy</a>
    <button class="btn btn-success ml-2" id="close" onclick="closeCookie()">I agree</button>
  </p>
</div> -->


<script type="text/javascript">

    // A custom function to set cookies
    function setCookie(name, value, daysToLive) {
        // Encode value in order to escape semicolons, commas, and whitespace
        var cookie = name + "=" + encodeURIComponent(value);

        if(typeof daysToLive === "number") {
            /* Sets the max-age attribute so that the cookie expires
            after the specified number of days */
            cookie += "; max-age=" + (daysToLive*24*60*60);

            document.cookie = cookie;
        }
    }

    // A custom function to get cookies
    function getCookie(name) {
        // Split cookie string and get all individual name=value pairs in an array
        var cookieArr = document.cookie.split(";");

        // Loop through the array elements
        for(var i = 0; i < cookieArr.length; i++) {
            var cookiePair = cookieArr[i].split("=");

            /* Removing whitespace at the beginning of the cookie name
            and compare it with the given string */
            if(name == cookiePair[0].trim()) {
                // Decode the cookie value and return
                return decodeURIComponent(cookiePair[1]);
            }
        }

        // Return null if not found
        return null;
    }

    // A custom function to check cookies
    function checkCookie() {
        // Get cookie using our custom function
        var firstName = getCookie("firstName");

        if(firstName != null) {
            alert("Welcome again, " + firstName);
        } else {


            firstName = prompt("By using our website, you agree to our privacy policy. Please enter your name below");
            // $('#firstName').val();
            // var message = document.getElementById("cookieSeen").style.display = "block";

            if(firstName != "" && firstName != null) {
                // Set cookie using our custom function
                setCookie("firstName", firstName, 1);
            }
        }
    }

    // function  closeCookie(){
    //   var closeCookie = document.getElementById("cookieSeen").style.display = "none";
    // }

    // Check the cookie on page load
    window.onload = checkCookie;

  // Uncomment the following line to delete this cookie
  // setCookie("firstName", "", 0);

</script>


  <!-- SCRIPTS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
