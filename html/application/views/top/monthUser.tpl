
  <section class="fixed">
    <div class="main">
      <h2>
        <a href="/month{if $search_term ne ''}?{$search_term}{/if}"><i class="fa fa-angle-double-left font--22" aria-hidden="true"></i> {$worker_name}<small>{$district.name} {$district.region_name}</small></a>
      </h2>
      <ul class="sort upper">
        <li>
          <a class="" href="/month/user?worker_id={$worker_id}&{$search_term}">今日</a>
        </li>
        <li>
          <a class="" href="/month/user?date={$date_prev}&worker_id={$worker_id}&{$search_term}"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
        </li>
        <li>
          <a class="" href="/month/user?date={$date_next}&worker_id={$worker_id}&{$search_term}"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
        </li>
      </ul>
      <ul class="sort">
        <li>
          <a class="" href="/day/user?date={$get_date}&worker_id={$worker_id}&{$search_term}">日</a>
        </li>
        <li>
          <a class="" href="/week/user?date={$get_date}&worker_id={$worker_id}&{$search_term}">週</a>
        </li>
        <li>
          <a class="active" href="/month/user?date={$get_date}&worker_id={$worker_id}&{$search_term}">月</a>
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
            {if isset($line.sales)}
            <a href="/day/user?date={$date}{if $worker_id ne ''}&worker_id={$worker_id}{/if}&{$search_term}" class="cs">Sales：{$line.sales}件</a>
            {/if}
            {if isset($line.fce)}
            <a href="/day/user?date={$date}{if $worker_id ne ''}&worker_id={$worker_id}{/if}&{$search_term}" class="cfce">FCE：{$line.fce}件</a>
            {/if}
            <a href="/day/user?date={$date}{if $worker_id ne ''}&worker_id={$worker_id}{/if}&{$search_term}" class="cnot">実績未報告{$line.notyet}件</a>
          </li>
          {/foreach}
        </ul>
        {/foreach}

{if false}
        <ul class="cal">
{section name=a start=0 loop=7}
          <li>
            0日
            <a href="/day/user" class="cs">Sales：28件</a>
            <a href="/day/user" class="cfce">FEC：16件</a>
            <a href="/day/user" class="cnot">未報告：12件</a>
          </li>
{/section}
        </ul>
        <ul class="cal">
{section name=aa start=0 loop=7}
          <li>
            0日
            <a href="/day/user" class="cs">Sales：28件</a>
            <a href="/day/user" class="cfce">FEC：16件</a>
            <a href="/day/user" class="cnot">未報告：12件</a>
          </li>
{/section}
        </ul>
        <ul class="cal">
{section name=aaa start=0 loop=7}
          <li>
            0日
            <a href="/day/user" class="cs">Sales：28件</a>
            <a href="/day/user" class="cfce">FEC：16件</a>
            <a href="/day/user" class="cnot">未報告：12件</a>
          </li>
{/section}
        </ul>
        <ul class="cal">
{section name=aaaa start=0 loop=7}
          <li>
            0日
            <a href="/day/user" class="cs">Sales：28件</a>
            <a href="/day/user" class="cfce">FEC：16件</a>
            <a href="/day/user" class="cnot">未報告：12件</a>
          </li>
{/section}
        </ul>
        <ul class="cal">
{section name=aaaaa start=0 loop=7}
          <li>
            0日
            <a href="/day/user" class="cs">Sales：28件</a>
            <a href="/day/user" class="cfce">FEC：16件</a>
            <a href="/day/user" class="cnot">未報告：12件</a>
          </li>
{/section}
        </ul>
        <ul class="cal">
{section name=aaaaaa start=0 loop=7}
          <li>
            0日
            <a href="/day/user" class="cs">Sales：28件</a>
            <a href="/day/user" class="cfce">FEC：16件</a>
            <a href="/day/user" class="cnot">未報告：12件</a>
          </li>
{/section}
        </ul>
{/if}
      </div>
    </div>
  </section>