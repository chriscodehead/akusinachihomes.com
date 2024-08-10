 <div id="preloader">
  <div class="preloader">
   <div class="waviy">
    <span>A</span>
    <span>k</span>
    <span>u</span>
    <span>s</span>
    <span>i</span>
    <span>n</span>
    <span>a</span>
    <span>c</span>
    <span>h</span>
    <span>i</span>
    <span> </span>
    <span>H</span>
    <span>o</span>
    <span>m</span>
    <span>e</span>
    <span>s</span>
   </div>
  </div>
 </div>

 <div class="top-header-area bg-gray2 position-relative z-2 border ptb-20">
  <div class="container mw-1380">
   <div class="row align-items-center">
    <div class="col-lg-8">
     <ul class="ps-0 mb-0 list-unstyled info-link d-sm-flex text-center flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <li>
       <a href="tel:<?php print $sitePhone; ?>">
        <i class="ri-phone-fill"></i>
        <?php print $sitePhone; ?>
       </a>
      </li>
      <li>
       <i class="ri-calendar-line"></i>
       8:00 AM - 6:00 PM 24/7
      </li>
      <li>
       <i class="ri-map-pin-line"></i>
       <?php print $siteAddress; ?>
      </li>
     </ul>
    </div>
    <div class="col-lg-4">
     <ul class="ps-0 mb-0 list-unstyled import-link d-flex flex-wrap align-items-center justify-content-center justify-content-lg-end">
      <li>
       <a href="career">Career</a>
      </li>
      <li>
       <a href="faq">FAQs</a>
      </li>
      <li>
       <a href="contact">Contact</a>
      </li>
     </ul>
    </div>
   </div>
  </div>
 </div>

 <nav class="navbar navbar-expand-lg bg-white ptb-19" id="navbar">
  <div class="container mw-1380">
   <a class="navbar-brand" href="./">
    <img src="img/logo.png" width="100" class="main-logo" alt="white-logo">
    <img src="img/logo.png" width="100" class="white-logo d-none" alt="white-logo">
   </a>
   <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button" aria-controls="navbarOffcanvas">
    <span class="burger-menu">
     <span class="top-bar"></span>
     <span class="middle-bar"></span>
     <span class="bottom-bar"></span>
    </span>
   </a>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto">
     <li class="nav-item">
      <a class="nav-link <?php print @$active1; ?>" href="./" role="button" aria-expanded="false">
       Home
      </a>
     </li>
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle  <?php print @$active2; ?>" href="#" role="button" aria-expanded="false">
       The Company
      </a>
      <ul class="dropdown-menu">
       <li>
        <a class="dropdown-item" href="about">
         About
        </a>
       </li>
       <li>
        <a class="dropdown-item" href="team">
         Teams
        </a>
       </li>
       <li>
        <a class="dropdown-item" href="career">
         Career
        </a>
       </li>
      </ul>
     </li>
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle <?php print @$active3; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
       Updates
      </a>
      <ul class="dropdown-menu">
       <li>
        <a class="dropdown-item" href="blog">
         property updates
        </a>
       </li>
      </ul>
     </li>

     <li class="nav-item <?php print @$active4; ?>">
      <a class="nav-link" href="faq">
       FAQs
      </a>
     </li>
     <li class="nav-item <?php print @$active5; ?>">
      <a class="nav-link" href="contact">
       Contact
      </a>
     </li>
    </ul>
   </div>
   <ul class="others-options ps-0 mb-0 list-unstyled justify-content-end">
    <li>
     <a href="schedule-viewing" class="btn btn-primary">
      Schedule a Viewing
     </a>
    </li>
   </ul>
  </div>
 </nav>


 <div class="mobile-navbar offcanvas offcanvas-end border-0" data-bs-backdrop="static" tabindex="-1" id="navbarOffcanvas">
  <div class="offcanvas-header">
   <a href="./" class="logo d-inline-block">
    <img src="img/logo.png" style="width: 100px;" alt="logo">
   </a>
   <a href="./" class="logo d-none">
    <img src="img/logo.png" style="width: 100px;" alt="logo">
   </a>
   <button type="button" class="close-btn bg-transparent position-relative lh-1 p-0 border-0" data-bs-dismiss="offcanvas" aria-label="Close">
    <i class="ri-close-fill"></i>
   </button>
  </div>
  <div class="offcanvas-body">
   <ul class="mobile-menu">
    <li class="mobile-menu-list without-icon <?php print @$active1; ?>">
     <a href="./">
      Home
     </a>
    </li>
    <li class="mobile-menu-list <?php print @$active2; ?>">
     <a href="javascript:void(0);">
      About
     </a>
     <ul class="mobile-menu-items">
      <li>
       <a class="dropdown-item" href="about">
        About
       </a>
      </li>
      <li>
       <a class="dropdown-item" href="team">
        Team
       </a>
      </li>
      <li>
       <a class="dropdown-item" href="career">
        Career
       </a>
      </li>
     </ul>
    </li>
    <li class="mobile-menu-list <?php print @$active3; ?>">
     <a href="javascript:void(0);">
      Updates
     </a>
     <ul class="mobile-menu-items">
      <li>
       <a class="dropdown-item" href="blog">
        Property Updates
       </a>
      </li>
     </ul>
    </li>
    <li class="mobile-menu-list without-icon <?php print @$active4; ?>">
     <a href="faq" class="nav-link">
      FAQs
     </a>
    </li>
    <li class="mobile-menu-list without-icon <?php print @$active5; ?>">
     <a href="contact" class="nav-link">
      Contact
     </a>
    </li>
   </ul>
  </div>
 </div>