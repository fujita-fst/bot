<?php
require_once('LineBot.php');

// LINE:�`�����l��ID
$CHANNEL_ID = '1478093558';

// LINE:�`�����l���V�[�N���b�g
$CHANNEL_SECRET = '4b0d6d496f07f373d363bac4e4c0b906';

// LINE:MID
$CHANNEL_MID = 'ue23570330a5023ff953186330b803cdb';

// Bing�A�J�E���g�L�[
//$ACCOUNT_KEY = '[Bing Search API�̃A�J�E���g�L�[]';
$bot = new LineBot($CHANNEL_ID, $CHANNEL_SECRET, $CHANNEL_MID);

// �e�L�X�g���M
$bot->sendText('�u%s�v�f�X�l...');

// �摜���M
//$bot->sendImage($ACCOUNT_KEY);