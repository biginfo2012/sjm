<?php
/* Smarty version 3.1.28, created on 2019-05-20 15:28:41
  from "/var/www/html/application/views/top/month.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5ce2c7a907a6a7_23371958',
  'file_dependency' => 
  array (
    'f041bac6e1b490151a057e7edb9f363377ab058c' => 
    array (
      0 => '/var/www/html/application/views/top/month.tpl',
      1 => 1551185285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce2c7a907a6a7_23371958 ($_smarty_tpl) {
?>

  <section class="fixed">
    <div class="main">
      <h2>
        <a href="/day<?php if ($_smarty_tpl->tpl_vars['search_term']->value != '') {?>?<?php echo $_smarty_tpl->tpl_vars['search_term']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['district']->value['name'];?>
<small><?php if ($_smarty_tpl->tpl_vars['district']->value['division_name'] != '') {
echo $_smarty_tpl->tpl_vars['district']->value['division_name'];?>
事業部・<?php }
echo $_smarty_tpl->tpl_vars['district']->value['region_name'];?>
</small></a>
      </h2>
      <ul class="sort upper">
        <li>
          <a class="" href="/month<?php if ($_smarty_tpl->tpl_vars['search_term']->value != '') {?>?<?php echo $_smarty_tpl->tpl_vars['search_term']->value;
}?>">今日</a>
        </li>
        <li>
          <a class="" href="/month?date=<?php echo $_smarty_tpl->tpl_vars['date_prev']->value;
if ($_smarty_tpl->tpl_vars['search_term']->value != '') {?>&<?php echo $_smarty_tpl->tpl_vars['search_term']->value;
}?>"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
        </li>
        <li>
          <a class="" href="/month?date=<?php echo $_smarty_tpl->tpl_vars['date_next']->value;
if ($_smarty_tpl->tpl_vars['search_term']->value != '') {?>&<?php echo $_smarty_tpl->tpl_vars['search_term']->value;
}?>"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
        </li>
      </ul>
      <ul class="sort">
        <li>
          <a class="" href="/day<?php if ($_smarty_tpl->tpl_vars['search_term']->value != '') {?>?<?php echo $_smarty_tpl->tpl_vars['search_term']->value;
}?>">日</a>
        </li>
        <li>
          <a class="" href="/week<?php if ($_smarty_tpl->tpl_vars['search_term']->value != '') {?>?<?php echo $_smarty_tpl->tpl_vars['search_term']->value;
}?>">週</a>
        </li>
        <li>
          <a class="active" href="/month<?php if ($_smarty_tpl->tpl_vars['search_term']->value != '') {?>?<?php echo $_smarty_tpl->tpl_vars['search_term']->value;
}?>">月</a>
        </li>
      </ul>
    </div>
  </section>

  <section>
    <div class="cday clearfix">
      <div class="vbox cal clearfix">
        <div class="fixed--person clearfix pfy">
          <ul>
            <li class="week--days">月</li>
            <li class="week--days">火</li>
            <li class="week--days">水</li>
            <li class="week--days">木</li>
            <li class="week--days">金</li>
            <li class="week--days">土</li>
            <li class="week--days">日</li>
          </ul>
        </div>
        <?php
$_from = $_smarty_tpl->tpl_vars['schedules']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_week_0_saved_item = isset($_smarty_tpl->tpl_vars['week']) ? $_smarty_tpl->tpl_vars['week'] : false;
$_smarty_tpl->tpl_vars['week'] = new Smarty_Variable();
$__foreach_week_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_week_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['week']->value) {
$__foreach_week_0_saved_local_item = $_smarty_tpl->tpl_vars['week'];
?>
        <ul class="cal">
          <?php
$_from = $_smarty_tpl->tpl_vars['week']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_line_1_saved_item = isset($_smarty_tpl->tpl_vars['line']) ? $_smarty_tpl->tpl_vars['line'] : false;
$__foreach_line_1_saved_key = isset($_smarty_tpl->tpl_vars['date']) ? $_smarty_tpl->tpl_vars['date'] : false;
$_smarty_tpl->tpl_vars['line'] = new Smarty_Variable();
$__foreach_line_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_line_1_total) {
$_smarty_tpl->tpl_vars['date'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['date']->value => $_smarty_tpl->tpl_vars['line']->value) {
$__foreach_line_1_saved_local_item = $_smarty_tpl->tpl_vars['line'];
?>
          <li<?php if ($_smarty_tpl->tpl_vars['line']->value['style'] == 'unfocus') {?> style='color:#aaa;'<?php }?>>
            <?php echo $_smarty_tpl->tpl_vars['line']->value['label'];?>
日
            <a href="/day?date=<?php echo $_smarty_tpl->tpl_vars['date']->value;
if ($_smarty_tpl->tpl_vars['search_term']->value != '') {?>&<?php echo $_smarty_tpl->tpl_vars['search_term']->value;
}?>" class="cs">Sales：<?php echo $_smarty_tpl->tpl_vars['line']->value['sales'];?>
件</a>
            <a href="/day?date=<?php echo $_smarty_tpl->tpl_vars['date']->value;
if ($_smarty_tpl->tpl_vars['search_term']->value != '') {?>&<?php echo $_smarty_tpl->tpl_vars['search_term']->value;
}?>" class="cfce">FCE：<?php echo $_smarty_tpl->tpl_vars['line']->value['fce'];?>
件</a>
            <a href="/day?date=<?php echo $_smarty_tpl->tpl_vars['date']->value;
if ($_smarty_tpl->tpl_vars['search_term']->value != '') {?>&<?php echo $_smarty_tpl->tpl_vars['search_term']->value;
}?>" class="cnot">実績未報告<?php echo $_smarty_tpl->tpl_vars['line']->value['notyet'];?>
件</a>
          </li>
          <?php
$_smarty_tpl->tpl_vars['line'] = $__foreach_line_1_saved_local_item;
}
}
if ($__foreach_line_1_saved_item) {
$_smarty_tpl->tpl_vars['line'] = $__foreach_line_1_saved_item;
}
if ($__foreach_line_1_saved_key) {
$_smarty_tpl->tpl_vars['date'] = $__foreach_line_1_saved_key;
}
?>
        </ul>
        <?php
$_smarty_tpl->tpl_vars['week'] = $__foreach_week_0_saved_local_item;
}
}
if ($__foreach_week_0_saved_item) {
$_smarty_tpl->tpl_vars['week'] = $__foreach_week_0_saved_item;
}
?>
      </div>
    </div>
  </section><?php }
}
