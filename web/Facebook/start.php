<?php 
//error_reporting(E_ALL);
//ini_set("display_errors", 1); 
session_start();

$config = array(
  'app_id' => '1691216854434231',
  'app_secret' => 'ebfbfdeabe52074debb3c141d69d2e12',
  'scopes' => array('scope' => 'email,read_friendlists,user_online_presence')

);
 define( 'FACEBOOK_SDK_V4_SRC_DIR', './Facebook/Facebook' );
 require 'Facebook/Facebook/autoload.php';


use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
  
$fb = new Facebook\Facebook([
  'app_id' => '1691216854434231',
  'app_secret' => 'ebfbfdeabe52074debb3c141d69d2e12',
  'default_graph_version' => 'v2.6',
]);

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email', 'user_likes']; // optional
$loginUrl = $helper->getLoginUrl('https://chikipagina.herokuapp.com', $permissions);




// init app with app id (APPID) and secret (SECRET)
//FacebookSession::setDefaultApplication('APPID','SECRET');

 
// login helper with redirect_uri
 
//try {
 // $session = $helper->getSessionFromRedirect();
//} catch( FacebookRequestException $ex ) {
  // When Facebook returns an error
//} catch( Exception $ex ) {
  // When validation fails or other local issues
//}
 
// see if we have a session
//if ( isset( $session ) ) {
  // graph api request for user data
 // $request = new FacebookRequest( $session, 'GET', '/me' );
 // $response = $request->execute();
  // get response
  //$graphObject = $response->getGraphObject();
   
  // print data
  //echo  print_r( $graphObject, 1 );
//} else {
  // show login url
 // echo '<a href="' . $helper->getLoginUrl() . '">Login</a>';
//}

 ?>
