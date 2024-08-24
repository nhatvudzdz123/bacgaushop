<?php
	if($kun->is_mobile()) {
		if($kun->hienthi_web('napthe_mobile') == 1) {
			require $root.'/view/Widget/Top_Widget.php';			
		}
	}else {		
		if($kun->hienthi_web('napthe_pc') == 1) {
			require $root.'/view/Widget/Top_Widget.php';			
		}
	}
?>


<?php if($kun->hienthi_web('vongquay') == 1) { ?>

<style type="text/css">
.classWithPad2:hover {
    transform: scale(1.05);
    box-shadow: 0px 0px 15px #192231;
    transition: all 0.3s;
}
</style>

<style type="text/css">
	#mlemlem {
		display: inline-block;
	    width: 124px;
	    height: 36px;
	    line-height: 36px;
	    text-align: center;
	    font-size: 18px;
	    font-weight: bold;
	    color: #000000;
	    border: none;
	    outline: 0;
	    background: url(https://shopcuaminhchill.com/IMG_ARO.VN/chon.png) no-repeat center;
	    background-size: 126px;
	}

</style>

<style type="text/css">
.classWithPad2:hover {
    transform: scale(1.05);
    box-shadow: 0px 0px 15px #192231;
    transition: all 0.3s;
}
</style>

 <marquee scrollamount="20" style="padding-top: 8px;padding-bottom: 4px;margin-bottom:10px;"><img style="width: 36px;" src="https://i.imgur.com/hHcSspY.gif" longdesc="36">
  <span class="label label-success">Chúc Mừng ID ***63562 Đã Rút Thành Công 1 190 Kim Cương, Chúc Mừng ID ***43545 Đã Rút Thành Công 280 Kim Cương, Chúc Mừng ID ***4155 Đã Rút Thành Công 6237 Kim Cương, Chúc Mừng ID ***4512 Đã Rút Thành Công 3 050 Kim Cương, Chúc Mừng ID ***41441 Đã Rút Thành Công 580 Kim Cương, Chúc Mừng ID ***1542 Đã Rút Thành Công 1 190 Kim Cương, Chúc Mừng ID ***54165 Đã Rút Thành Công 3 050 Kim Cương, Chúc Mừng ID ***54514 Đã Rút Thành Công 111 Kim Cương, Chúc Mừng ID ***3454 Đã Rút Thành Công 1 190 Kim Cương, Chúc Mừng ID ***42514 Đã Rút Thành Công 280 Kim Cương, Chúc Mừng ID ***9853 Đã Rút Thành Công 111 Kim Cương, Chúc Mừng ID ***56574 Đã Rút Thành Công 3 050 Kim Cương, Chúc Mừng ID ***41441 Đã Rút Thành Công 580 Kim Cương, Chúc Mừng ID ***1542 Đã Rút Thành Công 1 190 Kim Cương, Chúc Mừng ID ***54165 Đã Rút Thành Công 3 050 Kim Cương, Chúc Mừng ID ***54514 Đã Rút Thành Công 111 Kim Cương, <i class="fa fa-heart"></i> <i class="fa fa-heart"></i> <i class="fa fa-heart"></i></span></marquee>

<div class="c-content-box c-size-md c-bg-dark" style="background-color: rgb(0 0 0 / 60%) !important;">
<div class="container">

<div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl">

<div class="c-content-title-1">
<h3 style="color: yellow"class="c-center c-font-uppercase c-font-bold">Vòng quay may mắn</h3>
<div class="c-line-center c-theme-bg"></div>
</div>

<div class="row row-flex-safari item-list">



<?php 
	$res = mysqli_query($kun->connect_db(), "SELECT * FROM `vongquay_kimcuong` ORDER BY `id` DESC");
	while ($row = mysqli_fetch_array($res)) {
		if($row['status'] == 'true') {
	 ?>

<div class="col-sm-3 col-xs-6 p-5">
	<div class="classWithPad2">
		<div class="image2">
			<img style="position: absolute;max-width: 35%;height: auto;top: -26px;right: -15px;z-index: 10;" src="https://i.imgur.com/PIyY7hw.gif">
			<a href="/vongquaykimcuong/<?php echo $kun->rewrite($row['name'])?>-<?php echo $row['id'];?>.html" class="">
				<img src="<?php echo $kun->vongquaykimcuong_image($row['id'], 'thumb');?>"></a>
				</div>
					<div class="news_title"><a href="/vongquaykimcuong/<?php echo $kun->rewrite($row['name'])?>-<?php echo $row['id'];?>.html"><?php echo $row['name'];?></a></div>
						<div class="news_description">
						<p>Đã quay: <?php echo number_format($row['sudung'])?></p>
						</div>
					<div class="a-more">
					<div class="row">
					<div class="">
					<div style="">
						<a id="mlemlem" href="/vongquaykimcuong/<?php echo $kun->rewrite($row['name'])?>-<?php echo $row['id'];?>.html">Quay ngay</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

	<?php } } ?>


</div>

</div>

</div>

</div>

<?php } ?>


<?php if($kun->hienthi_web('dichvu') == 1) { ?>

<div class="c-content-box c-size-md c-bg-dark" style="background-color: rgb(0 0 0 / 60%) !important;">
<div class="container">

<div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl">

<div class="c-content-title-1">
<h3 class="c-center c-font-uppercase c-font-bold">Dịch Vụ FreeFire</h3>
<div class="c-line-center c-theme-bg"></div>
</div>

<div class="row row-flex-safari item-list">



<?php if($kun->hienthi_game('sieucapff') == 1) { ?>
<?php 
$ros = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `setting_sieucap`"));
?>
<div class="col-sm-3 col-xs-12 p-5">
	<div class="classWithPad">
		<div class="image">
			<a href="/sieucap" class="">
				<img src="<?php echo $kun->hinhanh_game('sieucapff');?>"></a>
				</div>
					<div class="news_title"><a href="/sieucap">Vòng Quay Giải Cứu Thế Giới <?php echo $kun->compact_number($ros['giatien']);?></a></div>
						<div class="news_description">
						<p>Tỷ Lệ Trúng: 100%</p>
						</div>
					<div class="a-more">
					<div class="row">
					<div class="col-xs-12">
					<div class="view">
						<a href="/sieucap">Quay Ngay</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 <?php } ?>






<?php if($kun->hienthi_game('lattheff') == 1) { ?>
<div class="col-sm-3 col-xs-12 p-5">
	<div class="classWithPad">
		<div class="image">
			<a href="/latthe" class="">
				<img src="<?php echo $kun->hinhanh_game('lattheff');?>"></a>
				</div>
					<div class="news_title"><a href="/latthe">Lật Hình May Mắn</a></div>
						<div class="news_description">
						<p>Tỷ Lệ Trúng: 100%</p>
						</div>
					<div class="a-more">
					<div class="row">
					<div class="col-xs-12">
					<div class="view">
						<a href="/latthe">Lật Ngay</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 <?php } ?>

<?php if($kun->hienthi_game('homthinhff') == 1) {
 ?>
<div class="col-sm-3 col-xs-12 p-5">
	<div class="classWithPad">
		<div class="image">
			<a href="/homthinhbian" class="">
				<img src="<?php echo $kun->hinhanh_game('homthinhff');?>"></a>
				</div>
				<?php

				?>
					<div class="news_title"><a href="/homthinhbian">Hòm Thính Kim Cương</a></div>
						<div class="news_description">
						<p>Đang Bán: <?php echo $kun->demhomthinhbian('conlai');?></p>
						</div>
					<div class="a-more">
					<div class="row">
					<div class="col-xs-12">
					<div class="view">
						<a href="/homthinhbian">Nhặt Ngay</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 <?php } ?>

<?php if($kun->hienthi_game('vanmayff') == 1) {
$ross = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `setting_bingo`"));
 ?>
<div class="col-sm-3 col-xs-12 p-5">
	<div class="classWithPad">
		<div class="image">
			<a href="/vanmaybingo" class="">
				<img src="<?php echo $kun->hinhanh_game('vanmayff');?>"></a>
				</div>
					<div class="news_title"><a href="/vanmaybingo">VÒNG QUAY BINGO TẾT THIẾU NHI <?php echo $kun->compact_number($ross['giatien']);?></a></div>
						<div class="news_description">
							<p>Tỷ Lệ Trúng: 100%</p>
						</div>
					<div class="a-more">
					<div class="row">
					<div class="col-xs-12">
					<div class="view">
						<a href="/vanmaybingo">Chơi Ngay</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 <?php } ?>

<?php if($kun->hienthi_game('banaccff') == 1) { ?>
<div class="col-sm-3 col-xs-12 p-5">
	<div class="classWithPad">
		<div class="image">
			<a href="/nickfreefire" class="">
				<img src="<?php echo $kun->hinhanh_game('banaccff');?>"></a>
				</div>
					<div class="news_title"><a href="/nickfreefire">Nick Free Fire Giá Rẻ</a></div>
						<div class="news_description">
						<p>Đang Bán: <?php echo $kun->count_acc_ff('conlai');?> Acc</p>
						</div>
					<div class="a-more">
					<div class="row">
					<div class="col-xs-12">
					<div class="view">
						<a href="/nickfreefire">Mua Ngay</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 <?php } ?>





<?php if($kun->hienthi_game('codesungff') == 1) { ?>
<div class="col-sm-3 col-xs-12 p-5">
	<div class="classWithPad">
		<div class="image">
			<a href="/vongquaycodesung.html" class="">
				<img src="<?php echo $kun->hinhanh_game('codesungff');?>"></a>
				</div>
					<div class="news_title"><a href="/vongquaycodesung.html">Vòng Quay Code Súng</a></div>
						<div class="news_description">
						<p>Đã quay: 12.602</p>
						</div>
					<div class="a-more">
					<div class="row">
					<div class="col-xs-12">
					<div class="view">
						<a href="/vongquaycodesung.html">Quay Ngay</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 <?php } ?>







</div>
</div>
</div>
</div>


<?php } ?>







<?php if($kun->hienthi_web('random') == 1) { ?>

<div class="c-content-box c-size-md c-bg-dark" style="background-color: rgb(0 0 0 / 60%) !important;">
<div class="container">

<div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl">

<div class="c-content-title-1">
<h3 class="c-center c-font-uppercase c-font-bold">Random Freefire</h3>
<div class="c-line-center c-theme-bg"></div>
</div>

<style type="text/css">
#classWithPad {
    height: 320px;
    max-height: 340px;
}
</style>

<div class="row row-flex  item-list">


<?php 
	$res = mysqli_query($kun->connect_db(), "SELECT * FROM `random_freefire` ORDER BY `id` DESC");
	while ($row = mysqli_fetch_array($res)) {
		if($row['status'] == 'true') {
			$count = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `random_freefire_nick` WHERE `status`='true' AND `cname`='".$row['cname']."'"));
	 ?>


	<div class="col-sm-6 col-md-3 col-lg-3">
		<div class="classWithPad" id="classWithPad">
			<div class="image">
			<a href="/random-freefire/<?php echo $row['cname'];?>">
			<img src="<?php echo $row['thumb'];?>">
			<span class="ms">Giá: <?php echo number_format($row['giatien'])?>đ</span>
			</a>
			</div>

			<div class="attribute_info">
					<div class="news_title"><a href="/random-freefire/<?php echo $row['cname'];?>"><?php echo $row['name'];?></a></div>
						<div class="news_description">
						<p>Còn Lại: <?php echo number_format($count)?></p>
						</div>
			<div class="a-more">
			<div class="row">
			<div class="col-xs-12">
					<div class="view">
						<a href="/random-freefire/<?php echo $row['cname'];?>">Mua Ngay</a>
					</div>
			</div>


			</div>
			</div>


			</div>
			</div>
		</div>

	<?php } } ?>

</div>

</div>

</div>

</div>

<?php } ?>







