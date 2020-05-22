<?php
/*
Template Name: お問い合わせ
*/
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>お問い合わせ | フラット八戸</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <meta name="format-detection" content="telephone=no"><!-- iPhone時 電話番号にaタグをつけない -->
  <meta name="description" content="FLAT HACHINOHEのお問い合わせページです。">
  <meta name="Keywords" content="八戸,フラット,FLAT,フラット八戸、八戸アリーナ、フラットアリーナ、アイスアリーナ">
  <!-- css -->
  <link href="<?php echo esc_url ( get_template_directory_uri() ); ?>/css/style.css" rel="stylesheet" type="text/css">
  <link href="<?php echo esc_url ( get_template_directory_uri() ); ?>/css/common.css" rel="stylesheet" type="text/css">
  <link href="<?php echo esc_url ( get_template_directory_uri() ); ?>/css/about.css" rel="stylesheet" type="text/css">
  <link href="<?php echo esc_url ( get_template_directory_uri() ); ?>/css/contact.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <?php get_header(); ?>

<main class="Contents">

<div class="Head">

	<div class="pankuzu">
		<ul>
			<li><a href="/"><i class="material-icons">home</i></a></li>
			<li><a href="/contact/">お問い合わせ</a></li>
		</ul>
	</div>

	<div class="title">
		<h1>
			<span lang="ja">お問い合わせ</span>
			<span lang="en">CONTACT</span>
		</h1>
	</div>

</div>


<div class="Contact">

	<div class="form">
    
    <?php echo do_shortcode('[contact-form-7 id="338" title="コンタクトフォーム 1"]'); ?>

	</div>


	<div class="phone">
		<h3><span>お電話・FAXは</span><span>以下よりお問い合わせください。</span></h3>

		<dl>
			<dt><i class="material-icons">phone</i></dt>
			<dd><a href="tel:0178-20-7821">0178-20-7821</a></dd>
			<dt><i class="material-icons">local_printshop</i></dt>
			<dd>0178-20-7822</dd>
		</dl>
	</div>


</div>

</main>

<!-- ヘッダー -->
<script>
  $(function(){
    //下層ページ
    $('body').addClass('sub');
    //お問い合わせページ
    $('header nav ul li').eq(6).addClass('active');
    $('html').css('font-size','125%');
    $('body').attr('id', 'contact');
    if(navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)){
      $('html').css('font-size','93.8%');
    }
  });
</script>
<?php get_footer(); ?>