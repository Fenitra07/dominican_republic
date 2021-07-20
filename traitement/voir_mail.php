<?php

include('../connexion/connexion.php');


 	$id = $Passager;

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

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link href="../assets/css/main.css" rel="stylesheet" media="all"> -->
    <!-- <link rel="shortcut icon" href="../assets/favicon/favicon.ico"> -->
   <!--  <link rel="stylesheet" type="text/css" href="../assets/bootstrap5/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../assets/bootstrap5/css/bootstrap.min.css"> -->

    <!-- Fonts & Fonticons -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet"> -->
 <!--  <link rel="stylesheet" type="text/css" href="../assets/fonticons/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="../assets/fonticons/css/font-awesome.min.css"> -->


</head>
<style type="text/css">

/* devanagari */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 300;
  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLDz8Z11lFc-K.woff2) format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
}
/* latin-ext */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 300;
  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLDz8Z1JlFc-K.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 300;
  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLDz8Z1xlFQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* devanagari */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiEyp8kv8JHgFVrJJbecmNE.woff2) format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
}
/* latin-ext */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiEyp8kv8JHgFVrJJnecmNE.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiEyp8kv8JHgFVrJJfecg.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* devanagari */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 500;
  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLGT9Z11lFc-K.woff2) format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
}
/* latin-ext */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 500;
  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLGT9Z1JlFc-K.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 500;
  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLGT9Z1xlFQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* devanagari */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 600;
  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLEj6Z11lFc-K.woff2) format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
}
/* latin-ext */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 600;
  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLEj6Z1JlFc-K.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 600;
  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLEj6Z1xlFQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* devanagari */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 700;
  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLCz7Z11lFc-K.woff2) format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
}
/* latin-ext */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 700;
  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLCz7Z1JlFc-K.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 700;
  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLCz7Z1xlFQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* devanagari */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 800;
  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLDD4Z11lFc-K.woff2) format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
}
/* latin-ext */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 800;
  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLDD4Z1JlFc-K.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 800;
  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLDD4Z1xlFQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* devanagari */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 900;
  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLBT5Z11lFc-K.woff2) format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
}
/* latin-ext */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 900;
  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLBT5Z1JlFc-K.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 900;
  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLBT5Z1xlFQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

  html {
  scroll-behavior: smooth;
}

h1, h2, h3, h4, p {
    font-family: "Poppins", Arial, sans-serif;
}

h1, h2, h3, h4 {
    color: #ec3d3a;
}


/* ==========================================================================
   #FONT
   ========================================================================== */
.font-robo {
  font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
}

.font-poppins {
  font-family: "Poppins", "Arial", "Helvetica Neue", sans-serif;
}

.font-opensans {
  font-family: "Open Sans", "Arial", "Helvetica Neue", sans-serif;
}

/* ==========================================================================
   #GRID
   ========================================================================== */
.row {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-wrap: wrap;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
}

.row .col-2:last-child .input-group-desc {
  margin-bottom: 0;
}

.row-space {
  -webkit-box-pack: justify;
  -webkit-justify-content: space-between;
  -moz-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
}

.row-refine {
  margin: 0 -15px;
}

.row-refine .col-3 .input-group-desc,
.row-refine .col-9 .input-group-desc {
  margin-bottom: 0;
}

.col-2 {
  width: -webkit-calc((100% - 30px) / 2);
  width: -moz-calc((100% - 30px) / 2);
  width: calc((100% - 30px) / 2);
}

@media (max-width: 767px) {
  .col-2 {
    width: 100%;
  }
}

.form-row {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-wrap: wrap;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-align: start;
  -webkit-align-items: flex-start;
  -moz-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start;
  padding: 7px;
  /*border-bottom: 1px solid #e5e5e5;*/
}

.form-row .name {
  width: 188px;
  color: #333;
  font-size: 15px;
  font-weight: 700;
  margin-top: 11px;
}

.name_option {
  color: grey;
}


.form-row .value {
  width: -webkit-calc(100% - 188px);
  width: -moz-calc(100% - 188px);
  width: calc(100% - 188px);
}

@media (max-width: 767px) {
  .form-row {
    display: block;
    padding: 24px 30px;
  }
  .form-row .name,
  .form-row .value {
    display: block;
    width: 100%;
  }
  .form-row .name {
    margin-top: 0;
    margin-bottom: 12px;
  }
}

/* ==========================================================================
   #BOX-SIZING
   ========================================================================== */
/**
 * More sensible default box-sizing:
 * css-tricks.com/inheriting-box-sizing-probably-slightly-better-best-practice
 */
html {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

* {
  padding: 0;
  margin: 0;
}

*, *:before, *:after {
  -webkit-box-sizing: inherit;
  -moz-box-sizing: inherit;
  box-sizing: inherit;
}

/* ==========================================================================
   #RESET
   ========================================================================== */
/**
 * A very simple reset that sits on top of Normalize.css.
 */
body,
h1, h2, h3, h4, h5, h6,
blockquote, p, pre,
dl, dd, ol, ul,
figure,
hr,
fieldset, legend {
  margin: 0;
  padding: 0;
}

/**
 * Remove trailing margins from nested lists.
 */
li > ol,
li > ul {
  margin-bottom: 0;
}

/**
 * Remove default table spacing.
 */
table {
  border-collapse: collapse;
  border-spacing: 0;
}

/**
 * 1. Reset Chrome and Firefox behaviour which sets a `min-width: min-content;`
 *    on fieldsets.
 */
fieldset {
  min-width: 0;
  /* [1] */
  border: 0;
}

button {
  outline: none;
  background: none;
  border: none;
  float: right;
}

.button_previous {
  float: left;
}



/*CONFIGURATION TABLEAU*/
table {
  border-collapse: separate;
  border-spacing: 0 15px;
}

th {
  /*background-color: #4287f5;*/
  color: white;
}

th,td {
  width: 268px;
  text-align: center;
  /*border: 1px solid black;*/
  padding: 5px;
}



/* ==========================================================================
   #PAGE WRAPPER
   ========================================================================== */
.page-wrapper {
  min-height: 100vh;
  box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);
}

body {
  /*font-family: "Open Sans", "Arial", "Helvetica Neue", sans-serif;
  font-weight: 400;
  font-size: 14px;*/
}

h1, h2, h3, h4, h5, h6 {
  font-weight: 400;
}

h1 {
  font-size: 36px;
}

h2 {
  font-size: 30px;
}

h3 {
  font-size: 24px;
}

h4 {
  font-size: 18px;
}

h5 {
  font-size: 15px;
}

h6 {
  font-size: 13px;
}

/* ==========================================================================
   #BACKGROUND
   ========================================================================== */
.bg-blue {
  background: #2c6ed5;
}

.bg-red {
  background: #fa4251;
}

.bg-dark {
  background: #1a1a1a;
}

.bg-gra-01 {
  background: -webkit-gradient(linear, left bottom, left top, from(#fbc2eb), to(#a18cd1));
  background: -webkit-linear-gradient(bottom, #fbc2eb 0%, #a18cd1 100%);
  background: -moz-linear-gradient(bottom, #fbc2eb 0%, #a18cd1 100%);
  background: -o-linear-gradient(bottom, #fbc2eb 0%, #a18cd1 100%);
  background: linear-gradient(to top, #fbc2eb 0%, #a18cd1 100%);
}

.bg-gra-02 {
  background: -webkit-gradient(linear, left bottom, right top, from(#fc2c77), to(#6c4079));
  background: -webkit-linear-gradient(bottom left, #fc2c77 0%, #6c4079 100%);
  background: -moz-linear-gradient(bottom left, #fc2c77 0%, #6c4079 100%);
  background: -o-linear-gradient(bottom left, #fc2c77 0%, #6c4079 100%);
  background: linear-gradient(to top right, #fc2c77 0%, #6c4079 100%);
}

.bg-gra-03 {
  background: -webkit-gradient(linear, left bottom, right top, from(#08aeea), to(#b721ff));
  background: -webkit-linear-gradient(bottom left, #08aeea 0%, #b721ff 100%);
  background: -moz-linear-gradient(bottom left, #08aeea 0%, #b721ff 100%);
  background: -o-linear-gradient(bottom left, #08aeea 0%, #b721ff 100%);
  background: linear-gradient(to top right, #08aeea 0%, #b721ff 100%);
}

/* ==========================================================================
   #SPACING
   ========================================================================== */
.p-t-100 {
  padding-top: 100px;
}

.p-t-130 {
  padding-top: 130px;
}

.p-t-180 {
  padding-top: 180px;
}

.p-t-45 {
  padding-top: 45px;
}

.p-t-20 {
  padding-top: 20px;
}

.p-t-15 {
  padding-top: 15px;
}

.p-t-10 {
  padding-top: 10px;
}

.p-t-30 {
  padding-top: 30px;
}

.p-b-100 {
  padding-bottom: 100px;
}

.p-b-50 {
  padding-bottom: 50px;
}

.m-r-45 {
  margin-right: 45px;
}

.m-r-55 {
  margin-right: 55px;
}

.m-b-55 {
  margin-bottom: 55px;
}

/* ==========================================================================
   #WRAPPER
   ========================================================================== */
.wrapper {
  margin: 0 auto;
  background-color: white;
}

.wrapper--w960 {
  max-width: 960px;
}

.wrapper--w900 {
  max-width: 900px;
  padding : 30px;

}

.wrapper--w790 {
  max-width: 790px;
}

.wrapper--w780 {
  max-width: 780px;
}

.wrapper--w680 {
  max-width: 680px;
}

/* ==========================================================================
   #BUTTON
   ========================================================================== */
.btn {
  display: inline-block;
  line-height: 50px;
  padding: 0 30px;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  transition: all 0.4s ease;
  cursor: pointer;
  font-size: 15px;
  text-transform: capitalize;
  font-weight: 700;
  color: #fff;
  font-family: inherit;
}

.btn--radius {
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
}

.btn--radius-2 {
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}

.btn--pill {
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  border-radius: 20px;
}

.btn--green {
  background: #57b846;
}

.btn--green:hover {
  background: #4dae3c;
}

.btn--blue {
  background: #4272d7;
}

.btn--blue:hover {
  background: #3868cd;
}

.btn--blue-2 {
  background: #2c6ed5;
}

.btn--blue-2:hover {
  background: #185ac1;
}

.btn--red {
  background: #ff4b5a;
}

.btn--red:hover {
  background: #eb3746;
}

/* ==========================================================================
   #DATE PICKER
   ========================================================================== */
td.active {
  background-color: #2c6ed5;
}

input[type="date" i] {
  /*padding: 2px;*/
}

.table-condensed td, .table-condensed th {
  font-size: 14px;
  font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
  font-weight: 400;
}

.daterangepicker td {
  width: 40px;
  height: 30px;
}

.daterangepicker {
  border: none;
  -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
  box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
  display: none;
  border: 1px solid #e0e0e0;
  margin-top: 5px;
}

.daterangepicker::after, .daterangepicker::before {
  display: none;
}

.daterangepicker thead tr th {
  padding: 10px 0;
}

.daterangepicker .table-condensed th select {
  border: 1px solid #ccc;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  font-size: 14px;
  padding: 5px;
  outline: none;
}

/* ==========================================================================
   #FORM
   ========================================================================== */
input,
textarea {
  outline: none;
  margin: 0;
  border: none;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  width: 100%;
  font-size: 14px;
  font-family: inherit;
}

textarea {
  resize: none;
}

.input-group {
  position: relative;
  margin: 0;
}

.select_style {
  line-height: 38px;
  width: 100%;
  height: 41px;
}


.input--style-6,
.textarea--style-6 {
  background: transparent;
  line-height: 38px;
  border: 1px solid #cccccc;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  color: #666;
  font-size: 15px;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  transition: all 0.4s ease;
  padding: 0 20px;
}

.input--style-6::-webkit-input-placeholder,
.textarea--style-6::-webkit-input-placeholder {
  /* WebKit, Blink, Edge */
  color: #999;
}

.input--style-6:-moz-placeholder,
.textarea--style-6:-moz-placeholder {
  /* Mozilla Firefox 4 to 18 */
  color: #999;
  opacity: 1;
}

.input--style-6::-moz-placeholder,
.textarea--style-6::-moz-placeholder {
  /* Mozilla Firefox 19+ */
  color: #999;
  opacity: 1;
}

.input--style-6:-ms-input-placeholder,
.textarea--style-6:-ms-input-placeholder {
  /* Internet Explorer 10-11 */
  color: #999;
}

.input--style-6:-ms-input-placeholder,
.textarea--style-6:-ms-input-placeholder {
  /* Microsoft Edge */
  color: #999;
}

.input--style-6:focus,
.textarea--style-6:focus {
  -webkit-box-shadow: 0px 1px 5px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0px 1px 5px 0px rgba(0, 0, 0, 0.15);
  box-shadow: 0px 1px 5px 0px rgba(0, 0, 0, 0.15);
  -webkit-transform: translateY(-3px);
  -moz-transform: translateY(-3px);
  -ms-transform: translateY(-3px);
  -o-transform: translateY(-3px);
  transform: translateY(-3px);
}

.textarea--style-6 {
  line-height: 1.2;
  min-height: 120px;
  padding: 10px 20px;
}

.label--desc {
  font-size: 13px;
  color: #999;
  margin-top: 10px;
}

@media (max-width: 767px) {
  .label--desc {
    margin-top: 14px;
  }
}

.input-file {
  display: none;
}

.input-file + label {
  font-size: 15px;
  color: #fff;
  color: white;
  line-height: 40px;
  background-color: #666666;
  padding: 0 20px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  display: inline-block;
  margin-right: 15px;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  transition: all 0.4s ease;
  cursor: pointer;
}

.input-file:focus + label,
.input-file + label:hover {
  background: #1b1b1b;
}

.input-file__info {
  font-size: 15px;
  color: #666;
}

@media (max-width: 767px) {
  .input-file__info {
    display: block;
    margin-top: 6px;
  }
}


/* ==========================================================================
   #TITLE
   ========================================================================== */
.title {
  font-size: 36px;
  font-weight: 700;
  text-align: left;
  color: #fff;
  margin-bottom: 24px;
}

@media (max-width: 767px) {
  .title {
    padding: 0 15px;
  }
}

/* ==========================================================================
   #CARD
   ========================================================================== */
.card {
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  background: #fff;
}

.card-6 {
  background: transparent;
}

.card-6 .card-heading {
  background: transparent;
}

.card-6 .card-body {
  /*background: #fff;*/
  position: relative;
  /*border: 1px solid #e5e5e5;*/
  border-bottom: none;
  /*padding: 30px 0;*/
  padding-bottom: 0;
  -webkit-border-top-left-radius: 3px;
  -moz-border-radius-topleft: 3px;
  border-top-left-radius: 3px;
  -webkit-border-top-right-radius: 3px;
  -moz-border-radius-topright: 3px;
  border-top-right-radius: 3px;
}

.card-6 .card-body:before {
  bottom: 100%;
  left: 75px;
  /*border: solid transparent;*/
  content: "";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-color: rgba(255, 255, 255, 0);
  border-bottom-color: #fff;
  border-width: 10px;
}



.card-6 .card-footer {
  background: 1px solid #e5e5e5;
  /*border: 1px solid #e5e5e5;*/
  /*border-top: none;*/
  -webkit-border-bottom-left-radius: 3px;
  -moz-border-radius-bottomleft: 3px;
  border-bottom-left-radius: 3px;
  -webkit-border-bottom-right-radius: 3px;
  -moz-border-radius-bottomright: 3px;
  border-bottom-right-radius: 3px;
  padding: 52px 0px;
}


.card_button_next {
  background: 1px solid #e5e5e5;
  /*border: 1px solid #e5e5e5;*/
  /*border-top: none;*/
  -webkit-border-bottom-left-radius: 3px;
  -moz-border-radius-bottomleft: 3px;
  border-bottom-left-radius: 3px;
  -webkit-border-bottom-right-radius: 3px;
  -moz-border-radius-bottomright: 3px;
  border-bottom-right-radius: 3px;
  padding-bottom: 67px;
  padding-top: 10px;
}

.card_button_previous {
  background: 1px solid #e5e5e5;
  /*border: 1px solid #e5e5e5;*/
  /*border-top: none;*/
  -webkit-border-bottom-left-radius: 3px;
  -moz-border-radius-bottomleft: 3px;
  border-bottom-left-radius: 3px;
  -webkit-border-bottom-right-radius: 3px;
  -moz-border-radius-bottomright: 3px;
  border-bottom-right-radius: 3px;
  margin-top: -52px;

}


@media (max-width: 767px) {
  .card-6 .card-footer {
    padding: 50px 30px;
  }
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
                                <input disabled class="input--style-6" type="text" name="adresse_permanent" value="<?= isset($data["adresse_permanent"])? $data["adresse_permanent"]: '' ?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">City (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6" type="" value="<?= isset($data["ville"])? $data["ville"]: '' ?>" name="ville" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">State (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6" type="" value="<?= isset($data["etat"])? $data["etat"]: '' ?>" name="etat" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Zip code (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6" type="" value="<?= isset($data["code_postal"])? $data["code_postal"]: '' ?>" name="code_postal" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Arrival or Departure (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6 select_style" value="<?= isset($data["type_voyage"])? $data["type_voyage"]: '' ?>" name="type_voyage" id="movement" onclick="myMovement()">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Do you make stops in other countries ? (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6 select_style" value="<?= isset($data["is_arret_frequent"])? $data["is_arret_frequent"]: '' ?>" name="is_arret_frequent" id="stopcountry" onclick="stopCountry()">
                                </div>
                            </div>
                        </div>


                        <!-- PASSENGER INFORMATION -->
                        <h3 class="form_title">PASSENGER INFORMATION</h3>
                        <div class="form-row">
                            <div class="name">Names (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6" type="" value="<?= isset($data["noms"])? $data["noms"] : ''  ?>" name="noms" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Last Names (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6" type="" value="<?= isset($data["nom_famille"])? $data["nom_famille"]: '' ?>" name="nom_famille" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Date of birth (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6" type="date" value="<?= isset($data["date_naissance"])? $data["date_naissance"]: '' ?>" name="date_naissance">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Gender (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6 select_style" value="<?= isset($data["genre"])? $data["genre"]: '' ?>" name="genre">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Country of birth (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6" type="" value="<?= isset($data["pays_naissance"])? $data["pays_naissance"]: '' ?>" name="pays_naissance" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Country of nationality (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6" type="" value="<?= isset($data["pays_nationnalite"])? $data["pays_nationnalite"]: '' ?>" name="pays_nationnalite" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Passport number (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6" value="<?= isset($data["numero_passport"])? $data["numero_passport"]: '' ?>" type="" name="numero_passport" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Civil status (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled value="<?= isset($data["etat_civil"])? $data["etat_civil"]: '' ?>" name="etat_civil" class="input--style-6 select_style">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Ocupation (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6 select_style" value="<?= isset($data["libelle"])? $data["libelle"]: '' ?>" name="libelle">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Are you going to stay at a hotel?  (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6 select_style" value="<?= isset($data["accept_sejour_hotel"])? $data["accept_sejour_hotel"]: '' ?>" name="accept_sejour_hotel"  id="operation1" onclick="myOperation1()">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" id="r_yes1" >
                            <div class="name"><span class="name_option">Hotel name (*)</span></div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6" type="" value="<?= isset($data["hotel_name"])? $data["hotel_name"]: '' ?>" name="hotel_name" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div id="r_no1" >
                          <div class="form-row">
                              <div class="name"><span class="name_option">PROVINCE  (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input disabled class="input--style-6 select_style" value="<?= isset($data["province"])? $data["province"]: '' ?>" name="province">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">MUNICIPALITY (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input disabled class="input--style-6" type="" value="<?= isset($data["municipality"])? $data["municipality"]: '' ?>" name="municipality" placeholder="">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">SECTION</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input disabled class="input--style-6" type="" value="<?= isset($data["section"])? $data["section"]: '' ?>" name="section" placeholder="">
                                  </div>
                              </div>
                          </div>
                        </div>


                        <!-- FLIGHT INFORMATION -->
                        <!-- Arrival Condition Begin -->
                        <div id="r_arrival" >
                          <!-- "Do you make stops in other countries" = NO -->
                          <div id="r_no3" >
                            <h3 class="form_title">
                                FLIGHT INFORMATION <br>
                                Arrival / "Do you make stops in other countries" = NO
                            </h3>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Name of the boarding port (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input disabled class="input--style-6" type="" value="<?= isset($data["name_board_port"])? $data["name_board_port"]: '' ?>" name="name_board_port" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Flight number (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input disabled class="input--style-6" type="" value="<?= isset($data["flight_number"])? $data["flight_number"]: '' ?>" name="flight_number" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Flight date (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input disabled class="input--style-6" type="date" value="<?= isset($data["flight_date"])? $data["flight_date"]: '' ?>" name="flight_date">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Disembarkation port (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input disabled class="input--style-6 select_style" value="<?= isset($data["disembarkation_port"])? $data["disembarkation_port"]: '' ?>" name="disembarkation_port">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Transportation company (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input disabled class="input--style-6" type="" value="<?= isset($data["transportation_company"])? $data["transportation_company"]: '' ?>" name="transportation_company" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Travel purpose (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input disabled class="input--style-6 select_style" value="<?= isset($data["travel_purpose"])? $data["travel_purpose"]: '' ?>" name="travel_purpose">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Days of staying (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input disabled class="input--style-6" type="" value="<?= isset($data["days_staying"])? $data["days_staying"]: '' ?>" name="days_staying" placeholder="">
                                    </div>
                                </div>
                            </div>
                          </div>
                          <!-- "Do you make stops in other countries" = NO -->

                          <!--  <br> -->
                          <div id="r_yes3" >
                            <h3 class="form_title">
                                FLIGHT INFORMATION <br>
                                Arrival / "Do you make stops in other countries" = YES
                            </h3>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Origin Port (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input disabled class="input--style-6" type="" value="<?= isset($data["origin_port"])? $data["origin_port"]: '' ?>" name="origin_port" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Flight number (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input disabled class="input--style-6" type="" value="<?= isset($data["flight_number_yes"])? $data["flight_number_yes"]: '' ?>" name="flight_number_yes" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Flight date (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input disabled class="input--style-6" type="date" value="<?= isset($data["flight_date_yes"])? $data["flight_date_yes"]: '' ?>" name="flight_date_yes">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Name of the boarding port (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input disabled class="input--style-6" type="" value="<?= isset($data["boarding_port_yes"])? $data["boarding_port_yes"]: '' ?>" name="boarding_port_yes">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Flight number (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input disabled class="input--style-6" type="" value="<?= isset($data["flight_number_yes_2"])? $data["flight_number_yes_2"]: '' ?>" name="flight_number_yes_2" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Flight date (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input disabled class="input--style-6" type="date" value="<?= isset($data["flight_date_yes_2"])? $data["flight_date_yes_2"]: '' ?>" name="flight_date_yes_2">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Disembarkation port (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input disabled class="input--style-6 select_style" value="<?= isset($data["disembarkation_port_yes"])? $data["disembarkation_port_yes"]: '' ?>" name="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Transportation company (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input disabled class="input--style-6" type="" value="<?= isset($data["transportation_company_yes"])? $data["transportation_company_yes"]: '' ?>" name="transportation_company_yes" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Travel purpose (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input disabled class="input--style-6 select_style" value="<?= isset($data["travel_purpose_yes"])? $data["travel_purpose_yes"]: '' ?>" name="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Days of staying (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input disabled class="input--style-6" type="" value="<?= isset($data["days_staying_yes"])? $data["days_staying_yes"]: '' ?>" name="days_staying_yes" placeholder="">
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <!-- "Do you make stops in other countries" = YES -->

                        <!-- Arrival Condition End -->

                        <!-- Departure Condition Begin -->
                        <div id="r_departure" >
                          <h3 class="form_title">
                            FLIGHT INFORMATION <br>
                            Departure
                        </h3>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Name of the boarding port (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input disabled class="input--style-6 select_style" value="<?= isset($data["boarding_port_departure"])? $data["boarding_port_departure"]: '' ?>" name="boarding_port_departure">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Flight number (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input disabled class="input--style-6" type="" value="<?= isset($data["flight_number_departure"])? $data["flight_number_departure"]: '' ?>" name="flight_number_departure" placeholder="">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Flight date (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input disabled class="input--style-6" value="<?= isset($data["flight_date_departure"])? $data["flight_date_departure"]: '' ?>" type="date" name="flight_date_departure">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Disembarkation port  (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input disabled class="input--style-6" type="" value="<?= isset($data["disemarkation_port_departure"])? $data["disemarkation_port_departure"]: '' ?>" name="disemarkation_port_departure" placeholder="">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Transportation company (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input disabled class="input--style-6" type="" value="<?= isset($data["transportation_company_departure"])? $data["transportation_company_departure"]: '' ?>" name="transportation_company_departure" placeholder="">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Travel purpose (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input disabled class="input--style-6 select_style" value="<?= isset($data["travel_purpose_departure"])? $data["travel_purpose_departure"]: '' ?>" name="travel_purpose_departure">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Days of staying (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input disabled class="input--style-6" type="" value="<?= isset($data["days_staying_departure"])? $data["days_staying_departure"]: '' ?>" name="days_staying_departure" placeholder="">
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
                            <div class="name">Do you bring with you or in your luggage a sum of money or other means of payment exceeding USD 10,000 or the equivalent in another currency?</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6" type="" value="<?= isset($data["apportMontant"])? $data["apportMontant"]: '' ?>" name="apportMontant" placeholder="">
                                </div>
                            </div>
                        </div>
                        <!-- yes condition begin -->
                        <div id="r_yes2" >
                          <div class="form-row">
                              <div class="name"><span class="name_option">AMMOUNT (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input disabled class="input--style-6" type="" value="<?= isset($data["ammount"])? $data["ammount"]: '' ?>" name="ammount" placeholder="">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">CURRENCY (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input disabled class="input--style-6" type="" value="<?= isset($data["currency"])? $data["currency"]: '' ?>" name="currency" placeholder="">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">DECLARE ORIGIN OF THE SECURITIES (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input disabled class="input--style-6" type="" value="<?= isset($data["declare_origin_security"])? $data["declare_origin_security"]: '' ?>" name="declare_origin_security" placeholder="">
                                  </div>
                              </div>
                          </div>
                        </div>
                        <!-- yes condition end -->
                        <div class="form-row">
                            <div class="name">Do you bring food, plants or animals with you or in your luggage?</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6 select_style" value="<?= isset($data["apport_nourriture"])? $data["apport_nourriture"]: '' ?>" name="apport_nourriture">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Do you bring taxable goods with you or in your luggage? </div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6 select_style" value="<?= isset($data["apport_marchandise_taxable"])? $data["apport_marchandise_taxable"]: '' ?>" name="apport_marchandise_taxable">
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
                                <td><input disabled class="" type="checkbox" <?= $none? "checked": ""  ?> name="none"><p>None</p></td>
                                <?php
                                	if ($data["sorethoat"] == "true") {
	                            		$sorethoat = true;
	                            	} else {
	                            		$sorethoat = false;
	                            	}
                                 ?>
                                <td><input disabled class="" type="checkbox" <?= $sorethoat? "checked": ''  ?> name="sorethoat"><p>Sore throat</p></td>
                                 <?php
                                    if ($data["muscle_paain"] == "true") {
                                        $muscle_paain = true;
                                    } else {
                                        $muscle_paain = false;
                                    }
                                 ?>
                                <td><input disabled class="" type="checkbox" <?= $muscle_paain? "checked": ''  ?> name="muscle_paain"><p>Muscle pain</p></td>
                              </tr>

                              <tr>
                                 <?php
                                    if ($data["headache"] == "true") {
                                        $headache = true;
                                    } else {
                                        $headache = false;
                                    }
                                 ?>
                                <td><input disabled class="" type="checkbox" <?= $headache? "checked": ''  ?> name="headache"><p>Headache</p></td>

                                <?php
                                    if ($data["runny_nose"] == "true") {
                                        $runny_nose = true;
                                    } else {
                                        $runny_nose = false;
                                    }
                                 ?>
                                <td><input disabled class="" type="checkbox" <?= $runny_nose? "checked": ''  ?> name="runny_nose"><p>Runny nose</p></td>


                                 <?php
                                    if ($data["cough"] == "true") {
                                        $cough = true;
                                    } else {
                                        $cough = false;
                                    }
                                 ?>
                                <td><input disabled class="" type="checkbox" <?= $cough? "checked": ''  ?> name="cough"><p>Cough</p></td>
                              </tr>

                              <tr>
                                <?php
                                    if ($data["shaking_chills"] == "true") {
                                        $shaking_chills = true;
                                    } else {
                                        $shaking_chills = false;
                                    }
                                 ?>
                                <td><input disabled class="" type="checkbox" <?= $shaking_chills? "checked": ''  ?> name="shaking_chills"><p>Shaking chills</p></td>
                                 <?php
                                    if ($data["breathing_difficulty"] == "true") {
                                        $breathing_difficulty = true;
                                    } else {
                                        $breathing_difficulty = false;
                                    }
                                 ?>
                                <td><input disabled class="" type="checkbox" <?= $breathing_difficulty? "checked": ''  ?> name="breathing_difficulty"><p>Breathing difficulty</p></td>
                                 <?php
                                    if ($data["fatigue"] == "true") {
                                        $fatigue = true;
                                    } else {
                                        $fatigue = false;
                                    }
                                 ?>
                                <td><input disabled class="" type="checkbox" <?= $fatigue? "checked": ''  ?> name="fatigue"><p>Fatigue</p></td>
                              </tr>
                              <tr>
                                <?php
                                    if ($data["fever"] == "true") {
                                        $fever = true;
                                    } else {
                                        $fever = false;
                                    }
                                 ?>
                                <td><input disabled class="" type="checkbox" <?= $fever? "checked": ''  ?> name="fever"><p>Fever</p></td>
                              </tr>
                            </table>
                        </div>


                        <!-- CONTACT DETAILS -->
                        <h3 class="form_title">YOUR CONTACT DETAILS</h3>
                        <div class="form-row">
                            <div class="name">Your e-mail address to receive your E-ticket (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6" type="mail" value="<?= isset($data["email"])? $data["email"]: '' ?>" name="email" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Your phone number (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6" type="test" value="<?= isset($data["numero"])? $data["numero"]: '' ?>" name="numero" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <?php
                                    if ($data["accept_condition_generale"] == "true") {
                                        $accept_condition_generale = true;
                                    } else {
                                        $accept_condition_generale = false;
                                    }
                                 ?>
                            <div class="name"><input disabled <?= $accept_condition_generale? "checked": ''  ?> value="false" type="checkbox" name="accept_condition_generale"></div>
                            <div class="value">
                                <div class="input-group">
                                    <span>I accept the general conditions of sale and use and I certify on my honour the accuracy of the information provided. It's reminded that any person making a false declaration on behalf of himself or herself or another person may be liable to the penalties provided for in articles 441-1 of the penal code and following. </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <?php
                                    if ($data["demande_immediat"] == "true") {
                                        $demande_immediat = true;
                                    } else {
                                        $demande_immediat = false;
                                    }
                                 ?>
                            <div class="name"><input disabled value="false" <?= $demande_immediat? "checked": ''  ?> type="checkbox" name="demande_immediat"></div>
                            <div class="value">
                                <div class="input-group">
                                    <span>I would like my E-ticket request to start immediately. I expressly waive my right of withdrawal so that the service can begin before the end of the legal withdrawal period.</span>
                                </div>
                            </div>
                        </div>
          </div>

              </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <!-- Main JS-->
    <script src="../assets/js/global.js"></script>

</body>

</html>
