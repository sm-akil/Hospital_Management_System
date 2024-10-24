<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="<?php echo e(url('/admin')); ?>">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('profile')); ?>">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('/map')); ?>">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Google</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('/doctor_show')); ?>">
              <i class="fas fa-user-md"></i>
                <span class="nav-link-text">Doctor</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('patient_show')); ?>">
              <i class="fab fa-accessible-icon"></i>
                <span class="nav-link-text">Patient</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('register')); ?>">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Add new user</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('ward_show')); ?>">
              <i class="fas fa-hotel"></i>
                <span class="nav-link-text">Ward & Beds</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('department')); ?>">
              <i class="fas fa-address-book"></i>
                <span class="nav-link-text">Department</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="ni ni-email-83 text-dark"></i>
                <span class="nav-link-text">Email</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">SERVICES</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('apointment')); ?>" >
                <i class="ni ni-spaceship"></i>
                <span class="nav-link-text">Make Apointment</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('doctor_show')); ?>" >
                <i class="ni ni-palette"></i>
                <span class="nav-link-text">Doctors</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('department')); ?>" >
                <i class="ni ni-ui-04"></i>
                <span class="nav-link-text">Departments</span>
              </a>
            </li>
            <li class="nav-item">
            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <span class="nav-link-text"><i class="ni ni-user-run"></i></span><?php echo e(__('Logout')); ?>

                                </a>
                  
                  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
<div class="row py-5 px-4">
    <div class="col-md-5 mx-auto">
        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4 cover">
                <div class="media align-items-end profile-head">
                    <div class="profile mr-3"><img src="https://lh3.googleusercontent.com/-4PthBsnGcYY/XoF0sfCkh2I/AAAAAAAAAB4/9ENBQoRF_VAney66ch8Daa433oFXE9DGQCEwYBhgLKtQDABHVOhzgoVA2kpU7u9150aCoi31X9GDFJTD1GmWZfhyFysTbLt5P-Z0c4vZrivItUfVKQaoOR0Ei5daUyQZ04HMYaJGe2XdD1KrCUKlBNqRvd2FlBm0BVYI2c_GDvxMBtujMFMBtNOQmaJxbKJTrrutvscXAU2BK0pE7AhqfObBuxc9T9cIG8LptWfqpBAxFU1G0c7ghWUT1EtSESFTFhHFsx2m6mpibNzW-meoqUqeq1spavwK_9mzNsRXhjMmszbT1k3ZKfF4mOAlzJi2TSM_SuAE-wJVoEqv9ZzF-uDCdd24B_wazEMl2Okm0xOtKgiNk2GIEDaNTFKvioc8vTkRmz9mYXnmCBMT3Tiy8L24bFQscnej8ResTRyMd7XZ5FsKyKa2xKqOMWF7ur7EtGx4qvUkPYTMYwYAvabcsb45iLLLOuDuBZQ6IadxrS4uiFl5gWm4pavkXLLg8cM3nZYW26iv1g3ZWAnvB3tdAd5skb6RhYywls16wqq0lrTvKVyvJIVN-HtjHmG019XlzdBaYwVwHr1mGvt7jrSjZMX6Gqa9lrnD6CgXNk9UUR9xi7t9vE9giNOi6MjMwtLfQLL3DICRT1gWTft4FeK9nQfDfjy5iMNvgnoYG/w140-h139-p/IMG_0215.png"><a href="#" class="btn btn-outline-dark btn-sm btn-block">Edit profile</a></div>
                    <div class="media-body mb-5 text-white">
                        <h4 class="mt-0 mb-0">Mubashar hussain</h4>
                        <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>Pakistan, Lahore</p>
                    </div>
                </div>
            </div>
            <div class="bg-light p-4 d-flex justify-content-end text-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">215</h5><small class="text-muted"> <i class="fas fa-image mr-1"></i>Photos</small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">745</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Followers</small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">340</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Following</small>
                    </li>
                </ul>
            </div>
            <div class="px-4 py-3">
                <h5 class="mb-0">About</h5>
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font-italic mb-0">Web Developer</p>
                    <p class="font-italic mb-0">Lives in Pakistan</p>
                    <p class="font-italic mb-0">Photographer</p>
                </div>
            </div>
            <div class="py-4 px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="mb-0">Recent photos</h5><a href="#" class="btn btn-link text-muted">Show all</a>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-2 pr-lg-1"><img src="https://images.unsplash.com/photo-1469594292607-7bd90f8d3ba4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 mb-2 pl-lg-1"><img src="https://images.unsplash.com/photo-1493571716545-b559a19edd14?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 pr-lg-1 mb-2"><img src="https://images.unsplash.com/photo-1453791052107-5c843da62d97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 pl-lg-1"><img src="https://images.unsplash.com/photo-1475724017904-b712052c192a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div>
                </div>
            </div>
        </div>
    </div>
</div>