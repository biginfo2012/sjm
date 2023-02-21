<?php
/* Smarty version 3.1.28, created on 2019-05-20 15:28:45
  from "/var/www/html/application/views/top/week.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5ce2c7ad03d8e7_39956711',
  'file_dependency' => 
  array (
    '528eb7f06f0e9e919dc170c3594f0a4379b80215' => 
    array (
      0 => '/var/www/html/application/views/top/week.tpl',
      1 => 1551185296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce2c7ad03d8e7_39956711 ($_smarty_tpl) {
?>

  <section class="fixed">
    <div class="main">
      <h2>
        <a href="/day"><?php echo $_smarty_tpl->tpl_vars['district']->value['name'];?>
<small><?php if ($_smarty_tpl->tpl_vars['district']->value['division_name'] != '') {
echo $_smarty_tpl->tpl_vars['district']->value['division_name'];?>
事業部・<?php }
echo $_smarty_tpl->tpl_vars['district']->value['region_name'];?>
</small></a>
      </h2>
      <ul class="sort upper">
        <li>
          <a class="" href="/week<?php if ($_smarty_tpl->tpl_vars['search_term']->value != '') {?>?<?php echo $_smarty_tpl->tpl_vars['search_term']->value;
}?>">今日</a>
        </li>
        <li>
          <a class="" href="/week?date=<?php echo $_smarty_tpl->tpl_vars['date_prev']->value;
if ($_smarty_tpl->tpl_vars['search_term']->value != '') {?>&<?php echo $_smarty_tpl->tpl_vars['search_term']->value;
}?>"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
        </li>
        <li>
          <a class="" href="/week?date=<?php echo $_smarty_tpl->tpl_vars['date_next']->value;
if ($_smarty_tpl->tpl_vars['search_term']->value != '') {?>&<?php echo $_smarty_tpl->tpl_vars['search_term']->value;
}?>"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
        </li>
      </ul>
      <ul class="sort">
        <li>
          <a class="" href="/day<?php if ($_smarty_tpl->tpl_vars['get_date']->value != '') {?>?date=<?php echo $_smarty_tpl->tpl_vars['get_date']->value;
if ($_smarty_tpl->tpl_vars['search_term']->value != '') {?>&<?php echo $_smarty_tpl->tpl_vars['search_term']->value;
}
} else {
if ($_smarty_tpl->tpl_vars['search_term']->value != '') {?>?<?php echo $_smarty_tpl->tpl_vars['search_term']->value;
}
}?>">日</a>
        </li>
        <li>
          <a class="active" href="/week<?php if ($_smarty_tpl->tpl_vars['get_date']->value != '') {?>?date=<?php echo $_smarty_tpl->tpl_vars['get_date']->value;
if ($_smarty_tpl->tpl_vars['search_term']->value != '') {?>&<?php echo $_smarty_tpl->tpl_vars['search_term']->value;
}
} else {
if ($_smarty_tpl->tpl_vars['search_term']->value != '') {?>?<?php echo $_smarty_tpl->tpl_vars['search_term']->value;
}
}?>">週</a>
        </li>
        <li>
          <a class="" href="/month<?php if ($_smarty_tpl->tpl_vars['get_date']->value != '') {?>?date=<?php echo $_smarty_tpl->tpl_vars['get_date']->value;
if ($_smarty_tpl->tpl_vars['search_term']->value != '') {?>&<?php echo $_smarty_tpl->tpl_vars['search_term']->value;
}
} else {
if ($_smarty_tpl->tpl_vars['search_term']->value != '') {?>?<?php echo $_smarty_tpl->tpl_vars['search_term']->value;
}
}?>">月</a>
        </li>
      </ul>
    </div>
  </section>

  <section>
    <div class="cday clearfix">
      <div class="vbox clearfix">
        <div class="fixed--person clearfix pfy">
          <ul>
            <li class="title">
              <?php if ($_smarty_tpl->tpl_vars['page']->value > 0) {?>
              <a class="previous" href="/week?page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;
if ($_smarty_tpl->tpl_vars['get_date']->value != '') {?>&date=<?php echo $_smarty_tpl->tpl_vars['get_date']->value;
}
if ($_smarty_tpl->tpl_vars['search_term']->value != '') {?>&<?php echo $_smarty_tpl->tpl_vars['search_term']->value;
}?>"><i class="fa fa-caret-left" aria-hidden="true"></i></a>
              <?php }?>
            </li>
            <?php
$_from = $_smarty_tpl->tpl_vars['span_ary']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_date_0_saved_item = isset($_smarty_tpl->tpl_vars['date']) ? $_smarty_tpl->tpl_vars['date'] : false;
$__foreach_date_0_saved_key = isset($_smarty_tpl->tpl_vars['link']) ? $_smarty_tpl->tpl_vars['link'] : false;
$_smarty_tpl->tpl_vars['date'] = new Smarty_Variable();
$__foreach_date_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_date_0_total) {
$_smarty_tpl->tpl_vars['link'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value => $_smarty_tpl->tpl_vars['date']->value) {
$__foreach_date_0_saved_local_item = $_smarty_tpl->tpl_vars['date'];
?>
            <li class="week--days<?php if ($_smarty_tpl->tpl_vars['date']->value['today']) {?> today<?php }?>"><a href="day?date=<?php echo $_smarty_tpl->tpl_vars['link']->value;
if ($_smarty_tpl->tpl_vars['search_term']->value != '') {?>&<?php echo $_smarty_tpl->tpl_vars['search_term']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['date']->value['label'];?>
</a></li>
            <?php
$_smarty_tpl->tpl_vars['date'] = $__foreach_date_0_saved_local_item;
}
}
if ($__foreach_date_0_saved_item) {
$_smarty_tpl->tpl_vars['date'] = $__foreach_date_0_saved_item;
}
if ($__foreach_date_0_saved_key) {
$_smarty_tpl->tpl_vars['link'] = $__foreach_date_0_saved_key;
}
?>
          </ul>
          <?php if (count($_smarty_tpl->tpl_vars['schedules']->value) == $_smarty_tpl->tpl_vars['limit']->value && $_smarty_tpl->tpl_vars['has_next']->value) {?>
          <a class="next" href="/week?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;
if ($_smarty_tpl->tpl_vars['get_date']->value != '') {?>&date=<?php echo $_smarty_tpl->tpl_vars['get_date']->value;
}
if ($_smarty_tpl->tpl_vars['search_term']->value != '') {?>&<?php echo $_smarty_tpl->tpl_vars['search_term']->value;
}?>"><i class="fa fa-caret-right" aria-hidden="true"></i></a>
          <?php }?>
        </div>
          <?php
$_from = $_smarty_tpl->tpl_vars['schedules']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_worker_1_saved_item = isset($_smarty_tpl->tpl_vars['worker']) ? $_smarty_tpl->tpl_vars['worker'] : false;
$_smarty_tpl->tpl_vars['worker'] = new Smarty_Variable();
$__foreach_worker_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_worker_1_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['worker']->value) {
$__foreach_worker_1_saved_local_item = $_smarty_tpl->tpl_vars['worker'];
?>
          <ul class="fix">
            <li class="title fix link">
              <a href="/week/user?worker_id=<?php echo $_smarty_tpl->tpl_vars['worker']->value['employee_number'];
if ($_smarty_tpl->tpl_vars['search_term']->value != '') {?>&<?php echo $_smarty_tpl->tpl_vars['search_term']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['worker']->value['name'];?>
</a>
            </li>
            
            <?php
$_from = $_smarty_tpl->tpl_vars['span_ary']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_date_2_saved_item = isset($_smarty_tpl->tpl_vars['date']) ? $_smarty_tpl->tpl_vars['date'] : false;
$__foreach_date_2_saved_key = isset($_smarty_tpl->tpl_vars['link']) ? $_smarty_tpl->tpl_vars['link'] : false;
$_smarty_tpl->tpl_vars['date'] = new Smarty_Variable();
$__foreach_date_2_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_date_2_total) {
$_smarty_tpl->tpl_vars['link'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value => $_smarty_tpl->tpl_vars['date']->value) {
$__foreach_date_2_saved_local_item = $_smarty_tpl->tpl_vars['date'];
?>
            <?php if (isset($_smarty_tpl->tpl_vars['worker']->value['schedules'][$_smarty_tpl->tpl_vars['link']->value])) {?>
            <?php $_smarty_tpl->tpl_vars["date_parts"] = new Smarty_Variable($_smarty_tpl->tpl_vars['worker']->value['schedules'][$_smarty_tpl->tpl_vars['link']->value], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "date_parts", 0);?>
            <li class="week--days fix">
              <?php
$_from = $_smarty_tpl->tpl_vars['date_parts']->value['date'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_parts_3_saved_item = isset($_smarty_tpl->tpl_vars['parts']) ? $_smarty_tpl->tpl_vars['parts'] : false;
$_smarty_tpl->tpl_vars['parts'] = new Smarty_Variable();
$__foreach_parts_3_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_parts_3_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['parts']->value) {
$__foreach_parts_3_saved_local_item = $_smarty_tpl->tpl_vars['parts'];
?>
              <a class="m1 <?php if ($_smarty_tpl->tpl_vars['parts']->value['role_code'] == 0 || $_smarty_tpl->tpl_vars['parts']->value['role_code'] == 2) {?>sales<?php } else { ?>fce<?php }
if ($_smarty_tpl->tpl_vars['parts']->value['notyet_reported']) {?> notyet<?php }?>"  data-schedule_id='<?php echo $_smarty_tpl->tpl_vars['parts']->value['schedule_id'];?>
' data-worker_id='<?php echo $_smarty_tpl->tpl_vars['worker']->value['employee_number'];?>
'>
                <span><b><?php echo $_smarty_tpl->tpl_vars['parts']->value['visit_time_from'];?>
 - <?php echo $_smarty_tpl->tpl_vars['parts']->value['visit_time_to'];?>
</b> <?php echo $_smarty_tpl->tpl_vars['parts']->value['title'];?>
</span>
              </a>
              <?php
$_smarty_tpl->tpl_vars['parts'] = $__foreach_parts_3_saved_local_item;
}
}
if ($__foreach_parts_3_saved_item) {
$_smarty_tpl->tpl_vars['parts'] = $__foreach_parts_3_saved_item;
}
?>
            </li>
            <?php } else { ?>
            <li class="week--days fix">
            </li>
            <?php }?>

            <?php
$_smarty_tpl->tpl_vars['date'] = $__foreach_date_2_saved_local_item;
}
}
if ($__foreach_date_2_saved_item) {
$_smarty_tpl->tpl_vars['date'] = $__foreach_date_2_saved_item;
}
if ($__foreach_date_2_saved_key) {
$_smarty_tpl->tpl_vars['link'] = $__foreach_date_2_saved_key;
}
?>
          </ul>
          <?php
$_smarty_tpl->tpl_vars['worker'] = $__foreach_worker_1_saved_local_item;
}
}
if ($__foreach_worker_1_saved_item) {
$_smarty_tpl->tpl_vars['worker'] = $__foreach_worker_1_saved_item;
}
?>
        </div>
      </div>
    </div>
  </section><?php }
}
