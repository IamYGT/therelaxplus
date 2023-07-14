<?php 
ob_start();
session_start();
require_once('system/baglan.php');
require_once('system/fonk.php');
if(!file_exists('language/dil_'.$_SESSION['k_dil'].".php")) die("Mevcut dilin dosyası bulunamadı!");
require_once('language/dil_'.$_SESSION['k_dil'].".php");
require_once('system/seo.php');

if(DURUM)
	{
		require TEMA."/index.php";
	}
	else
	{
		require TEMA."/bakimda.php";
	}
$db = null;
?>