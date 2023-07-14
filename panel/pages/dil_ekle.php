<?php 
if(isset($_GET['islem'])=="duzenle")
{
	$sayfaid = $_GET['id'];	
	$durum = "duzenle" ;
	$Sorgu = $db->prepare("SELECT * FROM diller WHERE id = ?");
	$Sorgu->execute(array($sayfaid));
	if($Sorgu->rowCount()){
		$Sonuc = $Sorgu->fetch(PDO::FETCH_ASSOC);
	}else{
		echo '<meta http-equiv="refresh" content="0; url=404.html">';
		exit();
	}
}
## Dil Kaydet ##
if(isset($_POST['dil_kaydet']))
{
	islemkontrol();
	if($_SESSION['rutbe'] == 0)
	{
		$sira 		= (int) $_POST['sira'];
		$adi 		= $_POST['adi'];
		$anadil 		= (int) $_POST['anadil'];
		
		include_once('../panel/class.upload.php');
		$upload = new upload($_FILES['resim']);
		if ($upload->uploaded)
		{
			$upload->file_auto_rename = true;
			$upload->process("../".TEMA."/uploads/diller");
		
			$upload->file_auto_rename = true;
			$upload->image_resize = true;
			$upload->image_ratio_crop = true;
			$upload->image_x = 54;
			$upload->image_y = 36;
			$upload->process("../".TEMA."/uploads/diller/kucuk");
		
			if ($upload->processed)
			{
				$Resim=''.$upload->file_dst_name.'';
			}
		}
		$Resim=''.$upload->file_dst_name.'';
		$varsayilan = $db->query("SELECT * FROM diller WHERE anadil = 1")->fetch(PDO::FETCH_ASSOC);
		
		$sorgu = $db->prepare("INSERT INTO diller SET
			sira 	= ?,
			adi 	= ?,
			anadil 	= ?,
			bayrak	= ?");
		$Ekle = $sorgu->execute(array(
			$sira,
			$adi,
			$anadil,
			$Resim
		));
		$lastid = $db->lastInsertId();
		if ($anadil == 1) 
		$db->query("UPDATE diller SET anadil = 0 WHERE id NOT IN($lastid)");
	
		if($Ekle)
		{
			$_SESSION['dil_ekle'] = 'yes';
			copy("../".TEMA."/../../language/dil_".@$varsayilan['id'].".php", "../".TEMA."/../../language/dil_".$lastid.".php");
			header("Location:dil-listele.html");
		}
		else
		{
			$_SESSION['dil_ekle'] = 'no';
			header("Location:dil-ekle.html");
		}
	}
	else
	{
		$_SESSION['demohesap'] = 'no';
		header("Location:dil-ekle.html");
	}
}

## Dil Güncelle ##
if(isset($_POST['dil_guncelle']))
{
	islemkontrol();
	$d_id 		= $_POST['id'];
	if($_SESSION['rutbe'] == 0)
	{
		$sira 		= (int) $_POST['sira'];
		$adi 		= $_POST['adi'];
		$anadil 		= (int) $_POST['anadil'];
		
		include_once('../panel/class.upload.php');
		$upload = new upload($_FILES['resim']);
		if ($upload->uploaded)
		{		
			$upload->file_auto_rename = true;
			$upload->process("../".TEMA."/uploads/diller");
			
			$upload->file_auto_rename = true;
			$upload->image_resize = true;
			$upload->image_ratio_crop = true;
			$upload->image_x = 54;
			$upload->image_y = 36;
			$upload->process("../".TEMA."/uploads/diller/kucuk");
			
			
			if ($upload->processed)
			{
				$Resim=''.$upload->file_dst_name.'';
			}
		}
		
		if(isset($Resim)){
			$resim_bul= $db->query("SELECT * FROM diller WHERE id = '{$d_id}'")->fetch(PDO::FETCH_ASSOC);
			if(@$resim_bul['anadil'] != $anadil)
			{
				if($anadil == 0)
				{
					$_SESSION['dil_guncelle'] = 'anadil';
					echo '<meta http-equiv="refresh" content="1; url='.$_SERVER['REQUEST_URI'].'">';				
				}
				else
				{
					$db->query("UPDATE diller SET anadil = 0");
				}
			}
			unlink("../".TEMA."/uploads/diller/".$resim_bul['bayrak']);
			$guncelle = $db->prepare("UPDATE diller SET bayrak = ? WHERE id = ?");
			$guncelle->execute([$Resim,$d_id]);
		}

		$sorgu = $db->prepare("UPDATE diller SET
			sira 	= ?,
			adi 	= ?
			WHERE id = ?");
		$guncelle = $sorgu->execute(array(
			$sira,
			$adi,
			$d_id
		));
		if($anadil == 0)
		{
			$_SESSION['dil_guncelle'] = 'anadil';
			echo '<meta http-equiv="refresh" content="1; url='.$_SERVER['REQUEST_URI'].'">';
		}
		else
		{
			$db->query("UPDATE diller SET anadil = 0");
			$db->query("UPDATE diller SET anadil = 1 WHERE id = {$d_id}");
		}
		
		if($guncelle)
		{
			$_SESSION['dil_guncelle'] = 'yes';
			echo '<meta http-equiv="refresh" content="1; url='.$_SERVER['REQUEST_URI'].'">';	
		}
		else
		{
			$_SESSION['dil_guncelle'] = 'no';
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
	if($_SESSION['rutbe'] == 0)
	{
		$dilid = $_POST['dil_id'];
		$dizin = '../language/dil_'.$dilid.".php";
		$dil = [];
		require_once($dizin);
		$dil[$_POST['key']] = $_POST['value'];
		$line = "<?php ".PHP_EOL;
		foreach ($dil as $key => $value) 
		{
			$line .= '$dil["'.$key.'"] = "'.$value.'";'.PHP_EOL;
		}
		$file=fopen('../language/dil_'.$dilid.'.php','w');
		fwrite($file,$line);
		fclose($file);
		echo '<pre>';print_r($_POST);exit;
	}
	else
	{
		$_SESSION['demohesap'] = 'no';
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
						<a class="dropdown-item" href="dil-listele.html?dil=<?=$DILSonuc['id'];?>"><?=@$DILSonuc['adi'];?></a>
						<?php } ?>
				</div>
			</div>
			<h4 class="page-title"><?=@$admindil['txt41_1'];?></h4>
			<ol class="breadcrumb">
				<li>
					<a href="index.html"><?=@$admindil['txt1'];?></a>
				</li>
				<li>
					<a href="dil-ekle.html"><?=@$admindil['txt42'];?></a>
				</li>
				<li class="active">
					<?=@$admindil['txt41_1'];?>
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
						<input id="id" name="id" type="hidden" value="<?php echo $Sonuc['id']; ?>">
						<div class="form-group">
							<label for="sira">Sıra</label>
							<input type="text" class="form-control" name="sira" value="<?php echo(isset($_GET['islem'])=="duzenle" ? $Sonuc['sira'] : '');?>" id="sira"/>
						</div>
						<div class="form-group">
							<label for="adi">Dil Adı</label>
							<input type="text" class="form-control" name="adi" value="<?php echo(isset($_GET['islem'])=="duzenle" ? $Sonuc['adi'] : '');?>"  id="adi"/>
						</div>
						<?php if(isset($_GET['islem'])=="duzenle"){?>
							<?php if($Sonuc['bayrak'] == true){?>
							<div class="form-group col-sm-2" style="margin-left: -10px;">
								<img src="../<?php echo TEMA;?>/uploads/diller/<?php echo $Sonuc['bayrak'];?>" alt="image" class="img-responsive img-thumbnail" style="margin-bottom:2px;"><br>
								<a style="width: 100%;" class="btn btn-danger waves-effect waves-light btn-sm" id=""  href="javascript:;" onclick="$.Notification.confirm('success','top right', 'Silmek istediğinize emin misiniz ?','../system/panel_islemler.php?dilresimsil=ok&sid=<?php echo $Sonuc['id'];?>')"><i class="fa fa-trash-o"></i> Resim Sil</a>
							</div>
							<?php }?>
						<?php }?>
						<span class="clearfix"></span>
						<div class="form-group">
							<label class="control-label">Bayrak Görseli</label>
							<input type="file" name="resim" class="filestyle" data-buttonname="btn-primary">
						</div>
						<?php if(isset($_GET['islem'])=="duzenle"){?>
						<div class="form-group">
							<label class="control-label">Ana Dil</label> <span class="clearfix"></span>
							<input type="checkbox" name="anadil" <?php if($Sonuc['anadil'] == '1') {?> checked <?php } ?> value="1" data-plugin="switchery" data-switchery="true" data-color="#1AB394" data-secondary-color="#ED5565" />
						</div>
						<?php }else{?>
						<div class="form-group">
							<label class="control-label">Ana Dil</label> <span class="clearfix"></span>
							<input type="checkbox" name="anadil" value="1" data-plugin="switchery" data-switchery="true" data-color="#1AB394" data-secondary-color="#ED5565" />
						</div>
						<?php } ?>
							
                            <?php if(isset($_GET['islem'])=="duzenle"){?>
                            <?php
							$dizin = '../language/dil_'.@$Sonuc['id'].".php";
							$dil = [];
							require_once($dizin);
							$yazan = "";
							if(count($dil) > 0){ ?>
                                <table id="diltablo" class="table table-bordered toggle-circle m-b-0">
                                        <thead>
                                        <tr>
                                            <th style="width:250px;">Key</th>
                                            <th>Açıklama</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i=1;foreach ($dil as $key => $d){ ?>
                                            <tr>
                                                <td class="uneditable" style="width:250px;"><?=$key;?></td>
                                                <td><input type="text" name="text" id="text<?=$i++;?>" value="<?=$d;?>" onchange="saveData(event,'<?=$key;?>')"><span style="display:none"><?=$d;?></span></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
									<?php }else{ ?>
                                    <div class="alert alert-danger">
                                        <strong>Kritik Hata!</strong> Dil dosyası bulunamadı veya içi boş acilen <?=str_replace("/", "\\", $dizin);?> yerini doldurun. Veya düzenleye basıp otomatik olarak ekleyebilirsiniz.
									</div>
                                    <?php } ?>
                            <?php } ?>
						<span class="clearfix"></span>
						<?php if(isset($_GET['islem'])=="duzenle"){?>
						<button type="submit" name="dil_guncelle" class="btn btn-primary waves-effect waves-light">
							   <span class="btn-label"><i class="fa fa-check"></i></span>Güncelle
						</button>
						<?php }else{?>
						<button type="submit" name="dil_kaydet"  class="btn btn-success waves-effect waves-light autohidebut">
							   <span class="btn-label"><i class="fa fa-check"></i></span>Kaydet
						</button>
						<?php } ?>
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
	$.post("dil-duzenle/<?=$Sonuc['id']; ?>.html",{
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

<?php if($_SESSION['dil_kaydet'] == 'no')
{					
	echo "
	<script>
	$(document).ready(function () {
		$.Notification.autoHideNotify('error', 'top right', 'Hata!','Hata oluştu tekrar deneyiniz.!')
	});
	</script>";
	unset($_SESSION['dil_kaydet']);
}	
?>

<?php if($_SESSION['dil_guncelle'] == 'yes')
{
	echo "
	<script>
	$(document).ready(function () {
		$.Notification.autoHideNotify('success', 'top right', 'Başarılı!','Başarı ile guncellenmiştir.')
	});
	</script>";
	unset($_SESSION['dil_guncelle']);
}		
if($_SESSION['dil_guncelle'] == 'no')
{					
	echo "
	<script>
	$(document).ready(function () {
		$.Notification.autoHideNotify('error', 'top right', 'Hata!','Hata oluştu tekrar deneyiniz.!')
	});
	</script>";
	unset($_SESSION['dil_guncelle']);
}
?>
<?php if($_SESSION['dilresimsil'] == 'yes')
{
	echo "
	<script>
	$(document).ready(function () {
		$.Notification.autoHideNotify('success', 'top right', 'Başarılı!','Başarı ile siinmiştir.')
	});
	</script>";
	unset($_SESSION['dilresimsil']);
}		
if($_SESSION['dilresimsil'] == 'no')
{					
	echo "
	<script>
	$(document).ready(function () {
		$.Notification.autoHideNotify('error', 'top right', 'Hata!','Hata oluştu tekrar deneyiniz.!')
	});
	</script>";
	unset($_SESSION['dilresimsil']);
}

if($_SESSION['dil_guncelle'] == 'anadil')
{					
	echo "<script>
	$(document).ready(function () {
		$.Notification.autoHideNotify('danger', 'top right', 'Hata!','1 tane anadil olması zorunludur.')
	});
	</script>";
	unset($_SESSION['dil_guncelle']);
}
?>