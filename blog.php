<?php
$active3 = 'active';
require_once('include.php');
$title = 'Blog | ' . $siteName . ' - Real Estate Company in Enugu Nigeria';
$description = 'Discover your perfect home or investment property with ' . $siteName . '. We offer comprehensive real estate services including residential sales and leasing, commercial properties, property management, and investment consulting.';
$keyword = $siteName . ', real estate, residential sales, property leasing, commercial properties, property management, real estate investment, buy home, lease property, investment consulting, Nigeria, Enugu, Anambra, Imo, Ebonyi, Abia, real estate services, find a home, trusted real estate company.';
require_once('head.php');

if (isset($_GET['page'])) {
 $page = $_GET['page'];
} else {
 $page = 1;
}

$no_of_records_per_page = 100;
$offset = ($page - 1) * $no_of_records_per_page;

$total_pages_sql = "SELECT COUNT(*) FROM $news";
$result = query_sql($total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);
?>

<body>
 <style>
  .card {
   width: 100%;
   height: 250px;
   border: 1px solid #ccc;
   border-radius: 10px;
   overflow: hidden;
  }

  .card img {
   width: 100%;
   height: 100%;
   object-fit: cover;
  }
 </style>
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
        <span>Blog & News</span>
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


 <div class="blog-area pt-130 pb-130">
  <div class="container mw-1380">
   <div class="row justify-content-center">


    <?php $sql = query_sql("SELECT * FROM $news ORDER BY id DESC LIMIT $offset, $no_of_records_per_page");
    if (mysqli_num_rows($sql) > 0) {
     $c = 0;
     while ($row = mysqli_fetch_assoc($sql)) { ?>

      <div class="col-xxl-4 col-lg-6 col-md-6">
       <div class="blog-single-item transition-y mb-4">
        <ul class="tags d-flex ps-0 list-unstyled flex-wrap gap-2">
         <li></li>
        </ul>
        <h3>
         <a href="blog-detail?id=<?php print $row['id']; ?>"><?php print $bassic->reduceTextLength($row['title'], 45); ?></a>
        </h3>
        <a href="blog-detail?id=<?php print $row['id']; ?>" class="blog-img d-block card">
         <img src="<?php print 'photo/' . $row['post_image']; ?>" alt="<?php print $row['title']; ?>">
        </a>
        <p><?php print $bassic->reduceTextLength($row['news'], 150); ?></p>
        <ul class="ps-0 mb-0 list-unstyled d-flex flex-wrap blog-info">
         <li>
          <a href="blog-detail?id=<?php print $row['id']; ?>">
           <i class="ri-user-3-line"></i>
           <span><?php print $row['admin_name']; ?></span>
          </a>
         </li>
         <li>
          <i class="ri-calendar-2-line"></i>
          <span><?php print $row['date_post']; ?></span>
         </li>
        </ul>
       </div>
      </div>

     <?php $c++;
     }
    } else { ?>
     <h4 style="padding: 20px;">No updates found!</h4>
    <?php } ?>


    <div class="col-lg-12">
     <div class="pagination-area text-center mt-4">
      <a href="<?php if ($page <= 1) {
                echo '#';
               } else {
                echo "?page=" . ($page - 1);
               } ?>" class="next page-numbers">
       <i class="ri-arrow-left-line"></i>
      </a>
      <a href="?page=1" class="page-numbers current" aria-current="page">Start</a>
      <span class="page-numbers">..</span>
      <a href="?page=<?php echo $total_pages; ?>" class="page-numbers">End</a>
      <a href="<?php if ($page >= $total_pages) {
                echo '#';
               } else {
                echo "?page=" . ($page + 1);
               } ?>" class="next page-numbers">
       <i class="ri-arrow-right-line"></i>
      </a>
     </div>
    </div>
   </div>
  </div>
 </div>

 <?php require_once('footer.php'); ?>