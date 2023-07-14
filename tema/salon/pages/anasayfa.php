<section class="rev_slider_wrapper">
	<div id="slider1" class="rev_slider" data-version="5.0">
		<ul>
		<?php $Sorgu = $db->prepare("SELECT * FROM slider WHERE durum = ? AND dil = ?");
		$Sorgu->execute(array("1",$_SESSION['k_dil']));
		$islem = $Sorgu->fetchALL(PDO::FETCH_ASSOC);?>
			<?php foreach ( $islem as $Sonuc ){?>
			<li data-transition="random">
				<img src="<?php echo TEMA;?>/uploads/slider/<?php echo $Sonuc['resim']?>" alt="" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">

				<div class="tp-caption tp-resizeme slogan" data-x="center" data-hoffset="0" data-y="center" data-voffset="-120" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-start="500">
					<div class="slide-content-box middle-slide">
						<h2><?php echo strip_tags($Sonuc['aciklama']);?></h2>
					</div>
				</div>
				<div class="tp-caption tp-resizeme" data-x="center" data-hoffset="0" data-y="center" data-voffset="-55" data-transform_idle="o:1;" data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="1500">
					<div class="slide-content-box middle-slide">
						<h1><?php echo $Sonuc['adi']?></h1>
					</div>
				</div>
				
				<?php if($Sonuc['url']){?>
				<div class="tp-caption tp-resizeme" data-x="center" data-hoffset="0" data-y="center" data-voffset="50" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2300">
					<div class="slide-content-box middle-slide">
						<div class="button">
							<a <?php echo($Sonuc['sekme'] == 1 ? 'target="_blank"' : '');?> class="thm-btn bgclr-1" href="<?php echo $Sonuc['url'];?>"><?=@$dil['txt7'];?></a>
						</div>
					</div>
				</div>
				<?php }?>
			</li>
			<?php }?>
		</ul>
	</div>
</section>

<?php if($moduller['alan1'] == "1"){?>
<section class="welcome-area" style="padding-top: 80px;">
	<div class="container">
		<div class="sec-title">
			<h1>The Relax Plus </h1>
			<div class="border">
				<span class="flaticon-shape"></span>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
				<div class="text-holder">
					<h4>
						<?php echo $kurumsal['kisa'];?>
					</h4>


					<div class="bottom">
						<div class="read-more-button">
							<a class="thm-btn bgclr-1" href="sayfa/<?php echo $kurumsal['seo']?>.html"><?=@$dil['txt37'];?></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
				<div class="img-holder wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
					<img src="<?php echo TEMA;?>/uploads/sayfalar/<?php echo $kurumsal['resim']; ?>" alt="Janine Güzellik">
				</div>
			</div>
		</div>
	</div>
</section>
<?php }?>

<?php if($moduller['alan2'] == "1"){?>
<section class="procedures-area">
	<div class="arrow">
		<img src="<?php echo TEMA;?>/assets/images/resources/arrow.png" alt="">
	</div>
	<div class="iconbox-left-top">
		<span class="flaticon-light"></span>
	</div>
	<div class="iconbox-left-bottom">
		<span class="flaticon-flower"></span>
	</div>
	<div class="iconbox-right-top">
		<span class="flaticon-nature"></span>
	</div>
	<div class="iconbox-right-bottom">
		<span class="flaticon-left"></span>
	</div>
	<div class="container">
		<div class="sec-title text-center">
			<h1><?=@$dil['txt65'];?></h1>
			<div class="border mar0auto">
				<span class="flaticon-shape"></span>
			</div>
		</div>
		<div class="row">
		<?php $Sorgu = $db->prepare("SELECT * FROM hizmetler WHERE durum = ? AND anasayfa = ? AND dil = ? ORDER BY id DESC");
		$Sorgu->execute(array("1","1",$_SESSION['k_dil']));
		$islem = $Sorgu->fetchALL(PDO::FETCH_ASSOC);?>
			<?php foreach ( $islem as $Sonuc ){?>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="single-item">
					<div class="img-holder">
						<div id="HizmetResim" style="background-image: url(<?php echo TEMA;?>/uploads/hizmetler/<?php echo $Sonuc['resim']; ?>)" alt="<?php echo $Sonuc['adi'];?>"></div>
						<div class="overlay-style-one">
							<div class="box">
								<div class="content">
									<?php echo kisalt(strip_tags($Sonuc['aciklama']),130);?>
								</div>
							</div>
						</div>
					</div>
					<div class="text-holder text-center">
						<a href="hizmet/<?php echo $Sonuc['seo'];?>.html">
						<div class="show-content">
							<h3><?php echo $Sonuc['adi'];?></h3>
						</div>
						<div class="hover-content">
							<h3><?php echo $Sonuc['adi'];?></h3>
							<span class="border"></span>
						</div>
						</a>
					</div>
				</div>
			</div>
			<?php }?>
		</div>
	</div>
</section>
<?php }?>

<?php if($moduller['alan3'] == "1"){?>
<section class="slogan-area" style="background-image:url(<?php echo TEMA;?>/assets/images/resources/slogan-bg.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="inner-content text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
					<h1><?=@$dil['txt12'];?></h1>

					<p>
						<?=@$dil['txt13'];?>
					</p>

					<a class="thm-btn bgclr-1" href="online-randevu.html"><?=@$dil['txt14'];?></a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php }?>

<?php if($moduller['alan4'] == "1"){?>
<section class="latest-blog-area sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 top">
                <div class="sec-title pull-left">
                    <h1><?=@$dil['txt15'];?></h1>
                    <div class="border">
                        <span class="flaticon-shape"></span>
                    </div>
                </div>
                <div class="readmore-blog pull-right">
                    <a class="thm-btn bgclr-1" href="blog.html"><?=@$dil['txt19'];?></a>
                </div>
            </div>
        </div>
        <div class="row">
            <!--Start single blog item-->
		<?php $Sorgu = $db->prepare("SELECT * FROM blog WHERE durum = ?  AND dil = ? ORDER BY id DESC LIMIT 4");
		$Sorgu->execute(array("1",$_SESSION['k_dil']));
		$islem = $Sorgu->fetchALL(PDO::FETCH_ASSOC);?>	
			<?php foreach ( $islem as $Sonuc ){?>	
            <div class="col-md-3">
                <div class="single-blog-item">
                    <div class="img-holder">
                        <img src="<?php echo TEMA;?>/uploads/blog/kucuk/<?php echo $Sonuc['resim']; ?>" alt="<?php echo $Sonuc['adi']; ?>">
                        <div class="overlay-style-one"></div>
                        <div class="categories">
                            <a href="blog/<?php echo $Sonuc['seo']; ?>.html"><?=@$dil['txt20'];?></a>
                        </div>
                    </div>
                    <div class="text-holder">
                        <ul class="meta-info">
                            <li><a href="blog/<?php echo $Sonuc['seo']; ?>.html"><?php echo tarih($Sonuc['tarih']); ?></a></li>
                        </ul>
                        <a href="blog/<?php echo $Sonuc['seo']; ?>.html">
                            <h3 class="blog-title"><?php echo $Sonuc['adi']; ?></h3>
                        </a>
                        <div class="text">
                            <p><?php echo kisalt(strip_tags($Sonuc['aciklama']),135); ?></p>
                        </div>
                    </div>
                </div>
            </div>
			<?php }?>
        </div>
    </div>
</section>
<?php }?>
