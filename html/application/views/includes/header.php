<!DOCTYPE html>
<html>
  <head>
    <!-- <meta charset="UTF-8"> -->
    <META http-equiv=Content-Type content="text/html; charset=utf-8">
    <!-- <title><?php echo $pageTitle; ?></title> -->
    <title>株式会社ＤＥＰＥＮＤＡ</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    
    <link href="<?php echo base_url(); ?>assets/dist/css/skins/components-rounded.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/dist/css/datatables/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/dist/css/datatables/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/dist/css/datatables/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/dist/css/skins/_jyh-admin.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url(); ?>assets/dist/css/skins/main-original-skins.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/dist/css/skins/main-skins.css" rel="stylesheet" type="text/css" />
    
    <style>
    	.error{
    		color:red;
    		font-weight: normal;
    	}
    </style>
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>assets/js/jQuery-2.1.4.min.js"></script>
    <script type="text/javascript">
        var baseURL = "<?php echo base_url(); ?>";
    </script>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <?php 
  if ($admin) {
  ?>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
      
      <header class="main-header" style="height: 50px;">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <!-- <span class="logo-mini"></span> -->
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>株式会社</b>DEPENDA</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" style="padding: 13px 15px;"></a>
          <a class='logout_btn' href="<?=base_url()?>logout">ログアウト</a>
          <a class="home_btn" href="<?=base_url()?>" >HOME</a>
 
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">メインナビゲーション</li>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>admin/news">
                <i class="fa fa-dashboard"></i> <span>News</span></i>
              </a>
            </li>
            <!-- <li class="treeview">
              <a href="#" >
                <i class="fa fa-plane"></i>
                <span>New Task</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#" >
                <i class="fa fa-ticket"></i>
                <span>My Tasks</span>
              </a>
            </li> -->
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
  <?php 
  }
  else {
  ?>
  <body>
    <div class="wrapper">
      <header class="main-header">
        <div class="logo_part">
          <a href="<?=base_url()?>" class="logo_txt white_font_color">株式会社ＤＥＰＥＮＤＡ</a>
        </div>
        <div class="head_menu_part">
          <a class="mobile_head" style="height: 80px;"><img src="<?=base_url()?>assets/images/menu.png" width="80" style="float: left;" alt="menu" /></a>
          <ul>
            <li><a class="white_font_color" href="<?=base_url()?>top">ＨＯＭＥ</a></li>
            <li><a class="white_font_color" href="<?=base_url()?>overview">事業概要</a></li>
            <li><a class="white_font_color" href="<?=base_url()?>about_us">会社概要</a></li>
            <li><a class="white_font_color" href="<?=base_url()?>inquery">お問合わせ</a></li>
          </ul>
        </div>
      </header>
      <div class="head_menu_extend">
        <ul>
          <li><a class="white_font_color" style="padding-left: 8px;" href="<?=base_url()?>top">ＨＯＭＥ</a></li>
          <li><a class="white_font_color" style="padding-left: 8px;" href="<?=base_url()?>overview">事業概要</a></li>
          <li><a class="white_font_color" style="padding-left: 8px;" href="<?=base_url()?>about_us">会社概要</a></li>
          <li><a class="white_font_color" href="<?=base_url()?>inquery">お問合わせ</a></li>
        </ul>
      </div>
  <?php 
  }
  ?>