
  <section class="fixed">
    <div class="main">
      <h2>
        <a href="/day">{$district.name}<small>{if $district.division_name ne ''}{$district.division_name}事業部・{/if}{$district.region_name}</small></a>
      </h2>
      <ul class="sort upper">
        <li>
          <a class="" href="/day?{$search_term}">今日</a>
        </li>
        <li>
          <a class="" href="/day?date={$date_prev}&{$search_term}"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
        </li>
        <li>
          <a class="" href="/day?date={$date_next}&{$search_term}"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
        </li>
      </ul>
      <ul class="sort">
        <li>
          <a class="active" href="/day{if $get_date ne ''}?date={$get_date}&{$search_term}{else}?{$search_term}{/if}">日</a>
        </li>
        <li>
          <a class="" href="/week{if $get_date ne ''}?date={$get_date}&{$search_term}{else}?{$search_term}{/if}">週</a>
        </li>
        <li>
          <a class="" href="/month{if $get_date ne ''}?date={$get_date}&{$search_term}{else}?{$search_term}{/if}">月</a>
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
              <a class="previous" href="/day?page={$page-1}{if $get_date ne ''}&date={$get_date}{/if}{if $search_term ne ''}&{$search_term}{/if}"><i class="fa fa-caret-left" aria-hidden="true"></i></a>
              {/if}
            </li>
            {foreach from=$schedules item=worker}
            <li class="name fix link"><a href="/day/user?worker_id={$worker.employee_number}{if $get_date ne ''}&date={$get_date}{/if}{if $search_term ne ''}&{$search_term}{/if}">{$worker.name}</a></li>
            {/foreach}
          </ul>
          {if count($schedules) == $limit && $has_next}
          <a class="next" href="/day?page={$page+1}{if $get_date ne ''}&date={$get_date}{/if}{if $search_term ne ''}&{$search_term}{/if}"><i class="fa fa-caret-right" aria-hidden="true"></i></a>
          {/if}
        </div>
        <div class="cday--box">
          <div class="cday--left clearfix opacity--none">
            <ul class="time">
{section name=a start=7 loop=24}
              <li class="time">
                <span>{$smarty.section.a.index}:00</span>
              </li>
              <li class="time">
                <span>{$smarty.section.a.index}:30</span>
              </li>
{/section}
            </ul>
          </div>
          <div class="cday--right clearfix">
            {foreach from=$schedules item=worker key=k name=lines}
            <div class="c{$smarty.foreach.lines.iteration}">
              <ul class="task">
                <li>
                {foreach from=$worker.schedules item=item key=key name=name}
                  <a class="m1 {if $item.role_code eq 0 or $item.role_code eq 2}sales{else}fce{/if} abso{if $item.notyet_reported} notyet{/if}" style="top: {$item.height_mergin}px;height: {$item.visit_span}px;" data-schedule_id='{$item.schedule_id}' data-worker_id='{$worker.employee_number}'>
                    <time>{$item.visit_time_from}~{$item.visit_time_to}</time>
                    {$item.title}
                  </a>
                {/foreach}
                </li>
              </ul>
            </div>
            {/foreach}
          </div>
        </div>
      </div>
    </div>
  </section>