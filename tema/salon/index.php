<?php define("GUVENLIK",true);?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<?php $uri = URL; 
	if ( (substr($_SERVER['HTTP_HOST'], 0, 4) === 'www.') && (substr($uri, 0, 4) !== 'www.') ) {
		$uri = ltrim(URL ,"https://");
		$uri = ltrim($uri,"https://");
		$uri = "https://www.".$uri;
	}?>
	<?php $url="https://".$_SERVER["HTTP_HOST"].dirname($_SERVER['PHP_SELF']); ?>
	<?php require_once('pages/sayac.php');?>
	<base href="<?php echo $url;?><?php echo(ALTKLASOR == "1" ? '/' : '');?>">
    <meta charset="UTF-8">
    <title>
        <?php echo $title;?>
    </title>
    <meta name="description" content="<?php echo $description;?>" />
    <meta name="keywords" content="<?php echo $keywords;?>" />
	<!-- Facebook Metadata Start -->
    <meta property="og:image:height" content="300" />
    <meta property="og:image:width" content="573" />
    <meta property="og:title" content="<?php echo $title;?>" />
    <meta property="og:description" content="<?php echo $description;?>" />
    <meta property="og:url" content="<?php echo "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>" />
    <meta property="og:image" content="<?php echo $url;?><?php echo(ALTKLASOR == "1" ? '/' : '');?><?php echo $paylasim;?>" />
    <!-- Facebook Metadata End -->
    <meta name="author" content="<?php echo FIRMAADI;?>" />
    <meta name="Abstract" content="<?php echo FIRMAADI;?>" />
	<link rel="shortcut icon" href="<?php echo TEMA;?>/uploads/favicon/<?php echo FAV;?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?php echo TEMA;?>/assets/css/style.php">
    <link rel="stylesheet" href="<?php echo TEMA;?>/assets/css/icon.css">
    <link rel="stylesheet" href="<?php echo TEMA;?>/assets/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="<?php echo TEMA;?>/assets/css/jquery.fancybox.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo TEMA;?>/assets/css/sweetalert2.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo TEMA;?>/assets/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	
	<script src="<?php echo TEMA;?>/assets/js/sweetalert2.all.min.js"></script>
	<script src="<?php echo TEMA;?>/assets/js/sweetalert2.min.js"></script>
	<?php echo ANALYTICS;?>
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58b57282384b6d76"></script>
    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="https://janineguzelliksalonu.com/<?php echo TEMA;?>/assets/js/html5shiv.js"></script>
    <![endif]-->

</head>

<body>
    <div class="boxed_wrapper">
		<section class="top-bar-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="top-left">
							<ul>
								<li><span class="flaticon-technology"></span><?=@$dil['txt9'];?>: <a href="tel:+9<?php echo TELEFON;?>"><?php echo TELEFON;?></a></li>
								<li><span class="flaticon-note"></span><?=@$dil['txt10'];?>: <a href="emailto:<?php echo EMAIL;?>"><?php echo EMAIL;?></a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="top-right clearfix">
							<ul class="location">
								<li><span class="flaticon-location"></span><?php echo ADRES;?></li>
							</ul>
							<?php 
							$DILSorgu = $db->prepare("SELECT * FROM diller ORDER BY sira ASC");
							$DILSorgu->execute();
							$DILislem 	= $DILSorgu->fetchALL(PDO::FETCH_ASSOC);
							$dilyaz  	= $db->query("SELECT * FROM diller WHERE id = '{$_SESSION['k_dil']}'")->fetch(PDO::FETCH_ASSOC);						
							$dilsay		= $db->query("SELECT * FROM  diller WHERE id = '{$_SESSION['k_dil']}'")->rowCount();?>
							<?php if($dilsay > 1){?>
							<div class="lang">
								<ul>
									<li>
										<a href="javascript:;"><?php echo $dilyaz['adi'];?> <i class="fa fa-caret-down"></i></a>
										<?php if($DILSorgu->rowCount() > 1){?>
										<ul>
											<?php foreach ( $DILislem as $DILSonuc ){?> 
												<?php if($dilyaz['id'] != $DILSonuc['id']){?>
												<li>
													<a data-id="<?=@$DILSonuc['id'];?>" href="javascript:;" class="dildegis">
														<?php if($DILSonuc['bayrak']){?>
														<img src="<?=TEMA;?>/uploads/diller/kucuk/<?=@$DILSonuc['bayrak'];?>" style="max-width: 25px;">
														<?php }?>
														<?php echo $DILSonuc['adi'];?>
													</a>
												</li>
												<?php }?>						
											<?php }?>						
										</ul>
										<?php }?> 
									</li>
								</ul>
							</div>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
		</section>
        <section class="mainmenu-area stricky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="logo">
                            <a href="index.html">
                                <img class="logo-image" src="<?php echo TEMA;?>/uploads/logo/<?php echo LOGO;?>" alt="<?php echo FIRMAADI;?>">
                            </a>
                        </div>

                        <nav class="main-menu clearfix">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">

								<div class="nav-container nav-left">
                                    <ul class="navigation clearfix">
									<?php $MENUSorgu = $db->prepare("SELECT * FROM menu WHERE menu_ust = ? AND dil = ? ORDER BY menu_sira ASC LIMIT 4");
									$MENUSorgu->execute(array("0",$_SESSION['k_dil']));
									$MENUislem = $MENUSorgu->fetchALL(PDO::FETCH_ASSOC);?>
										<?php foreach ( $MENUislem as $MENUSonuc ){?>
										<?php $altvarmi	= $db->query("SELECT * FROM menu WHERE menu_durum = '1' AND menu_ust = '{$MENUSonuc['id']}' ORDER BY id DESC LIMIT 1")->rowCount();?>
										<li <?php echo($altvarmi > 0 ? 'class="dropdown"' : '');?>><a <?php echo($MENUSonuc['sekme'] == 1 ? 'target="_blank"' : '');?> href="<?php echo($MENUSonuc['menu_url'] == "0" ? $MENUSonuc['link'] : $MENUSonuc['menu_url']); ?>"><?php echo $MENUSonuc['menu_isim']; ?></a>
										<?php $ALTMENUSorgu = $db->prepare("SELECT * FROM menu WHERE menu_ust = ? AND dil = ? ORDER BY menu_sira ASC");
										$ALTMENUSorgu->execute(array($MENUSonuc['id'],$_SESSION['k_dil']));
										$ALTMENUislem = $ALTMENUSorgu->fetchALL(PDO::FETCH_ASSOC);?>
										<?php if($ALTMENUSorgu->rowCount()){?>
											<ul>
												<?php foreach ( $ALTMENUislem as $ALTMENUSonuc ){?>
												<li><a <?php echo($ALTMENUSonuc['sekme'] == 1 ? 'target="_blank"' : '');?> href="<?php echo($ALTMENUSonuc['menu_url'] == "0" ? $ALTMENUSonuc['link'] : $ALTMENUSonuc['menu_url']); ?>"><?php echo $ALTMENUSonuc['menu_isim']; ?></a></li>
												<?php }?>
											</ul>
											<?php }?>
										</li>
										<?php }?>				
									</ul>
								</div>
								
								<div class="nav-container nav-right">
                                    <ul class="navigation clearfix">
									<?php $MENUSorgu = $db->prepare("SELECT * FROM menu WHERE menu_ust = ? AND dil = ? ORDER BY menu_sira ASC LIMIT 4,15");
									$MENUSorgu->execute(array("0",$_SESSION['k_dil']));
									$MENUislem = $MENUSorgu->fetchALL(PDO::FETCH_ASSOC);?>
										<?php foreach ( $MENUislem as $MENUSonuc ){?>
										<?php $altvarmi	= $db->query("SELECT * FROM menu WHERE menu_durum = '1' AND menu_ust = '{$MENUSonuc['id']}' ORDER BY id DESC LIMIT 1")->rowCount();?>
										<li <?php echo($altvarmi > 0 ? 'class="dropdown"' : '');?>><a <?php echo($MENUSonuc['sekme'] == 1 ? 'target="_blank"' : '');?> href="<?php echo($MENUSonuc['menu_url'] == "0" ? $MENUSonuc['link'] : $MENUSonuc['menu_url']); ?>"><?php echo $MENUSonuc['menu_isim']; ?></a>
										<?php $ALTMENUSorgu = $db->prepare("SELECT * FROM menu WHERE menu_ust = ? AND dil = ? ORDER BY menu_sira ASC");
										$ALTMENUSorgu->execute(array($MENUSonuc['id'],$_SESSION['k_dil']));
										$ALTMENUislem = $ALTMENUSorgu->fetchALL(PDO::FETCH_ASSOC);?>
										<?php if($ALTMENUSorgu->rowCount()){?>
											<ul class="sub-menu1 animated fadeIn">
												<?php foreach ( $ALTMENUislem as $ALTMENUSonuc ){?>
												<li><a <?php echo($ALTMENUSonuc['sekme'] == 1 ? 'target="_blank"' : '');?> href="<?php echo($ALTMENUSonuc['menu_url'] == "0" ? $ALTMENUSonuc['link'] : $ALTMENUSonuc['menu_url']); ?>"><?php echo $ALTMENUSonuc['menu_isim']; ?></a></li>
												<?php }?>
											</ul>
											<?php }?>
										</li>
										<?php }?>
									</ul>
								</div>

                            </div>
                        </nav>
						
						<div class="outer-search-box">
							<div class="seach-toggle"><i class="fa fa-search"></i></div>
							<ul class="search-box">
								<li>
									<form method="get" action="ara.html">
										<div class="form-group">
											<input type="search" name="kelime" placeholder="<?=@$dil['txt29'];?>" required="">
											<button type="submit"><i class="fa fa-search"></i></button>
										</div>
									</form>
								</li>
							</ul>
						</div>

                        <div class="arrow">
                            <img src="<?php echo TEMA;?>/assets/images/resources/arrow.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<?php 
		if(isset($_GET['sayfa'])){
			$s = $_GET['sayfa'];
			switch($s){
				
			case 'anasayfa';
			require_once("pages/anasayfa.php");
			break;
			
			case 'sayfalar';
			require_once("pages/sayfalar.php");
			break;
			
			case 'markalar';
			require_once("pages/markalar.php");
			break;
			
			case 'sss';
			require_once("pages/sss.php");
			break;
			
			case 'hizmet';
			require_once("pages/hizmet.php");
			break;	
			
			case 'blog';
			require_once("pages/blog.php");
			break;
			
			case 'blog-detay';
			require_once("pages/blog_detay.php");
			break;
			
			case 'foto-galeri';
			require_once("pages/foto_galeri.php");
			break;
			
			case 'foto';
			require_once("pages/foto.php");
			break;
			
			case 'video-galeri';
			require_once("pages/video_galeri.php");
			break;
			
			case 'iletisim';
			require_once("pages/iletisim.php");
			break;	
			
			case 'kariyer';
			require_once("pages/kariyer.php");
			break;
			
			case 'online-randevu';
			require_once("pages/online_randevu.php");
			break;
			
			case 'ara';
			require_once("pages/ara.php");
			break;
			
			case '404';
			require_once("pages/404.php");
			break;
						
			default:
			require_once("pages/anasayfa.php");
			}
		}else{
		require_once("pages/anasayfa.php");
		}
		?>
		<?php if($moduller['alan6'] == "1"){?>
		<!--Start Brand area-->  
		<section class="brand-area">
			<div class="container">
				<div class="sec-title">
					<h1><?=@$dil['txt55'];?></h1>
					<div class="border">
						<span class="flaticon-shape"></span>    
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="brand">
						<?php $Sorgu = $db->prepare("SELECT * FROM markalar WHERE durum = ? AND dil = ?");
						$Sorgu->execute(array("1",$_SESSION['k_dil']));
						$islem = $Sorgu->fetchALL(PDO::FETCH_ASSOC);?>
							<?php foreach ( $islem as $Sonuc ){?>
							<a target="_blank" class="tool_tip" title="<?php echo $Sonuc['adi'];?>" href="<?php echo $Sonuc['url'];?>">
								<div class="single-item">
									<img src="<?php echo TEMA;?>/uploads/markalar/<?php echo $Sonuc['resim']?>" alt="<?php echo $Sonuc['adi'];?>">
								</div>
							</a>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--End Brand area--> 
		<?php }?>
		
		<?php if($moduller['alan7'] == "1"){?>
		<footer class="footer-area">
			<div class="arrow">
				<img src="<?php echo TEMA;?>/assets/images/resources/arrow.png" alt="<?php echo FIRMAADI;?>">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="footer-logo text-center">
							<a href="index.html">
								<img src="<?php echo TEMA;?>/uploads/logo/footer/<?php echo FOOTERLOGO;?>" alt="<?php echo FIRMAADI;?>">
							</a>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<?php }?>
        <section class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="copyright-text">
                            <p><?php echo COPYRIGHT;?></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="footer-social-links">
                            <li><a target="_blank" href="<?php echo FACEBOOK;?>"><i class="icon fa fa-facebook"></i></a></li>
							<li><a target="_blank" href="<?php echo TWITTER;?>"><i class="icon fa fa-twitter"></i></a></li>
							<li><a target="_blank" href="<?php echo INSTAGRAM;?>"><i class="icon fa fa-instagram"></i></a></li>                      
							<li><a target="_blank" href="<?php echo GPLUS;?>"><i class="icon fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
		
		<!-- WhatsApp ekleme -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "905050344325", // WhatsApp numarası
            call_to_action: "Merhaba, nasıl yardımcı olabilirim?", // Görüntülenecek yazı
            position: "left", // Sağ taraf için 'right' sol taraf için 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- WhatsApp ekleme -->


    </div>

    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
    <script src="<?php echo TEMA;?>/assets/js/jquery-latest.js"></script>
	<script src="<?php echo TEMA;?>/assets/js/jquery.fancybox.min.js" type="text/javascript"></script>
    <script src="<?php echo TEMA;?>/assets/js/wow.js"></script>
    <script src="<?php echo TEMA;?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo TEMA;?>/assets/js/jquery.bxslider.min.js"></script>
    <script src="<?php echo TEMA;?>/assets/js/jquery.countTo.js"></script>
    <script src="<?php echo TEMA;?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo TEMA;?>/assets/js/validation.js"></script>	
    <script src="<?php echo TEMA;?>/assets/js/jquery.mixitup.min.js"></script>
    <script src="<?php echo TEMA;?>/assets/js/jquery.easing.min.js"></script>
    <script src="<?php echo TEMA;?>/assets/js/jquery.appear.js"></script>
    <script src="<?php echo TEMA;?>/assets/js/isotope.js"></script>
    <script src="<?php echo TEMA;?>/assets/js/jquery.bootstrap-touchspin.js"></script>
    <script src="<?php echo TEMA;?>/assets/assets/timepicker/timePicker.js"></script>
    <script src="<?php echo TEMA;?>/assets/assets/bootstrap-sl-1.12.1/bootstrap-select.js"></script>
    <script src="<?php echo TEMA;?>/assets/assets/jquery-ui-1.11.4/jquery-ui.js"></script>
    <script src="<?php echo TEMA;?>/assets/assets/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo TEMA;?>/assets/assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?php echo TEMA;?>/assets/assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="<?php echo TEMA;?>/assets/assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="<?php echo TEMA;?>/assets/assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="<?php echo TEMA;?>/assets/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="<?php echo TEMA;?>/assets/assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="<?php echo TEMA;?>/assets/assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="<?php echo TEMA;?>/assets/assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="<?php echo TEMA;?>/assets/assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="<?php echo TEMA;?>/assets/assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="<?php echo TEMA;?>/assets/js/custom.js"></script>
	<script src="<?php echo TEMA;?>/assets/mask/jquery.mask.js"></script>
	<script src="<?php echo TEMA;?>/assets/mask/mask.js"></script>
	<script src="<?php echo TEMA;?>/assets/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	<script src="<?php echo TEMA;?>/assets/bootstrap-datepicker/dist/locales/bootstrap-datepicker.tr.min.js" charset="UTF-8"></script>
	<script>
	$('#sandbox-container input').datepicker({
		language: "tr",
		autoclose: true,
		todayHighlight: true
	});
	</script>
	<script>
	$(".dildegis").click(function() 
	{
		var dilID = $(this).data("id");
		$.ajax({
			url: '<?php echo TEMA;?>/ajax/dildegis.php',
			dataType: 'JSON',
			data: {id: dilID},
		})
		.done(function(msg) {
			if(msg.hata){
				alert("Bir hata oluştu");
			}else{
				window.location = "index.html";
			}
		})
		.fail(function(err) {
			console.log(err);
		});
	});
	</script>
	<?php 
	if($_SESSION['iletisim'] == 'yes')
	{
		echo "
		<script>
		swal({
			type: 'success',
			title: '".@$dil['txt31']."',
			text: '".@$dil['txt44']."',
			confirmButtonText: '".@$dil['txt88']."',
			timer: 5000
		})
		</script>";
		unset($_SESSION['iletisim']);
	}
	if($_SESSION['iletisim'] == 'no')
	{	
		echo "
		<script>
		swal({
			type: 'error',
			title: '".@$dil['txt33']."',
			text: 'title: '".@$dil['txt34']."',',
			confirmButtonText: '".@$dil['txt88']."',
			timer: 5000
		})
		</script>";
		unset($_SESSION['iletisim']);
	}	
	if($_SESSION['iletisim'] == 'bos')
	{
		echo "
		<script>
		swal({
			type: 'warning',
			title: '".@$dil['txt80']."',
			text: '".@$dil['txt47']."',
			confirmButtonText: '".@$dil['txt88']."',
			timer: 5000
		})
		</script>";
		unset($_SESSION['iletisim']);	
	}
	if($_SESSION['iletisim'] == 'captcha'){
		echo "
		<script>
		swal({
			type: 'warning',
			title: '".@$dil['txt80']."',
			text: '".@$dil['txt205']."',
			confirmButtonText: '".@$dil['txt88']."',
			timer: 5000
		})
		</script>";
		unset($_SESSION['iletisim']);	
	}
	if($_SESSION['sitedemo'] == 'no')
		{
			echo "
			<script>
			swal({
				type: 'warning',
				title: '".@$dil['txt80']."',
				text: '".@$dil['txt86']."',
				confirmButtonText: '".@$dil['txt88']."',
				timer: 5000
			})
			</script>";
			unset($_SESSION['sitedemo']);
		}
	?>

</body>

</html>