<?php
/* Smarty version 3.1.28, created on 2019-02-28 15:51:22
  from "/var/www/html/application/views/top/login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5c78037a078ba1_65745418',
  'file_dependency' => 
  array (
    'ede93d1318fdd0038faf91e4e572d12d0f4c3326' => 
    array (
      0 => '/var/www/html/application/views/top/login.tpl',
      1 => 1551185282,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c78037a078ba1_65745418 ($_smarty_tpl) {
?>

  <div class="full clearfix">
    <form id='login_form' class="login" method='post'>
      <h1>
        <img alt="SJM" src="/assets/img/logo.png">SJM 管理ログイン
      </h1>
      <input class placeholder="ログインID" id='login_form_id' name='login_id'>
      <input placeholder="パスワード" type="password" id='login_form_password' name='password'>
      <button type="button" id='login_validate'>ログイン</button>
      ※PCおよびiPhoneから入力できます。
    </form>
  </div><?php }
}
