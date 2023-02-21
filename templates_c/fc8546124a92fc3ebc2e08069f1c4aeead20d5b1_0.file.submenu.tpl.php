<?php
/* Smarty version 3.1.28, created on 2019-02-28 15:51:46
  from "/var/www/html/application/views/nav/submenu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5c780392a069d7_54512106',
  'file_dependency' => 
  array (
    'fc8546124a92fc3ebc2e08069f1c4aeead20d5b1' => 
    array (
      0 => '/var/www/html/application/views/nav/submenu.tpl',
      1 => 1551185194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c780392a069d7_54512106 ($_smarty_tpl) {
?>
<div class="submenu clearfix">
  <div class="clearfix">
    <a class="m3 visible-sm">
      <span class="ti-menu"></span>
    </a>
    <?php if ($_smarty_tpl->tpl_vars['class']->value == "sc day" || $_smarty_tpl->tpl_vars['class']->value == "sc day-user") {?>
    <h1 class="m2"><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</h1>
    <?php } elseif ($_smarty_tpl->tpl_vars['class']->value == "sc week" || $_smarty_tpl->tpl_vars['class']->value == "sc week-user") {?>
    <h1 class="m2"><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</h1>
    <?php } elseif ($_smarty_tpl->tpl_vars['class']->value == "sc month" || $_smarty_tpl->tpl_vars['class']->value == "sc month-user") {?>
    <h1 class="m2"><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</h1>
    <?php } elseif ($_smarty_tpl->tpl_vars['class']->value == "result") {?>
    <h1 class="m2"><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</h1>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['class']->value == "result") {?>
    <ul>
      <li>
        <a class="m4">
          <span class="ti-search"></span>
        </a>
      </li>
    </ul>
    <?php } else { ?>
    <ul>
      <li>
        <a class="m2">
          <span class="ti-search"></span>
        </a>
      </li>
    </ul>
    <?php }?>
  </div>
</div><?php }
}
