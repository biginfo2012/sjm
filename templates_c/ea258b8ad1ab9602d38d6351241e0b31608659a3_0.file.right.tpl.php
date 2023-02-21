<?php
/* Smarty version 3.1.28, created on 2019-02-28 15:51:46
  from "/var/www/html/application/views/nav/right.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5c780392a20de9_31412293',
  'file_dependency' => 
  array (
    'ea258b8ad1ab9602d38d6351241e0b31608659a3' => 
    array (
      0 => '/var/www/html/application/views/nav/right.tpl',
      1 => 1551185193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c780392a20de9_31412293 ($_smarty_tpl) {
?>
<div class="sidebar visible-lg">
  <?php if (!empty($_smarty_tpl->tpl_vars['today_appoints']->value)) {?>
  <div class="analyze">
    訪問数（<?php echo $_smarty_tpl->tpl_vars['today_appoints']->value['date'];?>
）
    <span><?php echo $_smarty_tpl->tpl_vars['today_appoints']->value['amount'];?>
<small>件</small></span>
  </div>
  <?php }?>
  <nav>
    <ul>
      <?php if ($_smarty_tpl->tpl_vars['class']->value == "result") {?>
      <li>
        <button type="button" class="def" id='report_csv'>CSVエクスポート</button>
      </li>
      <?php } else { ?>
      <li>
        <button type="button" class="m1 green" data-schedule_id=''<?php if ($_smarty_tpl->tpl_vars['add_schedule_button']->value == 'off') {?> style='display:none;'<?php } else {
if ($_smarty_tpl->tpl_vars['worker_id']->value != '') {?> data-worker_id='<?php echo $_smarty_tpl->tpl_vars['worker_id']->value;?>
'<?php }
}?>>
          <i class="fa fa-plus icon--fix" aria-hidden="true"></i>予定/実績登録
        </button>
      </li>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['class']->value == "result") {?>
      <?php } else { ?>
      <li class="hr"></li>
      <li>
        <div class="guide">
          <span class="c--sales"></span>SALES
        </div>
      </li>
      <li>
        <div class="guide">
          <span class="c--fce"></span>FCE
        </div>
      </li>
      <li>
        <div class="guide">
          <span class="red"></span>未報告
        </div>
      </li>
      <?php }?>
    </ul>
  </nav>
</div><?php }
}
