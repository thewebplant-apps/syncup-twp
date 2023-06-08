<?php
echo "hellow docker....+ ".date("h:i:sa");
/*echo getenv('PHP_HUBSPOT_TOK');
echo getenv('PHP_GETBAMBA_TOK');*/
$out=fopen("php://stdout","w");
fwrite($out, "stdoutttt...");


?>