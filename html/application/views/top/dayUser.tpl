
  <section class="fixed">
    <div class="main">
      <h2>
        <a href="/day?{$search_term}"><i class="fa fa-angle-double-left font--22" aria-hidden="true"></i> {$worker_name}<small>{$district.name} {$district.region_name}</small></a>
      </h2>
      <ul class="sort upper">
        <li>
          <a class="" href="/day/user?worker_id={$worker_id}&{$search_term}">今日</a>
        </li>
        <li>
          <a class="" href="/day/user?date={$date_prev}&worker_id={$worker_id}&{$search_term}"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
        </li>
        <li>
          <a class="" href="/day/user?date={$date_next}&worker_id={$worker_id}&{$search_term}"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
        </li>
      </ul>
      <ul class="sort">
        <li>
          <a class="active" href="/day/user?date={$get_date}&worker_id={$worker_id}&{$search_term}">日</a>
        </li>
        <li>
          <a class="" href="/week/user?date={$get_date}&worker_id={$worker_id}&{$search_term}">週</a>
        </li>
        <li>
          <a class="" href="/month/user?date={$get_date}&worker_id={$worker_id}&{$search_term}">月</a>
        </li>
      </ul>
    </div>
  </section>

  <section>
    <div class="cday clearfix">
      <div class="vbox fix clearfix">
        <div class="fixed--person fix clearfix pfy">
          <ul>
            <li class="title"></li>
            <li class="name">{$schedules.name}</li>
          </ul>
        </div>
        <div class="cday--box fix">
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
            <div class="c1 fix">
              <ul class="task fix padding-t--0">
                <li>
                {foreach from=$schedules.schedules item=item key=key name=name}
                  <a class="m1 {if $item.role_code eq 0 or $item.role_code eq 2}sales{else}fce{/if} abso{if $item.notyet_reported} notyet{/if}" style="top: {$item.height_mergin}px;height: {$item.visit_span}px;" data-schedule_id='{$item.schedule_id}' {if $worker_id ne ''}data-worker_id='{$worker_id}'{/if}>
                    <time>{$item.visit_time_from}~{$item.visit_time_to}</time>
                    {$item.title}
                  </a>
                {/foreach}
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>