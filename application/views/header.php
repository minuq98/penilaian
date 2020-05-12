<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="<?= base_url();?>assets/img/favicon.png" rel="icon">
  <link href="<?= base_url();?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="<?= base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="<?= base_url();?>assets/css/style.css" rel="stylesheet">
  <link href="<?= base_url();?>assets/css/style-responsive.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>

  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>DASH<span>IO</span></b></a>
      <!--logo end-->
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="<?= base_url('logout') ?>">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->

    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="<?= base_url();?>assets/img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Sam Soffes</h5>
          <li class=" mt">
            <a href="<?= base_url('awal') ?>">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu ">
            <a  href="<?= base_url('user') ?>"><!-- class="active" -->
              <i class="fa fa-users"></i>
              <span>User</span>
              </a>
          </li>
          <li class="sub-menu ">
            <a  href="javascript:;"><!-- class="active" -->
              <i class="fa fa-list-ul"></i>
              <span>Kuesioner</span>
              </a>
            <ul class="sub">
              <li ><a href="<?= base_url('que/atasan')  ?>">Kuesioner Atasan</a></li> 
              <li ><a href="<?= base_url('que/mahasiswa')  ?>">Kuesioner Mahasiswa</a></li> 
              <li ><a href="<?= base_url('que/rekan')  ?>">Kuesioner Rekan Sejawat</a></li> 
            </ul>
          </li>
          <li class="sub-menu ">
            <a  href="javascript:;"><!-- class="active" -->
              <i class="fa fa-list-ul"></i>
              <span>Pembobotan</span>
              </a>
            <ul class="sub">
              <li ><a href="<?= base_url('kriteria/atasan')  ?>">Pembobotan Atasan</a></li>
              <li ><a href="<?= base_url('kriteria/mahasiswa')  ?>">Pembobotan Kriteria Mahasiswa</a></li>
              <li ><a href="<?= base_url('kriteria/rekan')  ?>">Pembobotan Kriteria Rekan Sejawat</a></li>
            </ul>
          </li>
          <li class="sub-menu ">
            <a  href="<?= base_url('skor') ?>">
              <i class="fa fa-edit"></i>
              <span>Skor</span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>

