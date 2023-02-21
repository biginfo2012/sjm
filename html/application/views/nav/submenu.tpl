<div class="submenu clearfix">
  <div class="clearfix">
    <a class="m3 visible-sm">
      <span class="ti-menu"></span>
    </a>
    {if $class eq "sc day" || $class eq "sc day-user"}
    <h1 class="m2">{$date}</h1>
    {else if $class eq "sc week" || $class eq "sc week-user"}
    <h1 class="m2">{$date}</h1>
    {else if $class eq "sc month" || $class eq "sc month-user"}
    <h1 class="m2">{$date}</h1>
    {else if $class eq "result"}
    <h1 class="m2">{$date}</h1>
    {/if}
    {if $class eq "result"}
    <ul>
      <li>
        <a class="m4">
          <span class="ti-search"></span>
        </a>
      </li>
    </ul>
    {else}
    <ul>
      <li>
        <a class="m2">
          <span class="ti-search"></span>
        </a>
      </li>
    </ul>
    {/if}
  </div>
</div>