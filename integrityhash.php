<?php
	$PBFPubKey = "FLWPUBK-........";// replace with your payfiber public key
	$amount = $_GET['sellingcurrencyamount'];	
	$country = "NG";// replace with your country
	$currency = "NGN";// replace with your currency
	$custom_description = "SECURE PAYMENT";//replace with your custom description
	$custom_logo = "http://example.com/image.jpg";//replace with your custom logo url
	$custom_title = "My Company Ltd"; // replace with your custom tittle
	$customer_email = $_GET['emailAddr'];
	$customer_firstname = $_GET['name'];
	$customer_phone = $_GET['telNo'];
	$txref = $_GET['transid'];
	$PBFSecKey = "FLWSECK-.......";//replace with your payfiber secret key
	$raveintegrityhashstring = "{$PBFPubKey}{$amount}{$country}{$currency}{$custom_description}{$custom_logo}{$custom_title}{$customer_email}{$customer_firstname}{$customer_phone}{$txref}{$PBFSecKey}";
	echo hash('sha256', $raveintegrityhashstring);
?>