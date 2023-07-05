<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->layout = false;
$cakeDescription = 'দপ্তর: দপ্তর ব্যবস্থাপনা ও সেবা কাঠামো';
?>
<!DOCTYPE html>
<!--
Author: Mahmud S. Raju
Product Name: Doptor Open Data DPG
-->
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Doptor Open Data</title>
    <link rel="icon" type="image/x-icon" href="<?= $this->request->webroot ?>img/favicon.png">


    <!-- Bootstrap core CSS -->
    <link href="<?= $this->request->webroot ?>assets/themevendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?= $this->request->webroot ?>assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?= $this->request->webroot ?>assets/css/customtheme.css">
    <link rel="stylesheet" href="<?= $this->request->webroot ?>assets/css/animated.css">
    <link rel="stylesheet" href="<?= $this->request->webroot ?>assets/css/owl.css">

</head>

<body>


    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Pre-header Starts -->
    <!-- <div class="pre-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-sm-8 col-7">
        <ul class="info">
          <li><a href="#"><i class="fa fa-envelope"></i>contact@tappware.com</a></li>
          <li><a href="#"><i class="fa fa-phone"></i>010-020-0340</a></li>
        </ul>
      </div>
      <div class="col-lg-4 col-sm-4 col-5">
        <ul class="social-media">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-behance"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div> -->
    <!-- Pre-header End -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="<?= $this->request->webroot ?>" class="logo">
                            <img src="<?= $this->request->webroot ?>img/doptor.png" alt="" style="width: 65% !important;">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="<?= $this->request->webroot ?>">Home</a></li>
                            <li><a href="<?= $this->Url->build(['controller' => 'Home', 'action' => 'faq']) ?>">FAQ</a></li>
                            <li><a href="<?= $this->Url->build(['controller' => 'Home', 'action' => 'termsofservice']) ?>">Terms of Service</a></li>
                            <li>
                                <div class="border-first-button">
                                    <a href="<?= $this->Url->build(['controller' => 'Documentation', 'action' => 'index']) ?>">
                                        OpenAPI UI
                                        <i class="fa fa-external-link"></i></a>
                                </div>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <?= $this->fetch('content') ?>
    </div>

    <footer class="shadow-sm" style="border-top: solid 1px #CCC;">
        <div class="container pt-3 pb-1">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-4 justify-content-center-column">
                            Planning and
                            Implementation
                        </div>
                        <div class="col-8 justify-content-center-column">
                            <a href="https://a2i.gov.bd/" target="_blank" title="a2i">
                                <img src="<?= $this->request->webroot ?>img/a2i-logo-set.png" alt="" style="max-height: 60px;">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 justify-content-center-column text-center">
                    Copyright &copy; All Rights Reserved <br>
                    Government of the People's Republic of Bangladesh
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-4 justify-content-center-column">
                            Technical Assistance
                        </div>
                        <div class="col-8 justify-content-center-column">
                            <a href="https://tappware.com" target="_blank" title="Tappware">
                                <img src="<?= $this->request->webroot ?>img/tappware.png" alt="" style="max-height: 60px;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container border-top-1 mb-0 mt-0">
            <div class="row">
                <div class="col-lg-12">
                    <p class="mt-0 mb-0">
                        <span> <a href="<?= $this->Url->build(['controller' => 'Home', 'action' => 'termsofservice']) ?>">Terms of Service</a></span> |
                        <span> <a href="<?= $this->Url->build(['controller' => 'Home', 'action' => 'privacypolicy']) ?>">Privacy Policy</a></span> |
                        <span> <a href="<?= $this->Url->build(['controller' => 'Home', 'action' => 'license']) ?>">License</a></span>
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <script src="<?= $this->request->webroot ?>assets/themevendor/jquery/jquery.min.js"></script>
    <script src="<?= $this->request->webroot ?>assets/themevendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $this->request->webroot ?>assets/js/owl-carousel.js"></script>
    <script src="<?= $this->request->webroot ?>assets/js/animation.js"></script>
    <script src="<?= $this->request->webroot ?>assets/js/imagesloaded.js"></script>
    <script src="<?= $this->request->webroot ?>assets/js/custom.js"></script>

</body>

</html>