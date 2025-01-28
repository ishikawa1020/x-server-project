<?php
session_start();

header('X-FRAME-OPTIONS: SAMEORIGIN');

if (!isset($_SESSION['token'])) {
  $_SESSION['token'] = sha1(random_bytes(30));
}

function escape($str)
{
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MPSZRFJ');</script>
<!-- End Google Tag Manager -->
    
  <meta charset="utf-8">
  <title></title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>なんでも屋 ブレスト</title>
  <meta name="description" content="不用品回収、リサイクル品買取、地域最安値に挑戦！！栃木全域、一部を除く茨城、福島、群馬、東京、神奈川、埼玉、千葉を中心に年中無休で依頼を承っております！">
  <!-- テスト環境 -->
  <!-- <meta name="robots" content="noindex,nofollow"> -->

  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/slick.css">
  <link rel="stylesheet" href="./css/slick-theme.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
  <link rel="stylesheet" href="./css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="./js/slick.min.js"></script>
  <script src="./js/script.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-160812124-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-160812124-1');
  </script>


</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MPSZRFJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    
  <header>
    <div class="container">
      <div class="header">
        <div class="logo"><a href="/"><img src="./img/logo.png"></a></div>
        <div class="contact">
          <picture>
            <source media="(max-width: 768px)" srcset="./img/tel.png">
            <img src="./img/tel.png">
          </picture>
        </div>
        <div class="trigger">
          <p>MENU</p>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <nav>
      <div class="container">
        <ul>
          <li><a href="/">トップ</a></li>
          <li><a href="#package">料金</a></li>
          <li><a href="#example">作業事例</a></li>
          <li><a href="#flow">作業の流れ</a></li>
          <li><a href="#voice">お客様の声</a></li>
          <li><a href="#map">対応エリア</a></li>
        </ul>
        <a class="sp-btn" href="#contact"><img src="./img/header_mail.png"></a>
        <a class="sp-btn" href="https://line.me/R/ti/p/%40qli7299v" target="_blank"><img src="./img/header_line.png"></a>
      </div>
    </nav>
  </header>
  <main>
    <section id="kv">
      <div class="container">
        <picture>
          <source media="(max-width: 768px)" srcset="./img/kv_sp.png">
          <img src="./img/kv.png">
        </picture>
      </div>
    </section>
    <section id="package">
      <div class="container">
        <h1 class="ttl">お得な積み放題パック</h1>
        <div class="pack-list">
          <div class="pack">
            <p class="pack-ttl"><img src="./img/track_ttl01.png"></p>
            <div class="pack-content">
              <div class="pack-image">
                <img src="./img/track01.png">
                <p>単品にオススメ</p>
              </div>
              <p class="pack-price">7,900円〜</p>
            </div>
          </div>
          <div class="pack">
            <p class="pack-ttl"><img src="./img/track_ttl02.png"></p>
            <div class="pack-content">
              <div class="pack-image">
                <img src="./img/track02.png">
                <p>１R片付け目安</p>
              </div>
              <p class="pack-price">11,800円〜</p>
            </div>
          </div>
          <div class="pack">
            <p class="pack-ttl"><img src="./img/track_ttl03.png"></p>
            <div class="pack-content">
              <div class="pack-image">
                <img src="./img/track03.png">
                <p>1LDK〜/１DK〜</p>
              </div>
              <p class="pack-price">38,000円〜</p>
            </div>
          </div>
          <div class="pack">
            <p class="pack-ttl"><img src="./img/track_ttl04.png"></p>
            <div class="pack-content">
              <div class="pack-image">
                <img src="./img/track03.png">
                <p>２LDK〜/２DK〜</p>
              </div>
              <p class="pack-price">48,000円〜</p>
            </div>
          </div>
          <div class="pack">
            <p class="pack-ttl"><img src="./img/track_ttl05.png"></p>
            <div class="pack-content">
              <div class="pack-image">
                <img src="./img/track03.png">
                <p>３LDK〜</p>
              </div>
              <p class="pack-price">69,800円〜</p>
            </div>
          </div>
          <div class="pack-txt">
            <img src="./img/track_txt.png">
            <span>※リサイクル料別<br>※表示価格は税抜きです</span>
          </div>
        </div>
      </div>
    </section>
    <section id="trouble">
      <div class="container">
        <div class="trouble-flow">
          <div class="trouble-ttl">
            <img src="./img/trouble_image.png">
            <h1>こんな<span>お悩み、</span><br>ありませんか？</h1>
          </div>
          <ul class="trouble-list">
            <li>自分だと手に負えない</li>
            <li>時間と手間がかかる</li>
            <li>高額請求がこわい</li>
            <li>家具、家電を新しくしたから古いのが邪魔だ</li>
            <li>分別が大変！まとめて持っていって欲しい</li>
            <li>引っ越しするのにゴミが大量にでた</li>
          </ul>
          <p class="flow-end">そのお悩み、</p>
        </div>
        <div class="settle">
          <h2><img src="./img/settle.png"></h2>
          <a class="settle-contact" href="#">ご不明な点は何でもお問合せください</a>
        </div>
      </div>
    </section>
    <section id="example">
      <div class="container">
        <h1 class="ttl">作業事例</h1>
        <div class="example-slick">
          <div class="example-slide">
            <img src="./img/slide_1.png">
          </div>
          <div class="example-slide">
            <img src="./img/slide_2.png">
          </div>
          <div class="example-slide">
            <img src="./img/slide_3.png">
          </div>
          <div class="example-slide">
            <img src="./img/slide_4.png">
          </div>          
        </div>
      </div>
    </section>
    <section id="flow">
      <div class="container">
        <h1 class="ttl">作業完了までの流れ</h1>
        <div class="flow-table">
          <div class="table">
            <div class="table-box">
              <img src="./img/flow_icon01.png">
              <div>
                <p class="table-ttl">お問い合わせ</p>
                <p>お電話/LINE/メールで<br>24時間365日承ります</p>
              </div>
              <img class="flow-image" src="./img/flow_image01.png">
            </div>
            <div class="table-box">
              <img src="./img/flow_icon02.png">
              <div>
                <p class="table-ttl">お見積り/ご予約</p>
                <p>見積りは無料、<br>訪問のお伺い、<br>当日作業も承ります</p>
              </div>
              <img class="flow-image" src="./img/flow_image02.png">
            </div>
            <div class="table-box">
              <img src="./img/flow_icon03.png">
              <div>
                <p class="table-ttl">回収作業</p>
                <p>指定日時にお伺い、<br>迅速に回収作業を<br>行います</p>
              </div>
              <img class="flow-image" src="./img/flow_image03.png">
            </div>
            <div class="table-box">
              <img src="./img/flow_icon04.png">
              <div>
                <p class="table-ttl">お支払い</p>
                <p>作業に問題がなければ<br>ご精算となります</p>
              </div>
              <img class="flow-image" src="./img/flow_image04.png">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="voice">
      <div class="container">
        <div class="voice-ttl">
          <img src="./img/voice_ttl.png">
          <p>キレイになりました！</p>
        </div>
        <h1>お客様の<span>声</span></h1>
        <div class="voice-list">
          <div class="voice-box">
            <div class="box-ttl">
              <img src="./img/human.png">
              <p>"迅速な対応が良い"</p>
            </div>
            <div class="box-txt">
              <p>引越しで想像以上のゴミが出てしまい、</p>
              <p>困っていたのですが、スタッフさんの</p>
              <p>対応も良く作業も迅速で満足出来ました</p>
            </div>
          </div>
          <div class="voice-box">
            <div class="box-ttl">
              <img src="./img/human.png">
              <p>"料金もリーズナブル！"</p>
            </div>
            <div class="box-txt">
              <p>料金面が不安でしたが、お手頃な</p>
              <p>価格で利用でき、安心感のある対応を</p>
              <p>して頂き良かったです</p>
            </div>
          </div>
          <div class="voice-box">
            <div class="box-ttl">
              <img src="./img/human.png">
              <p>"見積りの説明が丁寧"</p>
            </div>
            <div class="box-txt">
              <p>不用品を処分するにあたりいくつかの業者に</p>
              <p>見積りをとりましたが、ブレストさんは</p>
              <p>見積り時の説明も非常に丁寧で</p>
              <p>さらに金額も一番安かったので決めました</p>
            </div>
          </div>
          <div class="voice-box">
            <div class="box-ttl">
              <img src="./img/human.png">
              <p>"急な依頼にも対応"</p>
            </div>
            <div class="box-txt">
              <p>退去まで時間がなく対応できる業者さんを</p>
              <p>探していましたが中々見つからず、</p>
              <p>こちらに電話して相談したところ、</p>
              <p>すぐに対応してくれて助かりました</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="map">
      <div class="container">
        <h1><img src="./img/map_ttl.png"></h1>
        <p><span>栃木全域</span>、一部を除く<span>茨城、福島、群馬、東京、神奈川、埼玉、千葉</span>を中心に<br>年中無休で依頼を承っております！</p>
        <img src="./img/map.png">
      </div>
    </section>
    <section id="contact">
      <div class="container">
        <div class="contact-box">
          <img src="./img/contact_txt.png">
          <div class="tel-box">
            <div class="tel"><a href="tel:0120726192">0120-726-192</a></div>
            <div class="tag-box">
              <p>24時間対応</p>
              <p>見積り無料</p>
            </div>
          </div>
          <p class="contact-txt">【栃木営業所】　栃木県大田原市加治屋83-5</p>
          <p class="contact-txt">【東京営業所】　東京都台東区浅草3-15-8</p>
          <p class="contact-txt">【埼玉営業所】　埼玉県草加市両新田239-5</p>
        </div>
        <h1 class="ttl">お問合せフォーム</h1>
        <form>
          <div class="form-row">
            <p class="required">必須</p>
            <p class="name">お名前</p>
            <input type="text" name="username" placeholder="例）山田太郎" required>
          </div>
          <div class="form-row">
            <p class="required">必須</p>
            <p class="name">メールアドレス</p>
            <input type="email" name="mail" placeholder="例）exsample@xxxx.com" required>
          </div>
          <div class="form-row">
            <p class="required">必須</p>
            <p class="name">電話番号</p>
            <input type="tel" name="tel" placeholder="例）090-xxxx-xxxx" required>
          </div>
          <div class="form-row">
            <p class="required">必須</p>
            <p class="name">ご住所</p>
            <input type="text" name="address" placeholder="例）○○県○○市○町○番○号" required>
          </div>
          <div class="form-row">
            <p class="required">必須</p>
            <p class="name">ご相談内容</p>
            <textarea name="content" rows="10" placeholder="ご相談内容をご入力して下さい" required></textarea>
          </div>
          <input type="hidden" name="token" value="<?= $_SESSION['token'] ?>">
          <div class="form-btn">
            <input type="submit" id="submit" value="送信する">
          </div>
        </form>
      </div>
    </section>
    <div class="side">
      <a href="https://line.me/R/ti/p/%40qli7299v" target="_blank"><img src="./img/line.png"></a>
      <a href="#contact"><img src="./img/mail.png"></a>
      <a href="tel:0120726192"><img src="./img/tel02.png"></a>
    </div>
  </main>
  <footer>
    <div class="container">
      <div class="menu">
        <a href="/">TOP</a>
        <a href="about.html">会社概要</a>
        <a href="about.html">プライバシーポリシー</a>
      </div>
      <p class="copyright">© 2020 BREST All Rights Reserved.</p>
      <a href="#kv"><img class="pagetop" src="./img/pagetop.png"></a>
    </div>
  </footer>
</body>

</html>