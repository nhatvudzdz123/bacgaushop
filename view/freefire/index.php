<?php
defined('KUNKEYPR') or exit('Restricted Access');
$kmess = 16; // Số phim hiện trong mỗi page
$page = isset($_REQUEST['page']) && $_REQUEST['page'] > 0 ? intval($_REQUEST['page']) : 1;
$start = isset($_REQUEST['page']) ? $page * $kmess - $kmess : (isset($_GET['start']) ? abs(intval($_GET['start'])) : 0);

$condition = "";
if(isset($_POST['loc'])) {



	if($_POST['maso']) {
		$condition .= " AND `id`='".$_POST['maso']."'";
	}

	if($_POST['price']) {

		switch ($_POST['price']) {
			case 'duoi-50k':
				$condition .= " AND `giatien`<= 50000";
				break;
			case 'tu-50k-200k':
				$condition .= " AND `giatien` >= 50000 AND `giatien` <= 200000 ";
				break;
			case 'tu-500k-1-trieu':
				$condition .= " AND `giatien` >= 500000 AND `giatien` <= 1000000";
				break;
			case 'tren-1-trieu':
				$condition .= " AND `giatien` >= 1000000";
				break;
			case 'tren-5-trieu':
				$condition .= " AND `giatien` >= 5000000";
				break;
			case 'tren-10-trieu':
				$condition .= " AND `giatien`>= 1000000";
				break;
		}

	}

	if($_POST['rank']) {
		$condition .= " AND `rank`='".$_POST['rank']."'";
	}

	if($_POST['nhanvat']) {
		$condition .= " AND `nhanvat`='".$_POST['nhanvat']."'";
	}

	if($_POST['pet']) {
		$condition .= " AND `pet`='".$_POST['pet']."'";
	}

}

$sql = "SELECT * FROM `nickff` WHERE `status`='1' AND `nguoimua`='null' ".$condition." ORDER BY time DESC LIMIT $start, $kmess";

 $result = mysqli_query($kun->connect_db(), $sql);
 $tong = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `nickff` WHERE `status`='1' AND `nguoimua`='null' ".$condition));
?>



<div class="col-sm-12" style="margin-top: 30px;">


<div class="alert alert-info" role="alert">
<h2 class="alert-heading">Free Fire - FF</h2>
<p></p><ul>
<li>Game <strong><a href="https://ff.garena.vn/" target="_blank"><span style="color:#e74c3c">Free Fire</span></a></strong><span style="color:#e74c3c">&nbsp;</span>thuộc thể loại game mobile nhập do <a href="https://www.garena.vn/" target="_blank"><span style="color:#e74c3c"><strong>GARENA</strong></span></a>&nbsp;độc quyền phát hành tại Việt Nam.</li>

</ul><p></p>
</div>


<div class="row" style="margin-bottom: 15px">
<div class="m-l-10 m-r-10">
<form class="form-inline m-b-10" role="form" method="post" action="">

<div class="col-md-3 col-sm-4 p-5 field-search">
<div class="input-group c-square">
<span class="input-group-addon">Mã số</span>
<input type="text" class="form-control c-square" placeholder="Mã số" name="maso" style="height: 43px;">
</div>
</div>

<div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
<div class="input-group c-square">
<span class="input-group-addon">Giá tiền</span>
<select style="" class="form-control c-square" name="price">
<option value="">Không Chọn</option>
<option value="duoi-50k">Dưới 50K</option>
<option value="tu-50k-200k">Từ 50K - 200K</option>
<option value="tu-200k-500k">Từ 200K - 500K</option>
<option value="tu-500k-1-trieu">Từ 500K - 1 Triệu</option>
<option value="tren-1-trieu">Trên 1 Triệu</option>
<option value="tren-5-trieu">Trên 5 Triệu</option>
<option value="tren-10-trieu">Trên 10 Triệu</option>
</select>
</div>
</div>


<div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
<div class="input-group c-square">
<span class="input-group-addon">Rank</span>
<select name="rank" class="form-control c-square">
	   									<option value="">Không Chọn</option>
   										<option value="1">Rank Đồng</option>
                                        <option value="2">Rank Bạc</option>
                                        <option value="3">Rank Vàng</option>
                                        <option value="4">Rank Bạch Kim</option>
                                        <option value="5">Rank Kim Cương</option>
                                        <option value="6">Rank Huyền Thoại</option>
                                        <option value="7">Rank Thách Đấu</option>
</select>
</div>
</div>



<div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
<div class="input-group c-square">
<span class="input-group-addon">Nhân Vật</span>
<select name="nhanvat" class="form-control c-square" title="-- Không chọn --">
	   									<option value="">Không Chọn</option>
                                        <option value="1">Nam</option>
                                        <option value="2">Nữ</option>
</select>
</div>
</div>


<div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
<div class="input-group c-square">
<span class="input-group-addon">Pet</span>
<select name="pet" class="form-control c-square" title="-- Không chọn --">
	   									<option value="">Không Chọn</option>
   										<option value="0">Không</option>
                                        <option value="1">Có</option>
</select>
</div>
</div>


<div class="col-md-3 col-sm-4 p-5 no-radius">
<button style="height: 42px;" type="submit" name="loc" class="btn c-square c-theme c-btn-green">Tìm kiếm</button>
</div>
</form>
</div>
</div>








<style type="text/css">
.row-flex-safari .classWithPad {
    height: 347px;
    max-height: 360px;
}

</style>



<div class="row row-flex  item-list">

<?php 
while ($row = mysqli_fetch_array($result)) { ?>



	<div class="col-sm-6 col-md-3">
		<div class="classWithPad">
			<div class="image">
			<a href="/nickfreefire/nick-<?php echo $row['id'];?>.html">
			<img src="<?php echo $kun->get_thumb_freefire($row['id']);?>">
			<span class="ms">Acc: #<?php echo $row['id'];?></span>
			</a>
			</div>
			<div class="description">
				<?php echo $row['noibat'];?>
			</div>

			<div class="attribute_info">
			<div class="row">
				<div class="col-xs-6 a_att">
				Tỉ lệ: <b>100% trúng</b>
				</div>
				<div class="col-xs-6 a_att">
				Thể loại: <b>Random</b>
				</div>
				<div class="col-xs-6 a_att">
				Tỉ lệ: <b>100% trúng</b>
				</div>
				<div class="col-xs-6 a_att">
				Tỉ lệ: <b>100% trúng</b>
				</div>
			<div class="a-more">
			<div class="row">
			<div class="col-xs-6">
				<div class="price_item">
					<?php echo number_format($row['giatien']);?>đ
				</div>
			</div>
			<div class="col-xs-6 ">
			  	<div class="price_item" style="border: 1px solid #089dff;color: #423838;">
					<a href="/nickfreefire/nick-<?php echo $row['id'];?>.html">Xem Thêm</a>
				</div>  
			</div>


			</div>
			</div>


			</div>
			</div>
		</div>
	</div>

<?php } ?>

<div class="col-xs-12 col-md-12 col-lg-12 col-sm-12">
	<center>
<?php
if ($tong > $kmess){
echo '<center>' . $kun->phantrang('/nickff/', $start, $tong, $kmess) . '</center>';
}
?>
	</center>
</div>

</div>


</div>

