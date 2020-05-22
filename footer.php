<footer>
  <h1 class="logo"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/img/logo.png" alt="FLAT HACHINOHE"></h1>
  <ul>
    <li><a href="https://www2.panasonic.biz/ls/lighting/" target="_blank"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/img/logo_panasonic.png" alt=""></a></li>
    <li><a href="https://www.toda.co.jp/" target="_blank"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/img/logo_toda.png" alt=""></a></li>
    <li><a href="http://www.denon-eng.co.jp/" target="_blank"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/img/logo_denon_eng.png" alt=""></a></li>
    <li><a href="https://pro.bose.com/ja_jp/products/spaces/sports.html" target="_blank"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/img/logo_bose.png" alt=""></a></li>
    <li><a href="https://shinseibt.co.jp/" target="_blank"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/img/logo_shinseibt.png" alt=""></a></li>
    <li><a href="https://aomori-energy.co.jp/" target="_blank"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/img/logo_aomori_energy.png" alt=""></a></li>
  </ul>
  <nav>
    <ul>
      <li><a href="<?php echo esc_url ( home_url() ); ?>#section2">ニュース</a></li>
      <li><a href="<?php echo esc_url ( home_url() ); ?>#section3">スケジュール</a></li>
      <li><a href="<?php echo esc_url ( home_url() ); ?>#section4">施設利用方法</a></li>
      <li><a href="<?php echo esc_url ( home_url() ); ?>#section5">コンセプト</a></li>
      <li><a href="<?php echo esc_url ( home_url() ); ?>#section6">施設案内</a></li>
      <li><a href="<?php echo esc_url ( home_url() ); ?>#section7">アクセス</a></li>
      <li><a href="<?php echo esc_url ( home_url() ); ?>#section8">お問い合わせ</a></li>
    </ul>
  </nav>
  <p>&copy; 2020 XROSS SPORTS MARKETING INC.</p>
</footer>

<!-- ヘッダー -->
<script>
  $(function(){
    var w = $(window).width();
    var x = 768;
    //PC
    if(!navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)){
      $('.header .sub_btn').hover(
        function() {
          $('.header .sub_menu').slideToggle('fast',function(e){$('.header .sub_menu').stop(false, true);});
        },
        function() {
          $('.header .sub_menu').slideToggle('fast',function(e){$('.header .sub_menu').stop(false, true);});
        }
      );
    }
    //SP
    if (w <= x) {
      $('.header .sub_btn').on('click',function(){
        $('.header .sub_menu').slideToggle('fast');
      });
    }
		<?php if(is_front_page()): ?>
		//スティッキーヘッダー
		if(!navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)){
			$(window).on('scroll', function () {
				if ($(window).scrollTop() > $('.news').offset().top - 1) {
					$('.sticky').fadeIn();
				} else {
					$('.sticky').fadeOut();
				}
			});
		}
		<?php endif; ?>
		//ハンバーガーメニュー
		if (w <= x) {
			$('.menuButton,.header nav a').on('click',function(){
				$('.menuButton').toggleClass('active');
				$('.header nav').slideToggle();
				$('html,body').toggleClass('overflow');
			});
		}
  });
</script>

<!-- ページ内リンク スムーズ -->
<script>
  $(function(){
    $('a[href^=#]').click(function(){
      var speed = 1000;
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;
      $("html, body").animate({scrollTop:position}, speed, "swing");
      return false;
    });
  });
</script>
<?php if(is_front_page()): ?>

<!-- fullpage.js -->
<script>
if(!navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)){
  $(function(){
    $('#fullpage').fullpage({
      sectionSelector: 'section',
      scrollOverflow: true, //sectionが画面より大きい時にスクロールして表示するかどうか
      scrollBar: true, //画面デフォルトのスクロールバーを表示するかどうか
      fitToSection: false, //コンテンツを自動的に画面に合わせて調整するかどうか
      verticalCentered: false //縦方向に中央寄せにするかどうか
    });
  });
};
</script>

<?php endif; ?>
<?php wp_footer(); ?>

</body>
</html>