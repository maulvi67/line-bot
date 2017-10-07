<?php 
require __DIR__.'/vendor/autoload.php';

use \LINE\LINEBot;
use \LINE\LINEBot\HTTPClient\CurlHTTPClient;
use \LINE\LINEBot\MessageBuilder\MultiMessageBuilder;
use \LINE\LINEBot\MessageBuilder\TextMessageBuilder;
use \LINE\LINEBot\MessageBuilder\StickerMessageBuilder;
use \LINE\LINEBot\SignatureValidator as SignatureValidator;

$pass_signature = true;

$channel_access_token = '';
$channel_secret = '';

//inisiasi objek bot
$httpClient = new CurlHTTPClient($channel_access_token);
$bot = new LINEBot($httpClient, ['channelSecret'=>$channel_secret]);

$configs = [ 'settings' => ['displayErrorDetails' => true]];
$app = new Slim\App($config);

//buat route untuk url homepage

$app->get('/',function($req, $res)
{
	echo 'Welcome at slime framework';
});

//buat route untuk webhook
$app->post('/webhook', function ($request,$response) use ($bot, $pass_signature)
{
	//get request body and line signature header
	$body = file_get_contents('php://input');
}


 ?>