<?php
/* Smarty version 3.1.28, created on 2019-02-28 15:51:46
  from "/var/www/html/application/views/top/dayUser.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5c780392a5de25_85723278',
  'file_dependency' => 
  array (
    'befdf5dea0ddf086d0b0b22c11bb5e31a0c19157' => 
    array (
      0 => '/var/www/html/application/views/top/dayUser.tpl',
      1 => 1551185273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c780392a5de25_85723278 ($_smarty_tpl) {
?>

  <section class="fixed">
    <div class="main">
      <h2>
        <a href="/day?<?php echo $_smarty_tpl->tpl_vars['search_term']->value;?>
"><i class="fa fa-angle-double-left font--22" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['worker_name']->value;?>
<small><?php echo $_smarty_tpl->tpl_vars['district']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['district']->value['region_name'];?>
</small></a>
      </h2>
      <ul class="sort upper">
        <li>
          <a class="" href="/day/user?worker_id=<?php echo $_smarty_tpl->tpl_vars['worker_id']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['search_term']->value;?>
">今日</a>
        </li>
        <li>
          <a class="" href="/day/user?date=<?php echo $_smarty_tpl->tpl_vars['date_prev']->value;?>
&worker_id=<?php echo $_smarty_tpl->tpl_vars['worker_id']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['search_term']->value;?>
"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
        </li>
        <li>
          <a class="" href="/day/user?date=<?php echo $_smarty_tpl->tpl_vars['date_next']->value;?>
&worker_id=<?php echo $_smarty_tpl->tpl_vars['worker_id']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['search_term']->value;?>
"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
        </li>
      </ul>
      <ul class="sort">
        <li>
          <a class="active" href="/day/user?date=<?php echo $_smarty_tpl->tpl_vars['get_date']->value;?>
&worker_id=<?php echo $_smarty_tpl->tpl_vars['worker_id']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['search_term']->value;?>
">日</a>
        </li>
        <li>
          <a class="" href="/week/user?date=<?php echo $_smarty_tpl->tpl_vars['get_date']->value;?>
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
      <div class="vbox fix clearfix">
        <div class="fixed--person fix clearfix pfy">
          <ul>
            <li class="title"></li>
            <li class="name"><?php echo $_smarty_tpl->tpl_vars['schedules']->value['name'];?>
</li>
          </ul>
        </div>
        <div class="cday--box fix">
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
            <div class="c1 fix">
              <ul class="task fix padding-t--0">
                <li>
                <?php
$_from = $_smarty_tpl->tpl_vars['schedules']->value['schedules'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_name_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$__foreach_name_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$__foreach_name_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_name_0_total) {
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$__foreach_name_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                  <a class="m1 <?php if ($_smarty_tpl->tpl_vars['item']->value['role_code'] == 0 || $_smarty_tpl->tpl_vars['item']->value['role_code'] == 2) {?>sales<?php } else { ?>fce<?php }?> abso<?php if ($_smarty_tpl->tpl_vars['item']->value['notyet_reported']) {?> notyet<?php }?>" style="top: <?php echo $_smarty_tpl->tpl_vars['item']->value['height_mergin'];?>
px;height: <?php echo $_smarty_tpl->tpl_vars['item']->value['visit_span'];?>
px;" data-schedule_id='<?php echo $_smarty_tpl->tpl_vars['item']->value['schedule_id'];?>
' <?php if ($_smarty_tpl->tpl_vars['worker_id']->value != '') {?>data-worker_id='<?php echo $_smarty_tpl->tpl_vars['worker_id']->value;?>
'<?php }?>>
                    <time><?php echo $_smarty_tpl->tpl_vars['item']->value['visit_time_from'];?>
~<?php echo $_smarty_tpl->tpl_vars['item']->value['visit_time_to'];?>
</time>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

                  </a>
                <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_name_0_saved_local_item;
}
}
if ($__foreach_name_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_name_0_saved_item;
}
if ($__foreach_name_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_name_0_saved_key;
}
?>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><?php }
}
