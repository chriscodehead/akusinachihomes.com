<?php
$active1 = 'active';
require_once('include.php');
$title = 'Welcome to ' . $siteName . ' - Real Estate in Nigeria';
$description = 'Discover your perfect home or investment property with ' . $siteName . '. We offer comprehensive real estate services including residential sales and leasing, commercial properties, property management, and investment consulting.';
$keyword = $siteName . ', real estate, residential sales, property leasing, commercial properties, property management, real estate investment, buy home, lease property, investment consulting, Nigeria, Enugu, Anambra, Imo, Ebonyi, Abia, real estate services, find a home, trusted real estate company.';
require_once('head.php'); ?>
<style>
 .hidden-content {
  display: none;
  padding-left: 20px;
  color: #333;
 }
</style>

<body>

 <?php require_once('header.php'); ?>

 <div class="swiper banner-slide position-relative">
  <div class="swiper-wrapper">
   <div class="swiper-slide">
    <div class="banner-area banner-bg-1 bg-img overflow-hidden" data-background="img/akusinachihomes-2.jpeg">
     <div class="container mw-1380">
      <div class="banner-content">
       <h1><span>Welcome to </span> <?php print $siteName; ?></h1>
       <p>
        Turning Dreams into Reality, One Property at a Time.
       </p>
       <div class="banner-btn d-flex align-items-center">
        <a href="contact" class="btn border-0">
         Buy A Land
         <img src="assets/images/cart.svg" alt="cart" />
        </a>
        <a href="schedule-viewing" class="read-more">
         Schedule a Viewing
         <i class="flaticon-right-arrow"></i>
        </a>
       </div>
      </div>
     </div>
    </div>
   </div>

   <div class="swiper-slide">
    <div class="banner-area banner-bg-1 bg-img overflow-hidden" data-background="img/akusinachihomes-1.jpeg">
     <div class="container mw-1380">
      <div class="banner-content">
       <h1><span>Finding Your</span> Dream Property</h1>
       <p>
        Expert Real Estate Services Tailored to You.
       </p>
       <div class="banner-btn d-flex align-items-center">
        <a href="contact" class="btn border-0">
         Buy A Land
         <img src="assets/images/cart.svg" alt="cart" />
        </a>
        <a href="schedule-viewing" class="read-more">
         Schedule a Viewing
         <i class="flaticon-right-arrow"></i>
        </a>
       </div>
      </div>
     </div>
    </div>
   </div>

   <div class="swiper-slide">
    <div class="banner-area banner-bg-1 bg-img overflow-hidden" data-background="img/akusinachihomes-3.jpeg">
     <div class="container mw-1380">
      <div class="banner-content">
       <h1><span>Experience Excellence</span> in Real Estate</h1>
       <p>
        Trusted Real Estate Partners at Your Service.
       </p>
       <div class="banner-btn d-flex align-items-center">
        <a href="contact" class="btn border-0">
         Buy A Land
         <img src="assets/images/cart.svg" alt="cart" />
        </a>
        <a href="schedule-viewing" class="read-more">
         Schedule a Viewing
         <i class="flaticon-right-arrow"></i>
        </a>
       </div>
      </div>
     </div>
    </div>
   </div>

  </div>

  <div class="banner-controller">
   <div class="float-md-end d-flex d-md-block justify-content-between">
    <div class="controller-icon prev1">
     <i class="flaticon-left-arrow"></i>
    </div>
    <div class="controller-icon next1">
     <i class="flaticon-right-arrow"></i>
    </div>
   </div>
  </div>

 </div>



 <div class="why-us-area pb-105 mt-5 position-relative">
  <div class="container mw-1570">
   <h3></h3>
   <div class="why-us-img-2">
    <div class="section-title">
     <h2>Three easy ways to find your dream property with <?php print $siteName; ?></h2>
    </div>
    <img src="img/why-us.png" alt="why-us">
   </div>
  </div>
  <div class="container mw-1380">
   <div class="row justify-content-center">
    <div class="col-lg-4 col-sm-6">
     <div class="why-us-single-item">
      <div class="d-flex align-items-center">
       <i class="flaticon-house"></i>
       <h3>Explore Our Listings</h3>
      </div>
      <p>Browse our extensive collection of properties online. With detailed descriptions, photos, and virtual tours, finding the right home has never been easier.</p>
     </div>
    </div>
    <div class="col-lg-4 col-sm-6">
     <div class="why-us-single-item">
      <div class="d-flex align-items-center">
       <i class="flaticon-call"></i>
       <h3>Personalized Consultation</h3>
      </div>
      <p>Contact our team for a personalized consultation. We’ll listen to your needs, preferences, and budget to curate a list of properties that match your criteria and within your budget.</p>
     </div>
    </div>
    <div class="col-lg-4 col-sm-6">
     <div class="why-us-single-item">
      <div class="d-flex align-items-center">
       <i class="flaticon-view"></i>
       <h3>Schedule a Viewing</h3>
      </div>
      <p>Once you've found a property you like, simply click "Schedule a Viewing" to arrange an in-person tour. Our agents will guide you through the property and answer any questions you may have.</p>
     </div>
    </div>
   </div>
  </div>
 </div>


 <div class="service-area pb-105">
  <div class="container mw-1380">
   <div class="row align-items-center">
    <div class="col-lg-6">
     <div class="service-content">
      <h2>You know the home you want. We make it happen for your need.</h2>
      <a href="about" class="read-more">
       Know More About Us
       <i class="flaticon-right-arrow"></i>
      </a>
     </div>
    </div>
    <div class="col-lg-6">
     <div class="service-content">
      <p>At <?php print $siteName; ?>, we understand that your home should be a reflection of your unique lifestyle and preferences. That's why we're committed to turning your vision into reality. Whether you're searching for a cozy family home, a luxurious apartment, or the perfect investment property, our team is here to guide you every step of the way.</p>
     </div>
    </div>
   </div>
   <div class="row align-items-center">
    <div class="col-lg-6">
     <div class="services-img">
      <img src="assets/images/services.png" alt="services">
     </div>
    </div>
    <div class="col-lg-6">
     <div class="row justify-content-center">
      <div class="col-xl-6 col-sm-6">
       <div class="service-single-item transition-y style-two">
        <i class="flaticon-house icon"></i>
        <h3>
         <a href="about">Extensive Listings</a>
        </h3>
        <p>Explore a wide range of properties tailored to your unique needs and preferences.</p>
        <a href="about" class="read-more">
         Learn more
         <i class="flaticon-right-arrow"></i>
        </a>
       </div>
      </div>
      <div class="col-xl-6 col-sm-6">
       <div class="service-single-item transition-y style-two">
        <i class="flaticon-calculator icon"></i>
        <h3>
         <a href="about">Expert Guidance</a>
        </h3>
        <p>Benefit from the knowledge and experience of our seasoned real estate professionals.</p>
        <a href="about" class="read-more">
         Learn more
         <i class="flaticon-right-arrow"></i>
        </a>
       </div>
      </div>
      <div class="col-xl-6 col-sm-6">
       <div class="service-single-item transition-y style-two">
        <i class="flaticon-refinance icon"></i>
        <h3>
         <a href="about">Customer-Centric Approach</a>
        </h3>
        <p>Enjoy personalized service and attention to detail, making your real estate journey smooth and stress-free.</p>
        <a href="about" class="read-more">
         Learn more
         <i class="flaticon-right-arrow"></i>
        </a>
       </div>
      </div>
      <div class="col-xl-6 col-sm-6">
       <div class="service-single-item transition-y style-two">
        <i class="flaticon-taxes icon"></i>
        <h3>
         <a href="about">Market Insights</a>
        </h3>
        <p>Stay informed with our up-to-date market analysis and investment advice.</p>
        <a href="about" class="read-more">
         Learn more
         <i class="flaticon-right-arrow"></i>
        </a>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>

 <div class="private-loan-area bg-gray2 border border-bottom-0 ptb-130">
  <div class="container">
   <div class="row align-items-center">

    <div class="col-lg-6">
     <ul class="ps-0 list-unstyled private-loan-list">
      <li>
       <a href="#" class="d-flex justify-content-between align-items-center" onclick="toggleContent('content1'); return false;">
        <span>Experienced Professionals</span>
        <i class="flaticon-right-arrow"></i>
       </a>
       <p id="content1" class="hidden-content">Our team consists of experienced real estate agents, property managers, and investment consultants who are dedicated to providing exceptional service.</p>
      </li>
      <li>
       <a href="#" class="d-flex justify-content-between align-items-center" onclick="toggleContent('content2'); return false;">
        <span>Comprehensive Listings</span>
        <i class="flaticon-right-arrow"></i>
       </a>
       <p id="content2" class="hidden-content">We offer a diverse range of properties to suit different needs and preferences, ensuring that you find exactly what you’re looking for.</p>
      </li>
      <li>
       <a href="#" class="d-flex justify-content-between align-items-center" onclick="toggleContent('content3'); return false;">
        <span>Customer-Centric Approach</span>
        <i class="flaticon-right-arrow"></i>
       </a>
       <p id="content3" class="hidden-content">Your satisfaction is our top priority. We listen to your needs and work tirelessly to meet them, offering personalized solutions and support.</p>
      </li>

      <li>
       <a href="#" class="d-flex justify-content-between align-items-center" onclick="toggleContent('content4'); return false;">
        <span>Market Knowledge</span>
        <i class="flaticon-right-arrow"></i>
       </a>
       <p id="content4" class="hidden-content">With extensive knowledge of the local real estate market, we provide valuable insights and guidance to help you make informed decisions.</p>
      </li>

      <li>
       <a href="#" class="d-flex justify-content-between align-items-center" onclick="toggleContent('content5'); return false;">
        <span>After-Sales Support</span>
        <i class="flaticon-right-arrow"></i>
       </a>
       <p id="content5" class="hidden-content">
        Our relationship doesn’t end with the transaction. We offer ongoing support and advice to help you settle into your new property or manage your investment effectively.</p>
      </li>

      <li>
       <a href="#" class="d-flex justify-content-between align-items-center" onclick="toggleContent('content6'); return false;">
        <span>Local Expertise</span>
        <i class="flaticon-right-arrow"></i>
       </a>
       <p id="content6" class="hidden-content">
        With deep roots in the communities we serve, our team has a thorough understanding of local market trends, neighborhoods, and property values.</p>
      </li>

      <li>
       <a href="#" class="d-flex justify-content-between align-items-center" onclick="toggleContent('content7'); return false;">
        <span>Tailored Solutions</span>
        <i class="flaticon-right-arrow"></i>
       </a>
       <p id="content7" class="hidden-content">
        We understand that every client has unique needs. That’s why we offer customized real estate solutions tailored to your specific goals, whether you're buying, selling, or investing.</p>
      </li>

     </ul>
    </div>

    <div class="col-lg-6">
     <div class="private-loan-content">
      <h2>Why Choose Us</h2>
      <p>At <?php print $siteName; ?>, we believe that a home is more than just a place to live—it's a cornerstone of your life, a space where memories are made, and a foundation for your future. Our mission is to help you find your perfect home or investment property with ease and confidence.</p>
      <a href="about" class="read-more text-primary">
       View Details
       <i class="flaticon-right-arrow"></i>
      </a>
      <div class="private-loan-img">
       <img src="assets/images/private-loan.jpg" alt="private-loan">
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>


 <div class="partner-area bg-style overflow-hidden">
  <div class="container-fluid p-0">
   <div class="swiper partner-slide over">
    <div class="swiper-wrapper text-center">
     <div class="swiper-slide">
      <a href="">
       <img src="assets/images/partner-1.png" alt="partner">
      </a>
     </div>
     <div class="swiper-slide">
      <a href="">
       <img src="assets/images/partner-2.png" alt="partner">
      </a>
     </div>
     <div class="swiper-slide">
      <a href="">
       <img src="assets/images/partner-3.png" alt="partner">
      </a>
     </div>
     <div class="swiper-slide">
      <a href="">
       <img src="assets/images/partner-4.png" alt="partner">
      </a>
     </div>
     <div class="swiper-slide">
      <a href="">
       <img src="assets/images/partner-5.png" alt="partner">
      </a>
     </div>
     <div class="swiper-slide">
      <a href="">
       <img src="assets/images/partner-6.png" alt="partner">
      </a>
     </div>
     <div class="swiper-slide">
      <a href="">
       <img src="assets/images/partner-7.png" alt="partner">
      </a>
     </div>
     <div class="swiper-slide">
      <a href="">
       <img src="assets/images/partner-8.png" alt="partner">
      </a>
     </div>
     <div class="swiper-slide">
      <a href="">
       <img src="assets/images/partner-1.png" alt="partner">
      </a>
     </div>
     <div class="swiper-slide">
      <a href="">
       <img src="assets/images/partner-2.png" alt="partner">
      </a>
     </div>
     <div class="swiper-slide">
      <a href="">
       <img src="assets/images/partner-3.png" alt="partner">
      </a>
     </div>
     <div class="swiper-slide">
      <a href="">
       <img src="assets/images/partner-4.png" alt="partner">
      </a>
     </div>
     <div class="swiper-slide">
      <a href="">
       <img src="assets/images/partner-5.png" alt="partner">
      </a>
     </div>
    </div>
   </div>
  </div>
 </div>


 <div class="about-us-area ptb-130">
  <div class="container mw-1380">
   <div class="row align-items-center">
    <div class="col-lg-6">
     <div class="about-us-content style-two">
      <h2>Buying a property can be overwhelming. There are so many financing options</h2>
      <p>Buying a property can be overwhelming, especially with the myriad of financing options available. At <?php print $siteName; ?>, we simplify the process by guiding you through every step. Our team of experts will help you navigate the complexities of mortgage choices, loan terms, and interest rates, ensuring that you find the financing solution that best fits your needs and budget. We’re here to make your property purchase as seamless and stress-free as possible.</p>
      <div class="row">
       <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="fan-facet-single-item">
         <h1><span class="counter">78</span><span>%</span></h1>
         <span>Business from Referrals</span>
        </div>
       </div>
       <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="fan-facet-single-item ms-xl-5">
         <h1><span class="counter">405</span><span>+</span></h1>
         <span>Property Sold out</span>
        </div>
       </div>

      </div>
      <a href="about" class="read-more text-primarydiv mt-lg-5 d-inline-block">
       More insights
       <i class="flaticon-right-arrow"></i>
      </a>
     </div>
    </div>
    <div class="col-lg-6">
     <div class="about-us-wrap text-center text-lg-end">
      <div class="about-img-3">
       <img src="img/show-off-2.png" class="img" alt="about">
       <img src="assets/images/shape-6.png" class="ms-4 shapes" alt="shape">
      </div>
      <div class="about-img-3 mt-4 pt-1">
       <img src="assets/images/shape-7.png" class="me-4 shapes" alt="shape">
       <img src="img/show-off-1.png" class="img" alt="about">
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>


 <div class="team-member-area pb-100 ">
  <div class="container mw-1380">
   <div class="row">
    <div class="col-xl-6">
     <div class="row justify-content-center">

      <div class="col-xl-12 col-sm-6">
       <div class="team-member-single-item border transition-y">
        <a href="team" class="d-block mb-4">
         <img src="img/akusinachihomes-ceo.jpg" class="mw-100" alt="team">
        </a>
        <div>
         <span class="title">CEO</span>
         <h3>
          <a href="team">Enem Emmanuel Chidera</a>
         </h3>

        </div>
       </div>
      </div>

     </div>
    </div>
    <div class="col-xl-6">
     <div class="team-member-content">
      <h2>Welcome from Our CEO</h2>
      <p>Welcome to <?php print $siteName; ?>, where your real estate journey is our priority. As the CEO, I am proud to lead a team of dedicated professionals who are passionate about helping you achieve your property goals. Whether you're buying, selling, investing, or simply seeking advice, our experienced team is here to support you every step of the way.</p>
      <a href="team" class="read-more text-primarydiv">
       View All Professional Member
       <i class="flaticon-right-arrow"></i>
      </a>
      <div class="team-img">
       <img src="assets/images/team-img.png" width="300" alt="team-img">
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>

 <div class="container-fluid p-0">
  <img src="img/akusinachihomes-estates-main.jpg" alt="testimonial-bg">
 </div>

 <div class="testimonials-area">
  <div class="container mw-1380">
   <div class="swiper testimonials-slide position-relative">
    <div class="swiper-wrapper">
     <div class="swiper-slide">
      <div class="testimonials-single-item position-relative z-1">
       <ul class="ps-0 list-unstyled d-flex justify-content-center gap-1">
        <li>
         <i class="ri-star-fill"></i>
        </li>
        <li>
         <i class="ri-star-fill"></i>
        </li>
        <li>
         <i class="ri-star-fill"></i>
        </li>
        <li>
         <i class="ri-star-fill"></i>
        </li>
        <li>
         <i class="ri-star-fill"></i>
        </li>
       </ul>
       <p>
        "<?php print $siteName; ?> made buying our first home an unforgettable experience. Their team was incredibly supportive and patient, guiding us through every step of the process. We couldn't be happier with our new home!"</p>
       <div class="d-flex justify-content-center">
        <div class="d-flex align-items-center justify-content-center">
         <div class="flex-shrink-0">
          <img src="img/Avatar-M.png" class="rounded-circle img" alt="testimonial">
         </div>
         <div class="flex-grow-1 ms-3 text-start">
          <h3>William Uchenna</h3>
          <span>05 days ago</span>
         </div>
        </div>
       </div>
       <img src="assets/images/shape-1.png" class="shape shape-1" alt="shape">
      </div>
     </div>
     <div class="swiper-slide">
      <div class="testimonials-single-item position-relative z-1">
       <ul class="ps-0 list-unstyled d-flex justify-content-center gap-1">
        <li>
         <i class="ri-star-fill"></i>
        </li>
        <li>
         <i class="ri-star-fill"></i>
        </li>
        <li>
         <i class="ri-star-fill"></i>
        </li>
        <li>
         <i class="ri-star-fill"></i>
        </li>
        <li>
         <i class="ri-star-fill"></i>
        </li>
       </ul>
       <p>"As a property investor, I needed a real estate company I could trust. <?php print $siteName; ?> exceeded my expectations with their market knowledge and tailored investment advice. Thanks to them, I've made some of my best investment decisions."</p>
       <div class="d-flex justify-content-center">
        <div class="d-flex align-items-center justify-content-center">
         <div class="flex-shrink-0">
          <img src="img/Avatar-M.png" class="rounded-circle img" alt="testimonial">
         </div>
         <div class="flex-grow-1 ms-3 text-start">
          <h3>Emeka Okolo</h3>
          <span>03 days ago</span>
         </div>
        </div>
       </div>
       <img src="assets/images/shape-1.png" class="shape shape-1" alt="shape">
      </div>
     </div>
     <div class="swiper-slide">
      <div class="testimonials-single-item position-relative z-1">
       <ul class="ps-0 list-unstyled d-flex justify-content-center gap-1">
        <li>
         <i class="ri-star-fill"></i>
        </li>
        <li>
         <i class="ri-star-fill"></i>
        </li>
        <li>
         <i class="ri-star-fill"></i>
        </li>
        <li>
         <i class="ri-star-fill"></i>
        </li>
        <li>
         <i class="ri-star-fill"></i>
        </li>
       </ul>
       <p>"Selling our property was a breeze with <?php print $siteName; ?>. Their professionalism and expertise were evident from the start, and they secured a great deal for us. We highly recommend their services to anyone looking to sell their property."</p>
       <div class="d-flex justify-content-center">
        <div class="d-flex align-items-center justify-content-center">
         <div class="flex-shrink-0">
          <img src="img/Avatar-M.png" class="rounded-circle img" alt="testimonial">
         </div>
         <div class="flex-grow-1 ms-3 text-start">
          <h3>Alex Udeh</h3>
          <span>01 days ago</span>
         </div>
        </div>
       </div>
       <img src="assets/images/shape-1.png" class="shape shape-1" alt="shape">
      </div>
     </div>
    </div>
    <div class="testimonials-controller">
     <div class="controller-icon prev3">
      <i class="flaticon-left-arrow"></i>
     </div>
     <div class="controller-icon next3">
      <i class="flaticon-right-arrow"></i>
     </div>
    </div>
   </div>
  </div>
 </div>

 <?php require_once('contact-form.php'); ?>

 <?php require_once('footer.php'); ?>
 <script>
  function toggleContent(id) {
   var content = document.getElementById(id);
   if (content.style.display === "none" || content.style.display === "") {
    content.style.display = "block";
   } else {
    content.style.display = "none";
   }
  }
 </script>