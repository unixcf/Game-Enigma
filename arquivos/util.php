<?

function getFaseBlock() {
	$url = (!empty($_SERVER['HTTPS']))
    ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] 
    : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
	
	if (strstr($url, 'arquivos'))
	{
		header("HTTP/1.0 404 Not Found");
		header("Location: /");
	}
}










?>