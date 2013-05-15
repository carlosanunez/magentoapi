<?php

/**
 * @package		Magento SOAP v1 API Wrapper (Laravel Bundle)
 * @author		Matteo Castiglioni <http://www.rabbitpills.com>
 * @version		Release: 1.0
 */

Autoloader::map(array(
	'Mapi' => Bundle::path('magentoapi').'libraries/mapi.php'
));