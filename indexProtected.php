<?php

$token     = $_SERVER["HTTP_X_TOKEN"];
$realToken = "lol";

// La funcion no revela por medio del tiempo que tan rapido logro validarlo.
function slowEquals($a, $b) {
	// Mira si la diferencia de tamaños es mayor a uno
	$diff = strlen($a) ^ strlen($b);
	// Itera siempre si el index es menor en ambos casos hagase entender esconde el tamño del token ya qu epara en cuanto uno de los dos sea menor
	for ($i = 0; $i < strlen($a) && $i < strlen($b); $i++) {
		$diff |= ord($a[$i]) ^ ord($b[$i]);
	}

	return $diff === 0;
}
if (!slowEquals($token, $realToken)) {
	http_response_code(403);
}

return $token;
?>