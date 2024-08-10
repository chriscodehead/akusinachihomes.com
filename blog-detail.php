<?php
$active3 = 'active';
require_once('include.php');
$title = 'Blog | ' . $siteName . ' - Real Estate Company in Enugu Nigeria';
$description = 'Discover your perfect home or investment property with ' . $siteName . '. We offer comprehensive real estate services including residential sales and leasing, commercial properties, property management, and investment consulting.';
$keyword = $siteName . ', real estate, residential sales, property leasing, commercial properties, property management, real estate investment, buy home, lease property, investment consulting, Nigeria, Enugu, Anambra, Imo, Ebonyi, Abia, real estate services, find a home, trusted real estate company.';
require_once('head.php');

if (isset($_GET['id']) && !empty($_GET['id'])) {
 $user_id = $_GET['id'];
} else {
 header("location:blog");
}

$sql = query_sql("SELECT * FROM $news WHERE id= '" . $user_id . "' LIMIT 1");
$row = mysqli_fetch_assoc($sql);
?>

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
        <span>Blog Details</span>
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


 <div class="blog-details-contenet-area ptb-130">
  <div class="container">
   <div class="details-contenet mw-1100">
    <div class="blog-img">
     <center><img src="<?php print 'photo/' . $row['post_image']; ?>" alt="<?php print $row['title']; ?>"></center>
    </div>
    <ul class="ps-0 list-unstyled d-flex flex-wrap blog-info">
     <li>
      <a href="#">
       <i class="ri-user-3-line"></i>
       <span><?php print $row['admin_name']; ?></span>
      </a>
     </li>
     <li>
      <i class="ri-calendar-2-line"></i>
      <span><?php print $row['date_post']; ?></span>
     </li>
    </ul>
    <h2><?php print $row['title']; ?></h2>
    <p><?php print $row['news']; ?></p>
   </div>
  </div>
 </div>
 </div>


 <?php require_once('footer.php'); ?>