<!DOCTYPE html>
<html lang="ja">
<head>
 <META http-equiv=Content-Type content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta name="description" content="">
    
  <meta name="keywords" content="">
  <meta name="msvalidate.01" content="" />

  <meta property="og:site_name" content="">
  <meta property="og:title" content="">
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:image:secure_url" content=""> 
  <meta property="og:image:width" content="1000"> 
  <meta property="og:image:height" content="666">
  <meta property="og:description" content="">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@">
  <meta name="twitter:creator" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image:src" content="">

  <title></title>

  <!-- css -->
  <link href="/assets/css/jquery-ui.min.css" rel="stylesheet">
  <link href="/assets/css/top.css" rel="stylesheet">
  
  <link rel="shortcut icon" href="/assets/ico/favicon.ico">

  <link rel="apple-touch-icon" href="/assets/ico/touch-icon-iphone.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/ico/touch-icon-ipad.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/assets/ico/touch-icon-iphone-retina.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/assets/ico/touch-icon-ipad-retina.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/ico/touch-icon-iphone-plus-retina.png">
  <link rel="canonical" href="">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="/assets/js/ie10-viewport-bug-workaround.js"></script>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="/assets/js/html5shiv.min.js"></script>
  <script src="/assets/js/respond.min.js"></script>
  <![endif]-->

</head>

<body id="{$id}" class="{$class}">

{if $class eq "top" || $class eq "login" || $class eq "reminder"}
{else}
{include file='nav/submenu.tpl'}
{include file='nav/left.tpl'}
{include file='nav/right.tpl'}
{/if}

<div class="page clearfix">
