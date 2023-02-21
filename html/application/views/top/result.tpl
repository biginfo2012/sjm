
  <section class="fixed">
    <div class="main">
      <h2>{$worker_name}<small>{$district.name} {$district.region_name}</small></h2>
      <ul class="sort upper">
        <li>
          <a class="active" href="/result">全て</a>
        </li>
        <li>
          <a class="" href="/result?date={$date_prev}{if $worker_id ne ''}&worker_id={$worker_id}{/if}"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
        </li>
        <li>
          <a class="" href="/result?date={$date_next}{if $worker_id ne ''}&worker_id={$worker_id}{/if}"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
        </li>
      </ul>
      <ul class="sort">
        <li>
          <a class="" href="/result?mode=week{if $get_date ne ''}&date={$get_date}{/if}{if $worker_id ne ''}&worker_id={$worker_id}{/if}">今週</a>
        </li>
        <li>
          <a class="" href="/result?mode=month{if $get_date ne ''}&date={$get_date}{/if}{if $worker_id ne ''}&worker_id={$worker_id}{/if}">今月</a>
        </li>
        <li>
          <a class="" href="/result?mode=year{if $get_date ne ''}&date={$get_date}{/if}{if $worker_id ne ''}&worker_id={$worker_id}{/if}">今年</a>
        </li>
      </ul>


      <input id="start-month" {if $start_month ne ''}value="{$start_month}{/if}">
      <input id="end-month" {if $end_month ne ''}value="{$end_month}{/if}">
      <a id="search_period" class="disabled" style="position: absolute; bottom: 0.85rem; font-size: 18px; left: 21rem" href="/result?mode=search{if $get_date ne ''}&date={$get_date}{/if}{if $worker_id ne ''}&worker_id={$worker_id}{/if}">検索</a>



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
{foreach from=$schedules item=line}
        <ul class="result">
          <li class="width--120">{$line.visit_schedule|substr:2:8}</li>
          <li class="font--w--600">{$line.facility_name}</li>
          <li class="width--120">{$line.worker_name}</li>
          <li class="width--120">{$line.visit_schedule|substr:2:8}</li>
          <li class="width--120">{$line.report_date|substr:2:8}</li>
          <li class="memo width--500">
            {if $line.report_type eq 1}{$line.remarks}{else if $line.report_type eq 2}{$line.ope_support_remarks}{else if $line.remarks eq 3}{$line.navx_report_remarks}{else}{$line.visit_comment}{/if}
          </li>
        </ul>
{/foreach}
{*section name=a start=0 loop=30}
        <ul class="result">
          <li class="width--120">17-06-23</li>
          <li class="font--w--600">施設名称</li>
          <li class="width--120">山田太郎</li>
          <li class="width--120">17-06-23</li>
          <li class="width--120">17-06-23</li>
          <li class="memo width--500">ここに備考を表示ここに備考を表示ここに備考を表示ここに備考を表示ここに備考を表示。</li>
        </ul>
{/section*}
      </div>
    </div>
  </section>