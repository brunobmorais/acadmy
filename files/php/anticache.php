<?
/**
 * NÃO PERMITE ARMAZENAMENTO DE CACHE NO NAVAGADOR
 */

header("Content-type: application/xml; charset=UTF-8");
header("Expires: {$gmtDate} GMT");
header("Last-Modified: {$gmtDate} GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
header("Content-type: text/html; charset=UTF-8");
?>
