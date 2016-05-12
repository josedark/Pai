<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1); 
require_once __DIR__ . '/Facebook/php-sdk-v4/src/Facebook/autoload.php';

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;

$fb = new  Facebook\Facebook([
  'app_id' => '1691216854434231',
  'app_secret' => 'ebfbfdeabe52074debb3c141d69d2e12',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://chikipagina.herokuapp.com/Facebook/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';









 ?>
