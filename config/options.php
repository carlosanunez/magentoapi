<?php

/**
 * @package		Magento SOAP v1 API Wrapper (Laravel Bundle)
 * @author		Matteo Castiglioni <http://www.rabbitpills.com>
 * @version		Release: 1.0
 */

return array(
	/* 
	*	Magento SOAP URL
	*/
	'wsdl_url'		=> 'http://yourmagentosite.com/api/soap/?wsdl',
	/* 
	*	Magento SOAP User and Key
	*/
	'wsdl_user'		=> 'SoapUsername',
	'wsdl_key'		=> 'SoapApiKey',
	/* 
	*	PHP SOAP extension options
	*	http://www.php.net/manual/en/soapclient.soapclient.php
	*/
	'wsdl_params'	=> array(),
	/* 
	*	Enable/disable call methods by AJAX
	*/
	'allow_ajax'	=> true
);