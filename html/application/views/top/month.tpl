
  <section class="fixed">
    <div class="main">
      <h2>
        <a href="/day{if $search_term ne ''}?{$search_term}{/if}">{$district.name}<small>{if $district.division_name ne ''}{$district.division_name}事業部・{/if}{$district.region_name}</small></a>
      </h2>
      <ul class="sort upper">
        <li>
          <a class="" href="/month{if $search_term ne ''}?{$search_term}{/if}">今日</a>
        </li>
        <li>
          <a class="" href="/month?date={$date_prev}{if $search_term ne ''}&{$search_term}{/if}"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
        </li>
        <li>
          <a class="" href="/month?date={$date_next}{if $search_term ne ''}&{$search_term}{/if}"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
        </li>
      </ul>
      <ul class="sort">
        <li>
          <a class="" href="/day{if $search_term ne ''}?{$search_term}{/if}">日</a>
        </li>
        <li>
          <a class="" href="/week{if $search_term ne ''}?{$search_term}{/if}">週</a>
        </li>
        <li>
          <a class="active" href="/month{if $search_term ne ''}?{$search_term}{/if}">月</a>
        </li>
      </ul>
    </div>
  </section>

  <section>
    <div class="cday clearfix">
      <div class="vbox cal clearfix">
        <div class="fixed--person clearfix pfy">
          <ul>
            <li class="week--days">月</li>
            <li class="week--days">火</li>
            <li class="week--days">水</li>
            <li class="week--days">木</li>
            <li class="week--days">金</li>
            <li class="week--days">土</li>
            <li class="week--days">日</li>
          </ul>
        </div>
        {foreach from=$schedules item=week}
        <ul class="cal">
          {foreach from=$week item=line key=date}
          <li{if $line.style eq 'unfocus'} style='color:#aaa;'{/if}>
            {$line.label}日
            <a href="/day?date={$date}{if $search_term ne ''}&{$search_term}{/if}" class="cs">Sales：{$line.sales}件</a>
            <a href="/day?date={$date}{if $search_term ne ''}&{$search_term}{/if}" class="cfce">FCE：{$line.fce}件</a>
            <a href="/day?date={$date}{if $search_term ne ''}&{$search_term}{/if}" class="cnot">実績未報告{$line.notyet}件</a>
          </li>
          {/foreach}
        </ul>
        {/foreach}
      </div>
    </div>
  </section>