<!DOCTYPE html>
<html>
<head>
  <title></title>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>

<link rel="stylesheet" type="text/css" href="assets/bootstrap5/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/bootstrap5/css/bootstrap.min.css">

<style type="text/css">
#overlay {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
/*background-color: #000;*/
filter:alpha(opacity=70);
-moz-opacity:0.7;
-khtml-opacity: 0.7;
opacity: 0.7;
z-index: 100;
display: none;
}
.cnt223 a{
text-decoration: none;
}
.popup{
width: 100%;
margin: 0 auto;
display: none;
position: fixed;
z-index: 101;
}
.cnt223{
min-width: 600px;
width: 600px;
min-height: 150px;
margin: 100px auto;
/*background: #f3f3f3;*/
position: relative;
z-index: 103;
padding: 15px 35px;
border-radius: 5px;
box-shadow: 0 2px 5px #b4b2b2;
}
.cnt223 p{
clear: both;
    /*color: #555555;*/
    /* text-align: justify; */
    font-size: 20px;
    font-family: sans-serif;
}

a{
font-weight: bold;
}



.cnt223 .x{
float: right;
height: 35px;
left: 22px;
position: relative;
top: -25px;
width: 34px;
}
.cnt223 .x:hover{
cursor: pointer;
}
</style>

</head>
<body>


<div class='popup'>
  <div class='cnt223'>
    <center>
    <h1>Important Notice</h1>
      <p>
          Your application has been successfully registered
      <br/>
      <br/>

        <a href='index.php' class='close'>
          <button class="btn btn-danger">Cancel</button>
        </a>
        <a href='index.php' class='paiement'>
          <button class="btn btn-success">Proceed to payment</button>
        </a>
    </center>
  </div>
</div>

<script type='text/javascript'>
$(function(){
var overlay = $('<div id="overlay"></div>');
overlay.show();
overlay.appendTo(document.body);
$('.popup').show();

// $('.close').click(function(){
// $('.popup').hide();
// overlay.appendTo(document.body).remove();
// return false;
// });

$('.close').click(function(){
$("close").attr("href", "index.php")
});

$('.paiement').click(function(){
$("paiement").attr("href", "index.php")
});


$('.x').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});
});
</script>

</body>
</html>
