<?php

	
	$protocol='7';
	$msgtype='authorize';
	$merchant='89898978';
	$language='en';
	$ordernumber = time();
	$amount='100';
	$currency='DKK';
	$continueurl='http://sandbox3.fixtr.dk/examples/continue.php';
	$cancelurl='http://sandbox3.fixtr.dk/examples/cancel.php';
	$callbackurl='http://sandbox3.fixtr.dk/examples/callback.php'; //see http://quickpay.dk/clients/callback-quickpay.php.txt
	$md5secret ='29p61DveBZ79c3144LW61lVz1qrwk2gfAFCxPyi5sn49m3Y3IRK5M6SN5d8a68u7';
	$testmode = "1";
	$cardtypelock = "";
	/*
	$protocol='7';
	$msgtype='authorize';
	$merchant='29811601';
	$language='en';
	$ordernumber = time();
	$amount='1';
	$currency='DKK';
	$continueurl='http://localhost/examples_1/continue.php';
	$cancelurl='http://localhost/examples_1/cancel.php';
	$callbackurl='http://localhost/examples_1/callback.php'; //see http://quickpay.dk/clients/callback-quickpay.php.txt
	$md5secret ='2DL145yaGF38bXJ1CP5HI2e49qZU6EuBx7jnW4l7cA5hvQz7dV637gN8p98986Kr';
	$testmode = "1";
	*/

    $md5check = md5($protocol.$msgtype.$merchant.$language.$ordernumber.$amount.$currency.$continueurl.$cancelurl.$callbackurl.$testmode.$cardtypelock.$md5secret);

?>

<form action="https://secure.quickpay.dk/form/" method="post">
    <input type="hidden" name="protocol" value="<?php echo $protocol ?>" />
    <input type="hidden" name="msgtype" value="<?php echo $msgtype ?>" />
    <input type="hidden" name="merchant" value="<?php echo $merchant ?>" />
    <input type="hidden" name="language" value="<?php echo $language ?>" />
    <input type="hidden" name="ordernumber" value="<?php echo $ordernumber ?>" />
    <input type="hidden" name="amount" value="<?php echo $amount ?>" />
    <input type="hidden" name="currency" value="<?php echo $currency ?>" />
	<input type="hidden" name="continueurl" value="<?php echo $continueurl ?>" />
	<input type="hidden" name="cancelurl" value="<?php echo $cancelurl ?>" />
    <input type="hidden" name="callbackurl" value="<?php echo $callbackurl ?>" />
    <input type="hidden" name="md5check" value="<?php echo $md5check ?>" />
	<input type="hidden" name="testmode" value="<?php echo $testmode?>" />
	<input type="hidden" name="cardtypelock" value="<?php echo $cardtypelock?>" />
    <input type="submit" value="Pay" />
</form>
