<?php
$active2 = 'active';
require_once('include.php');
$title = 'Team ' . $siteName . ' - Real Estate Company in Enugu Nigeria';
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
        <span>Management</span>
       </li>
      </ul>
      <h2>Meet the <?php print $siteName; ?> Team: Your Real Estate Experts</h2>
      <p>
       At <?php print $siteName; ?>, we believe that the key to our success is our exceptional team of professionals. Each member of our team brings a wealth of knowledge, experience, and passion to the table, ensuring that you receive the highest level of service and expertise.</p>

      <h3>Our Commitment to You</h3>
      <p>
       Whether you’re buying, selling, or investing, our team is dedicated to making your real estate journey as smooth and successful as possible. We take pride in our customer-centric approach, which means we listen to your needs, provide personalized solutions, and go above and beyond to exceed your expectations.</p>
      <a href="schedule-viewing" class="read-more text-primary">
       Schedule a viewing
       <i class="flaticon-right-arrow"></i>
      </a>
     </div>
    </div>
    <div class="col-lg-6">
     <div class="page-banner-img text-center text-lg-end position-relative z-1">
      <img src="img/akusinachihomes-7.jpeg" class="img" alt="banner-img">
      <img src="assets/images/shape-7.png" class="shape shape-7" alt="shape">
      <img src="assets/images/shape-8.png" class="shape shape-8" alt="shape">
     </div>
    </div>
   </div>
  </div>
 </div>


 <div class="team-member-area pt-130 pb-105">
  <div class="container mw-1380">
   <div class="row justify-content-center">

    <?php $sql = query_sql("SELECT * FROM $team_tb ORDER BY id ASC");
    if (mysqli_num_rows($sql) > 0) {
     $c = 0;
     while ($row = mysqli_fetch_assoc($sql)) { ?>

      <div class="col-xl-6">
       <div class="team-member-single-item border transition-y">
        <div class="d-md-flex align-items-center">
         <a href="#" class="flex-shrink-0 mb-4 mb-md-0 d-block">
          <img src="photo/<?php print $row['picture']; ?>" alt="team">
         </a>
         <div class="flex-grow-1 ms-34">
          <span class="title"><?php print $row['position']; ?></span>
          <h3>
           <a href="#"><?php print $row['name']; ?></a>
          </h3>
          <ul class="ps-0 mb-0 list-unstyled">
           <li>
            <a href="<?php print $row['facebook']; ?>"><span> <i class=" ri-facebook-box-fill"></i> Facebook</span></a>
           </li>
           <li>
            <a href="<?php print $row['twitter']; ?>"><span><i class=" ri-instagram-fill"></i> Instagram</span></a>
           </li>
          </ul>
         </div>
        </div>
       </div>
      </div>

     <?php $c++;
     }
    } else { ?>
     <h4 style="padding: 20px;">No data found!</h4>
    <?php } ?>


   </div>
  </div>
 </div>

 <?php require_once('footer.php'); ?>