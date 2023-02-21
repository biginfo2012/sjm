<?php
/* Smarty version 3.1.28, created on 2020-08-11 06:19:29
  from "/var/www/html/application/views/top/weekUser.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5f3238712270f3_89919877',
  'file_dependency' => 
  array (
    'f32df51c702a8d7e5418b421ea5102fdb48c1bfe' => 
    array (
      0 => '/var/www/html/application/views/top/weekUser.tpl',
      1 => 1551185298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3238712270f3_89919877 ($_smarty_tpl) {
?>

  <section class="fixed">
    <div class="main">
      <h2>
        <a href="/week?<?php echo $_smarty_tpl->tpl_vars['search_term']->value;?>
"><i class="fa fa-angle-double-left font--22" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['worker_name']->value;?>
<small><?php echo $_smarty_tpl->tpl_vars['district']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['district']->value['region_name'];?>
</small></a>
      </h2>
      <ul class="sort upper">
        <li>
          <a class="" href="/week/user?worker_id=<?php echo $_smarty_tpl->tpl_vars['worker_id']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['search_term']->value;?>
">今日</a>
        </li>
        <li>
          <a class="" href="/week/user?date=<?php echo $_smarty_tpl->tpl_vars['date_prev']->value;?>
&worker_id=<?php echo $_smarty_tpl->tpl_vars['worker_id']->value;?>
"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
        </li>
        <li>
          <a class="" href="/week/user?date=<?php echo $_smarty_tpl->tpl_vars['date_next']->value;?>
&worker_id=<?php echo $_smarty_tpl->tpl_vars['worker_id']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['search_term']->value;?>
"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
        </li>
      </ul>
      <ul class="sort">
        <li>
          <a class="" href="/day/user?date=<?php echo $_smarty_tpl->tpl_vars['get_date']->value;?>
&worker_id=<?php echo $_smarty_tpl->tpl_vars['worker_id']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['search_term']->value;?>
">日</a>
        </li>
        <li>
          <a class="active" href="/week/user?date=<?php echo $_smarty_tpl->tpl_vars['get_date']->value;?>
&worker_id=<?php echo $_smarty_tpl->tpl_vars['worker_id']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['search_term']->value;?>
">週</a>
        </li>
        <li>
          <a class="" href="/month/user?date=<?php echo $_smarty_tpl->tpl_vars['get_date']->value;?>
&worker_id=<?php echo $_smarty_tpl->tpl_vars['worker_id']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['search_term']->value;?>
">月</a>
        </li>
      </ul>
    </div>
  </section>

  <section>
    <div class="cday clearfix">
      <div class="vbox clearfix">
        <div class="fixed--person clearfix pfy">
          <ul>
            <li class="title"></li>
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
            <li class="week--days<?php if ($_smarty_tpl->tpl_vars['date']->value['today']) {?> today<?php }?>"><a href="/day/user/?date=<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
&worker_id=<?php echo $_smarty_tpl->tpl_vars['worker_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['date']->value['label'];?>
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
          <div class="cday--right week clearfix">
            <?php
$_from = $_smarty_tpl->tpl_vars['span_ary']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_lines_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_lines']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_lines'] : false;
$__foreach_lines_1_saved_item = isset($_smarty_tpl->tpl_vars['date']) ? $_smarty_tpl->tpl_vars['date'] : false;
$__foreach_lines_1_saved_key = isset($_smarty_tpl->tpl_vars['link']) ? $_smarty_tpl->tpl_vars['link'] : false;
$_smarty_tpl->tpl_vars['date'] = new Smarty_Variable();
$__foreach_lines_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['__smarty_foreach_lines'] = new Smarty_Variable(array('iteration' => 0));
if ($__foreach_lines_1_total) {
$_smarty_tpl->tpl_vars['link'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value => $_smarty_tpl->tpl_vars['date']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_lines']->value['iteration']++;
$__foreach_lines_1_saved_local_item = $_smarty_tpl->tpl_vars['date'];
?>
            <div class="c<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_lines']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_lines']->value['iteration'] : null);?>
">
              <ul class="task">
                <li>
                  <?php if (isset($_smarty_tpl->tpl_vars['schedules']->value['schedules'][$_smarty_tpl->tpl_vars['link']->value])) {?>
                  <?php $_smarty_tpl->tpl_vars["date_parts"] = new Smarty_Variable($_smarty_tpl->tpl_vars['schedules']->value['schedules'][$_smarty_tpl->tpl_vars['link']->value], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "date_parts", 0);?>
                  <?php
$_from = $_smarty_tpl->tpl_vars['date_parts']->value['date'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_parts_2_saved_item = isset($_smarty_tpl->tpl_vars['parts']) ? $_smarty_tpl->tpl_vars['parts'] : false;
$_smarty_tpl->tpl_vars['parts'] = new Smarty_Variable();
$__foreach_parts_2_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_parts_2_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['parts']->value) {
$__foreach_parts_2_saved_local_item = $_smarty_tpl->tpl_vars['parts'];
?>
                  <a class="m1 <?php if ($_smarty_tpl->tpl_vars['parts']->value['role_code'] == 0 || $_smarty_tpl->tpl_vars['parts']->value['role_code'] == 2) {?>sales<?php } else { ?>fce<?php }
if ($_smarty_tpl->tpl_vars['parts']->value['notyet_reported']) {?> notyet<?php }?> abso" style="top: <?php echo $_smarty_tpl->tpl_vars['parts']->value['height_mergin'];?>
px;height: <?php echo $_smarty_tpl->tpl_vars['parts']->value['visit_span'];?>
px;" data-schedule_id='<?php echo $_smarty_tpl->tpl_vars['parts']->value['schedule_id'];?>
' <?php if ($_smarty_tpl->tpl_vars['worker_id']->value != '') {?>data-worker_id='<?php echo $_smarty_tpl->tpl_vars['worker_id']->value;?>
'<?php }?>>
                    <time><?php echo $_smarty_tpl->tpl_vars['parts']->value['visit_time_from'];?>
 - <?php echo $_smarty_tpl->tpl_vars['parts']->value['visit_time_to'];?>
</time>
                    <?php echo $_smarty_tpl->tpl_vars['parts']->value['title'];?>

                  </a>
                  <?php
$_smarty_tpl->tpl_vars['parts'] = $__foreach_parts_2_saved_local_item;
}
}
if ($__foreach_parts_2_saved_item) {
$_smarty_tpl->tpl_vars['parts'] = $__foreach_parts_2_saved_item;
}
?>
                  <?php }?>
                </li>
              </ul>
            </div>
            <?php
$_smarty_tpl->tpl_vars['date'] = $__foreach_lines_1_saved_local_item;
}
}
if ($__foreach_lines_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_lines'] = $__foreach_lines_1_saved;
}
if ($__foreach_lines_1_saved_item) {
$_smarty_tpl->tpl_vars['date'] = $__foreach_lines_1_saved_item;
}
if ($__foreach_lines_1_saved_key) {
$_smarty_tpl->tpl_vars['link'] = $__foreach_lines_1_saved_key;
}
?>
          </div>
        </div>
      </div>
    </div>
  </section><?php }
}
