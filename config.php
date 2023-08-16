<?php

return [
	'default' => [
		'gateway_title' => 'Card Saver',
		'method_description' => 'Pay securely via Credit / Debit Card with Card Saver',
	        'default_merchant_id' => 'MMS ONLINE MID',
                'default_secret' => 'Signiture Key',
	],
	'applepay' => [
		'method_description' => 'Pay securely via Apple Pay with Card Saver',
		'title' => 'Apple Pay',
		'gateway_validation_available' => true,
	],
	'module' => [
		'version' => '3.0.0'
	]
];
