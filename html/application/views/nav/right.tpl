<div class="sidebar visible-lg">
  {if !empty($today_appoints)}
  <div class="analyze">
    訪問数（{$today_appoints.date}）
    <span>{$today_appoints.amount}<small>件</small></span>
  </div>
  {/if}
  <nav>
    <ul>
      {if $class eq "result"}
      <li>
        <button type="button" class="def" id='report_csv'>CSVエクスポート</button>
      </li>
      {else}
      <li>
        <button type="button" class="m1 green" data-schedule_id=''{if $add_schedule_button eq 'off'} style='display:none;'{else}{if $worker_id ne ''} data-worker_id='{$worker_id}'{/if}{/if}>
          <i class="fa fa-plus icon--fix" aria-hidden="true"></i>予定/実績登録
        </button>
      </li>
      {/if}
      {if $class eq "result"}
      {else}
      <li class="hr"></li>
      <li>
        <div class="guide">
          <span class="c--sales"></span>SALES
        </div>
      </li>
      <li>
        <div class="guide">
          <span class="c--fce"></span>FCE
        </div>
      </li>
      <li>
        <div class="guide">
          <span class="red"></span>未報告
        </div>
      </li>
      {/if}
    </ul>
  </nav>
</div>