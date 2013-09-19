<?php
// options til SoapClient, trace til at printe last response i xml.
$options = array("trace" => true, "location" => "http://localhost/phpCourse/WebService/WebWithPHPSOAP/server.php", "uri" => "http://localhost");


try {
	//wsdl: null, da den ikke er generet
	$client = new SoapClient(null, $options);

	// hent alle dværge
	echo "Hent alle dv&aelig;rge!". "<br>";
	$dwarves 	= $client->getDwarves();
	foreach ($dwarves as $value){
		echo $value. "<br>";	    
	}
echo "<br>";	
	// sig goddag til daniel
	echo "Sig goddag til daniel". "<br>";
	$greet		= $client->greetUser("Daniel");
	foreach ($greet as $value){
		echo $value. "<br>";	    
	}
	echo "RESPONSE HEADERS:\n" . $client->__getLastResponseHeaders() . "\n";
	echo "Print xml fil: <br>REQUEST:\n" . htmlentities($client->__getLastResponse()) . "\n";
	// catch
	} catch (SoapFault $e) {
		var_dump($e);


}
