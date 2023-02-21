<?php
/* Smarty version 3.1.28, created on 2020-09-07 10:53:31
  from "D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\views\top\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5f55f50b79a2f4_45806508',
  'file_dependency' => 
  array (
    '02fd557b3037d3de475ffc3273eced10f06c2d61' => 
    array (
      0 => 'D:\\_WORKSPACE\\Web\\Xampp\\htdocs\\sjm\\html\\application\\views\\top\\login.tpl',
      1 => 1599452016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f55f50b79a2f4_45806508 ($_smarty_tpl) {
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
