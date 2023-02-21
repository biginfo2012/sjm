<div class="main_content">
    <form id="inquery_form" action="<?=base_url()?>inquey-form" method="post" >
        <p>お名前(必須)</p>
        <input type="text" name="name" 
            title="この欄に記入してください" oninvalid="this.setCustomValidity('この欄に記入してください')" oninput="setCustomValidity('')" required>
        <p>メールアドレス(必須)</p>
        <input type="email" name="email" 
            title="この欄に記入してください" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" oninvalid="this.setCustomValidity('この欄に記入してください')" oninput="setCustomValidity('')" required>
        <p>題名</p>
        <input type="text" name="title" 
            title="この欄に記入してください" oninvalid="this.setCustomValidity('この欄に記入してください')" oninput="setCustomValidity('')" required>
        <p>メッセージ本文</p>
        <textarea type="text" name="content" 
            title="この欄に記入してください" oninvalid="this.setCustomValidity('この欄に記入してください')" oninput="setCustomValidity('')" required></textarea>

        <div style="text-align: center;">
            <input id="inquery_submit" type="submit" value="送信" />
        </div>
    </form>
</div>