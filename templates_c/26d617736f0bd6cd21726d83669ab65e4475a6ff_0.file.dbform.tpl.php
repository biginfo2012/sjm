<?php
/* Smarty version 3.1.28, created on 2019-04-08 06:50:29
  from "/var/www/html/application/views/top/dbform.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5caaef35225af9_04125199',
  'file_dependency' => 
  array (
    '26d617736f0bd6cd21726d83669ab65e4475a6ff' => 
    array (
      0 => '/var/www/html/application/views/top/dbform.tpl',
      1 => 1551185273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5caaef35225af9_04125199 ($_smarty_tpl) {
?>

<div class="full clearfix">
    <div class="district">
        <form id='choose_district' method='post'>
            <input id="district" placeholder="Districtを入力してください..." autofocus type='search'>
            <input type='hidden' name='district_id' id='district_id'>
        </form>
        <form id="import_csv_form" method="post" action="/index.php/xlsx_import" enctype="multipart/form-data">
            <div class="form-group" >
                <input type="file" name="csvfile" style="font-size: 16px; font-weight: normal; padding: 0; height: auto; margin-top: 12px; margin-left: 30px;"/>
            </div>

            <input type="text" name="sheet" value="" placeholder="シート名" style="border: solid 1px #ccc; border-radius: 4px; height: 20px;  font-size: 14px; padding: 18px 10px; width: 200px; margin-top: 16px; margin-left: 30px;">

            <div style="padding:14px 0;">
            <a id="import_csv_btn" style="margin-left: 30px; display: block;background-color: #4CAF50; width: 130px;    text-align: center;  padding: 6px 5px;  border-radius: 6px;">Excelインポート</a>
            </div>
        </form>
    </div>
</div>
<?php }
}
