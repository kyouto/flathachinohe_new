<?php
/*
Template Name: ニュース詳細
*/
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>ニュース | フラット八戸</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <meta name="format-detection" content="telephone=no"><!-- iPhone時 電話番号にaタグをつけない -->
  <meta name="description" content="FLAT HACHINOHEの最新ニュースをご紹介します。">
  <meta name="Keywords" content="八戸,フラット,FLAT,フラット八戸、八戸アリーナ、フラットアリーナ、アイスアリーナ">
  <!-- css -->
  <link href="<?php echo esc_url ( get_template_directory_uri() ); ?>/css/reset.css" rel="stylesheet" type="text/css">
  <link href="<?php echo esc_url ( get_template_directory_uri() ); ?>/css/style.css" rel="stylesheet" type="text/css">
  <?php get_header(); ?>

<main id="fullpage">
  
  <section class="news news_detail wrapper">
    <div class="ttl_box"></div>
    <div class="news_box">
      <h2>ご来場者様向け駐車場に関するご案内</h2>
      <div class="text_right">
        <p class="category">NEWS</p>
        <p class="date">2020.4.10</p>
      </div>
      <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/img/dummy01.png" alt="">
      <p>FLAT HACHINOHEの駐車場について、ご案内をさせていただきます。 当館では、貸切利用および一般滑走を […]</p>
      <a href="/news_list" class="back_btn">BACK</a>
    </div>
  </section><!-- /news -->

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-163222924-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-163222924-1');
  </script>

</main><!-- /fullpage -->

<!-- ヘッダー -->
<script>
  $(function(){
    //下層ページ
    $('body').addClass('sub');
    //ニュースページ
    $('header nav ul li').eq(0).addClass('active');
  });
</script>
<?php get_footer(); ?>