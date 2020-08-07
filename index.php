<?php

$token          = $_SERVER["HTTP_X_TOKEN"];
$realToken      = "lol";
$realTokenArray = str_split($realToken);
$tokenArray     = str_split($token);

foreach ($realTokenArray as $index => $char) {
	if ($char != $tokenArray[$index]) {
		http_response_code(403);

		return $token;
	}
	usleep(500);
}

echo $token;

return $token;
?>