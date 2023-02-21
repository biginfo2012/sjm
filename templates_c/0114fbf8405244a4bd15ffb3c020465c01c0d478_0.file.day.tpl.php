<?php
/* Smarty version 3.1.28, created on 2019-04-22 04:05:41
  from "/var/www/html/application/views/top/day.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5cbd3d95918af6_07068147',
  'file_dependency' => 
  array (
    '0114fbf8405244a4bd15ffb3c020465c01c0d478' => 
    array (
      0 => '/var/www/html/application/views/top/day.tpl',
      1 => 1551185270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbd3d95918af6_07068147 ($_smarty_tpl) {
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
          <a class="" href="/day?<?php echo $_smarty_tpl->tpl_vars['search_term']->value;?>
">今日</a>
        </li>
        <li>
          <a class="" href="/day?date=<?php echo $_smarty_tpl->tpl_vars['date_prev']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['search_term']->value;?>
"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
        </li>
        <li>
          <a class="" href="/day?date=<?php echo $_smarty_tpl->tpl_vars['date_next']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['search_term']->value;?>
"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
        </li>
      </ul>
      <ul class="sort">
        <li>
          <a class="active" href="/day<?php if ($_smarty_tpl->tpl_vars['get_date']->value != '') {?>?date=<?php echo $_smarty_tpl->tpl_vars['get_date']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['search_term']->value;
} else { ?>?<?php echo $_smarty_tpl->tpl_vars['search_term']->value;
}?>">日</a>
        </li>
        <li>
          <a class="" href="/week<?php if ($_smarty_tpl->tpl_vars['get_date']->value != '') {?>?date=<?php echo $_smarty_tpl->tpl_vars['get_date']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['search_term']->value;
} else { ?>?<?php echo $_smarty_tpl->tpl_vars['search_term']->value;
}?>">週</a>
        </li>
        <li>
          <a class="" href="/month<?php if ($_smarty_tpl->tpl_vars['get_date']->value != '') {?>?date=<?php echo $_smarty_tpl->tpl_vars['get_date']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['search_term']->value;
} else { ?>?<?php echo $_smarty_tpl->tpl_vars['search_term']->value;
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
              <a class="previous" href="/day?page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;
if ($_smarty_tpl->tpl_vars['get_date']->value != '') {?>&date=<?php echo $_smarty_tpl->tpl_vars['get_date']->value;
}
if ($_smarty_tpl->tpl_vars['search_term']->value != '') {?>&<?php echo $_smarty_tpl->tpl_vars['search_term']->value;
}?>"><i class="fa fa-caret-left" aria-hidden="true"></i></a>
              <?php }?>
            </li>
            <?php
$_from = $_smarty_tpl->tpl_vars['schedules']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_worker_0_saved_item = isset($_smarty_tpl->tpl_vars['worker']) ? $_smarty_tpl->tpl_vars['worker'] : false;
$_smarty_tpl->tpl_vars['worker'] = new Smarty_Variable();
$__foreach_worker_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_worker_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['worker']->value) {
$__foreach_worker_0_saved_local_item = $_smarty_tpl->tpl_vars['worker'];
?>
            <li class="name fix link"><a href="/day/user?worker_id=<?php echo $_smarty_tpl->tpl_vars['worker']->value['employee_number'];
if ($_smarty_tpl->tpl_vars['get_date']->value != '') {?>&date=<?php echo $_smarty_tpl->tpl_vars['get_date']->value;
}
if ($_smarty_tpl->tpl_vars['search_term']->value != '') {?>&<?php echo $_smarty_tpl->tpl_vars['search_term']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['worker']->value['name'];?>
</a></li>
            <?php
$_smarty_tpl->tpl_vars['worker'] = $__foreach_worker_0_saved_local_item;
}
}
if ($__foreach_worker_0_saved_item) {
$_smarty_tpl->tpl_vars['worker'] = $__foreach_worker_0_saved_item;
}
?>
          </ul>
          <?php if (count($_smarty_tpl->tpl_vars['schedules']->value) == $_smarty_tpl->tpl_vars['limit']->value && $_smarty_tpl->tpl_vars['has_next']->value) {?>
          <a class="next" href="/day?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;
if ($_smarty_tpl->tpl_vars['get_date']->value != '') {?>&date=<?php echo $_smarty_tpl->tpl_vars['get_date']->value;
}
if ($_smarty_tpl->tpl_vars['search_term']->value != '') {?>&<?php echo $_smarty_tpl->tpl_vars['search_term']->value;
}?>"><i class="fa fa-caret-right" aria-hidden="true"></i></a>
          <?php }?>
        </div>
        <div class="cday--box">
          <div class="cday--left clearfix opacity--none">
            <ul class="time">
<?php
$__section_a_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_a']) ? $_smarty_tpl->tpl_vars['__section_a'] : false;
$_smarty_tpl->tpl_vars['__smarty_section_a'] = new Smarty_Variable(array());
if (true) {
for ($__section_a_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_a']->value['index'] = 7; $__section_a_0_iteration <= 17; $__section_a_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_a']->value['index']++){
?>
              <li class="time">
                <span><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_a']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_a']->value['index'] : null);?>
:00</span>
              </li>
              <li class="time">
                <span><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_a']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_a']->value['index'] : null);?>
:30</span>
              </li>
<?php
}
}
if ($__section_a_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_a'] = $__section_a_0_saved;
}
?>
            </ul>
          </div>
          <div class="cday--right clearfix">
            <?php
$_from = $_smarty_tpl->tpl_vars['schedules']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_lines_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_lines']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_lines'] : false;
$__foreach_lines_1_saved_item = isset($_smarty_tpl->tpl_vars['worker']) ? $_smarty_tpl->tpl_vars['worker'] : false;
$__foreach_lines_1_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['worker'] = new Smarty_Variable();
$__foreach_lines_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['__smarty_foreach_lines'] = new Smarty_Variable(array('iteration' => 0));
if ($__foreach_lines_1_total) {
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['worker']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_lines']->value['iteration']++;
$__foreach_lines_1_saved_local_item = $_smarty_tpl->tpl_vars['worker'];
?>
            <div class="c<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_lines']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_lines']->value['iteration'] : null);?>
">
              <ul class="task">
                <li>
                <?php
$_from = $_smarty_tpl->tpl_vars['worker']->value['schedules'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_name_2_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$__foreach_name_2_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$__foreach_name_2_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_name_2_total) {
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$__foreach_name_2_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                  <a class="m1 <?php if ($_smarty_tpl->tpl_vars['item']->value['role_code'] == 0 || $_smarty_tpl->tpl_vars['item']->value['role_code'] == 2) {?>sales<?php } else { ?>fce<?php }?> abso<?php if ($_smarty_tpl->tpl_vars['item']->value['notyet_reported']) {?> notyet<?php }?>" style="top: <?php echo $_smarty_tpl->tpl_vars['item']->value['height_mergin'];?>
px;height: <?php echo $_smarty_tpl->tpl_vars['item']->value['visit_span'];?>
px;" data-schedule_id='<?php echo $_smarty_tpl->tpl_vars['item']->value['schedule_id'];?>
' data-worker_id='<?php echo $_smarty_tpl->tpl_vars['worker']->value['employee_number'];?>
'>
                    <time><?php echo $_smarty_tpl->tpl_vars['item']->value['visit_time_from'];?>
~<?php echo $_smarty_tpl->tpl_vars['item']->value['visit_time_to'];?>
</time>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

                  </a>
                <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_name_2_saved_local_item;
}
}
if ($__foreach_name_2_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_name_2_saved_item;
}
if ($__foreach_name_2_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_name_2_saved_key;
}
?>
                </li>
              </ul>
            </div>
            <?php
$_smarty_tpl->tpl_vars['worker'] = $__foreach_lines_1_saved_local_item;
}
}
if ($__foreach_lines_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_lines'] = $__foreach_lines_1_saved;
}
if ($__foreach_lines_1_saved_item) {
$_smarty_tpl->tpl_vars['worker'] = $__foreach_lines_1_saved_item;
}
if ($__foreach_lines_1_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_lines_1_saved_key;
}
?>
          </div>
        </div>
      </div>
    </div>
  </section><?php }
}
