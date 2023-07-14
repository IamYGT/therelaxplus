<?php
	date_default_timezone_set('Europe/Istanbul');
	error_reporting(0); // varsa tüm hata kodlarını görmek istiyorsanız E_ALL yapabilirsiniz
	
	$host = 'localhost'; // Değiştirmeyiniz
	$data = 'the_site'; // Veri tabanı Adını Yazın.
	$user = 'the_site'; // Veri tabanı Kullanıcı adını yazın
	$pass = 'F@i8sn38'; // Veri tabanı Şifrenizi Yazın
	
	// ÖNEMLİ HATIRLATMA: http://prntscr.com/h4ktsy resimde görüldüğü gibi ayarlayınız
	
	try
	{
		$db = new PDO('mysql:host='.$host.';dbname='.$data.';charset=UTF8;', $user, $pass);
	}
	catch(PDOException $e)
	{
		echo 'Hata: '.$e->getMessage();
	}
	
	if(is_numeric($_GET['dil']))
		$_SESSION['k_dil'] = $_GET['dil'];
	
	if(!isset($_SESSION['k_dil']))
	{
		$anadil = $db->prepare("SELECT * FROM diller WHERE anadil = ?");
		$anadil->execute([1]);
		if($anadil->rowCount() == 0) die("Lütfen bir anadil seçiniz !!");
		$anadil = $anadil->fetch(PDO::FETCH_ASSOC);
		$_SESSION['k_dil'] = @$anadil['id'];
	}
	else
	{
		$mevcutDil = $db->prepare("SELECT * FROM diller WHERE id = ?");
		$mevcutDil->execute([(int) $_SESSION['k_dil']]);
		if($mevcutDil->rowCount() == 0)
		{
			$anadil = $db->prepare("SELECT * FROM diller WHERE anadil = ?");
			$anadil->execute([1]);
			if($anadil->rowCount() == 0) die("Lütfen bir anadil seçiniz !!");
			$anadil = $anadil->fetch(PDO::FETCH_ASSOC);
			$_SESSION['k_dil'] = @$anadil['id'];
		}
		else
		{
			$mevcutDil = $mevcutDil->fetch(PDO::FETCH_ASSOC);
			$_SESSION['k_dil'] = @$mevcutDil['id'];
		}
	}
	
	$ayar = $db->query("SELECT * FROM ayarlar")->fetch();
	$sms = $db->query("SELECT * FROM sms")->fetch();
	$mailayar = $db->query("SELECT * FROM mail_ayar")->fetch();
	$kurumsal = $db->query("SELECT * FROM sayfalar WHERE anasayfa = '1' ORDER BY id ASC LIMIT 1")->fetch();
	$limitayar = $db->query("SELECT * FROM limit_ayar WHERE id = '1' ORDER BY id ASC LIMIT 1")->fetch();
	$renkayar = $db->query("SELECT * FROM renkler WHERE id = '1' ORDER BY id ASC LIMIT 1")->fetch();
	$moduller = $db->query("SELECT * FROM moduller WHERE id = '1' ORDER BY id ASC LIMIT 1")->fetch();
	$arkaplan = $db->query("SELECT * FROM arka_plan WHERE id = '1' ORDER BY id ASC LIMIT 1")->fetch();
	
	// Sabitler
	define("BASLIK", $ayar["site_baslik"]);
	define("URL", $ayar["site_url"]);
	define("TEMA_DIR", $ayar["site_tema"]);
	define("TEMA","tema/".$ayar["site_tema"]);
	define("TEMA_URL", $ayar["site_url"]."tema/".$ayar["site_tema"]);
	define("DURUM", $moduller["alan8"]);	
	define("LOGO", $ayar["firma_logo"]);
	define("FOOTERLOGO", $ayar["firma_footerlogo"]);
	define("FAV", $ayar["favicon"]);
	define("FIRMAADI", $ayar["firma_adi"]);
	define("TELEFON", $ayar["firma_telefon"]);
	define("FAX", $ayar["firma_fax"]);
	define("EMAIL", $ayar["firma_email"]);
	define("ADRES", $ayar["firma_adres"]);
	define("MAPS", $ayar["google_maps"]);
	define("ANALYTICS", $ayar["google_analytics"]);
	define("FACEBOOK", $ayar["facebook"]);
	define("TWITTER", $ayar["twitter"]);
	define("GPLUS", $ayar["gplus"]);
	define("INSTAGRAM", $ayar["instagram"]);
	define("COPYRIGHT", $ayar["copyright"]);
	define("SITEDESC", $ayar["site_desc"]);
	define("SITEKEYW", $ayar["site_keyw"]);	
	define("PAROLA", $ayar["parola"]);	
	
	// Renk Sabitler
	define("RENK1", $renkayar["renk1"]);
	define("RENK2", $renkayar["renk2"]);
	define("RENK3", $renkayar["renk3"]);	
	
	// Mail Sabitler
	define("m_server", $mailayar["m_server"]);
	define("m_adresi", $mailayar["m_adresi"]);
	define("m_parola", $mailayar["m_parola"]);
	define("m_baslik", $mailayar["m_baslik"]);
	
	define("ALTKLASOR", $moduller["alan5"]);
	
	function mailgonder($kullanici_mail,$mailKonu,$mesajj) 
	{
		$from		= m_adresi; //Mail adresinizi giriniz
		$gonderici	= m_adresi; //Gönderici Adınız
		$m_host		= m_server; //mail.alanadiniz.com/tr
		$m_pass		= m_parola; //Mail Password

		$mail = new PHPMailer();
		$mail->IsSMTP(true);
		$mail->From     = $from;
		$mail->Sender   = $from;
		$mail->AddAddress($kullanici_mail, FIRMAADI); 
		$mail->AddReplyTo=($from);
		$mail->FromName = FIRMAADI;
		$mail->Host     = $m_host;
		$mail->SMTPAuth = true;
		$mail->Port     = 587;
		$mail->CharSet = 'UTF-8';
		$mail->Username = $from;
		$mail->Password = $m_pass;
		$mail->Subject  = $mailKonu;
		$mail->IsHTML(true);
		$mail->Body = $mesajj;
		$mail->Send();
	}

	
?>