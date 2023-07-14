
<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url(<?php echo TEMA;?>/uploads/arkaplan/nosayfa/<?php echo $arkaplan['nosayfa']?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                    <h1><?=@$dil['txt59'];?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start breadcrumb bottom area-->
<section class="breadcrumb-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-bottom">
                    <div class="left pull-left">
                        <ul>
                            <li><a href="index.html"><?=@$dil['txt16'];?></a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active"><?=@$dil['txt59'];?></li>
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
<!--End breadcrumb bottom area-->

<!--Start faq content area-->
<section class="faq-content-area">
    <div class="container">
        <div class="row">
            <!--Start single box-->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="rightContent" style="width: 100%;text-align: center;">
					<h3 class="content-description article">
					
						<figure class="image-box">
							<img src="<?php echo TEMA;?>/assets/images/404.png" alt="" />
						</figure>
						<div class="content-box">
							<h2 style="margin: 25px;"><?=@$dil['txt59'];?></h2>
							<p style="margin: 25px;"><?=@$dil['txt60'];?></p>
							<ul class="link_btn">
								<li>
									<a href="index.html" class="btn btn-primary btn-sm margin-top-10"><?=@$dil['txt61'];?></a>
								</li>
							</ul>
						</div>
					</h3>
				</div>

            </div>
        </div>
    </div>
</section>
<!--End faq content area-->
