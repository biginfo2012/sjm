<div class="main_content">
    <div class="list_news_part">
        <h1>ニュース一</h1>
      
        <?php 
        foreach ($news as $item) {
        ?>
        <div class="notice_item_part">
            <p class="notice_item_date"><?=$item->date?></p>
            <p class="notice_item_title"><?=$item->title?></p>
            <p class="notice_item_content"><?=$item->content?></p>
        </div>
        <?php 
        }
        ?>
    </div>
</div>