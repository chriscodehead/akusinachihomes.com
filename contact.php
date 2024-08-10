<?php
$active5 = 'active';
require_once('include.php');
$title = 'Contact Us - Real Estate Company in Enugu Nigeria';
$description = 'Discover your perfect home or investment property with ' . $siteName . '. We offer comprehensive real estate services including residential sales and leasing, commercial properties, property management, and investment consulting.';
$keyword = $siteName . ', real estate, residential sales, property leasing, commercial properties, property management, real estate investment, buy home, lease property, investment consulting, Nigeria, Enugu, Anambra, Imo, Ebonyi, Abia, real estate services, find a home, trusted real estate company.';
require_once('head.php'); ?>


<body>

 <?php require_once('header.php'); ?>

 <div class="page-banner-area bg-gray2">
  <div class="container mw-1380">
   <div class="row align-items-center">
    <div class="col-lg-6">
     <div class="page-banner-content">
      <ul class="ps-0 list-unstyled breadcrumbs">
       <li>
        <a href="./">Home</a>
       </li>
       <li>
        <span>Contact Us</span>
       </li>
      </ul>

     </div>
    </div>
    <div class="col-lg-6">
     <div class="page-banner-img text-center text-lg-end position-relative z-1">
      <img src="assets/images/shape-7.png" class="shape shape-7" alt="shape">
      <img src="assets/images/shape-8.png" class="shape shape-8" alt="shape">
     </div>
    </div>
   </div>
  </div>
 </div>

 <div class="contact-info-area pt-130 pb-105">
  <div class="container mw-1380">
   <div class="row justify-content-center">

    <div class="col-lg-12 col-md-6">
     <div class="contact-info-single-item">
      <h3>Nigeria</h3>
      <ul class="ps-0 mb-0 list-unstyled">
       <li class="d-flex align-items-center">
        <i class="ri-mail-line"></i>
        <a href="mailto:<?php print $siteEmail; ?>"><span class="__cf_email__"><?php print $siteEmail; ?></span></a>
       </li>
       <li class="d-flex align-items-center">
        <i class="ri-map-pin-fill"></i>
        <span><?php print $siteAddress; ?></span>
       </li>
       <li class="d-flex align-items-center">
        <i class="ri-phone-fill"></i>
        <a href="tel:<?php print $sitePhone; ?>"><?php print $sitePhone; ?></a>
       </li>
      </ul>
     </div>
    </div>

   </div>
  </div>
 </div>

 <?php require_once('contact-form.php'); ?>

 <?php require_once('footer.php'); ?>

 <script>
  function contatMail() {
   var hr = new XMLHttpRequest();
   var url = "reg_process.php";
   var cotactmail = document.getElementById('email').value;
   var name = document.getElementById('name').value;
   var subject = document.getElementById('subject').value;
   var phone = document.getElementById('phone').value;
   var message = document.getElementById('message').value;
   var vars = "cotactmail=" + cotactmail + "&name=" + name + "&message=" + message + "&subject=" + subject + "&phone=" + phone;
   if (cotactmail == "" || name == "" || message == "") {
    sweetUnpre("Please fill all necessary fields!");
    $('i#sp5').attr("class", "");
   } else {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if (!emailReg.test(cotactmail)) {
     sweetUnpre('Please use a valid email address!');
     $('i#sp5').attr("class", "");
    } else {

     hr.open("POST", url, true);
     hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     // Access the onreadystatechange event for the XMLHttpRequest object
     hr.onreadystatechange = function() {
      //  console.log(hr);
      if (hr.readyState == 4 && hr.status == 200) {
       var return_data = hr.responseText;
       sweetUnpre(return_data);
       //setTimeout(refreshPage,2000);
       if (return_data == 'Internal error. Mail fail to send') {

       } else {
        document.getElementById('email').value = "";
        document.getElementById('name').value = "";
        document.getElementById('message').value = "";
        document.getElementById('subject').value = "";
        document.getElementById('phone').value = "";
       }
      }
     }
     hr.send(vars); // Actually execute the request
    } //email
    sweetUnpre('processing...');
   } //else empty
  }
 </script>