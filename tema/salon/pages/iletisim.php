<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<section class="breadcrumb-area" style="background-image: url(<?php echo TEMA;?>/uploads/arkaplan/iletisim/<?php echo $arkaplan['iletisim']?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                    <h1><?=@$dil['txt38'];?></h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="breadcrumb-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-bottom">
                    <div class="left pull-left">
                        <ul>
                            <li><a href="index.html"><?=@$dil['txt16'];?></a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active"><?=@$dil['txt38'];?></li>
                        </ul>
                    </div>
                    <div class="right pull-right">
                        <div class="addthis_inline_share_toolbox_34zm"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-form-area">
    <div class="contact-form-img">
        <img src="<?php echo TEMA;?>/assets/images/resources/contact-form.jpg" alt="">
    </div>
    <div class="container">
        <div class="sec-title">
            <h1><?=@$dil['txt24'];?></h1>
            <div class="border">
                <span class="flaticon-shape"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-5">
                <div class="quick-contact">

                    <ul class="contact-info">
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-location"></span>
                            </div>
                            <div class="text-holder">
                                <h5><?php echo ADRES;?></h5>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-technology"></span>
                            </div>
                            <div class="text-holder">
                                <h5><?php echo TELEFON;?></h5>
                            </div>
                        </li>
						<?php if(FAX){?>
						<li>
                            <div class="icon-holder">
                                <span class="fa fa-fax"></span>
                            </div>
                            <div class="text-holder">
                                <h5><?php echo FAX;?></h5>
                            </div>
                        </li>
						<?php }?>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-note"></span>
                            </div>
                            <div class="text-holder">
                                <h5><?php echo EMAIL;?></h5>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="col-lg-8 col-md-7">
                <div class="contact-form">

                    <div role="form" lang="tr-TR" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <form action="system/site_islemler.php" method="post" class="default-form" novalidate="novalidate">
                            <div class="row">
                                <div class="col-md-6">
                                    <span>
										<input type="text" name="isim" size="40" placeholder="<?=@$dil['txt1'];?>" aria-invalid="false" />
									</span>
                                </div>
                                <div class="col-md-6">
                                    <span>
										<input type="text" name="email" size="40" placeholder="<?=@$dil['txt2'];?>" aria-invalid="false" />
									</span>
                                </div>
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <span>
										<input type="text" name="tel"  size="40" placeholder="<?=@$dil['txt3'];?>"  aria-invalid="false" />
									</span>
                                </div>
                                <div class="col-md-6">
                                    <span>
										<input type="text" name="konu" placeholder="<?=@$dil['txt41'];?>" size="40"  aria-invalid="false" />
									</span>
                                </div>
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <span>
										<textarea name="mesaj" cols="40" placeholder="<?=@$dil['txt4'];?>" rows="10"  aria-invalid="false"></textarea>
									</span>
                                </div>
                                </p>
                            </div>
							<div class="row">
								<div class="form-div capt-cont">
									<div class="col-sm-4">
										<div class="captcha form-div" style="border: none;margin: 0;width: 100%;border: 1px solid #f4f4f4;">
											<img id="captcha" style="margin-right: 5px" src="system/captcha.php" alt="CAPTCHA Image">
											<a class="btnAction5" tabindex="-1" style="border-style: none; display: inline" href="#" title="<?=@$dil['txt39'];?>" onclick="document.getElementById('captcha').src = 'system/captcha.php?namespace=captcha' + Math.random(); this.blur(); return false">
												<img src="<?php echo TEMA;?>/assets/images/reload.svg" alt="<?=@$dil['txt39'];?>" onclick="this.blur()">
											</a>
										</div>
									</div>
									<div class="col-sm-8">
										<div class="input-box">
											<span>
												<input type="text" name="captcha"  maxlength="16" required="required" placeholder="<?=@$dil['txt114'];?>">
											</span>
										</div>
									</div>														
								</div>
							</div>
                            <div class="row">
                                <div class="col-md-12">
									<input type="hidden" id="url" name="url" value="<?php echo $_SERVER['REQUEST_URI'];?>">
                                    <button name="IletisimBtn" type="submit" class="thm-btn bgclr-1"><?=@$dil['txt5'];?></button>
                                </div>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="contact-map-area">
    <div class="container-fluid">
        <div class="google-map-inner">
            <?php echo MAPS;?>
        </div>
    </div>
</section>