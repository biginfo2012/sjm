
  <section class="fixed">
    <div class="main">
      <h2>
        <a href="/day">{$district.name}<small>{if $district.division_name ne ''}{$district.division_name}事業部・{/if}{$district.region_name}</small></a>
      </h2>
      <ul class="sort upper">
        <li>
          <a class="" href="/week{if $search_term ne ''}?{$search_term}{/if}">今日</a>
        </li>
        <li>
          <a class="" href="/week?date={$date_prev}{if $search_term ne ''}&{$search_term}{/if}"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
        </li>
        <li>
          <a class="" href="/week?date={$date_next}{if $search_term ne ''}&{$search_term}{/if}"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
        </li>
      </ul>
      <ul class="sort">
        <li>
          <a class="" href="/day{if $get_date ne ''}?date={$get_date}{if $search_term ne ''}&{$search_term}{/if}{else}{if $search_term ne ''}?{$search_term}{/if}{/if}">日</a>
        </li>
        <li>
          <a class="active" href="/week{if $get_date ne ''}?date={$get_date}{if $search_term ne ''}&{$search_term}{/if}{else}{if $search_term ne ''}?{$search_term}{/if}{/if}">週</a>
        </li>
        <li>
          <a class="" href="/month{if $get_date ne ''}?date={$get_date}{if $search_term ne ''}&{$search_term}{/if}{else}{if $search_term ne ''}?{$search_term}{/if}{/if}">月</a>
        </li>
      </ul>
    </div>
  </section>

  <section>
    <div class="cday clearfix">
      <div class="vbox clearfix">
        <div class="fixed--person clearfix pfy">
          <ul>
            <li class="title">
              {if $page > 0}
              <a class="previous" href="/week?page={$page-1}{if $get_date ne ''}&date={$get_date}{/if}{if $search_term ne ''}&{$search_term}{/if}"><i class="fa fa-caret-left" aria-hidden="true"></i></a>
              {/if}
            </li>
            {foreach from=$span_ary item=date key=link}
            <li class="week--days{if $date.today} today{/if}"><a href="day?date={$link}{if $search_term ne ''}&{$search_term}{/if}">{$date.label}</a></li>
            {/foreach}
          </ul>
          {if count($schedules) == $limit && $has_next}
          <a class="next" href="/week?page={$page+1}{if $get_date ne ''}&date={$get_date}{/if}{if $search_term ne ''}&{$search_term}{/if}"><i class="fa fa-caret-right" aria-hidden="true"></i></a>
          {/if}
        </div>
          {foreach from=$schedules item=worker}
          <ul class="fix">
            <li class="title fix link">
              <a href="/week/user?worker_id={$worker.employee_number}{if $search_term ne ''}&{$search_term}{/if}">{$worker.name}</a>
            </li>
            {* {foreach from=$worker.schedules item=schedule} *}
            {foreach from=$span_ary item=date key=link}
            {if isset($worker.schedules[$link])}
            {assign var="date_parts" value=$worker.schedules[$link] }
            <li class="week--days fix">
              {foreach from=$date_parts.date item=parts}
              <a class="m1 {if $parts.role_code eq 0 or $parts.role_code eq 2}sales{else}fce{/if}{if $parts.notyet_reported} notyet{/if}"  data-schedule_id='{$parts.schedule_id}' data-worker_id='{$worker.employee_number}'>
                <span><b>{$parts.visit_time_from} - {$parts.visit_time_to}</b> {$parts.title}</span>
              </a>
              {/foreach}
            </li>
            {else}
            <li class="week--days fix">
            </li>
            {/if}

            {/foreach}
          </ul>
          {/foreach}
        </div>
      </div>
    </div>
  </section>