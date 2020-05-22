<?php
/*
Template Name: スケジュール
*/

// 今月/来月/再来月を取得
$tmp_month[] = date('n');
$tmp_month[] = date('n', strtotime(date('Y-m-01').'+1 month'));
$tmp_month[] = date('n', strtotime(date('Y-m-01').'+2 month'));

// 表示用配列作成
$month_array = [];
$time_schedule = get_field('time_schedule');
foreach ($tmp_month as $key => $month) {
    $image = (isset($time_schedule[$key]['image']['url'])) ? $time_schedule[$key]['image']['url'] : '';
    $month_array[] = [
        'month' => $month,
        'image' => $image
    ];
}

?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>スケジュール | フラット八戸</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <meta name="format-detection" content="telephone=no"><!-- iPhone時 電話番号にaタグをつけない -->
  <meta name="description" content="FLAT HACHINOHEのスケジュールについてご紹介します。">
  <meta name="Keywords" content="八戸,フラット,FLAT,フラット八戸、八戸アリーナ、フラットアリーナ、アイスアリーナ">
  <!-- css -->
  <link href="<?php echo esc_url ( get_template_directory_uri() ); ?>/css/reset.css" rel="stylesheet" type="text/css">
  <link href="<?php echo esc_url ( get_template_directory_uri() ); ?>/css/style.css" rel="stylesheet" type="text/css">
  <?php get_header(); ?>

<main id="fullpage">
  
  <section class="schedule wrapper">
    <div class="ttl_box">
      <h2 class="ttl1"><span>SCHEDULE</span>スケジュール</h2>
    </div>
    <div class="tab">
      <ul class="tab_btn">
        <?php foreach ($month_array as $key => $month) : ?>
            <?php $active = ($key == 0) ? 'active' : ''; ?>
            <li class="<?php echo $active; ?>"><?php echo $month['month']; ?>月</li>
        <?php endforeach; ?>
      </ul>
      <ul class="tab_item">
        <?php foreach ($month_array as $key => $month) : ?>
            <?php $hide = ($key == 0) ? '' : 'hide'; ?>
            <li class="<?php echo $hide; ?>">
              <div class="schedule_ttl">
                <h3><?php echo $month['month']; ?>月のタイムスケジュール</h3>
                <ul class="cat_box">
                  <li class="cat1">一般滑走</li>
                  <li class="cat2">ホッケータイム</li>
                  <li class="cat3">フィギュアタイム</li>
                  <li class="cat4">一般貸切枠</li>
                  <li class="cat5">八戸市多目的アリーナ条例枠</li>
                  <li class="cat6">イベント予定</li>
                </ul>
              </div>
              <div class="schedule_box">
                <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/img/schedule_time.jpg" alt="">
                <div>
                  <img src="<?php echo $month['image']; ?>" alt="">
                </div>
              </div>
            </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section><!-- /schedule -->

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
    //スケジュールページ
    $('header nav ul > li').eq(1).addClass('active');
    $('.tab_btn > li').click(function() {
      var index = $('.tab_btn > li').index(this);
      $('.tab_item > li').css('display','none');
      $('.tab_item > li').eq(index).css('display','block');
      $('.tab_btn > li').removeClass('active');
      $(this).addClass('active')
    });
  });
</script>
<?php get_footer(); ?>
