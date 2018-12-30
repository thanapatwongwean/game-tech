<?php
defined('BASEPATH') OR exit('No direct script access allowed');?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gaming Tech</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?= base_url('vendor/bootstrap/css');?>/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?=base_url('vendor/font-awesome/css');?>/font-awesome.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100">
    <!-- owl carousel-->
    <link rel="stylesheet" href="<?=base_url('vendor/owl.carousel/assets');?>/owl.carousel.css">
    <link rel="stylesheet" href="<?=base_url('vendor/owl.carousel/assets');?>/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?=base_url('public/css');?>/style.css" id="theme-stylesheet">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
<!-- navbar-->
<header class="header mb-5">
    <!--
    *** TOPBAR ***
    _________________________________________________________
    -->
    <div id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offer mb-3 mb-lg-0"><href="#" class="ml-1"></div>
                <div class="col-lg-6 text-center text-lg-right">
                    <ul class="menu list-inline mb-0">
                        <?php if($this->session->logged_in): ?>
                            <li class="list-inline-item"><a href="<?= base_url('user'); ?>">Test user</a></li>
                            <li class="list-inline-item"><a href="<?= base_url('cart'); ?>"><i class="fa fa-shopping-cart"></i>Test Cart</a></li>
                            <li class="list-inline-item"><a href="<?= base_url('logout');?>">Logout</a></li>
                        <?php else: ?>
                            <?php if($this->session->flashdata("error")):
                                echo '<div style ="color:red;"><strong>'.$this->session->flashdata("error").'</strong></div><br>';
                            endif;
                            ?>
                            <li class="list-inline-item"><a href="#"" data-toggle="modal" data-target="#login-modal">Login</a></li>
                            <li class="list-inline-item"><a href="<?= base_url('register'); ?>">Register</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Login</h5>
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <input id="email" type="text" placeholder="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" placeholder="password" class="form-control">
                            </div>
                            <p class="text-center">
                                <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>
                        </form>
                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="<?= base_url('register'); ?>"><strong>Register now</strong></a>! to take a look with our GamingTech!</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- *** TOP BAR END ***-->
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container"><a href="<?= base_url(); ?>" class="navbar-brand home"><img src="<?=base_url('public/images');?>/logo.png" alt="GamingTech logo" class="d-none d-md-inline-block"><img src="public/images/logo-small.png" alt="GamingTech logo" class="d-inline-block d-md-none"><span class="sr-only">Go to homepage</span></a>
            <div class="navbar-buttons">
                <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
                <button type="button" data-toggle="collapse" data-target="#search" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></button>
            </div>
            <div id="navigation" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a href="<?= base_url(); ?>" class="nav-link">Home</a></li>
                    <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">PC<b class="caret"></b></a>
                        <ul class="dropdown-menu megamenu">
                            <li>
                                <div class="row">
                                    <div class="col-md-6 col-lg-3">
                                        <h5>CPU</h5>
                                        <ul class="list-unstyled mb-3">
                                            <li class="nav-item"><a href="<?= base_url('Home/');?>INTEL" class="nav-link">Intel</a></li>
                                            <li class="nav-item"><a href="<?= base_url('Home/');?>AMD" class="nav-link">AMD</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <h5>VGA</h5>
                                        <ul class="list-unstyled mb-3">
                                            <li class="nav-item"><a href="<?= base_url('Home/');?>NVIDIA" class="nav-link">NVIDIA</a></li>
                                            <li class="nav-item"><a href="<?= base_url('Home/');?>AMD_V" class="nav-link">AMD</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <h5>Accessories</h5>
                                        <ul class="list-unstyled mb-3">
                                            <li class="nav-item"><a href="<?= base_url('Home/');?>MB" class="nav-link">Motherboard</a></li>
                                            <li class="nav-item"><a href="<?= base_url('Home/');?>RAM" class="nav-link">RAM</a></li>
                                            <li class="nav-item"><a href="<?= base_url('Home/');?>COOL" class="nav-link">Cooling</a></li>
                                            <li class="nav-item"><a href="<?= base_url('Home/');?>HDD" class="nav-link">HDD</a></li>
                                            <li class="nav-item"><a href="<?= base_url('Home/');?>SSD" class="nav-link">SSD</a></li>
                                            <li class="nav-item"><a href="<?= base_url('Home/');?>PSU" class="nav-link">PSU</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">NOTEBOOK<b class="caret"></b></a>
                        <ul class="dropdown-menu megamenu">
                            <li>
                                <div class="row">
                                    <div class="col-md-6 col-lg-3">
                                        <h5>Brand</h5>
                                        <ul class="list-unstyled mb-3">
                                            <li class="nav-item"><a href="#" class="nav-link">Asus</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Acer</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Dell</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">HP</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <h5>Price Range</h5>
                                        <ul class="list-unstyled mb-3">
                                            <li class="nav-item"><a href="#" class="nav-link">0-15000฿</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">15000-20000฿</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">20000-25000฿</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">25000+</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">GAMING-GEAR<b class="caret"></b></a>
                        <ul class="dropdown-menu megamenu">
                            <li>
                                <div class="row">
                                    <div class="col-md-6 col-lg-3">
                                        <h5>Mouse</h5>
                                        <ul class="list-unstyled mb-3">
                                            <li class="nav-item"><a href="#" class="nav-link">Cougar</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Corsair</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Signo</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Steelseries</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Razer</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <h5>Keyboard</h5>
                                        <ul class="list-unstyled mb-3">
                                            <li class="nav-item"><a href="#" class="nav-link">Cougar</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Corsair</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Signo</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Steelseries</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Razer</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <h5>Headphone</h5>
                                        <ul class="list-unstyled mb-3">
                                            <li class="nav-item"><a href="#" class="nav-link">Seinheiser</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">E-blue</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">HyperX</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Nubwo</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Signo</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <h5>Accessories</h5>
                                        <ul class="list-unstyled mb-3">
                                            <li class="nav-item"><a href="#" class="nav-link">Mousepad</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Webcam</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Microphone</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Bungee</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Speaker</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown menu-large"><a href="<?= base_url('contact'); ?>" data-delay="200" class="button-toggle nav-link">CONTACT<b class="caret"></b></a>
                </ul>
                <div class="navbar-buttons d-flex justify-content-end">
                    <!-- /.nav-collapse-->
                    <div id="search-not-mobile" class="navbar-collapse collapse"></div><a data-toggle="collapse" href="#" class="btn navbar-btn btn-primary d-none d-lg-inline-block"><span class="sr-only">Search</span><i class="fa fa-search"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <div id="search" class="collapse">
        <div class="container">
            <form role="search" class="ml-auto">
                <div class="input-group">
                    <input type="text" placeholder="Search" class="form-control">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</header>
<div id="all">
    <div id="content">
        <div class="container">
