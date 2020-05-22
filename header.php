  <!-- js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo esc_url ( get_template_directory_uri() ); ?>/js/sidemenu.js"></script>
  <!--<script type="text/javascript" src="<?php echo esc_url ( get_template_directory_uri() ); ?>/js/scrolloverflow.min.js"></script>
  <script type="text/javascript" src="<?php echo esc_url ( get_template_directory_uri() ); ?>/js/fullpage.js"></script>
  <link href="<?php echo esc_url ( get_template_directory_uri() ); ?>/css/fullpage.css" rel="stylesheet" type="text/css">-->
  <!-- fonts -->
  <script>
    (function(d) {
      var config = {
        kitId: 'yga4mfh',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>
  <!-- OGP -->
  <meta property="og:locale" content="ja_JP" />
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="FLAT HACHINOHE | フラット八戸" />
  <meta property="og:title" content="FLAT HACHINOHE | フラット八戸" />
  <meta property="og:description" content="クロススポーツマーケティング株式会社は、民間と行政の本格的な連携による日本初の地域密着型多目的エリア「FLATHACHINOHE（フラット八戸）」を2020年春に開業。青森県八戸市のJR八戸駅西地区にオープンしました。" />
  <meta property="og:url" content="http://flathachinohe.com/" />
  <meta property="og:image" content="http://fh.test-env.site/wp/wp-content/themes/arena/img/ogp.png" />
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5W3NF77"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-128036866-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-128036866-1');
  </script>
  <?php wp_head(); ?>
</head>
<body>

<header class="header">
  <h1 class="logo"><a href="<?php echo esc_url ( home_url() ); ?>/"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/img/logo.png" alt="FLAT HACHINOHE"></a></h1>
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
  <!-- スティッキーヘッダー -->
  <nav class="sticky">
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
  <!-- sp メニュー -->
  <div class="wrapper sp_only">
    <h1 class="logo"><a href="<?php echo esc_url ( home_url() ); ?>/"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/img/logo.png" alt="FLAT HACHINOHE"></a></h1>
    <a href="javascript:void(0)" class="menuButton">
      <span></span>
      <span></span>
      <span></span>
    </a>
  </div>
</header>