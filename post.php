<?php
$url = 'http://127.0.0.1/apirest/produits';
$data = array('name' => 'PEC', 'firstname' => 'Pencil 2H', 'email' => 'pourquoi@gmail.com', 'password' => 'azerty123');


$options = array(
	'http' => array(
		'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
		'method'  => 'POST',
		'content' => http_build_query($data)
	)
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { 
}

var_dump($result);
