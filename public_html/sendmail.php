<?php
  session_start();

  header('X-FRAME-OPTIONS: SAMEORIGIN');

  if (!isset($_SESSION['token'])) {
    $_SESSION['token'] = sha1(random_bytes(30));
  }

  function escape($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
  }

  function spaceTrim ($str) {
    $str = preg_replace('/^[ 　]+/u', '', $str);
    $str = preg_replace('/[ 　]+$/u', '', $str);
    return $str;
  }

  $token = $_POST['token'];

  if(!(hash_equals($token, $_SESSION['token']) && !empty($token))) {
    echo "不正アクセスの可能性があります";
    exit();
  }

  if(!isset($_POST['username']) || !isset($_POST['mail']) || !isset($_POST['tel']) || !isset($_POST['address']) || !isset($_POST['content'])) {
    echo "入力内容を確認してください";
    exit();
  }

  $name = spaceTrim($_POST['username']);
  $mail = spaceTrim($_POST['mail']);
  $tel = spaceTrim($_POST['tel']);
  $address = spaceTrim($_POST['address']);
  $content = spaceTrim($_POST['content']);

  mb_language("Japanese");
  mb_internal_encoding("UTF-8");

  //**管理者側送信設定**************************
  $from = $mail; //送信元アドレス
  $subject = ""; //メールタイトル
  $body = "お名前:".$name."\n".
          "メールアドレス:".$mail."\n".
          "電話番号:".$tel."\n".
          "ご住所:".$address."\n".
          "ご相談内容:".$content."\n"; //本文
  $to = "info@nandemoyablessd510.com"; //送信先メールアドレス
  $header = "From: ".$from."\nReply-To: ".$from."\n";
  if(mb_send_mail($to, $subject, $body, $header)) {

    //**申込者側返信設定**************************
    $from = "info@nandemoyablessd510.com"; //送信元アドレス
    $subject = "お問い合わせありがとうございました"; //メールタイトル
    $body = $name."様"."\n\n".
            "この度は、なんでも屋ブレストにお問い合わせを頂き誠にありがとうございます。"."\n".
            "お問い合わせ内容を確認の上、3営業日以内にご返答致します。"."\n\n".
            "お名前:".$name."\n".
            "メールアドレス:".$mail."\n".
            "電話番号:".$tel."\n".
            "ご住所:".$address."\n".
            "ご相談内容:".$content."\n\n".
            "---------------"."\n".
            "なんでも屋ブレスト"."\n".
            "栃木県大田原市加治屋83-5"."\n".
            "電話番号：03-6240-6858"."\n".
            "info@nandemoyablessd510.com"."\n".
            "---------------";//本文
    $to = $mail; //送信先メールアドレス
    $header = "From: ".$from."\nReply-To: ".$from."\n";
    mb_send_mail($to, $subject, $body, $header);
    echo "お問い合わせありがとうございました";
  }

  session_unset();
?>