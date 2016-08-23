<?php
require_once('LineBot.php');

// LINE:チャンネルID
$CHANNEL_ID = '1478093558';

// LINE:チャンネルシークレット
$CHANNEL_SECRET = '4b0d6d496f07f373d363bac4e4c0b906';

// LINE:MID
$CHANNEL_MID = 'ue23570330a5023ff953186330b803cdb';

// Bingアカウントキー
//$ACCOUNT_KEY = '[Bing Search APIのアカウントキー]';
$bot = new LineBot($CHANNEL_ID, $CHANNEL_SECRET, $CHANNEL_MID);

// テキスト送信
$bot->sendText('「%s」デスネ...');

// 画像送信
//$bot->sendImage($ACCOUNT_KEY);