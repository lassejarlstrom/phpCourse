<?php
require('library.php');
$options = array("uri" => "http://localhost/phpCourse/WebService/WebWithPHPSOAP");
$server = new SoapServer(null, $options);
$server->setClass('Library');
$server->handle();

?>

