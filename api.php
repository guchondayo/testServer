<?php
    //APIを通信するにあたって、以下の２つのヘッダーは必ず必要になっていく
    // ではないとCORSエラーが発生するのでマジで注意すること

    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Headers: Content-Type');
    echo "成功";

    // PHPを使って簡易サーバーを立ち上げる方法
    // 1.PHPfairuwo作成　echo
    // 2.サーバを立ち上げる↓コマンド
    // php -S 127.0.0.1:1192 api.php

    // https://find-a.jp/seotimes/php-web-server/
    // https://web-camp.io/magazine/archives/96988
    // http://commonld.com/blog.php?id=53
    // https://qiita.com/gucho-n/private/a4b0611eea54fb956502

    // net::ERR_NAME_NOT_RESOLVED
    


?>