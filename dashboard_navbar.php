<!DOCTYPE html>
<html lang="en">
   <head>
      <link rel="stylesheet" type="text/css" href="assets/css/reset.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/style.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/ionicon.min.css">
      <link rel="shortcut icon" href="assets/favicon/favicon.ico">
   </head>

   <body>

<!-- Class active ho an'ny navbar mbola tsy misy -->

      <!-- Section: Header -->
      <header class="header">
         <div class="container">
            <div class="wrapper">
               <p><img src="assets/img/logo.png"></p>
               <button type="button" class="opened-menu">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
               </button>
               <div class="overlay"></div>
               <nav class="navbar">
                  <button type="button" class="closed-menu">
                     <img src="assets/closed.svg" class="closed-icon" alt="closed">
                  </button>
                  <ul class="menu">
                     <li class="menu-item"><a href="dashboard.php">Dashboard</a></li>
                     <span class="barre_navbar">&#124;</span>
                     <li class="menu-item"><a href="message.html">Confirmation Mail</a></li>
                     <span class="barre_navbar">&#124;</span>
                     <li class="menu-item menu-item-has-children">
                        <a href="" data-toggle="sub-menu">Bill<i class="expand"></i></a>
                        <ul class="dropdown-menu sub-menu">
                           <li class="menu-item"><a href="facture-us.html">US</a></li>
                           <li class="menu-item"><a href="facture-fr.html">FR</a></li>
                        </ul>
                     </li>
                     <span class="barre_navbar">&#124;</span>
                     <li class="menu-item"><a href="termAndCondition.html">Terms & Conditions</a></li>
                     <span class="barre_navbar">&#124;</span>
                     <li class="menu-item"><a href="login.php"><i class="fa fa-power-off"></i></a></li>
                  </ul>
               </nav>
            </div>
         </div>
      </header>


<!-- SCRIPTS -->
<script src="assets/js/script.js" defer></script>

</body>

</html>
