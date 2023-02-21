/*  jQuery Nice Select - v1.0
    https://github.com/hernansartorio/jquery-nice-select
    Made by Hernรกn Sartorio  */
!function(e){e.fn.niceSelect=function(t){function s(t){t.after(e("<div></div>").addClass("nice-select").addClass(t.attr("class")||"").addClass(t.attr("disabled")?"disabled":"").attr("tabindex",t.attr("disabled")?null:"0").html('<span class="current"></span><ul class="list"></ul>'));var s=t.next(),n=t.find("option"),i=t.find("option:selected");s.find(".current").html(i.data("display")||i.text()),n.each(function(t){var n=e(this),i=n.data("display");s.find("ul").append(e("<li></li>").attr("data-value",n.val()).attr("data-display",i||null).addClass("option"+(n.is(":selected")?" selected":"")+(n.is(":disabled")?" disabled":"")).html(n.text()))})}if("string"==typeof t)return"update"==t?this.each(function(){var t=e(this),n=e(this).next(".nice-select"),i=n.hasClass("open");n.length&&(n.remove(),s(t),i&&t.next().trigger("click"))}):"destroy"==t?(this.each(function(){var t=e(this),s=e(this).next(".nice-select");s.length&&(s.remove(),t.css("display",""))}),0==e(".nice-select").length&&e(document).off(".nice_select")):console.log('Method "'+t+'" does not exist.'),this;this.hide(),this.each(function(){var t=e(this);t.next().hasClass("nice-select")||s(t)}),e(document).off(".nice_select"),e(document).on("click.nice_select",".nice-select",function(t){var s=e(this);e(".nice-select").not(s).removeClass("open"),s.toggleClass("open"),s.hasClass("open")?(s.find(".option"),s.find(".focus").removeClass("focus"),s.find(".selected").addClass("focus")):s.focus()}),e(document).on("click.nice_select",function(t){0===e(t.target).closest(".nice-select").length&&e(".nice-select").removeClass("open").find(".option")}),e(document).on("click.nice_select",".nice-select .option:not(.disabled)",function(t){var s=e(this),n=s.closest(".nice-select");n.find(".selected").removeClass("selected"),s.addClass("selected");var i=s.data("display")||s.text();n.find(".current").text(i),n.prev("select").val(s.data("value")).trigger("change")}),e(document).on("keydown.nice_select",".nice-select",function(t){var s=e(this),n=e(s.find(".focus")||s.find(".list .option.selected"));if(32==t.keyCode||13==t.keyCode)return s.hasClass("open")?n.trigger("click"):s.trigger("click"),!1;if(40==t.keyCode){if(s.hasClass("open")){var i=n.nextAll(".option:not(.disabled)").first();i.length>0&&(s.find(".focus").removeClass("focus"),i.addClass("focus"))}else s.trigger("click");return!1}if(38==t.keyCode){if(s.hasClass("open")){var l=n.prevAll(".option:not(.disabled)").first();l.length>0&&(s.find(".focus").removeClass("focus"),l.addClass("focus"))}else s.trigger("click");return!1}if(27==t.keyCode)s.hasClass("open")&&s.trigger("click");else if(9==t.keyCode&&s.hasClass("open"))return!1});var n=document.createElement("a").style;return n.cssText="pointer-events:auto","auto"!==n.pointerEvents&&e("html").addClass("no-csspointerevents"),this}}(jQuery);

$(document).ready(function() {
  $('select').niceSelect();
});


/*!
    Autosize 1.18.12
    license: MIT
    http://www.jacklmoore.com/autosize
*/
(function(e){var t,o={className:"autosizejs",id:"autosizejs",append:"\n",callback:!1,resizeDelay:10,placeholder:!0},i='<textarea tabindex="-1" style="position:absolute; top:-999px; left:0; right:auto; bottom:auto; border:0; padding: 0; -moz-box-sizing:content-box; -webkit-box-sizing:content-box; box-sizing:content-box; word-wrap:break-word; height:0 !important; min-height:0 !important; overflow:hidden; transition:none; -webkit-transition:none; -moz-transition:none;"/>',n=["fontFamily","fontSize","fontWeight","fontStyle","letterSpacing","textTransform","wordSpacing","textIndent","whiteSpace"],s=e(i).data("autosize",!0)[0];s.style.lineHeight="99px","99px"===e(s).css("lineHeight")&&n.push("lineHeight"),s.style.lineHeight="",e.fn.autosize=function(i){return this.length?(i=e.extend({},o,i||{}),s.parentNode!==document.body&&e(document.body).append(s),this.each(function(){function o(){var t,o=window.getComputedStyle?window.getComputedStyle(u,null):!1;o?(t=u.getBoundingClientRect().width,(0===t||"number"!=typeof t)&&(t=parseInt(o.width,10)),e.each(["paddingLeft","paddingRight","borderLeftWidth","borderRightWidth"],function(e,i){t-=parseInt(o[i],10)})):t=p.width(),s.style.width=Math.max(t,0)+"px"}function a(){var a={};if(t=u,s.className=i.className,s.id=i.id,d=parseInt(p.css("maxHeight"),10),e.each(n,function(e,t){a[t]=p.css(t)}),e(s).css(a).attr("wrap",p.attr("wrap")),o(),window.chrome){var r=u.style.width;u.style.width="0px",u.offsetWidth,u.style.width=r}}function r(){var e,n;t!==u?a():o(),s.value=!u.value&&i.placeholder?(p.attr("placeholder")||"")+i.append:u.value+i.append,s.style.overflowY=u.style.overflowY,n=parseInt(u.style.height,10),s.scrollTop=0,s.scrollTop=9e4,e=s.scrollTop,d&&e>d?(u.style.overflowY="scroll",e=d):(u.style.overflowY="hidden",c>e&&(e=c)),e+=w,n!==e&&(u.style.height=e+"px",f&&i.callback.call(u,u),p.trigger("autosize.resized"))}function l(){clearTimeout(h),h=setTimeout(function(){var e=p.width();e!==g&&(g=e,r())},parseInt(i.resizeDelay,10))}var d,c,h,u=this,p=e(u),w=0,f=e.isFunction(i.callback),z={height:u.style.height,overflow:u.style.overflow,overflowY:u.style.overflowY,wordWrap:u.style.wordWrap,resize:u.style.resize},g=p.width(),y=p.css("resize");p.data("autosize")||(p.data("autosize",!0),("border-box"===p.css("box-sizing")||"border-box"===p.css("-moz-box-sizing")||"border-box"===p.css("-webkit-box-sizing"))&&(w=p.outerHeight()-p.height()),c=Math.max(parseInt(p.css("minHeight"),10)-w||0,p.height()),p.css({overflow:"hidden",overflowY:"hidden",wordWrap:"break-word"}),"vertical"===y?p.css("resize","none"):"both"===y&&p.css("resize","horizontal"),"onpropertychange"in u?"oninput"in u?p.on("input.autosize keyup.autosize",r):p.on("propertychange.autosize",function(){"value"===event.propertyName&&r()}):p.on("input.autosize",r),i.resizeDelay!==!1&&e(window).on("resize.autosize",l),p.on("autosize.resize",r),p.on("autosize.resizeIncludeStyle",function(){t=null,r()}),p.on("autosize.destroy",function(){t=null,clearTimeout(h),e(window).off("resize",l),p.off("autosize").off(".autosize").css(z).removeData("autosize")}),r())})):this}})(jQuery||$);


// auto resize textarea
$(document).ready(function(){
    $('textarea').autosize();

    $("#import_csv_btn").click( function(){
      if(confirm("csvファイルをアップロードしますか?")) {
        if($(".form-group input").val() == "")
          {
            alert("ファイルを入力しなければなりません。");
            return;
          }
        $("#import_csv_form").submit();
      }
    });
});


// no return key
$('textarea').bind('keydown', function(e) {
    if (e.which == 13) {
        return false;
    }
}).bind('blur', function() {
    // 貼りつけられたテキストの改行コードを削除
    var $textarea = $(this),
        text = $textarea.val(),
        new_text = text.replace(/\n/g, "");
    if (new_text != text) {
        $textarea.val(new_text);
    }
});



// header change color on
// $(window).scroll(function() {
//   if($(this).scrollTop() > 100) {
//       $('header').addClass('change');
//   }
//   else {
//       $('header').removeClass('change');
//   }
// });


// modal1 add & edit schedule
$("a.m1, button.m1, button.m1-sp").click(function(){
  $("html").toggleClass("open-1");
  $('#schedule_inactivate').val(0);

  if($('html').hasClass('open-1')){
    schedule_id = $(this).data('schedule_id');
    worker_id = $(this).data('worker_id');
    $('#schedule_add').html('予定登録');
    $('#schedule_report').html('実績報告');

    $('#schedule_title').val('');
    $('#facility_name').val('');
    $('#facility_id').val('');

    $('#report_type_1_text span').html('');
    $('#report_type_2_text span').html('');
    $('#report_type_3_text span').html('');

    $('#report_type_1_text').css('display', 'none');
    $('#report_type_2_text').css('display', 'none');
    $('#report_type_3_text').css('display', 'none');

    $('.report_type option[value=3]').remove();
    $('select').niceSelect('update');

    date = new Date();

    $('#visit_schedule_year').val(date.getFullYear());
    $('#visit_schedule_month').val(date.getMonth()+1);
    $('#visit_schedule_day').val(date.getDate());

    $('#visit_schedule_start_hour').val('');
    $('#visit_schedule_start_min').val('');

    $('#visit_schedule_expire_hour').val('');
    $('#visit_schedule_expire_min').val('');

    $('.show_on_sales_work_report').css('display', 'none');
    $('.show_on_ope_support_report').css('display', 'none');
    $('.navx_report').css('display', 'none');

    if($('#report_btn_default_show').html() == 'true'){
      $('#schedule_report').css('display', 'inline-block');
    }

    $('#schedule_af_help').css('display','inline-block');
    $('#schedule_crm_help').css('display','inline-block');
    $('#schedule_crm_help').css('padding','0');

    $("input[group='schedule_visit_to']").prop('checked', false);
    $("input[group='schedule_visit_type']").prop('checked', false);
    $("input[group='sales_type']").prop('checked', false);

    $('#report_remarks').val('');

    $('#ope_support_case_name').val(0);
    $('#ope_support_capital').val(0);
    $('#ope_support_witness_content').val(0);
    $('#ope_support_remarks').val('');

    $('.navx_report_form').val(0);

    $('select').niceSelect('update');

    $('#navx_remarks').val('');

    // $('#schedule_report').css('display', 'none');
    $('#schedule_add').css('display', 'inline-block');
    $('#schedule_delete').css('display', 'none');
    $('#schedule_cancel').css('display', 'inline-block');

    $('#schedule_title_text').html('');
    $('#facility_name_text').html('');
    $('#visit_schedule_text').html('');

    $('#schedule_form').css('display','block');
    $('#schedule_text').css('display','none');

    if(schedule_id != ''){
      $('#schedule_form').css('display','none');
      $('#schedule_text').css('display','block');
    }

    $.ajax({
      url: "/ajax/get_account_detail",
      dataType: "json",
      type:'post',
      data : {
        'schedule_id'     : schedule_id,
        'employee_number' : worker_id,
      },
      success: function( result ) {

        $('.role_name').html(result['role_title']);
        $('#schedule_worker_id').val(result['employee_number']);
        $('#schedule_account_id').val(result['account_id']);
        $('#schedule_role_code').val(result['role_code']);
        $('#schedule_schedule_id').val(result['schedule_id']);

        if(result['role_code'] > 2 ){
          $('#schedule_af_help').css('display',  'inline-block');
          $('#schedule_crm_help').css('display', 'none');
        }
        if(result['role_code'] < 1 ){
          $('#schedule_af_help').css('display',  'none');
          $('#schedule_crm_help').css('display', 'inline-block');
          $('#schedule_crm_help').css('padding', '0 0.5rem 0.5rem 0');
        }

        if(result['role_code'] == 0){
          $('.crm_menu').css('display', 'none');
          $('.af_sales_menu').css('display', 'inline-block');
          $('.af_fce_menu').css('display', 'none');

        }else if(result['role_code'] == 1){
          $('.crm_menu').css('display', 'none');
          $('.af_sales_menu').css('display', 'none');
          $('.af_fce_menu').css('display', 'inline-block');

        }else{
          $('.crm_menu').css('display', 'inline-block');
          $('.af_sales_menu').css('display', 'none');
          $('.af_fce_menu').css('display', 'none');
        }

        if(schedule_id != ''){
          $('#schedule_delete').css('display', 'inline-block');

          $('#schedule_form').css('display','none');
          $('#schedule_text').css('display','block');

          $('#schedule_title').val(result['title']);
          $('#facility_name').val(result['facility_name']);
          $('#facility_id').val(result['facility_id']);

          $('#visit_schedule_year').val(result['visit_schedule_year']);
          $('#visit_schedule_month').val(result['visit_schedule_month']);
          $('#visit_schedule_day').val(result['visit_schedule_day']);

          $('#visit_schedule_start_hour').val(result['visit_schedule_start_hour']);
          $('#visit_schedule_start_min').val(result['visit_schedule_start_min']);

          $('#visit_schedule_expire_hour').val(result['visit_schedule_expire_hour']);
          $('#visit_schedule_expire_min').val(result['visit_schedule_expire_min']);

          $.each(result['visit_to'], function(index, el) {
            if(el == 1){
              $('#visit_to_'+index).prop('checked', true);
              $('#visit_to_'+index+'_text').css('display', 'inline-block');
            }
          });

          $.each(result['visit_type'], function(index, el) {
            if(el == 1){
              $('#visit_type_'+index).prop('checked', true);
              $('#visit_type_'+index+'_text').css('display', 'inline-block');
            }
          });

          $('#schedule_title_text').html(result['title']);
          $('#facility_name_text').html(result['facility_name']);
          $('#visit_schedule_text').html(result['visit_schedule_text']);
          $('#visit_time_text').html(result['visit_time_text']);
          $('#visit_to_text').html(result['visit_to_text']);
          $('#visit_type_text').html(result['visit_type_text']);

          $('#visit_comment').val(result['visit_comment']);
          $('#visit_comment_text').html(result['visit_comment']);

          $('.report_type').val(result['report_type']);

          $('#schedule_edit').css('display', 'inline-block');

          if(!result['editable']){
            // $('#schedule_cancel').css('display', 'none');
            $('#schedule_edit').css('display', 'none');
          }

          if(result['report_type'] == 1){

            $('.show_on_sales_work_report').css('display', 'block');
            $('#schedule_report').css('display', 'inline-block');

            $.each(result['sales_type'], function(index, el) {
              if(el == 1){
                $('#report_sales_type_'+index).prop('checked', true);
              }
            });

            $('#report_remarks').val(result['remarks']);

            $('#report_type_1_text').css('display', 'block');

            $('#report_sales_type_text').html(result['report_sales_type_text']);
            $('#report_remarks_txt').html(result['remarks']);

          }
		
          if(result['require_navx_report'] == 1){
            $('.report_type').append($('<option>').html("NavXレポート").val("3"));
            $('select').niceSelect('update');
          }

          if(result['report_type'] == 2){
            $('.show_on_ope_support_report').css('display', 'block');
            $('#schedule_report').css('display', 'inline-block');

            $('#ope_support_case_name').val(result['case_name']);
            $('#ope_support_capital').val(result['capital']);
            $('#ope_support_witness_content').val(result['witness_content']);
            $('#ope_support_remarks').val(result['ope_support_remarks']);

            $('#report_type_2_text').css('display', 'block');

            $('#ope_support_case_name_text').html(result['ope_support_case_name_text']);
            $('#ope_support_capital_text').html(result['ope_support_capital_text']);
            $('#ope_support_witness_content_text').html(result['ope_support_witness_content_text']);
            $('#ope_support_remarks_text').html(result['ope_support_remarks']);

          }

          if(result['report_type'] == 3){
            $('.navx_report').css('display', 'block');
            $('#schedule_report').css('display', 'inline-block');

            $('#navx_report_id').val(result['navx_report_id']);
            $('#navx_case_type').val(result['navx_case_type']);
            $('#system_in_case').val(result['system_in_case']);
            $('#ablation_catheter_combination').val(result['ablation_catheter_combination']);
            $('#ablation_catheter_type_sjm').val(result['ablation_catheter_type_sjm']);
            $('#ablation_catheter_type_jnj').val(result['ablation_catheter_type_jnj']);
            $('#ablation_catheter_type_bsx').val(result['ablation_catheter_type_bsx']);
            $('#ablation_catheter_type_jll').val(result['ablation_catheter_type_jll']);
            $('#ablation_catheter_type_mdt').val(result['ablation_catheter_type_mdt']);
            $('#electronic_catheter_hra_3_5').val(result['electronic_catheter_hra_3_5']);
            $('#electronic_catheter_hra_6_19').val(result['electronic_catheter_hra_6_19']);
            $('#electronic_catheter_hra_20_24').val(result['electronic_catheter_hra_20_24']);
            $('#electronic_catheter_hra_25').val(result['electronic_catheter_hra_25']);
            $('#electronic_catheter_his_3_5').val(result['electronic_catheter_his_3_5']);
            $('#electronic_catheter_his_6_19').val(result['electronic_catheter_his_6_19']);
            $('#electronic_catheter_his_20_24').val(result['electronic_catheter_his_20_24']);
            $('#electronic_catheter_his_25').val(result['electronic_catheter_his_25']);
            $('#electronic_catheter_ra_3_5').val(result['electronic_catheter_ra_3_5']);
            $('#electronic_catheter_ra_6_19').val(result['electronic_catheter_ra_6_19']);
            $('#electronic_catheter_ra_20_24').val(result['electronic_catheter_ra_20_24']);
            $('#electronic_catheter_ra_25').val(result['electronic_catheter_ra_25']);
            $('#electronic_catheter_cs_3_5').val(result['electronic_catheter_cs_3_5']);
            $('#electronic_catheter_cs_6_19').val(result['electronic_catheter_cs_6_19']);
            $('#electronic_catheter_cs_20_24').val(result['electronic_catheter_cs_20_24']);
            $('#electronic_catheter_cs_25').val(result['electronic_catheter_cs_25']);
            $('#electronic_catheter_hrs_cs_3_5').val(result['electronic_catheter_hrs_cs_3_5']);
            $('#electronic_catheter_hrs_cs_6_19').val(result['electronic_catheter_hrs_cs_6_19']);
            $('#electronic_catheter_hrs_cs_20_24').val(result['electronic_catheter_hrs_cs_20_24']);
            $('#electronic_catheter_hrs_cs_25').val(result['electronic_catheter_hrs_cs_25']);
            $('#electronic_catheter_his_rv_3_5').val(result['electronic_catheter_his_rv_3_5']);
            $('#electronic_catheter_his_rv_6_19').val(result['electronic_catheter_his_rv_6_19']);
            $('#electronic_catheter_his_rv_20_24').val(result['electronic_catheter_his_rv_20_24']);
            $('#electronic_catheter_his_rv_25').val(result['electronic_catheter_his_rv_25']);
            $('#electronic_catheter_t_value_3_5').val(result['electronic_catheter_t_value_3_5']);
            $('#electronic_catheter_t_value_6_19').val(result['electronic_catheter_t_value_6_19']);
            $('#electronic_catheter_t_value_20_24').val(result['electronic_catheter_t_value_20_24']);
            $('#electronic_catheter_t_value_25').val(result['electronic_catheter_t_value_25']);
            $('#electronic_catheter_pv1_3_5').val(result['electronic_catheter_pv1_3_5']);
            $('#electronic_catheter_pv1_6_19').val(result['electronic_catheter_pv1_6_19']);
            $('#electronic_catheter_pv1_20_24').val(result['electronic_catheter_pv1_20_24']);
            $('#electronic_catheter_pv1_25').val(result['electronic_catheter_pv1_25']);
            $('#electronic_catheter_pv2_3_5').val(result['electronic_catheter_pv2_3_5']);
            $('#electronic_catheter_pv2_6_19').val(result['electronic_catheter_pv2_6_19']);
            $('#electronic_catheter_pv2_20_24').val(result['electronic_catheter_pv2_20_24']);
            $('#electronic_catheter_pv2_25').val(result['electronic_catheter_pv2_25']);
            $('#electronic_catheter_pv3_3_5').val(result['electronic_catheter_pv3_3_5']);
            $('#electronic_catheter_pv3_6_19').val(result['electronic_catheter_pv3_6_19']);
            $('#electronic_catheter_pv3_20_24').val(result['electronic_catheter_pv3_20_24']);
            $('#electronic_catheter_pv3_25').val(result['electronic_catheter_pv3_25']);
            $('#electronic_catheter_mapping_3_5').val(result['electronic_catheter_mapping_3_5']);
            $('#electronic_catheter_mapping_6_19').val(result['electronic_catheter_mapping_6_19']);
            $('#electronic_catheter_mapping_20_24').val(result['electronic_catheter_mapping_20_24']);
            $('#electronic_catheter_mapping_25').val(result['electronic_catheter_mapping_25']);
            $('#ice_status').val(result['ice_status']);
            $('#sensiterm_status').val(result['sensiterm_status']);
            $('#navx_remarks').val(result['navx_remarks']);
            $('#case_amounts').val(result['case_amounts']);

            $('#report_type_3_text').css('display', 'block');

            $('#navx_case_type_text').html(result['navx_case_type_text']);
            $('#system_in_case_text').html(result['system_in_case_text']);
            $('#ablation_catheter_combination_text').html(result['ablation_catheter_combination_text']);
            $('#ablation_catheter_type_maker_text').html(result['ablation_catheter_type_maker_text']);
            $('#ablation_catheter_type_text').html(result['ablation_catheter_type_text']);

          }

          if(result['report_type'] != 0){
            $('#schedule_report').css('display', 'inline-block');
            $('#schedule_add').css('display', 'none');
          }

          $('#schedule_add').html('予定更新');

          if(result['report_type'] > 0){
            $('#schedule_report').html('実績更新');
          }

        }
        $('.report_type').val(result['report_type']);
        $('select').niceSelect('update');

      },error : function(xhr, textStatus, error){
        console.log(xhr, textStatus, error);
        return false;
      }
    });
  }
});


$('#schedule_add').on('click', function(){
  $('#schedule_inactivate').val(0);

  $('.validate_parts').css('border', 'solid 1px #cbcdce');
  $('.validate_title').css('color', '#383838');
  validate_error = false;

  if($('#schedule_title').val() == ''){
    $('#schedule_title').css('border', 'solid 1px #ff0000');
    validate_error = true;
  }

  if($('#facility_id').val() == ''){
    $('#facility_name').css('border', 'solid 1px #ff0000');
    validate_error = true;
  }

  if(isNaN($('#visit_schedule_year').val())){
    $('#schedule_visit_date_title').css('color', '#ff0000');
    validate_error = true;
  }

  if(isNaN($('#visit_schedule_day').val())){
    $('#schedule_visit_date_title').css('color', '#ff0000');
    validate_error = true;
  }

  if(isNaN($('#visit_schedule_start_hour').val())){
    $('#schedule_visit_date_time').css('color', '#ff0000');
    validate_error = true;
  }

  if(isNaN($('#visit_schedule_start_min').val())){
    $('#schedule_visit_time_title').css('color', '#ff0000');
    validate_error = true;
  }

  if(isNaN($('#visit_schedule_expire_hour').val())){
    $('#schedule_visit_time_title').css('color', '#ff0000');
    validate_error = true;
  }

  if(isNaN($('#visit_schedule_expire_min').val())){
    $('#schedule_visit_time_title').css('color', '#ff0000');
    validate_error = true;
  }

  start_date = $('#visit_schedule_start_hour').val() + $('#visit_schedule_start_min').val();
  expire_date = $('#visit_schedule_expire_hour').val() + $('#visit_schedule_expire_min').val();

  if(parseInt(start_date) > parseInt(expire_date)){
    alert('訪問時間に矛盾があります。');
    $('#schedule_visit_time_title').css('color', '#ff0000');
    validate_error = true;
  }


  if($("input[group='schedule_visit_to']:checked").length == 0){
    $('#schedule_visit_to_title').css('color', '#ff0000');
    validate_error = true;
  }

  if($('#schedule_role_code').val() > 1 && $("input[group='schedule_visit_type']:checked").length == 0){
    $('#schedule_visit_type_title').css('color', '#ff0000');
    validate_error = true;
  }


  if(validate_error){
    alert('入力内容に誤りがあります。');
  }else{
    conf_string = 'スケジュールを登録します。よろしいですか？';

    if($('#schedule_schedule_id').val() != ''){
      conf_string = 'スケジュールを更新します。よろしいですか？';
    }

    if(confirm(conf_string)){
      $('#send_report').val('false');
      $('#schedule_form').submit();
    }
  }
});

$('#schedule_delete').on('click', function(){

  conf_string = 'スケジュールを削除します。よろしいですか？';

  if(confirm(conf_string)){
    $('#schedule_inactivate').val(1);
    $('#schedule_form').submit();
  }

});



$('#visit_type_4').on('change', function(){
  if($(this).is(':checked')){
    $('#visit_type_1').prop('checked', false);
    $('#visit_type_2').prop('checked', false);
    $('#visit_type_3').prop('checked', false);
    $('#visit_type_5').prop('checked', false);
    $('#visit_type_6').prop('checked', false);
  }
});

$('#visit_type_1').on('change', function(){
  if($(this).is(':checked')){
    $('#visit_type_4').prop('checked', false);
  }
});

$('#visit_type_2').on('change', function(){
  if($(this).is(':checked')){
    $('#visit_type_4').prop('checked', false);
  }
});

$('#visit_type_3').on('change', function(){
  if($(this).is(':checked')){
    $('#visit_type_4').prop('checked', false);
  }
});

$('#visit_type_5').on('change', function(){
  if($(this).is(':checked')){
    $('#visit_type_4').prop('checked', false);
  }
});

$('#visit_type_6').on('change', function(){
  if($(this).is(':checked')){
    $('#visit_type_4').prop('checked', false);
  }
});


$('#report_sales_type_6').on('change', function(){
  if($(this).is(':checked')){
    $('#report_sales_type_1').prop('checked', false);
    $('#report_sales_type_2').prop('checked', false);
    $('#report_sales_type_3').prop('checked', false);
    $('#report_sales_type_5').prop('checked', false);
    $('#report_sales_type_7').prop('checked', false);
  }
});

$('#report_sales_type_1').on('change', function(){
  if($(this).is(':checked')){
    $('#report_sales_type_6').prop('checked', false);
  }
});

$('#report_sales_type_2').on('change', function(){
  if($(this).is(':checked')){
    $('#report_sales_type_6').prop('checked', false);
  }
});

$('#report_sales_type_3').on('change', function(){
  if($(this).is(':checked')){
    $('#report_sales_type_6').prop('checked', false);
  }
});

$('#report_sales_type_5').on('change', function(){
  if($(this).is(':checked')){
    $('#report_sales_type_6').prop('checked', false);
  }
});

$('#report_sales_type_7').on('change', function(){
  if($(this).is(':checked')){
    $('#report_sales_type_6').prop('checked', false);
  }
});



$('#schedule_report').on('click', function(){
  $('#schedule_inactivate').val(0);

  $('.validate_parts').css('border', 'solid 1px #cbcdce');
  $('.validate_title').css('color', '#383838');
  validate_error = false;

  if($('#schedule_title').val() == ''){
    $('#schedule_title').css('border', 'solid 1px #ff0000');
    validate_error = true;
  }

  if($('#facility_id').val() == ''){
    $('#facility_name').css('border', 'solid 1px #ff0000');
    validate_error = true;
  }

  if(isNaN($('#visit_schedule_year').val())){
    $('#schedule_visit_date_title').css('color', '#ff0000');
    validate_error = true;
  }

  if(isNaN($('#visit_schedule_day').val())){
    $('#schedule_visit_date_title').css('color', '#ff0000');
    validate_error = true;
  }

  if(isNaN($('#visit_schedule_start_hour').val())){
    $('#schedule_visit_date_time').css('color', '#ff0000');
    validate_error = true;
  }

  if(isNaN($('#visit_schedule_start_min').val())){
    $('#schedule_visit_time_title').css('color', '#ff0000');
    validate_error = true;
  }

  if(isNaN($('#visit_schedule_expire_hour').val())){
    $('#schedule_visit_time_title').css('color', '#ff0000');
    validate_error = true;
  }

  if(isNaN($('#visit_schedule_expire_min').val())){
    $('#schedule_visit_time_title').css('color', '#ff0000');
    validate_error = true;
  }

  start_date = $('#visit_schedule_start_hour').val() + $('#visit_schedule_start_min').val();
  expire_date = $('#visit_schedule_expire_hour').val() + $('#visit_schedule_expire_min').val();

  if(parseInt(start_date) > parseInt(expire_date)){
    alert('訪問時間に矛盾があります。');
    $('#schedule_visit_time_title').css('color', '#ff0000');
    validate_error = true;
  }

  if($("input[group='schedule_visit_to']:checked").length == 0){
    $('#schedule_visit_to_title').css('color', '#ff0000');
    validate_error = true;
  }

  if($('#schedule_role_code').val() > 1 && $("input[group='schedule_visit_type']:checked").length == 0){
    $('#schedule_visit_type_title').css('color', '#ff0000');
    validate_error = true;
  }

  if(report_type_value == 1){

  }else if(report_type_value == 3){

    if($('#navx_case_type').val() == 0 || $('#system_in_case').val() == 0 || $('#ablation_catheter_combination').val() == 0){
      $('#navx_case_type_title').css('color', '#ff0000');
      validate_error = true;
    }

    if($('#ice_status').val() == 0 || $('#sensiterm_status').val() == 0){
      $('#ice_status_title').css('color', '#ff0000');
      validate_error = true;
    }

    if($('#case_amounts').val() == 0){
      $('#case_amounts_title').css('color', '#ff0000');
      validate_error = true;
    }

  }

  if(validate_error){
    alert('入力内容に誤りがあります。');
  }else{
    conf_string = 'レポートを登録します。よろしいですか？';

    if(confirm(conf_string)){
      $('#send_report').val('true');
      $('#schedule_form').submit();
    }
  }
});

$('#schedule_edit').on('click', function(){
  $('#schedule_form').css('display', 'block');
  $('#schedule_text').css('display', 'none');

});

$('.visit_schedule_date').on('change', function(){
  validate_error = false;
  $('.visit_schedule_date').each(function(index, el) {
    if(isNaN($(this).val())){
      validate_error = true;
    }
  });

  if(!validate_error){
    $('#schedule_visit_date_title').css('color', '#383838');
  }
});

$('.visit_schedule_time').on('change', function(){
  validate_error = false;
  $('.visit_schedule_time').each(function(index, el) {
    if(isNaN($(this).val())){
      validate_error = true;
    }
  });

  if(!validate_error){
    $('#schedule_visit_time_title').css('color', '#383838');
  }
});


$("input[group='schedule_visit_to']").on('change', function(){
  if($("input[group='schedule_visit_to']:checked").length > 0){
    $('#schedule_visit_to_title').css('color', '#383838');
  }
});

$("input[group='schedule_visit_type']").on('change', function(){
  if($("input[group='schedule_visit_type']:checked").length > 0){
    $('#schedule_visit_type_title').css('color', '#383838');
  }
});

$('#schedule_title').on('blur', function(){
  if($('#schedule_title').val() != ''){
    $('#schedule_title').css('border', 'solid 1px #cbcdce');
  }
});

$('#facility_id').on('change', function(){
  if($('#facility_id').val() != ''){
    $('#facility_name').css('border', 'solid 1px #cbcdce');
  }
});

  // if($('#facility_id').val() == ''){
  //   $('#facility_name').css('border', 'solid 1px #ff0000');
  //   validate_error = true;
  // }

  // if($("input[group='schedule_visit_type']:checked").length == 0){
  //   $('#schedule_visit_type_title').css('color', '#ff0000');
  //   validate_error = true;
  // }


document.addEventListener('keyup', function(e){
  if(e.which == 27){
    $("html").removeClass('open-1');
  }
})


// modal2 search
$("a.m2, button.m2, h1.m2").click(function(){
  $("html").toggleClass("open-2");

  if($('html').hasClass('open-2')){
    date = new Date();

    // sessionからログイン中のdistrict_idを取ってきます
    $.ajax({
      url: "/ajax/login_district",
      dataType: "json",
      success: function( result ) {
       // item = ui.item['labels'].split('_');
        $('#search_district').val(result['name']);
        $('#search_district_id').val(result['district_id']);

      },error : function(xhr, textStatus, error){
        // console.log(xhr, textStatus, error);
        return false;
      }
    });

    // $('#search_district').val('');
    $('#search_facility').val('');
    $('select').niceSelect('update');
  }

});

document.addEventListener('keyup', function(e){
  if(e.which == 27){
    $("html").removeClass('open-2');
   }
})


// modal3 menu
$("a.m3, button.m3").click(function(){
  $("html").toggleClass("open-3");
});

document.addEventListener('keyup', function(e){
  if(e.which == 27){
    $("html").removeClass('open-3');
   }
})


// modal4 search
$("a.m4, button.m4").click(function(){
  $("html").toggleClass("open-4");
  // console.log('L750');

  if($('html').hasClass('open-4')){
    $('.mbox form').css('opacity', 1);
    $('button.m4').css('opacity', 1);
    date = new Date();

    // sessionからログイン中のdistrict_idを取ってきます
    $.ajax({
      url: "/ajax/login_district",
      dataType: "json",
      success: function( result ) {
       // item = ui.item['labels'].split('_');
        $('#result_district').val(result['name']);
        $('#result_district_id').val(result['district_id']);

      },error : function(xhr, textStatus, error){
        // console.log(xhr, textStatus, error);
        return false;
      }
    });

    // $('#result_district').val('');
    $('#result_facility').val('');
    $('select').niceSelect('update');

    // $('#result_date').val(""+( '0000' + $('#result_search_year').val() ).slice( -4 )+( '00' + $('#result_search_month').val() ).slice( -2 )+( '00' + $('#result_search_day').val() ).slice( -2 ));

  }else{
    $('.mbox form').css('opacity', 0);
    $('button.m4').css('opacity', 1);
  }

});

document.addEventListener('keyup', function(e){
  if(e.which == 27){
    $("html").removeClass('open-4');
   }
})


// district suggest form
$(function() {
  $('#district').autocomplete({
    source: function( req, res ) {
      $.ajax({
        url: "/suggest/district?suggest_word="+encodeURIComponent(req.term),
        scriptCharset: "utf-8" ,
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
        dataType: "json",
        success: function( result ) {
          $('#district_id').val('');
          console.log(result);
          res(result);
        },error : function(xhr, textStatus, error){
          console.log(xhr, textStatus, error);
          return false;
        }
      });

    },
    autoFocus: true,
    delay: 1000,
    minLength: 1,
    select : function(e, ui){
      $(this).blur();
      $('#district_id').val(ui.item['labels']);
      $('#choose_district').submit();
    }
  });

  $('#district').on('keydown', function(e){
    if (((e.which && e.which === 13) || (e.keyCode && e.keyCode === 13)) && $('#district_id').val() == '') {
      // $(this).blur();
      return false;
    } else {
      return true;
    }
  });

} );


// facility suggest form
$(function() {

  $('#facility_name').autocomplete({
    source: function( req, res ) {
      $.ajax({
        url: "/suggest/facility?suggest_word="+encodeURIComponent(req.term),
        scriptCharset: "utf-8" ,
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",        
        dataType: "json",
        success: function( result ) {
          $('#facility_id').val('');
          // console.log(result);
          res(result);
        },error : function(xhr, textStatus, error){
          // console.log(xhr, textStatus, error);
          return false;
        }
      });
    },
    autoFocus: true,
    delay: 1000,
    minLength: 1,
    select : function(e, ui){
      $('.report_type option[value=3]').remove();
      // $(this).blur();
	 
	  /*item = ui.item['labels'].toString().split('_');
      $('#facility_id').val(item[0]);
	  alert(item[0]);
      if(item[1] == 1){
        $('.report_type').append($('<option>').html("NavXレポート").val("3"));
      }else{
        $('.report_type option[value=3]').remove();
      }
      $('select').niceSelect('update');*/


	   var i = ui.item['labels'].indexOf('_');
	   ui.item['labels'].substring(0, i);
	   $('#facility_id').val(ui.item['labels'].substring(0, i));
		
	   if(ui.item['labels'].substring(i+1) == 1){
			$('.report_type').append($('<option>').html("NavXレポート").val("3"));
	   }else{
			$('.report_type option[value=3]').remove();
      }
      $('select').niceSelect('update');
    }
  });

});


// 横スクロール、縦 fixed
$(window).on('scroll', function () {
  var $w = $(window);
  // $('.pfx').css('left', $w.scrollLeft());
  $('.pfy').css('top', $w.scrollTop());
});


// fastclick
$(function() {
  FastClick.attach(document.body);
});

var report_type_value = 0;
$('.report_type').on('change', function(){
  report_type_value = $(this).val();

  $('.show_on_sales_work_report').css('display', 'none');
  $('.show_on_ope_support_report').css('display', 'none');
  $('.navx_report').css('display', 'none');
  $('#schedule_report').css('display', 'none');
  $('#schedule_add').css('display', 'inline-block');

  if(report_type_value == 1){
    $('.show_on_sales_work_report').css('display', 'block');
    $('#schedule_report').css('display', 'inline-block');
    $('#schedule_add').css('display', 'none');
  }

  if(report_type_value == 2){
    $('.show_on_ope_support_report').css('display', 'block');
    $('#schedule_report').css('display', 'inline-block');
    $('#schedule_add').css('display', 'none');
  }

  if(report_type_value == 3){
    $('.navx_report').css('display', 'block');
    $('#schedule_report').css('display', 'inline-block');
    $('#schedule_add').css('display', 'none');
  }
})

$('.report_type').change();

$('#navx_case_type').on('change', function(){
    // ajax でとってきます
  $.ajax({
    url: "/ajax/get_navx_last",
    dataType: "json",
    type:'post',
    data : {
      'schedule_worker_id' : $('#schedule_worker_id').val(),
      'facility_id' : $('#facility_id').val(),
      'navx_case_type' : $('#navx_case_type').val(),
    },

    success: function( result ) {
      $('#system_in_case').val(result['system_in_case']);
      $('#ablation_catheter_combination').val(result['ablation_catheter_combination']);
      $('#ablation_catheter_type_sjm').val(result['ablation_catheter_type_sjm']);
      $('#ablation_catheter_type_jnj').val(result['ablation_catheter_type_jnj']);
      $('#ablation_catheter_type_bsx').val(result['ablation_catheter_type_bsx']);
      $('#ablation_catheter_type_jll').val(result['ablation_catheter_type_jll']);
      $('#ablation_catheter_type_mdt').val(result['ablation_catheter_type_mdt']);
      $('#electronic_catheter_hra_3_5').val(result['electronic_catheter_hra_3_5']);
      $('#electronic_catheter_hra_6_19').val(result['electronic_catheter_hra_6_19']);
      $('#electronic_catheter_hra_20_24').val(result['electronic_catheter_hra_20_24']);
      $('#electronic_catheter_hra_25').val(result['electronic_catheter_hra_25']);
      $('#electronic_catheter_his_3_5').val(result['electronic_catheter_his_3_5']);
      $('#electronic_catheter_his_6_19').val(result['electronic_catheter_his_6_19']);
      $('#electronic_catheter_his_20_24').val(result['electronic_catheter_his_20_24']);
      $('#electronic_catheter_his_25').val(result['electronic_catheter_his_25']);
      $('#electronic_catheter_ra_3_5').val(result['electronic_catheter_ra_3_5']);
      $('#electronic_catheter_ra_6_19').val(result['electronic_catheter_ra_6_19']);
      $('#electronic_catheter_ra_20_24').val(result['electronic_catheter_ra_20_24']);
      $('#electronic_catheter_ra_25').val(result['electronic_catheter_ra_25']);
      $('#electronic_catheter_cs_3_5').val(result['electronic_catheter_cs_3_5']);
      $('#electronic_catheter_cs_6_19').val(result['electronic_catheter_cs_6_19']);
      $('#electronic_catheter_cs_20_24').val(result['electronic_catheter_cs_20_24']);
      $('#electronic_catheter_cs_25').val(result['electronic_catheter_cs_25']);
      $('#electronic_catheter_hrs_cs_3_5').val(result['electronic_catheter_hrs_cs_3_5']);
      $('#electronic_catheter_hrs_cs_6_19').val(result['electronic_catheter_hrs_cs_6_19']);
      $('#electronic_catheter_hrs_cs_20_24').val(result['electronic_catheter_hrs_cs_20_24']);
      $('#electronic_catheter_hrs_cs_25').val(result['electronic_catheter_hrs_cs_25']);
      $('#electronic_catheter_his_rv_3_5').val(result['electronic_catheter_his_rv_3_5']);
      $('#electronic_catheter_his_rv_6_19').val(result['electronic_catheter_his_rv_6_19']);
      $('#electronic_catheter_his_rv_20_24').val(result['electronic_catheter_his_rv_20_24']);
      $('#electronic_catheter_his_rv_25').val(result['electronic_catheter_his_rv_25']);
      $('#electronic_catheter_t_value_3_5').val(result['electronic_catheter_t_value_3_5']);
      $('#electronic_catheter_t_value_6_19').val(result['electronic_catheter_t_value_6_19']);
      $('#electronic_catheter_t_value_20_24').val(result['electronic_catheter_t_value_20_24']);
      $('#electronic_catheter_t_value_25').val(result['electronic_catheter_t_value_25']);
      $('#electronic_catheter_pv1_3_5').val(result['electronic_catheter_pv1_3_5']);
      $('#electronic_catheter_pv1_6_19').val(result['electronic_catheter_pv1_6_19']);
      $('#electronic_catheter_pv1_20_24').val(result['electronic_catheter_pv1_20_24']);
      $('#electronic_catheter_pv1_25').val(result['electronic_catheter_pv1_25']);
      $('#electronic_catheter_pv2_3_5').val(result['electronic_catheter_pv2_3_5']);
      $('#electronic_catheter_pv2_6_19').val(result['electronic_catheter_pv2_6_19']);
      $('#electronic_catheter_pv2_20_24').val(result['electronic_catheter_pv2_20_24']);
      $('#electronic_catheter_pv2_25').val(result['electronic_catheter_pv2_25']);
      $('#electronic_catheter_pv3_3_5').val(result['electronic_catheter_pv3_3_5']);
      $('#electronic_catheter_pv3_6_19').val(result['electronic_catheter_pv3_6_19']);
      $('#electronic_catheter_pv3_20_24').val(result['electronic_catheter_pv3_20_24']);
      $('#electronic_catheter_pv3_25').val(result['electronic_catheter_pv3_25']);
      $('#electronic_catheter_mapping_3_5').val(result['electronic_catheter_mapping_3_5']);
      $('#electronic_catheter_mapping_6_19').val(result['electronic_catheter_mapping_6_19']);
      $('#electronic_catheter_mapping_20_24').val(result['electronic_catheter_mapping_20_24']);
      $('#electronic_catheter_mapping_25').val(result['electronic_catheter_mapping_25']);
      $('#ice_status').val(result['ice_status']);
      $('#sensiterm_status').val(result['sensiterm_status']);
      // $('#navx_remarks').val(result['navx_remarks']);
      $('#case_amounts').val(result['case_amounts']);

      $('select').niceSelect('update');

    },error : function(xhr, textStatus, error){
      console.log(xhr, textStatus, error);
      return false;
    }
  });

});



$('#login_validate').on('click', function(){
  login_form_id = $('#login_form_id').val();
  login_form_password = $('#login_form_password').val();

  if(login_form_id == ''){
    alert('ログインIDは必須です。');
    return false;
  }
  if(login_form_password == ''){
    alert('パスワードは必須です。');
    return false;
  }
  $('#login_form').submit();

});

// district suggest form
$(function() {
  $('#search_district').autocomplete({
    source: function( req, res ) {
      $.ajax({
        url: "/suggest/district?suggest_word="+req.term,
        dataType: "json",
        success: function( result ) {
          $('#search_district_id').val('');
          // console.log(result);
          res(result);
        },error : function(xhr, textStatus, error){
          // console.log(xhr, textStatus, error);
          return false;
        }
      });
    },
    autoFocus: true,
    delay: 1000,
    minLength: 1,
    select : function(e, ui){
      // $(this).blur();
      item = ui.item['labels'].split('_');
      $('#search_district_id').val(item[0]);
    }
  });

  $('#search_district').on('keydown', function(e){
    if (((e.which && e.which === 13) || (e.keyCode && e.keyCode === 13)) && $('#search_district_id').val() == '') {
      // $(this).blur();
      return false;
    } else {
      return true;
    }
  });

  $('#search_district').on('blur', function(){
    if($('#search_district').val() == ''){
      $('#search_district_id').val('');
    }
  });

  $('#result_district').autocomplete({
    source: function( req, res ) {
      $.ajax({
        url: "/suggest/district?suggest_word="+req.term,
        dataType: "json",
        success: function( result ) {
          $('#result_district_id').val('');
          // console.log(result);
          res(result);
        },error : function(xhr, textStatus, error){
          // console.log(xhr, textStatus, error);
          return false;
        }
      });
    },
    autoFocus: true,
    delay: 1000,
    minLength: 1,
    select : function(e, ui){
      // $(this).blur();
      item = ui.item['labels'].split('_');
      $('#result_district_id').val(item[0]);
    }
  });

  $('#result_district').on('keydown', function(e){
    if (((e.which && e.which === 13) || (e.keyCode && e.keyCode === 13)) && $('#result_district_id').val() == '') {
      // $(this).blur();
      return false;
    } else {
      return true;
    }
  });

  $('#result_district').on('blur', function(){
    if($('#result_district').val() == ''){
      $('#result_district_id').val('');
    }
  });

} );


// facility suggest form
$(function() {

  $('#search_facility').autocomplete({
    source: function( req, res ) {
      // console.log(req, res);
      $.ajax({
        url: "/suggest/facility?suggest_word="+req.term,
        dataType: "json",
        success: function( result ) {
          // $('#facility_id').val('');
          // console.log(result);
          res(result);
        },error : function(xhr, textStatus, error){
          // console.log(xhr, textStatus, error);
          return false;
        }
      });
    },
    autoFocus: true,
    delay: 1000,
    minLength: 1,
    select : function(e, ui){
      // $(this).blur();
      item = ui.item['labels'].split('_');
      $('#search_facility_id').val(item[0]);
      // $('#search_district_id').val(item[1]);
    }
  });

  // $('.search_date').on('change', function(){
  //   search_year = ( '0000' + $('#search_year').val() ).slice( -4 );
  //   search_month = ( '00' + $('#search_month').val() ).slice( -2 );
  //   search_day = ( '00' + $('#search_day').val() ).slice( -2 );

  //   $('#search_date').val(""+( '0000' + $('#search_year').val() ).slice( -4 )+( '00' + $('#search_month').val() ).slice( -2 )+( '00' + $('#search_day').val() ).slice( -2 ));
  // });


  $('#result_facility').autocomplete({
    source: function( req, res ) {
      // console.log(req, res);
      $.ajax({
        url: "/suggest/facility?suggest_word="+req.term,
        dataType: "json",
        success: function( result ) {
          // $('#facility_id').val('');
          // console.log(result);
          res(result);
        },error : function(xhr, textStatus, error){
          // console.log(xhr, textStatus, error);
          return false;
        }
      });
    },
    autoFocus: true,
    delay: 1000,
    minLength: 1,
    select : function(e, ui){
      // $(this).blur();
      item = ui.item['labels'].split('_');
      $('#result_facility_id').val(item[0]);
      // $('#search_district_id').val(item[1]);
    }
  });

  // $('.result_date').on('change', function(){
  //   search_year = ( '0000' + $('#result_search_year').val() ).slice( -4 );
  //   search_month = ( '00' + $('#result_search_month').val() ).slice( -2 );
  //   search_day = ( '00' + $('#result_search_day').val() ).slice( -2 );

  //   $('#result_date').val(""+( '0000' + $('#result_search_year').val() ).slice( -4 )+( '00' + $('#result_search_month').val() ).slice( -2 )+( '00' + $('#result_search_day').val() ).slice( -2 ));
  // });


});

$('#report_csv').on('click', function(){
  locale = $(location).attr('href');

  if(location.href.split('?')[1] != undefined){
    locale += '&';
  }else{
    locale += '?';
  }

  window.open(locale + 'get_csv=true');
  return false;

});

if(location.href.split('?')[1] != undefined && account_type != 'worker'){
  $('.result_link').attr('href','/result?'+location.href.split('?')[1]);
}


if(account_type != 'worker' && account_type != 'district'){
  $('.blank_district_id').css('display', 'none');
}else{
  $('.blank_district_id').css('display', 'block');
}

$('#search_submit').on('click', function(){

  if($('#search_district_id').val() == '' && $('#search_facility_id').val() != ''){
    alert('District、訪問施設は必須です。');
    return false;
  }else{
    // 検索件数を先読みする
    $.ajax({
      url: "/ajax/get_search_amount",
      dataType: "json",
      type:'post',
      async : false,
      data : {
        'district_id' : $('#search_district_id').val(),
        'facility_id' : $('#search_facility_id').val(),
      },
      success: function( result ) {
        // console.log(result);
        if(result['amount'] == 0){
          alert('該当のスケジュールがありません。');
        }else{
          $('#search_form').submit();
        }
      },error : function(xhr, textStatus, error){
        // console.log(xhr, textStatus, error);
        return false;
      }
    });

  }
  return false;
});

$('#result_submit').on('click', function(){
  if($('#result_district_id').val() == '' || $('#result_facility_id').val() == ''){
    alert('District、訪問施設は必須です。');
    return false;
  }else{
    // 検索件数を先読みする

  }
  return true;
});



var isTouch = false;
$(document)
  .on('touchstart', 'label span', function() {isTouch = true})
  // スクロールで反応しないようにする
  .on('touchmove', 'label span', function() {isTouch = false})
  .on('touchend', 'label span', function(e){
    // クリックイベントを強制発火
    if (isTouch) {
      $(this).trigger('click');
      e.preventDefault();
    }
});

