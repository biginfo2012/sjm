<div class="main_content">
    <div class="top_img">
        <img src="<?=base_url()?>assets/images/home_banner_img.png" alt=""/>
    </div>
    <div class="industry_purpose_part"> 
        <div class="industry_each_part">
            <h2>企業ミッション</h2>
            <div class="company_mission_step_line"></div>
            <p>人々が健康に活躍し続けるために 日々のちょっとした動作を少しずつ改善しながら、 無理なく本来の体の動きを取り戻すことを お手伝いします。</p>
        </div>
        <div class="industry_each_part">
            <h2>企業ミッション</h2>
            <div class="company_mission_step_line"></div>
            <p>バイオメカニクスとエレクトロニクスの連携<br>運動習慣の獲得・継続行動変容の促進<br>健康寿命の延伸</p>
        </div>
    </div>
    <div class="news_inquery_part">
        <div class="news_part">
            <h3>ニュース</h3>
            <div class="company-news-area">
                <ul class="v-menu">
                    <?php 
                    $index = 0;
                    foreach ($news as $item) { 
                        $item->date = str_replace("-", "年", $item->date);
                        $item->date = str_replace("-", "月", $item->date);
                        $item->date = $item->date."日";
                        if ($index == 4) break;
                    ?>
                    <li><span><?=$item->date?></span><span class="news_title"><?=$item->title?></span></li>
                    <?php 
                        $index++;
                    }
                    for (;$index < 4; $index++) {
                        // echo '<li>&nbsp;</li>';
                    }
                    ?>
                </ul>
            </div>
            <a class="link_btn" href="<?=base_url()?>list/news">ニュース一覧▶</a>
        </div>
        <div class="inquery_part">
            <h3>お知らせ</h3>
            <div class="company-news-area">
                <ul class="v-menu">
                  <?php 
                    $index = 0;
                    foreach ($queries as $item) { 
                        $item->date = str_replace("-", "年", $item->date);
                        $item->date = str_replace("-", "月", $item->date);
                        $item->date = $item->date."日";
                        if ($index == 4) break;
                    ?>
                    <li><span><?=$item->date?></span><span class="news_title"><?=$item->title?></span></li>
                    <?php 
                        $index++;
                    }
                    for (;$index < 4; $index++) {
                        // echo '<li>&nbsp;</li>';
                    }
                    ?>
                </ul>
            </div>
            <a class="link_btn" href="<?=base_url()?>list/inquery">お知らせ一覧▶</a>
        </div>
    </div>
</div>