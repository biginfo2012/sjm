<?php
/* Smarty version 3.1.28, created on 2019-04-25 02:29:53
  from "/var/www/html/application/views/top/result.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5cc11ba1f12454_40812751',
  'file_dependency' => 
  array (
    'd3a44649a5a010391f656b2c4f30cd72446dee58' => 
    array (
      0 => '/var/www/html/application/views/top/result.tpl',
      1 => 1551185290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc11ba1f12454_40812751 ($_smarty_tpl) {
?>

  <section class="fixed">
    <div class="main">
      <h2><?php echo $_smarty_tpl->tpl_vars['worker_name']->value;?>
<small><?php echo $_smarty_tpl->tpl_vars['district']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['district']->value['region_name'];?>
</small></h2>
      <ul class="sort upper">
        <li>
          <a class="active" href="/result">全て</a>
        </li>
        <li>
          <a class="" href="/result?date=<?php echo $_smarty_tpl->tpl_vars['date_prev']->value;
if ($_smarty_tpl->tpl_vars['worker_id']->value != '') {?>&worker_id=<?php echo $_smarty_tpl->tpl_vars['worker_id']->value;
}?>"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
        </li>
        <li>
          <a class="" href="/result?date=<?php echo $_smarty_tpl->tpl_vars['date_next']->value;
if ($_smarty_tpl->tpl_vars['worker_id']->value != '') {?>&worker_id=<?php echo $_smarty_tpl->tpl_vars['worker_id']->value;
}?>"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
        </li>
      </ul>
      <ul class="sort">
        <li>
          <a class="" href="/result?mode=week<?php if ($_smarty_tpl->tpl_vars['get_date']->value != '') {?>&date=<?php echo $_smarty_tpl->tpl_vars['get_date']->value;
}
if ($_smarty_tpl->tpl_vars['worker_id']->value != '') {?>&worker_id=<?php echo $_smarty_tpl->tpl_vars['worker_id']->value;
}?>">今週</a>
        </li>
        <li>
          <a class="" href="/result?mode=month<?php if ($_smarty_tpl->tpl_vars['get_date']->value != '') {?>&date=<?php echo $_smarty_tpl->tpl_vars['get_date']->value;
}
if ($_smarty_tpl->tpl_vars['worker_id']->value != '') {?>&worker_id=<?php echo $_smarty_tpl->tpl_vars['worker_id']->value;
}?>">今月</a>
        </li>
      </ul>
    </div>
  </section>

  <section>
    <div class="cday clearfix">
      <div class="vbox clearfix">
        <ul class="result title pfy">
          <li class="width--120">日程</li>
          <li>施設名</li>
          <li class="width--120">担当者</li>
          <li class="width--120">訪問予定日</li>
          <li class="width--120">実績登録日</li>
          <li class="width--500">備考</li>
        </ul>
<?php
$_from = $_smarty_tpl->tpl_vars['schedules']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_line_0_saved_item = isset($_smarty_tpl->tpl_vars['line']) ? $_smarty_tpl->tpl_vars['line'] : false;
$_smarty_tpl->tpl_vars['line'] = new Smarty_Variable();
$__foreach_line_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_line_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['line']->value) {
$__foreach_line_0_saved_local_item = $_smarty_tpl->tpl_vars['line'];
?>
        <ul class="result">
          <li class="width--120"><?php echo substr($_smarty_tpl->tpl_vars['line']->value['visit_schedule'],2,8);?>
</li>
          <li class="font--w--600"><?php echo $_smarty_tpl->tpl_vars['line']->value['facility_name'];?>
</li>
          <li class="width--120"><?php echo $_smarty_tpl->tpl_vars['line']->value['worker_name'];?>
</li>
          <li class="width--120"><?php echo substr($_smarty_tpl->tpl_vars['line']->value['visit_schedule'],2,8);?>
</li>
          <li class="width--120"><?php echo substr($_smarty_tpl->tpl_vars['line']->value['report_date'],2,8);?>
</li>
          <li class="memo width--500">
            <?php if ($_smarty_tpl->tpl_vars['line']->value['report_type'] == 1) {
echo $_smarty_tpl->tpl_vars['line']->value['remarks'];
} elseif ($_smarty_tpl->tpl_vars['line']->value['report_type'] == 2) {
echo $_smarty_tpl->tpl_vars['line']->value['ope_support_remarks'];
} elseif ($_smarty_tpl->tpl_vars['line']->value['remarks'] == 3) {
echo $_smarty_tpl->tpl_vars['line']->value['navx_report_remarks'];
} else {
echo $_smarty_tpl->tpl_vars['line']->value['visit_comment'];
}?>
          </li>
        </ul>
<?php
$_smarty_tpl->tpl_vars['line'] = $__foreach_line_0_saved_local_item;
}
}
if ($__foreach_line_0_saved_item) {
$_smarty_tpl->tpl_vars['line'] = $__foreach_line_0_saved_item;
}
?>

      </div>
    </div>
  </section><?php }
}
