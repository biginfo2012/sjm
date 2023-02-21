<?php
/* Smarty version 3.1.28, created on 2020-09-07 10:53:31
  from "D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\views\top\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5f55f50b6603b3_17159276',
  'file_dependency' => 
  array (
    '7477b880dcb1d3b3e3cf636c863788636f82d341' => 
    array (
      0 => 'D:\\_WORKSPACE\\Web\\Xampp\\htdocs\\sjm\\html\\application\\views\\top\\header.tpl',
      1 => 1599452016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav/submenu.tpl' => 1,
    'file:nav/left.tpl' => 1,
    'file:nav/right.tpl' => 1,
  ),
),false)) {
function content_5f55f50b6603b3_17159276 ($_smarty_tpl) {
?>
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
  <?php echo '<script'; ?>
 src="/assets/js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <?php echo '<script'; ?>
 src="/assets/js/html5shiv.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/assets/js/respond.min.js"><?php echo '</script'; ?>
>
  <![endif]-->

</head>

<body id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">

<?php if ($_smarty_tpl->tpl_vars['class']->value == "top" || $_smarty_tpl->tpl_vars['class']->value == "login" || $_smarty_tpl->tpl_vars['class']->value == "reminder") {
} else {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:nav/submenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:nav/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:nav/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }?>

<div class="page clearfix">
<?php }
}
