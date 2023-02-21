    <?php 
    if (!$admin) {
    ?>
    <footer class="main-footer">
        <div class="footer_wrapper">
            <div class="footer_content">
                <h5 class="white_font_color">株式会社ＤＥＰＥＮＤＡ</h5>
                <p class="white_font_color">〒573-1159</p>
                <p class="white_font_color">大阪府枚方市車塚1-1-1　輝きプラザきらら6F</p>
                <p class="white_font_color">枚方市立地域活性化支援センター</p>
                <p class="white_font_color">TEL/FAX：072-856-2212</p>
            </div>

            <div class="right menu-list footer_menu_pc">
                <ul class="h-menu">
                    <li><a href="<?=base_url()?>top">ＨＯＭＥ</a></li>
                    <li><a href="<?=base_url()?>overview">事業概要</a></li>
                    <li><a href="<?=base_url()?>about_us">会社概要</a></li>
                    <li><a href="<?=base_url()?>inquery">お問合わせ</a></li>
                </ul>
            </div>
            <div class="footer_menu_mobile">
                <div>
                    <a class="white_font_color" href="<?=base_url()?>top">ＨＯＭＥ</a>
                    <a class="white_font_color" href="<?=base_url()?>overview">事業概要</a>
                </div>
                <div>
                    <a class="white_font_color" href="<?=base_url()?>about_us">会社概要</a>
                    <a class="white_font_color" href="<?=base_url()?>inquery">お問合わせ</a>
                </div>
            </div>        
        </div>
        <p class="copyright_part">Copyright © DEPENDA Inc. all right reserved</p>
    </footer>
    <?php } ?>

    <!-- jQuery UI 1.11.2 -->
    <!-- <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script> -->
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/app.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.validate.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/validation.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/admin.js" type="text/javascript"></script>
    <script type="text/javascript">
        var windowURL = window.location.href;
        pageURL = windowURL.substring(0, windowURL.lastIndexOf('/'));
        var x= $('a[href="'+pageURL+'"]');
            x.addClass('active');
            x.parent().addClass('active');
        var y= $('a[href="'+windowURL+'"]');
            y.addClass('active');
            y.parent().addClass('active');
    </script>
  </body>
</html>