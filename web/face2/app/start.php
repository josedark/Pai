<?php

session_start();

require './config/facebook.php';
require './Facebook/autoload.php';

//require_once( './Facebook/FacebookSession.php' );
//require_once( './Facebook/FacebookRedirectLoginHelper.php' );
//require_once( './Facebook/FacebookRequest.php' );
//require_once( './Facebook/FacebookResponse.php' );
//require_once( './Facebook/FacebookSDKException.php' );
//require_once( './Facebook/FacebookRequestException.php' );
//require_once( './Facebook/FacebookAuthorizationException.php' );
//require_once( './Facebook/GraphObject.php' );
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\GraphUser;
use Facebook\GraphObject;
use Facebook\FacebookRequestException;

FacebookSession::setDefaultApplication($config['app_id'], $config['app_secret']);
$helper = new FacebookRedirectLoginHelper('https://chikipagina.herokuapp.com');

try {
	$session = $helper->getSessionFromRedirect();

	if ($session):
		$_SESSION['facebook'] = $session->getToken();
		header('Location: ./index.php');
	endif;

	if (isset($_SESSION['facebook'])):
		$session = new FacebookSession($_SESSION['facebook']);

		$request = new FacebookRequest($session, 'GET', '/me');
		$response = $request->execute();
		$graphObjectClass = $response->getGraphObject(GraphUser::className());

		$facebook_user = $graphObjectClass;
	endif;
} catch(FacebookRequestException $ex) {
  // When Facebook returns an error
} catch(\Exception $ex) {
  // When validation fails or other local issues
}
