<?php

// 文字コード設定!
header('Content-Type: application/json; charset=UTF-8');

// // numが存在するかつnumが数字のみで構成されているか
// isset
// https://www.php.net/manual/ja/function.isset.php
// get
// https://www.php.net/manual/ja/reserved.variables.get.php
if(isset($_GET["num"]) && !preg_match('/[^0-9]/', $_GET["num"])) {
    // numをエスケープ(xss対策)
    $param = htmlspecialchars($_GET["num"]);
    // メイン処理
    $arr["status"] = "yes";
    $arr["x114"] = (string)((int)$param * 114); // 114倍
    $arr["x514"] = (string)((int)$param * 514); // 514倍
} else {
    // paramの値が不適ならstatusをnoにしてプログラム終了
    $arr["status"] = "no";
}

// 配列をjson形式にデコードして出力, 第二引数は、整形するためのオプション
print json_encode($arr, JSON_PRETTY_PRINT);


// PHPで簡単なWebAPIを実装してみる【初心者向け】
// https://note.com/kazztech/n/ndb3a5468f299

// ①サーバーを起動しておく
// ＄php -S 127.0.0.1:1192 test.php
// ②URLをうつ
// http://localhost:1192/test.php?num=10

?>