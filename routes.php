<?php

/**
 * @package		Magento SOAP v1 API Wrapper (Laravel Bundle)
 * @author		Matteo Castiglioni <http://www.rabbitpills.com>
 * @version		Release: 1.0
 */

Route::any('(:bundle)', function(){
 	return (Config::get('magentoapi::options.allow_ajax') and count($get=Input::get())==2 and Request::ajax()) ?
	Controller::call("magentoapi::home@exec_call",array('method'=>current($get),'param'=>end($get))) :
	Controller::call("magentoapi::home@index");
});