<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<style type="text/css">
    .ui-datepicker-trigger {
        padding: 10px;
        cursor: pointer;
    }
</style>
<div class="content-wrapper admin-min-width">  
    <div class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo"> 
        <div class="row">
            <div class="col-md-12">
                <div class="portlet light portlet-fit bordered">
                    <div class="portlet-body">
                        <p class="font-size-20-black" style="margin: 14px 0px;">■ 配信リスト（No順）</p>
                        <table class="table table-striped table-hover table-bordered news-table" id="sample_editable_1">
                            <thead>
                                <tr>
                                    <th > <label>NEWS No</label> </th>
                                    <th class="sorting_asc"> <label style="width: 90px;">日&nbsp;付 </label></th>
                                    <th > <label style="width: 70px;">時&nbsp;間 </label></th>
                                    <th > <label style="width: 100px;">件&nbsp;名 </label></th>
                                    <th > <label style="width: 590px;">本&nbsp;文 </label></th>
                                    <th > <label style="width: 220px;">ステイタス</label> </th>
                                    <th > <label style="width: 80px;">編&nbsp;集 </label></th>
                                    <th > <label style="width: 80px;">削&nbsp;除 </label></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach ($news as $item) { 
                                    switch($item->state)
                                    {
                                        case 0:
                                        {
                                            $draft = 'active-public';
                                            $public = '';
                                            $private = '';
                                            break;
                                        }
                                        case 1:
                                        {
                                            $draft = '';
                                            $public = '';
                                            $private = 'active-public';
                                            break;
                                        }
                                        case 2:
                                        {
                                            $draft = '';
                                            $public = 'active-public';
                                            $private = '';
                                            break;
                                        }
                                    }
                                ?>
                                <tr style="height: 50px;">
                                    <td> <?=$item->id?> </td>
                                    <td> <?=$item->date?> </td>
                                    <td> <?=$item->time?> </td>
                                    <td style="display: block; width: 100px; word-wrap: break-word;"> <?=$item->title?> </td>
                                    <td ><p style="text-align: left; width: 600px; margin: auto; word-wrap: break-word;"><?=$item->content?></p></td>
                                    <td style="position: relative; text-align:left;">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default public-btn <?=$public?>">公開</button>
                                            <button type="button" class="btn btn-default private-btn <?=$private?>">非公開</button>
                                            <button type="button" class="btn btn-default draft-btn <?=$draft?>">公開まち</button>
                                        </div>
                                    </td>
                                    <td>
                                        <a class="edit btn btn-info" href="javascript:;"> 編集 </a>
                                    </td>
                                    <td>
                                        <a class="delete btn btn-danger" href="javascript:;"> 削除 </a>
                                    </td>
                                </tr>
                                <?php } ?>
               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="insert-news-part">
        <p class="font-size-20-black " style="margin: 0px 0px 14px;" > ■ 新規配信設定画面</p>
        <form class="news-contents-form" action="<?php echo base_url(); ?>admin_addnew" method='post'>
            <div class="news-contents-date">
                <div>
                    <p>日&nbsp;付: </p>
                    <input type="text" id='news-date' name='news-date' value="" required>
                </div>
                <div>
                    <p>時&nbsp;間: </p>
                    <select id='news-hour-type'>
                        <option>0時</option><option>1時</option><option>2時</option>
                        <option>3時</option><option>4時</option><option>5時</option>
                        <option>6時</option><option>7時</option><option>8時</option>
                        <option>9時</option><option>10時</option><option>11時</option>
                        <option>12時</option><option>13時</option><option>14時</option>
                        <option>15時</option><option>16時</option><option>17時</option>
                        <option>18時</option><option>19時</option><option>20時</option>
                        <option>21時</option><option>22時</option><option>23時</option>
                    </select>
                    <select id='news-minute-type'>
                        <option>00分</option>
                        <option>15分</option>
                        <option>30分</option>
                        <option>45分</option>
                    </select>                    
                </div>
            </div>
            <div class="news-contents-text">
                <div>
                    <p>件名: </p>
                    <input type="text" id='news-title' name='news-title' required value="">
                </div>
                <div>
                    <p>本文: </p>
                    <textarea name="Text1" cols="40" rows="5" id='news-date-gap'  required></textarea>
                    <p id="warning-text" style="display:none;">入力文字数制限200文字</p>
                </div>

                <a class="insert-news-btn button-effect2 font-weight-style">設  定</a>
            </div>
        </form>
    </div>
</div>

<script src="<?php echo base_url(); ?>assets/js/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/scripts/table-datatables-editable.js" type="text/javascript"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
    $(function () {
        $("#news-date").datepicker({
            showOn: 'button',
            buttonImageOnly: true,
            buttonImage: 'http://jqueryui.com/resources/demos/datepicker/images/calendar.gif',
            dateFormat: "yy-mm-dd"
        });
        
        $(document).ready(function() {
            var html = $(".dataTables_filter label:first-child").html();
            html = html.replace("Search:","検索:");
            $(".dataTables_filter label:first-child").html(html);
        });
    });
    
</script>