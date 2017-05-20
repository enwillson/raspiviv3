<?php
	include '/var/www/html/log.php';
	include '/var/www/html/core/config.php';

	//dec to hex
		//dechex(x)
	//hex to dec
		//shexdex(x)
	//i2cdetect -y 1
	//i2cdump -y 0x..
	//i2cset -y 1 0x27 0x..

	$pin = array(0,1,2,3,4,5,6,7);
	$pin_mode = array(0, 0, 0, 0, 0, 0, 0, 0);
	$statusActive = True;
	$PCF8574 = hex2bin(0x27);

	while ($statusActive)
	{
		echo date('h:i:s'). " || ".($PCF8574). "\n";
		 for ($pin = 0; $pin < count($pin_mode); $pin++)
		 {
				//system("gpio mode $pin out");
				//system("gpio write $pin $status[$pin]");
				$pin = bin2hex($pin);
				$mode = bin2hex($pin_mode[$pin]);
				echo "pin:$pin, mode:$mode"."\n";
				sleep(0.1);
		 	}
		 	sleep(10);

			//exec ("gpio read ".$pin, $status[$pin], $return );
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
 <!-- javascript -->
		 <script src="no.js"></script>


</html>
