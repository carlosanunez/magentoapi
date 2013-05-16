MagentoApi
==========

Simple Magento SOAP v1 API wrapper for the Laravel Framework.

Installation
------------

Install via Artisan
```
php artisan bundle:install magentoapi
```

Add the following to your **application/bundles.php** file
```
'magentoapi' => array('auto' => true, 'handles' => 'magentoapi')
```

Publish bundle assets into the public directory
```
php artisan bundle:publish magentoapi
```

Configuration
-------------
Once installed, open **bundles/magentoapi/config/options.php** file and edit the configuration options
```php
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
```

API Methods List
----------------
You can visit __http://yourlaravelsite.com/magentoapi/__ for a list of available methods.
You'll see only the Magento's SOAP methods for which it was granted access to the user
set in the configurations of the bundle.


Usage Examples
-----
###Static
You can access every Magento SOAP API method by static calls
```php
Mapi::call('catalog_product.update',array('HTC Touch Diamond', array('price' => '1000')));
```
###Ajax
Or by AJAX call
```javascript
$.ajax({
	type: "POST",
	url: "<?=URL::base()."/magentoapi/"?>",
	data: {
		method: 'catalog_product.update',
		param: <?=json_encode(array('HTC Touch Diamond', array('price' => '1000')))?>
	}
});
```
