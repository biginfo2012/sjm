<?php
/* Smarty version 3.1.28, created on 2019-02-28 15:51:46
  from "/var/www/html/application/views/nav/left.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5c780392a0d639_28986148',
  'file_dependency' => 
  array (
    'c6179f0b4be14ab29f20354c1a421cf20b6da6a5' => 
    array (
      0 => '/var/www/html/application/views/nav/left.tpl',
      1 => 1551185192,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c780392a0d639_28986148 ($_smarty_tpl) {
?>
<header class="visible-lg">
  <nav>
    <ul>
      <li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['backto_button_url']->value;?>
" class="inline--block"><img alt="SJM" src="/assets/img/logo.png"></a>
      </li>
      <li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['schedule_button_url']->value;?>
" class="active">予定</a>
      </li>
      <li>
        <a href="/result" class="active2 result_link">集計結果</a>
      </li>
      <li class="hr"></li>
      <li>
        <a href="/logout">ログアウト</a>
      </li>
    </ul>
  </nav>
</header><?php }
}
