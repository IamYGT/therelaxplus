<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php 
$ayar_dizi = $db->prepare("SELECT * FROM ayarlar WHERE id = ?");
$ayar_dizi->execute(array(1));
if($ayar_dizi->rowCount()){
	$Sonuc = $ayar_dizi->fetch(PDO::FETCH_ASSOC);
}else{
	echo '<meta http-equiv="refresh" content="0; url=404.html">';
	exit();
}
##Site Ayar Güncelle ##
if(isset($_POST['SiteAyarGuncelle']))
{
	islemkontrol();
	if($_SESSION['rutbe'] == 0)
	{
		$site_title			= $_POST['site_title'];
		$site_url 			= $_POST['site_url'];
		$site_keyw 			= $_POST['site_keyw'];
		$site_desc 			= $_POST['site_desc'];
		$firma_adi 			= $_POST['firma_adi'];
		$firma_telefon 		= $_POST['firma_telefon'];
		$firma_fax 			= $_POST['firma_fax'];
		$firma_email 		= $_POST['firma_email'];
		$firma_adres 		= $_POST['firma_adres'];
		$google_maps 		= $_POST['google_maps'];
		$google_analytics 	= $_POST['google_analytics'];
		$facebook 			= $_POST['facebook'];
		$twitter 			= $_POST['twitter'];
		$gplus 				= $_POST['gplus'];
		$instagram 			= $_POST['instagram'];
		$copyright 			= $_POST['copyright'];
		
		include_once('../panel/class.upload.php');
		$upload = new upload($_FILES['resim']);
		if ($upload->uploaded){
		$upload->file_auto_rename = true;
		$upload->process("../".TEMA."/uploads/logo");
		if ($upload->processed){
		$firmalogo=''.$upload->file_dst_name.'';
			}
		}
		
		$upload2 = new upload($_FILES['footer']);
		if ($upload2->uploaded){
		$upload2->file_auto_rename = true;
		$upload2->process("../".TEMA."/uploads/logo/footer");
		if ($upload2->processed){
		$footerlogo=''.$upload2->file_dst_name.'';
			}
		}

		$upload = new upload($_FILES['favicon']);
		if ($upload->uploaded){
		$upload->file_auto_rename = true;
		$upload->process("../".TEMA."/uploads/favicon");
		if ($upload->processed){
		$favicon=''.$upload->file_dst_name.'';
			}
		}
		
		if(isset($firmalogo)){
			$resim_bul= $db->query("SELECT * FROM ayarlar WHERE id = '1'")->fetch(PDO::FETCH_ASSOC);
			unlink("../".TEMA."/uploads/logo/".$resim_bul['firma_logo']);
			$guncelle = $db->prepare("UPDATE ayarlar SET firma_logo = ? WHERE id = ?");
			$guncelle->execute([$firmalogo,1]);
			$firmalogo=''.$upload->file_dst_name.'';
		}
		
		if(isset($footerlogo)){
			$resim_bul= $db->query("SELECT * FROM ayarlar WHERE id = '1'")->fetch(PDO::FETCH_ASSOC);
			unlink("../".TEMA."/uploads/logo/footer/".$resim_bul['firma_footerlogo']);
			$guncelle = $db->prepare("UPDATE ayarlar SET firma_footerlogo = ? WHERE id = ?");
			$guncelle->execute([$footerlogo,1]);
			$footerlogo=''.$upload2->file_dst_name.'';
		}
		
		if(isset($favicon)){
			$resim_bul= $db->query("SELECT * FROM ayarlar WHERE id = '1'")->fetch(PDO::FETCH_ASSOC);
			unlink("../".TEMA."/uploads/favicon/".$resim_bul['favicon']);
			$guncelle = $db->prepare("UPDATE ayarlar SET favicon = ? WHERE id = ?");
			$guncelle->execute([$favicon,1]);
			$favicon=''.$upload->file_dst_name.'';
		}		
		$sorgu = $db->prepare("UPDATE ayarlar SET
			site_baslik	= ?,
			site_url 	= ?,
			site_keyw	= ?,
			site_desc	= ?,
			firma_adi	= ?,
			firma_telefon= ?,
			firma_fax	= ?,
			firma_email	= ?,
			firma_adres	= ?,
			google_maps	= ?,
			google_analytics= ?,
			facebook	= ?,
			twitter		= ?,
			gplus		= ?,
			instagram	= ?,
			copyright	= ?
			WHERE id = ?");
		$guncelle = $sorgu->execute(array(
			$site_title,
			$site_url,
			$site_keyw,
			$site_desc,			
			$firma_adi,
			$firma_telefon,
			$firma_fax,
			$firma_email,
			$firma_adres,
			$google_maps,
			$google_analytics,
			$facebook,
			$twitter,
			$gplus,
			$instagram,
			$copyright,
			"1"
		));
		if($guncelle)
		{
			$_SESSION['SiteAyarGuncelle'] = 'yes';
			echo '<meta http-equiv="refresh" content="1; url='.$_SERVER['REQUEST_URI'].'">';
		}
		else
		{
			$_SESSION['SiteAyarGuncelle'] = 'no';
			echo '<meta http-equiv="refresh" content="1; url='.$_SERVER['REQUEST_URI'].'">';
		}
	}
	else
	{
		$_SESSION['demohesap'] = 'no';
		echo '<meta http-equiv="refresh" content="1; url='.$_SERVER['REQUEST_URI'].'">';
	}
}
if(isset($_POST['dilchange']))
{
	islemkontrol();
	if($_SESSION['rutbe'] == 0)
	{
		$dizin = '../language/admin_dil.php';
		require_once($dizin);
		$admindil[$_POST['key']] = $_POST['value'];
		$line = "<?php ".PHP_EOL;
		foreach ($admindil as $key => $value) {
			$line .= '$admindil["'.$key.'"] = "'.$value.'";'.PHP_EOL;
		}
		$file=fopen($dizin,'w');
		fwrite($file,$line);
		fclose($file);
		echo '<pre>';print_r($_POST);exit;
	}
	else
	{
		$_SESSION['demohesap'] = 'no';
		header("Location:site-ayar.html");
	}
}
?>
<div class="content">
<div class="container">
<!-- Page-Title -->
	<div class="row">
		<div class="col-sm-12">
			<div class="btn-group pull-right m-t-15">
				<button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Düzenleme Dili <strong><?php echo $mevcutDil['adi'];?></strong></button>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
					<?php $DILSorgu = $db->prepare("SELECT * FROM diller ORDER BY sira ASC");
					$DILSorgu->execute();
					$DILislem = $DILSorgu->fetchALL(PDO::FETCH_ASSOC);?>
						<?php foreach ( $DILislem as $DILSonuc ){?>
						<a class="dropdown-item" href="site-ayar.html?dil=<?=$DILSonuc['id'];?>"><?=@$DILSonuc['adi'];?></a>
						<?php } ?>
				</div>
			</div>
			<h4 class="page-title"><?=@$admindil['txt49'];?></h4>
			<ol class="breadcrumb">
				<li>
					<a href="index.html"><?=@$admindil['txt1'];?></a>
				</li>
				<li>
					<a href="site-ayar.html"><?=@$admindil['txt48'];?></a>
				</li>
				<li class="active">
					<?=@$admindil['txt49'];?>
				</li>
			</ol>
		</div>
	</div>

<!-- Forms -->
	<div class="row">
		<div class="col-sm-12">
			<div class="card-box">
				<div class="row">
					<form method="post" action="" enctype="multipart/form-data">
						<div class="col-md-12">
						<div class="form-group col-sm-6" style="margin-left: -10px;">
							<label for="site_title">Site Title</label>
							<input type="text" class="form-control" name="site_title" value="<?php echo $Sonuc['site_baslik'];?>" id="site_title"/>
						</div>
						<div class="form-group col-sm-6" style="padding-right: 0px;">
							<label for="site_title">Site URL</label>
							<input type="text" class="form-control" name="site_url" value="<?php echo $Sonuc['site_url'];?>" id="site_url"/>
						</div>
						<div class="form-group">
							<label for="site_keyw">Site Meta</label><span class="clearfix"></span>
							<input type="text" name="site_keyw" id="site_keyw" data-role="tagsinput" value="<?php echo $Sonuc['site_keyw'];?>" placeholder="Kelime Ekle"/>
						</div>
						<div class="form-group">
							<label for="site_desc">Site Açıklama (description)</label>
							<input type="text" class="form-control" name="site_desc" value="<?php echo $Sonuc['site_desc'];?>"  id="site_desc"/>
						</div>
						<?php if($Sonuc['firma_logo'] == true){?>
							<div class="form-group col-sm-3" style="margin-left: -10px;">
							<img src="../<?php echo TEMA;?>/uploads/logo/<?php echo $Sonuc['firma_logo'];?>" alt="image" class="img-responsive img-thumbnail" width="100%" style="margin-bottom:2px;"><br>
							</div>
						<?php }?>
						<?php if($Sonuc['firma_footerlogo'] == true){?>
							<div class="form-group col-sm-3" style="margin-left: -10px;">
							<img src="../<?php echo TEMA;?>/uploads/logo/footer/<?php echo $Sonuc['firma_footerlogo'];?>" alt="image" class="img-responsive img-thumbnail" width="100%" style="margin-bottom:2px;"><br>
							</div>
						<?php }?>
						<?php if($Sonuc['favicon'] == true){?>
							<div class="form-group col-sm-1">
							<img src="../<?php echo TEMA;?>/uploads/favicon/<?php echo $Sonuc['favicon'];?>" alt="image" class="img-responsive img-thumbnail" width="100%" style="margin-top: 5px;"><br>
							</div>
						<?php }?>
						<span class="clearfix"></span>
						<div class="form-group col-sm-5" style="margin-left: -10px;">
							<label class="control-label">Firma Logo</label>
							<input type="file" name="resim" class="filestyle" data-buttonname="btn-primary">
						</div>
						<span class="clearfix"></span>
						<div class="form-group col-sm-5" style="margin-left: -10px;">
							<label class="control-label">Firma Footer Logo</label>
							<input type="file" name="footer" class="filestyle" data-buttonname="btn-primary">
						</div>
						<span class="clearfix"></span>
						<div class="form-group col-sm-5" style="margin-left: -10px;">
							<label class="control-label">Firma Favicon</label>
							<input type="file" name="favicon" class="filestyle" data-buttonname="btn-primary">
						</div>
						<span class="clearfix"></span>
						<div class="form-group col-sm-6" style="margin-left: -10px;">
							<label for="firma_adi">Firma Adı</label>
							<input type="text" class="form-control" name="firma_adi" value="<?php echo $Sonuc['firma_adi'];?>"  id="firma_adi"/>
						</div>
						<div class="form-group col-sm-6" style="padding-right: 0px;">
							<label for="firma_telefon">Firma Telefon</label>
							<input type="text" name="firma_telefon" id="firma_telefon" value="<?php echo $Sonuc['firma_telefon'];?>" class="form-control"/>
						</div>
						<div class="form-group col-sm-6" style="margin-left: -10px;">
							<label for="firma_fax">Firma Fax</label>
							<input type="text" name="firma_fax" id="firma_fax" value="<?php echo $Sonuc['firma_fax'];?>" class="form-control"/>
						</div>
						<div class="form-group col-sm-6" style="padding-right: 0px;">
							<label for="firma_email">Firma E-Mail</label>
							<input type="text" name="firma_email" id="firma_email" value="<?php echo $Sonuc['firma_email'];?>" class="form-control"/>
						</div>
						<div class="form-group">
							<label for="firma_adres">Firma Adres</label>
							<textarea class="form-control" name="firma_adres" id="firma_adres" rows="5"><?php echo $Sonuc['firma_adres'];?></textarea>
						</div>
						<div class="form-group">
							<label for="google_maps">Google Maps</label>
							<textarea class="form-control" name="google_maps" id="google_maps" rows="5"><?php echo $Sonuc['google_maps'];?></textarea>
						</div>
						<div class="form-group">
							<label for="google_analytics">Google Analytics</label>
							<textarea class="form-control" name="google_analytics"id="google_analytics" rows="5"><?php echo $Sonuc['google_analytics'];?></textarea>
						</div>
						<div class="form-group col-sm-6" style="margin-left: -10px;">
							<label for="facebook">Facebook Sayfa URL</label>
							<input type="text" class="form-control" name="facebook" value="<?php echo $Sonuc['facebook'];?>"  id="facebook"/>
						</div>
						<div class="form-group col-sm-6" style="padding-right: 0px;">
							<label for="twitter">Twitter Sayfa URL</label>
							<input type="text" class="form-control" name="twitter" value="<?php echo $Sonuc['twitter'];?>"  id="twitter"/>
						</div>
						<div class="form-group col-sm-6" style="margin-left: -10px;">
							<label for="gplus">Gplus Sayfa URL</label>
							<input type="text" class="form-control" name="gplus" value="<?php echo $Sonuc['gplus'];?>"  id="gplus"/>
						</div>
						<div class="form-group col-sm-6" style="padding-right: 0px;">
							<label for="instagram">Instagram Sayfa URL</label>
							<input type="text" class="form-control" name="instagram" value="<?php echo $Sonuc['instagram'];?>"  id="instagram"/>
						</div>
						<div class="form-group">
							<label class="control-label">Copyright Metni</label>
							<textarea class="form-control" name="copyright" placeholder="İçerik Giriniz."><?php echo $Sonuc['copyright'];?></textarea>
						</div>
						<?php $dizin = '../language/admin_dil.php';
						require_once('../language/admin_dil.php');
						$yazan = "";
						if(count($admindil) > 0){ ?>
						<table id="diltablo" class="table table-bordered toggle-circle m-b-0">
							<thead>
							<tr>
								<th style="width:250px;">Key</th>
								<th>Açıklama</th>
							</tr>
							</thead>
							<tbody>
							<?php $i=1;foreach ($admindil as $key => $d){ ?>
								<tr>
									<td class="uneditable"><?=$key;?></td>
									<td><input type="text" name="text" id="text<?=$i++;?>" value="<?=$d;?>" onchange="saveData(event,'<?=$key;?>')"><span style="display:none"><?=$d;?></span></td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
						<?php }else{?>
						<div class="alert alert-danger">
							<strong>Kritik Hata!</strong> Dil dosyası bulunamadı veya içi boş acilen <?=str_replace("/", "\\", $dizin);?> yerini doldurun. Veya düzenleye basıp otomatik olarak ekleyebilirsiniz.
						</div>
						<?php } ?>
						<span class="clearfix"></span>
						<button type="submit" name="SiteAyarGuncelle" class="btn btn-primary waves-effect waves-light">
							   <span class="btn-label"><i class="fa fa-check"></i></span>Güncelle
						</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
<style>
    table input{
        font-size:14px;
        padding:5px;
        display:block;
        width:100%;
		color: #03a9f4;
		cursor:pointer;
        border:none;
        background: transparent;
        text-decoration: underline;
        text-decoration-color: #0088cc;
        text-decoration-style: dashed;

    }
    table input:focus{
        outline: none;
        border-bottom: 1px solid #757575;
        text-decoration: none;
    }
</style>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>
<script type="text/javascript" src="//cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>
<script type="text/javascript">
function saveData(event,key){
	var value = $('#'+event.target.id).val();
	$.post("site-ayar.html",{
		key: key,
		value: value,
		dilchange:"true",
		dil_id:"<?=$Sonuc['id']; ?>"
	}, function(){
		<?php if($_SESSION['rutbe'] == 0){?>
		$.Notification.autoHideNotify('success', 'top right', 'Başarılı!','Başarı ile guncellenmiştir.')
		<?php }else{?>
		$.Notification.autoHideNotify('error', 'top right', 'Hata!','Demo hesapta işlem yapamassınız.!')
		<?php }?>
	});
}
$(document).ready( function () {
     $('#diltablo').DataTable({
		 "iDisplayLength": 25,
        "language":{
            "url":"//cdn.datatables.net/plug-ins/1.10.20/i18n/Turkish.json"
        }
    });
});
</script>
<?php if($_SESSION['SiteAyarGuncelle'] == 'yes')
{
	echo "
	<script>
	$(document).ready(function () {
		$.Notification.autoHideNotify('success', 'top right', 'Başarılı!','Başarı ile güncellendi.')
	});
	</script>";
	unset($_SESSION['SiteAyarGuncelle']);
}
if($_SESSION['SiteAyarGuncelle'] == 'no'){					
	echo "
	<script>
	$(document).ready(function () {
		$.Notification.autoHideNotify('error', 'top right', 'Hata!','Hata oluştu tekrar deneyiniz.!')
	});
	</script>";
	unset($_SESSION['SiteAyarGuncelle']);
}	
?>

	