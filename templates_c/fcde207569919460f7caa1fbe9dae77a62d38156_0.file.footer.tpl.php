<?php
/* Smarty version 3.1.28, created on 2020-09-07 14:55:09
  from "D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\views\top\footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5f562dad99ad01_85813175',
  'file_dependency' => 
  array (
    'fcde207569919460f7caa1fbe9dae77a62d38156' => 
    array (
      0 => 'D:\\_WORKSPACE\\Web\\Xampp\\htdocs\\sjm\\html\\application\\views\\top\\footer.tpl',
      1 => 1599482901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f562dad99ad01_85813175 ($_smarty_tpl) {
?>

</div><!-- /.page -->

<?php if ($_smarty_tpl->tpl_vars['class']->value == "top" || $_smarty_tpl->tpl_vars['class']->value == "login" || $_smarty_tpl->tpl_vars['class']->value == "reminder") {
} else { ?>
<div class="visible-sm addnew">
  <button type="button" class="m1-sp" data-schedule_id=''<?php if ($_smarty_tpl->tpl_vars['add_schedule_button']->value == 'off') {?> style='display:none;'<?php } else {
if ($_smarty_tpl->tpl_vars['worker_id']->value != '') {?> data-worker_id='<?php echo $_smarty_tpl->tpl_vars['worker_id']->value;?>
'<?php }
}?>>
    <i class="fa fa-plus" aria-hidden="true"></i>
  </button>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['class']->value == "top") {
} else { ?>
<!-- modal1 m1 add & edit schedule -->
<div class="modal1">

  <div class="mbox">
    <form id='schedule_text'>
      <button type="button" class="m1"><i class="fa fa-close" aria-hidden="true"></i><span class="visible-lg">閉じる</span></button>

      <h4><span class='role_name'></span></h4>

      訪問先：<span id='facility_name_text'></span><br/>
      訪問日程：<span id='visit_schedule_text'></span><br/>
      訪問時間：<span id='visit_time_text'></span><br/>
      訪問相手：<span id='visit_to_text'></span>
      <br><br>

      <span class='crm_menu'>
      訪問内容：<span id='visit_type_text'></span><br><br>
      フリーコメント：<br>
      <span id='visit_comment_text'></span><br>
      </span>

      <span id='report_type_1_text' style='display:none;'>
        <b>[営業活動報告]</b><br><br>
        営業内容：<span id='report_sales_type_text'></span><br>
        フリーコメント：<span id='report_remarks_txt'></span><br>
      </span>

      <span id='report_type_2_text' style='display:none;'>
      <b>[オペサポート活動報告]</b><br><br>
      症例名：<span id='ope_support_case_name_text'></span><br>
      キャピタル：<span id='ope_support_capital_text'></span><br>
      立会い内容：<span id='ope_support_witness_content_text'></span><br>
      フリーコメント：<span id='ope_support_remarks_text'></span><br>
      </span>

      <span id='report_type_3_text' style='display:none;'>
      <b>[NavXレポート]</b><br><br>
      症例の種類：<span id='navx_case_type_text'>慢性AF 2nd以降</span><br>
      症例で使用したシステム：<span id='system_in_case_text'>NavX</span><br>
      使用したアブカテの組み合わせ：<span id='ablation_catheter_combination_text'>イリゲーション</span><br>

      使用したアブレーションカテーテルのメーカー：<br>
      <span id='ablation_catheter_type_maker_text'>SJM:FlexAbility,JNJ:セルシウス</span><br>

      使用した電カテのメーカー・極数：<br>
      <span id='ablation_catheter_type_text'>HRA 3~5極 JNJ <br/>HIS 6~19極 SJM</span><br>
      </span>

      <div class="sct t--right">
        <button type="button" class="cancel m1" id='schedule_cancel'>キャンセル</button>
        <button type="button" class="submit" id='schedule_edit'>編集</button>
      </div>
    </form>

    <form method='post' id='schedule_form'>
      <input type='hidden' name='set_schedule' value="set_schedule">
      <input type='hidden' name='worker_id' id='schedule_worker_id'>
      <input type='hidden' name='account_id' id='schedule_account_id'>
      <input type='hidden' name='role_code' id='schedule_role_code'>
      <input type='hidden' name='schedule_id' id='schedule_schedule_id'>
      <button type="button" class="m1"><i class="fa fa-close" aria-hidden="true"></i><span class="visible-lg">閉じる</span></button>
      <h4><span class='role_name'></span></h4>

      <div class="sct">
        <input id="facility_name" class="underlin validate_partse" placeholder="*訪問施設を入力...">
        <input type='hidden' name='facility_id' id='facility_id' value="">
      </div>

      <hr>
      <div class="sct">
        <h5 class='validate_title' id='schedule_visit_date_title'>*訪問日程</h5>
        <ul class="layout">
          <li class="layout--li fix--100">
            <select id='visit_schedule_year' name='visit_schedule_year' class='visit_schedule_date'>
              <option data-display="年" value="">選択...</option>
<?php
$_from = $_smarty_tpl->tpl_vars['schedule_form_year']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$__foreach_item_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$__foreach_item_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_item_0_total) {
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
if ($__foreach_item_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_item_0_saved_key;
}
?>
            </select>
          </li>
          <li class="layout--li fix--90">
            <select id='visit_schedule_month' name='visit_schedule_month' class='visit_schedule_date'>
              <option data-display="月" value="">選択...</option>
<?php
$__section_visit_schedule_month_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_visit_schedule_month']) ? $_smarty_tpl->tpl_vars['__section_visit_schedule_month'] : false;
$_smarty_tpl->tpl_vars['__smarty_section_visit_schedule_month'] = new Smarty_Variable(array());
if (true) {
for ($__section_visit_schedule_month_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_visit_schedule_month']->value['index'] = 1; $__section_visit_schedule_month_0_iteration <= 12; $__section_visit_schedule_month_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_visit_schedule_month']->value['index']++){
?>
              <option value="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_visit_schedule_month']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_visit_schedule_month']->value['index'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_visit_schedule_month']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_visit_schedule_month']->value['index'] : null);?>
月</option>
<?php
}
}
if ($__section_visit_schedule_month_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_visit_schedule_month'] = $__section_visit_schedule_month_0_saved;
}
?>
            </select>
          </li>
          <li class="layout--li fix--85">
            <select id='visit_schedule_day' name='visit_schedule_day' class='visit_schedule_date'>
              <option data-display="日" value="">選択...</option>
<?php
$__section_visit_schedule_day_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_visit_schedule_day']) ? $_smarty_tpl->tpl_vars['__section_visit_schedule_day'] : false;
$_smarty_tpl->tpl_vars['__smarty_section_visit_schedule_day'] = new Smarty_Variable(array());
if (true) {
for ($__section_visit_schedule_day_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_visit_schedule_day']->value['index'] = 1; $__section_visit_schedule_day_1_iteration <= 31; $__section_visit_schedule_day_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_visit_schedule_day']->value['index']++){
?>
              <option value="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_visit_schedule_day']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_visit_schedule_day']->value['index'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_visit_schedule_day']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_visit_schedule_day']->value['index'] : null);?>
日</option>
<?php
}
}
if ($__section_visit_schedule_day_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_visit_schedule_day'] = $__section_visit_schedule_day_1_saved;
}
?>
            </select>
          </li>
        </ul>
      </div>

      <div class="sct clearfix">
        <h5 class='validate_title' id='schedule_visit_time_title'>*訪問時間</h5>
        <ul class="layout left">
          <li class="layout--li fix--80">
            <select id='visit_schedule_start_hour' name='visit_schedule_start_hour' class='visit_schedule_time'>
              <option data-display="開始" value="">選択...</option>
<?php
$_from = $_smarty_tpl->tpl_vars['schedule_form_hour']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_1_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$__foreach_item_1_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$__foreach_item_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_item_1_total) {
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$__foreach_item_1_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved_local_item;
}
}
if ($__foreach_item_1_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved_item;
}
if ($__foreach_item_1_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_item_1_saved_key;
}
?>
            </select>
          </li>
          <li class="layout--li fix--80">
            <select id='visit_schedule_start_min' name='visit_schedule_start_min' class='visit_schedule_time'>
              <option data-display="分" value="">選択...</option>
<?php
$_from = $_smarty_tpl->tpl_vars['schedule_form_minute']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_2_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$__foreach_item_2_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$__foreach_item_2_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_item_2_total) {
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$__foreach_item_2_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_2_saved_local_item;
}
}
if ($__foreach_item_2_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_2_saved_item;
}
if ($__foreach_item_2_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_item_2_saved_key;
}
?>
            </select>
          </li>
        </ul>
        <ul class="layout right">
          <li class="layout--li fix--80">
            <select id='visit_schedule_expire_hour' name='visit_schedule_expire_hour' class='visit_schedule_time'>
              <option data-display="終了" value="">選択...</option>
<?php
$_from = $_smarty_tpl->tpl_vars['schedule_form_hour']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_3_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$__foreach_item_3_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$__foreach_item_3_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_item_3_total) {
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$__foreach_item_3_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_3_saved_local_item;
}
}
if ($__foreach_item_3_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_3_saved_item;
}
if ($__foreach_item_3_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_item_3_saved_key;
}
?>
            </select>
          </li>
          <li class="layout--li fix--80">
            <select id='visit_schedule_expire_min' name='visit_schedule_expire_min' class='visit_schedule_time'>
              <option data-display="分" value="">選択...</option>
<?php
$_from = $_smarty_tpl->tpl_vars['schedule_form_minute']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_4_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$__foreach_item_4_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$__foreach_item_4_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_item_4_total) {
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$__foreach_item_4_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_4_saved_local_item;
}
}
if ($__foreach_item_4_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_4_saved_item;
}
if ($__foreach_item_4_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_item_4_saved_key;
}
?>
            </select>
          </li>
        </ul>
      </div>

      <hr>

      <div class="sct">
        <h5 class='validate_title' id='schedule_visit_to_title'>訪問相手を選択（複数可）</h5>
        <ul class="layout">
          <li class="layout--li fix--90">
            <div class="exp">
              <div class="checkbox">
                <div>
                  <input type="checkbox" group='schedule_visit_to' id="visit_to_1" name="visit_to[]" value="1" />
                  <label for="visit_to_1"><span></span>Dr</label>
                </div>
              </div>
            </div>
          </li>
          <li class="layout--li fix--90">
            <div class="exp">
              <div class="checkbox">
                <div>
                  <input type="checkbox" group='schedule_visit_to' id="visit_to_2" name="visit_to[]" value="2" />
                  <label for="visit_to_2"><span></span>ME</label>
                </div>
              </div>
            </div>
          </li>
	 <li class="layout--li fix--90" style='width:120px'>
            <div class="exp">
              <div class="checkbox">
                <div>
                  <input type="checkbox" group='schedule_visit_to' id="visit_to_4" name="visit_to[]" value="4" />
                  <label for="visit_to_4"><span></span>決定権者</label>
                </div>
              </div>
            </div>
          </li>
	 <li class="layout--li fix--90" style='width:100px'>
            <div class="exp">
              <div class="checkbox">
                <div>
                  <input type="checkbox" group='schedule_visit_to' id="visit_to_5" name="visit_to[]" value="5" />
                  <label for="visit_to_5"><span></span>代理店</label>
                </div>
              </div>
            </div>
          </li>
          <li class="layout--li fix--90">
            <div class="exp">
              <div class="checkbox">
                <div>
                  <input type="checkbox" group='schedule_visit_to' id="visit_to_3" name="visit_to[]" value="3" />
                  <label for="visit_to_3"><span></span>その他</label>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>

      <hr>
      <div class="sct">
        <h5 id='visit_valid_type_title'>有効面談</h5>
        <ul class="layout">
          <li class="layout--li fix--90" style='width:200px'>
            <div class="exp">
              <div class="checkbox">
                <div>
                  <input type="checkbox" id="visit_valid_type" name="visit_valid_type" value="1" />
                  <label for="visit_valid_type"><span></span>有効面談だったか</label>
                </div>
              </div>
            </div>
          </li>          
        </ul>
        <div>
          <p style="position: absolute;
    right: 0;
    top: 0;
    width: 50%;
    color: gray;">qqq承知しました。
            では機関のフィルタリングとして、「今年」というの
            を追加することは可能でしょうか？
            ご検討お願いします。
          </p>
        </div>
      </div>

      <hr>
      <div class="sct crm_menu">
        <h5 class='validate_title' id='schedule_visit_type_title'>訪問内容を選択（複数可）</h5>
        <ul class="layout fix">
          <li class="layout--li fix--200" >
            <div class="exp">
              <div class="checkbox">
                <div>
                  <input type="checkbox" group='schedule_visit_type' id="visit_type_8" name="visit_type[]" value="8" />
                  <label for="visit_type_8"><span></span>PM営業</label>
                </div>
              </div>
            </div>
          </li>
	  <li class="layout--li fix--200">
            <div class="exp">
              <div class="checkbox">
                <div>
                  <input type="checkbox" group='schedule_visit_type' id="visit_type_9" name="visit_type[]" value="9" />
                  <label for="visit_type_9"><span></span>HV営業（CRTP含む）</label>
                </div>
              </div>
            </div>
          </li>
	  <li class="layout--li fix--200">
            <div class="exp">
              <div class="checkbox">
                <div>
                  <input type="checkbox" group='schedule_visit_type' id="visit_type_10" name="visit_type[]" value="10" />
                  <label for="visit_type_10"><span></span>ICM営業</label>
                </div>
              </div>
            </div>
          </li>	  
        </ul>
        <ul class="layout fix">
          <li class="layout--li fix--200">
            <div class="exp">
              <div class="checkbox">
                <div>
                  <input type="checkbox" group='schedule_visit_type' id="visit_type_13" name="visit_type[]" value="13" />
                  <label for="visit_type_13"><span></span>植込み立合い</label>
                </div>
              </div>
            </div>
          </li>
	  <li class="layout--li fix--200" >
            <div class="exp">
              <div class="checkbox">
                <div>
                  <input type="checkbox" group='schedule_visit_type' id="visit_type_15" name="visit_type[]" value="15" />
                  <label for="visit_type_15"><span></span>デバイス外来</label>
                </div>
              </div>
            </div>
          </li>
	  <li class="layout--li fix--200" style='width:300px'>
            <div class="exp">
              <div class="checkbox">
                <div>
                  <input type="checkbox" group='schedule_visit_type' id="visit_type_12" name="visit_type[]" value="12" />
                  <label for="visit_type_12"><span></span>説明会・勉強会・社内講演会など</label>
                </div>
              </div>
            </div>
          </li>
	        
        </ul>
        
	<ul class="layout fix">
          
	  <li class="layout--li fix--200" style='width:400px'>
            <div class="exp">
              <div class="checkbox">
                <div>
                  <input type="checkbox" group='schedule_visit_type' id="visit_type_14" name="visit_type[]" value="14" />
                  <label for="visit_type_14"><span></span>他科オペ立合い／非植込み施設の付帯業務</label>
                </div>
              </div>
            </div>
          </li>
         <li class="layout--li fix--200" >
            <div class="exp">
              <div class="checkbox">
                <div>
                  <input type="checkbox" group='schedule_visit_type' id="visit_type_11" name="visit_type[]" value="11" />
                  <label for="visit_type_11"><span></span>マテリアル使用</label>
                </div>
              </div>
            </div>
          </li>    
        </ul>
	<ul class="layout fix">          
          <li class="layout--li fix--200" style='width:250px'>
            <div class="exp">
              <div class="checkbox">
                <div>
                  <input type="checkbox" group='schedule_visit_type' id="visit_type_7" name="visit_type[]" value="7" />
                  <label for="visit_type_7"><span></span>メール（eプロモーション）</label>
                </div>
              </div>
            </div>
          </li>        
	  <li class="layout--li fix--200">
            <div class="exp">
              <div class="checkbox">
                <div>
                  <input type="checkbox" group='schedule_visit_type' id="visit_type_16" name="visit_type[]" value="16" />
                  <label for="visit_type_16"><span></span>ヘルプ（担当施設外）</label>
                </div>
              </div>
            </div>
          </li>
	  
         
        </ul>
	<ul class="layout fix">
           <li class="layout--li fix--200" style='width:250px'>
            <div class="exp">
              <div class="checkbox">
                <div>
                  <input type="checkbox" group='schedule_visit_type' id="visit_type_17" name="visit_type[]" value="17" />
                  <label for="visit_type_17"><span></span>同行</label>
                </div>
              </div>
            </div>
          </li>
	  <li class="layout--li fix--200" style='width:250px'>
            <div class="exp">
              <div class="checkbox">
                <div>
                  <input type="checkbox" group='schedule_visit_type' id="visit_type_4" name="visit_type[]" value="4" />
                  <label for="visit_type_4"><span></span>訪問したが会えず</label>
                </div>
              </div>
            </div>
          </li>    
        </ul>
        <ul class="layout comment">
          
	  <li class="layout--li padding--left--0">
            <textarea placeholder="フリーコメント..." id='visit_comment' name='visit_comment'></textarea>
          </li>
        </ul>
      </div>

      <hr>

      <div class="sct af_fce_menu">
        <h5>レポートを選択</h5>
        <ul class="layout">
          <li class="layout--li">
            <select class='report_type' name='fce_report_type'>
              <option data-display="活動報告を選択" value="0">なし</option>
              <option value="2">オペサポート活動報告</option>
              
            </select>
          </li>
          <li class="layout--li"></li>
        </ul>
      </div>

      <div class="sct af_sales_menu">
        <h5>レポートを選択</h5>
        <ul class="layout">
          <li class="layout--li">
            <select class='report_type' name='sales_report_type'>
              <option data-display="活動報告を選択" value="0">なし</option>
              <option value="1">営業活動報告</option>
              
            </select>
          </li>
          <li class="layout--li"></li>
        </ul>
      </div>

      <hr class="show_on_report" style='display:none;'>

      <div class="sct show_on_sales_work_report" style='display:none;'>
        <h3>営業活動報告</h3>
      </div>

      <div class="sct show_on_sales_work_report" style='display:none;'>
        <h5>営業内容を選択（複数可）</h5>
        <ul class="layout fix">
          <li class="layout--li fix--200">
            <div class="exp">
              <div class="checkbox">
                <div>
                  <input type="checkbox" group='report_sales_type' id="report_sales_type_1" name="sales_type[]" value="1" />
                  <label for="report_sales_type_1"><span></span>3D Mapping関連</label>
                </div>
              </div>
            </div>
          </li>
          <li class="layout--li fix--200">
            <div class="exp">
              <div class="checkbox">
                <div>
                  <input type="checkbox" group='report_sales_type' id="report_sales_type_2" name="sales_type[]" value="2" />
                  <label for="report_sales_type_2"><span></span>キャピタル関連</label>
                </div>
              </div>
            </div>
          </li>
          <li class="layout--li fix--200">
            <div class="exp">
              <div class="checkbox">
                <div>
                  <input type="checkbox" group='report_sales_type' id="report_sales_type_3" name="sales_type[]" value="3" />
                  <label for="report_sales_type_3"><span></span>Sensithermo・ICE関連</label>
                </div>
              </div>
            </div>
          </li>
        </ul>
        <ul class="layout fix">

          

        

          <li class="layout--li fix--200">
            <div class="exp">
              <div class="checkbox">
                <div>
                  <input type="checkbox" group='report_sales_type' id="report_sales_type_6" name="sales_type[]" value="6" />
                  <label for="report_sales_type_6"><span></span>会えなかった/立会だけで営業はできなかった</label>
                </div>
              </div>
            </div>
          </li>
          <li class="layout--li fix--200">
            <div class="exp">
              <div class="checkbox">
                <div>
                  <input type="checkbox" group='report_sales_type' id="report_sales_type_5" name="sales_type[]" value="5" />
                  <label for="report_sales_type_5"><span></span>CRM事業ヘルプ</label>
                </div>
              </div>
            </div>
          </li>
          <li class="layout--li fix--200">
            <div class="exp">
              <div class="checkbox">
                <div>
                  <input type="checkbox" group='report_sales_type'  id="report_sales_type_7" name="sales_type[]" value="7" />
                  <label for="report_sales_type_7"><span></span>その他</label>
                </div>
              </div>
            </div>
          </li>
        </ul>
        <ul class="layout comment">
          <li class="layout--li padding--left--0">
            <textarea placeholder="フリーコメント..." id='report_remarks' name='remarks'></textarea>
          </li>
        </ul>
      </div>

      <hr class="show_on_ope_support_report" style='display:none;'>

      <div class="sct show_on_ope_support_report" style='display:none;'>
        <h3>オペサポート活動報告</h3>
        <ul class="layout">
          <li class="layout--li">
            <select id='ope_support_case_name' name='case_name'>
              <option data-display="症例名を選択..." value="0">選択...</option>
              <option value="1">PSVT (ABL)</option>
              <option value="2">AT/uncommonAFL (ABL)</option>
              <option value="3">Common AFL (ABL)</option>
              <option value="4">AF (ABL)</option>
              <option value="5">VPC (ABL)</option>
              <option value="6">VT (ABL)</option>
              <option value="7">VT,VF : Epi (ABL)</option>
              <option value="8">Brady/Tachy (EPS)</option>
              <option value="9">BRK (ICE)</option>
              <option value="10">ASD/VSD (ICE)</option>
              <option value="11">TAVI (ICE)</option>
              <option value="12">PTAV/PTMV (ICE)</option>
              <option value="13">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='ope_support_capital' name='capital'>
              <option data-display="キャピタルを選択..." value="0">選択...</option>
              <option value="1">Lab (Cardio Lab)</option>
              <option value="2">Lab (EPWM/Claris)</option>
              <option value="3">Ensite</option>
              <option value="4">ViewMate</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='ope_support_witness_content' name='witness_content'>
              <option data-display="立会い内容を選択..." value="0">選択...</option>
              <option value="1">単独操作</option>
              <option value="2">OJTサポートあり</option>
              <option value="3">ME/代理店操作</option>
              <option value="4">社員OJT</option>
              <option value="5">症例見学</option>
              <option value="6">製品説明会</option>
              <option value="7">ME業務移管・トレーニング</option>
              <option value="8">トラブルシューティング</option>
              <option value="9">COEサポート</option>
              <option value="10">CRMデバイスヘルプ</option>
            </select>
          </li>
        </ul>
        <ul class="layout comment">
          <li class="layout--li padding--left--0">
            <textarea placeholder="フリーコメント..." id='ope_support_remarks' name='ope_support_remarks'></textarea>
          </li>
        </ul>
      </div>

      <hr class="navx_report" style='display:none;'>

      <div class="sct navx_report" style='display:none;'>
        <h3>NavXレポート</h3>
        <h5 id='navx_case_type_title'>*4.症例の基本情報を選択してください。</h5>
        <ul class="layout">
          <li class="layout--li">
            <select id='navx_case_type' name='navx_case_type' class='navx_report_form'>
              <option data-display="症例の種類" value="0">選択...</option>
              <option value="1">発作性AF 1st</option>
              <option value="2">発作性AF 2nd以降</option>
              <option value="3">持続性AF 1st</option>
              <option value="4">持続性AF 2nd以降</option>
              <option value="5">慢性AF 1st</option>
              <option value="6">慢性AF 2nd以降</option>
              <option value="7">AFL</option>
              <option value="8">AT</option>
              <option value="9">VT</option>
              <option value="10">RVOT</option>
              <option value="11">LVOT</option>
              <option value="12">PSVT</option>
              <option value="13">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='system_in_case' name='system_in_case' class='navx_report_form'>
              <option data-display="症例で使用したシステム" value="0">選択...</option>
              <option value="1">NavX</option>
              <option value="2">NavX+CRYO</option>
              <option value="3">その他</option>
              <option value="4">未使用</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='ablation_catheter_combination' name='ablation_catheter_combination' class='navx_report_form'>
              <option data-display="使用したアブカテの組み合わせ" value="0">選択...</option>
              <option value="1">イリゲーション</option>
              <option value="2">Non イリゲーション</option>
              <option value="3">Non イリゲーションとイリゲーション</option>
              <option value="4">未使用</option>
            </select>
          </li>
        </ul>
      </div>

      <div class="sct navx_report" style='display:none;'>
        <h5>5.使用したアブレーションカテーテルのメーカーと種類を選択してください。</h5>
        <ul class="layout">
          <li class="layout--li">
            <select id='ablation_catheter_type_sjm' name='ablation_catheter_type_sjm' class='navx_report_form'>
              <option data-display="SJM" value="0">選択...</option>
              <option value="1">FlexAbility</option>
              <option value="2">FlexAbilitySE</option>
              <option value="3">Tacticath</option>
              <option value="4">TacticathSE</option>
              <option value="5">クールフレックス</option>
              <option value="6">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='ablation_catheter_type_jnj' name='ablation_catheter_type_jnj' class='navx_report_form'>
              <option data-display="JNJ" value="0">選択...</option>
              <option value="1">セルシウス</option>
              <option value="2">サーモクール</option>
              <option value="3">サーモクールSF</option>
              <option value="4">スマートタッチ</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='ablation_catheter_type_bsx' name='ablation_catheter_type_bsx' class='navx_report_form'>
              <option data-display="BSX" value="0">選択...</option>
              <option value="1">ブレーザーⅡ（8mm）</option>
              <option value="2">ブレーザーⅡ（10mm）</option>
              <option value="3">MIFI</option>
            </select>
          </li>
        </ul>
        <ul class="layout">
          <li class="layout--li">
            <select id='ablation_catheter_type_jll' name='ablation_catheter_type_jll' class='navx_report_form'>
              <option data-display="JLL" value="0">選択...</option>
              <option value="1">アブレーズ(4mm)</option>
              <option value="2">アブレーズ(6mm)</option>
              <option value="3">アブレーズ(8mm)</option>
              <option value="4">ファンタジスタ(4mm)</option>
              <option value="5">ファンタジスタ(8mm)</option>
              <option value="6">ベルヌーイ</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='ablation_catheter_type_mdt' name='ablation_catheter_type_mdt' class='navx_report_form'>
              <option data-display="MDT" value="0">選択...</option>
              <option value="1">ブリーザマックス</option>
            </select>
          </li>
          <li class="layout--li"></li>
        </ul>
      </div>

      <div class="sct navx_report" style='display:none;'>
        <h5>6.使用した電カテのメーカー・極数を選択してください。</h5>
        <ul class="layout">
          <li class="layout--li">HRA</li>
          <li class="layout--li">
            <select id='electronic_catheter_hra_3_5' name='electronic_catheter_hra_3_5' class='navx_report_form'>
              <option data-display="3~5極" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='electronic_catheter_hra_6_19' name='electronic_catheter_hra_6_19' class='navx_report_form'>
              <option data-display="6~19極" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='electronic_catheter_hra_20_24' name='electronic_catheter_hra_20_24' class='navx_report_form'>
              <option data-display="20~24極" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='electronic_catheter_hra_25' name='electronic_catheter_hra_25' class='navx_report_form'>
              <option data-display="25極~" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
        </ul>
        <ul class="layout">
          <li class="layout--li">HIS</li>
          <li class="layout--li">
            <select id='electronic_catheter_his_3_5' name='electronic_catheter_his_3_5' class='navx_report_form'>
              <option data-display="3~5極" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='electronic_catheter_his_6_19' name='electronic_catheter_his_6_19' class='navx_report_form'>
              <option data-display="6~19極" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='electronic_catheter_his_20_24' name='electronic_catheter_his_20_24' class='navx_report_form'>
              <option data-display="20~24極" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='electronic_catheter_his_25' name='electronic_catheter_his_25' class='navx_report_form'>
              <option data-display="25極~" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
        </ul>
        <ul class="layout">
          <li class="layout--li">RV</li>
          <li class="layout--li">
            <select id='electronic_catheter_ra_3_5' name='electronic_catheter_ra_3_5' class='navx_report_form'>
              <option data-display="3~5極" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='electronic_catheter_ra_6_19' name='electronic_catheter_ra_6_19' class='navx_report_form'>
              <option data-display="6~19極" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='electronic_catheter_ra_20_24' name='electronic_catheter_ra_20_24' class='navx_report_form'>
              <option data-display="20~24極" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='electronic_catheter_ra_25' name='electronic_catheter_ra_25' class='navx_report_form'>
              <option data-display="25極~" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
        </ul>
        <ul class="layout">
          <li class="layout--li">CS</li>
          <li class="layout--li">
            <select id='electronic_catheter_cs_3_5' name='electronic_catheter_cs_3_5' class='navx_report_form'>
              <option data-display="3~5極" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='electronic_catheter_cs_6_19' name='electronic_catheter_cs_6_19' class='navx_report_form'>
              <option data-display="6~19極" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='electronic_catheter_cs_20_24' name='electronic_catheter_cs_20_24' class='navx_report_form'>
              <option data-display="20~24極" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='electronic_catheter_cs_25' name='electronic_catheter_cs_25' class='navx_report_form'>
              <option data-display="25極~" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
        </ul>
        <ul class="layout">
          <li class="layout--li">HRA-CS</li>
          <li class="layout--li">
            <select id='electronic_catheter_hrs_cs_3_5' name='electronic_catheter_hrs_cs_3_5' class='navx_report_form'>
              <option data-display="3~5極" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='electronic_catheter_hrs_cs_6_19' name='electronic_catheter_hrs_cs_6_19' class='navx_report_form'>
              <option data-display="6~19極" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='electronic_catheter_hrs_cs_20_24' name='electronic_catheter_hrs_cs_20_24' class='navx_report_form'>
              <option data-display="20~24極" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='electronic_catheter_hrs_cs_25' name='electronic_catheter_hrs_cs_25' class='navx_report_form'>
              <option data-display="25極~" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
        </ul>
        <ul class="layout">
          <li class="layout--li">HIS-RV</li>
          <li class="layout--li">
            <select id='electronic_catheter_his_rv_3_5' name='electronic_catheter_his_rv_3_5' class='navx_report_form'>
              <option data-display="3~5極" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='electronic_catheter_his_rv_6_19' name='electronic_catheter_his_rv_6_19' class='navx_report_form'>
              <option data-display="6~19極" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='electronic_catheter_his_rv_20_24' name='electronic_catheter_his_rv_20_24' class='navx_report_form'>
              <option data-display="20~24極" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='electronic_catheter_his_rv_25' name='electronic_catheter_his_rv_25' class='navx_report_form'>
              <option data-display="25極~" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
        </ul>
        <ul class="layout">
          <li class="layout--li">T-Valve</li>
          <li class="layout--li">
            <select id='electronic_catheter_t_value_3_5' name='electronic_catheter_t_value_3_5' class='navx_report_form'>
              <option data-display="3~5極" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='electronic_catheter_t_value_6_19' name='electronic_catheter_t_value_6_19' class='navx_report_form'>
              <option data-display="6~19極" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='electronic_catheter_t_value_20_24' name='electronic_catheter_t_value_20_24' class='navx_report_form'>
              <option data-display="20~24極" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='electronic_catheter_t_value_25' name='electronic_catheter_t_value_25' class='navx_report_form'>
              <option data-display="25極~" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
        </ul>
        <ul class="layout">
          <li class="layout--li">PV1</li>
          <li class="layout--li">
            <select id='electronic_catheter_pv1_3_5' name='electronic_catheter_pv1_3_5' class='navx_report_form'>
              <option data-display="3~5極" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='electronic_catheter_pv1_6_19' name='electronic_catheter_pv1_6_19' class='navx_report_form'>
              <option data-display="6~19極" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='electronic_catheter_pv1_20_24' name='electronic_catheter_pv1_20_24' class='navx_report_form'>
              <option data-display="20~24極" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='electronic_catheter_pv1_25' name='electronic_catheter_pv1_25' class='navx_report_form'>
              <option data-display="25極~" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
        </ul>
        <ul class="layout">
          <li class="layout--li">PV2</li>
          <li class="layout--li">
            <select id='electronic_catheter_pv2_3_5' name='electronic_catheter_pv2_3_5' class='navx_report_form'>
              <option data-display="3~5極" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='electronic_catheter_pv2_6_19' name='electronic_catheter_pv2_6_19' class='navx_report_form'>
              <option data-display="6~19極" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='electronic_catheter_pv2_20_24' name='electronic_catheter_pv2_20_24' class='navx_report_form'>
              <option data-display="20~24極" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='electronic_catheter_pv2_25' name='electronic_catheter_pv2_25' class='navx_report_form'>
              <option data-display="25極~" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
        </ul>
        <ul class="layout">
          <li class="layout--li">PV3</li>
          <li class="layout--li">
            <select id='electronic_catheter_pv3_3_5' name='electronic_catheter_pv3_3_5' class='navx_report_form'>
              <option data-display="3~5極" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='electronic_catheter_pv3_6_19' name='electronic_catheter_pv3_6_19' class='navx_report_form'>
              <option data-display="6~19極" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='electronic_catheter_pv3_20_24' name='electronic_catheter_pv3_20_24' class='navx_report_form'>
              <option data-display="20~24極" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='electronic_catheter_pv3_25' name='electronic_catheter_pv3_25' class='navx_report_form'>
              <option data-display="25極~" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
        </ul>
        <ul class="layout">
          <li class="layout--li">Mapping</li>
          <li class="layout--li">
            <select id='electronic_catheter_mapping_3_5' name='electronic_catheter_mapping_3_5' class='navx_report_form'>
              <option data-display="3~5極" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='electronic_catheter_mapping_6_19' name='electronic_catheter_mapping_6_19' class='navx_report_form'>
              <option data-display="6~19極" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='electronic_catheter_mapping_20_24' name='electronic_catheter_mapping_20_24' class='navx_report_form'>
              <option data-display="20~24極" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='electronic_catheter_mapping_25' name='electronic_catheter_mapping_25' class='navx_report_form'>
              <option data-display="25極~" value="0">選択...</option>
              <option value="1">SJM</option>
              <option value="2">NK</option>
              <option value="3">JNJ</option>
              <option value="4">JLL</option>
              <option value="5">その他</option>
            </select>
          </li>
        </ul>
      </div>

      <div class="sct navx_report" style='display:none;'>
        <h5 id='ice_status_title'>*7.ICEとSensithermの使用状況を選択してください。</h5>
        <ul class="layout">
          <li class="layout--li">
            <select id='ice_status' name='ice_status' class='navx_report_form'>
              <option data-display="ICE" value="0">選択...</option>
              <option value="1">不使用</option>
              <option value="2">SJM</option>
              <option value="3">NK</option>
              <option value="4">JNJ(アキュナビ)</option>
              <option value="5">JNJ(サウンドスター)</option>
              <option value="6">BSX</option>
              <option value="7">JLL</option>
              <option value="8">その他</option>
            </select>
          </li>
          <li class="layout--li">
            <select id='sensiterm_status' name='sensiterm_status' class='navx_report_form'>
              <option data-display="Sensitherm" value="0">選択...</option>
              <option value="1" >不使用</option>
              <option value="2">SJM(3極)</option>
              <option value="3">SJM(5/7極)</option>
              <option value="4">日本ライフライン</option>
              <option value="5">その他</option>
            </select>
          </li>
        </ul>
        <ul class="layout comment">
          <li class="layout--li padding--left--0">
            <textarea placeholder="その他（具体的に）..." id='navx_remarks' name='navx_remarks'></textarea>
          </li>
        </ul>
      </div>

      <div class="sct navx_report" style='display:none;'>
        <h5 id='case_amounts_title'>*8.この結果が該当する症例数をお選びください。</h5>
        <ul class="layout">
          <li class="layout--li">
            <select id='case_amounts' name='case_amounts' class='navx_report_form'>
              <option data-display="症例数" value="0">選択...</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </li>
          <li class="layout--li visibli-lg"></li>
          <li class="layout--li visibli-lg"></li>
          <li class="layout--li visibli-lg"></li>
        </ul>
      </div>

      <hr>

      <div class="sct t--right">
        <button type="button" class="sc--delete" id='schedule_delete'>削除</button>
        <button type="button" class="cancel m1">キャンセル</button>
        <button type="button" class="report" id='schedule_report' style='display:none'>実績報告</button>
        <button type="button" class="submit" id='schedule_add'>予定登録</button>
        <input type='hidden' name='send_report' value="" id='send_report'>
        <input type='hidden' name='schedule_inactivate' value="" id='schedule_inactivate'>
        <span style='display:none;' id='report_btn_default_show'><?php echo $_smarty_tpl->tpl_vars['report_btn_default_show']->value;?>
</span>
        <span style='display:none;' id='navx_report_id'></span>
        
      </div>

    </form>
  </div>
</div>
<!-- /.modal1 m1 edit schedule -->

<!-- modal2 m2 search -->
<div class="modal2">
  <div class="mbox">
    <form method='get' action='/day' id='search_form'>
      <button type="button" class="m2"><i class="fa fa-close" aria-hidden="true"></i><span class="visible-lg">閉じる</span></button>
      <h4>検索</h4>

      <hr>

      <div class="sct">
        <input id="search_district" class="underline margin--bottom--1" placeholder="*Districtを入力してください..." autofocus type='search'>
        <span class="blank_district_id" style="display: block;margin-bottom: 1.5rem;font-size: 12px;font-weight: 500;color: #888;margin-top: -10px;">*未入力時は、ログインしているdistrictがデフォルトになります。</span>
        <input type='hidden' name='district_id' id='search_district_id'>
        <input id="search_facility" class="underline" placeholder="訪問施設を入力...">
        <input type='hidden' name='facility_id' id='search_facility_id'>
        
      </div>

      <hr>

      <div class="sct t--right">
        <button type="button" class="cancel m2">キャンセル</button>
        <button type="submit" class="submit" id='search_submit'>検索する</button>
        <input type='hidden' name='search' value="search">
        
      </div>

    </form>
  </div>
</div>
<!-- /.modal2 m2 search -->


<!-- modal3 m3 menu -->
<div class="modal3">
  <div class="mbox">
    <button type="button" class="m3"><i class="fa fa-close" aria-hidden="true"></i></button>
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
  </div>
</div>
<!-- /.modal2 m2 search -->

<!-- modal4 m4 search -->
<div class="modal4">
  <div class="mbox">
    <form method='get' action='/result' id='search_result_form'>
      <button type="button" class="m4"><i class="fa fa-close" aria-hidden="true"></i><span class="visible-lg">閉じる</span></button>
      <h4>検索</h4>

      <hr>

      <div class="sct">
        <input id="result_district" class="underline margin--bottom--1" placeholder="*Districtを入力してください..." autofocus type='search'>
        <span class="blank_district_id" style="display: block;margin-bottom: 1.5rem;font-size: 12px;font-weight: 500;color: #888;margin-top: -10px;">*未入力時は、ログインしているdistrictがデフォルトになります。</span>
        <input type='hidden' name='district_id' id='result_district_id'>
        <input id="result_facility" class="underline" placeholder="訪問施設を入力...">
        <input type='hidden' name='facility_id' id='result_facility_id'>
        
      </div>

      <hr>

      <div class="sct t--right">
        <button type="button" class="cancel m2">キャンセル</button>
        <button type="submit" class="submit" id='result_submit'>検索する</button>
        <input type='hidden' name='search' value="search">
        
      </div>

    </form>
  </div>
</div>
<!-- /.modal4 m4 search -->

<?php }?>

<?php echo '<script'; ?>
>
  var account_type = '<?php echo $_smarty_tpl->tpl_vars['login_account_type']->value;?>
';
<?php echo '</script'; ?>
>

<!-- JS -->
<?php echo '<script'; ?>
 src="/assets/js/jquery-2.2.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/js/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/js/fastclick.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/js/app.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
