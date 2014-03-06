<?php
	// Application Information


	// Application Address
	
	
	if( $_SERVER['HTTP_HOST'] == 'josefflores.com' || 
	    $_SERVER['HTTP_HOST'] == 'www.josefflores.com' ) { 				//<------ ADD THIS if statement for every server so that it runs without having to change the configuration file everytime
			
		$A[ 'W_ROOT' ] 	= 'http://www.josefflores.com/csr/' ;			// Jose flores test server
		$A[ 'D_ROOT' ] 	= 'D:/Github/2014_SP_SE_1/cloudComputing/' ;	
		
	}
	else {
		
		$A[ 'W_ROOT' ] 	= 'http://107.20.150.132/csr/' ;					// AWS Server settings
		$A[ 'D_ROOT' ] 	= 'C:/wamp/apps/csr/' ;	
		
	}
	
	// Resolving relative web paths
	$A[ 'W_API' ]		= $A[ 'W_ROOT' ].'_api/' ;
	$A[ 'W_COM' ]		= $A[ 'W_ROOT' ].'_com/' ;
	$A[ 'W_JS' ] 		= $A[ 'W_COM' ].'js/' ;
	$A[ 'W_JS_LIB' ] 	= $A[ 'W_JS' ].'lib/' ;
	$A[ 'W_JS_WGT' ] 	= $A[ 'W_JS' ].'wgt/' ;
	$A[ 'W_CSS' ] 		= $A[ 'W_COM' ].'css/' ;
	$A[ 'W_IMG' ] 		= $A[ 'W_COM' ].'img/' ;
	$A[ 'W_PORTAL' ]	= $A[ 'W_ROOT' ].'_portal/' ;
	$A[ 'W_ADMIN' ]		= $A[ 'W_PORTAL' ].'admin/' ;
	$A[ 'W_DEV' ]		= $A[ 'W_PORTAL' ].'dev/' ;
	$A[ 'W_PROFILE' ] 	= $A[ 'W_COM' ].'profile/' ;
	
	// Resolving relative dir paths
	$A[ 'D_DOC' ]		= $A[ 'D_ROOT' ].'doc/' ;
	$A[ 'D_INI' ]		= $A[ 'D_ROOT' ].'ini/' ;
	$A[ 'D_HEAD' ]		= $A[ 'D_ROOT' ].'head/' ;
	$A[ 'D_PHP' ]		= $A[ 'D_ROOT' ].'php/' ;
	$A[ 'D_API' ]		= $A[ 'D_PHP' ].'api/' ;
	$A[ 'D_LIB' ]		= $A[ 'D_PHP' ].'lib/' ;
	$A[ 'D_TMP' ]		= $A[ 'D_PHP' ].'tmp/' ;
	$A[ 'D_WGT' ]		= $A[ 'D_PHP' ].'wgt/' ;
	$A[ 'D_USR' ]		= $A[ 'D_ROOT' ].'usr/' ;
	$A[ 'D_WWW' ]		= $A[ 'D_ROOT' ].'www/' ;

	//Icon Sets	
	$A[ 'ToolbarMenuIcons' ] = $A[ 'W_IMG' ].'jquery-ui/' ;
	
	// File Access Guard
	define('CONTENT_GUARD', TRUE);

	
?>