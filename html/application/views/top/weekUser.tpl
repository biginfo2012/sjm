
  <section class="fixed">
    <div class="main">
      <h2>
        <a href="/week?{$search_term}"><i class="fa fa-angle-double-left font--22" aria-hidden="true"></i> {$worker_name}<small>{$district.name} {$district.region_name}</small></a>
      </h2>
      <ul class="sort upper">
        <li>
          <a class="" href="/week/user?worker_id={$worker_id}&{$search_term}">今日</a>
        </li>
        <li>
          <a class="" href="/week/user?date={$date_prev}&worker_id={$worker_id}"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
        </li>
        <li>
          <a class="" href="/week/user?date={$date_next}&worker_id={$worker_id}&{$search_term}"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
        </li>
      </ul>
      <ul class="sort">
        <li>
          <a class="" href="/day/user?date={$get_date}&worker_id={$worker_id}&{$search_term}">日</a>
        </li>
        <li>
          <a class="active" href="/week/user?date={$get_date}&worker_id={$worker_id}&{$search_term}">週</a>
        </li>
        <li>
          <a class="" href="/month/user?date={$get_date}&worker_id={$worker_id}&{$search_term}">月</a>
        </li>
      </ul>
    </div>
  </section>

  <section>
    <div class="cday clearfix">
      <div class="vbox clearfix">
        <div class="fixed--person clearfix pfy">
          <ul>
            <li class="title"></li>
            </li>
            {foreach from=$span_ary item=date key=link}
            <li class="week--days{if $date.today} today{/if}"><a href="/day/user/?date={$link}&worker_id={$worker_id}">{$date.label}</a></li>
            {/foreach}
          </ul>
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
          <div class="cday--right week clearfix">
            {foreach from=$span_ary item=date key=link name=lines}
            <div class="c{$smarty.foreach.lines.iteration}">
              <ul class="task">
                <li>
                  {if isset($schedules.schedules[$link])}
                  {assign var="date_parts" value=$schedules.schedules.$link }
                  {foreach from=$date_parts.date item=parts}
                  <a class="m1 {if $parts.role_code eq 0 or $parts.role_code eq 2}sales{else}fce{/if}{if $parts.notyet_reported} notyet{/if} abso" style="top: {$parts.height_mergin}px;height: {$parts.visit_span}px;" data-schedule_id='{$parts.schedule_id}' {if $worker_id ne ''}data-worker_id='{$worker_id}'{/if}>
                    <time>{$parts.visit_time_from} - {$parts.visit_time_to}</time>
                    {$parts.title}
                  </a>
                  {/foreach}
                  {/if}
                </li>
              </ul>
            </div>
            {/foreach}
          </div>
        </div>
      </div>
    </div>
  </section>