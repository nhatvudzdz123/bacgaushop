<?php 
defined('KUNKEYPR') or exit('Restricted Access');
$row = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `random_freefire` WHERE `id`='".$_GET['id']."'"));

if(!$row['id']) die("<center><h1>Không Tìm Thấy Gói Này!</center>");

?>
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>



<?php
if(isset($_POST['sua_goi'])) {
	if( isset($_POST['name']) && isset($_POST['giatien']) && isset($_POST['id']) && isset($_POST['thumb'])) {


		if(is_numeric($_POST['giatien'])) {

			if($_POST['giatien'] >= 0) {

	mysqli_query($kun->connect_db(), "UPDATE `random_freefire` SET `name`='".$_POST['name']."', `giatien`='".$_POST['giatien']."', `mota`='".$_POST['mota']."', `thumb`='".$_POST['thumb']."' WHERE `id`='".$_POST['id']."'");

echo '<div class="alert alert-success alert-highlighted" role="alert">Đã Cập Nhật Gói Random <b>"'.$_POST['name'].'"</b>!</div>';
		echo '<meta http-equiv="refresh" content="1;URL=" /> ';
			} else {
				echo '<div class="alert alert-danger alert-highlighted" role="alert">Giá Phải Lớn Hơn Hoặc Bằng 0!</div>';			
			}



		}else {
				echo '<div class="alert alert-danger alert-highlighted" role="alert">Giá Phải Là Dạng Số!</div>';			
		}

	}else {
				echo '<div class="alert alert-danger alert-highlighted" role="alert">Vui Lòng Nhập Đầy Đủ Thông Tin!</div>';
	}
}
?>




                            <form action="" method="post">
<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">SỬA GÓI FREEFIRE RANDOM "<b><?php echo $row['name'];?></b>"</h3>
                                <small>Lưu ý: Bạn Chỉ Có Thể Chỉnh Sửa Tên Và Giá, Nếu Xóa thì toàn bộ acc trong gói sẽ bị xóa theo!</small>

<div class="row">
<input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                <label>Nhập Tên Gói Random</label>
                                                <div class="form-group">
                                                     <input type="text" id="name" name="name" placeholder="Nhập Tên Gói Random" class="form-control" value="<?php echo $row['name'];?>">
                                                </div>
                                            </div>


                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                <label>Link Thumbnail</label>
                                                <div class="form-group">
                                                      <input type="text" id="name" name="thumb" placeholder="Nhập Link Thumbnail" class="form-control" value="<?php echo $row['thumb'];?>">
                                                </div>
                                            </div>



                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                <div class="form-group">
                                                    <label>Giá Tiền</label>
                                                    <div class="form-line">
                                                       <input type="number" name="giatien" placeholder="Nhập Giá Tiền" class="form-control" value="<?php echo $row['giatien'];?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group">
                                                    <label>Mô Tả Cho Gói Random</label>
                                                    <div class="form-line">
                                                       <textarea class="form-control" rows="12" name="mota" placeholder="Nhập mô tả"><?php echo $row['mota'];?></textarea>
                                                    </div>
                                                </div>
                                            </div>

                <script>
                        CKEDITOR.replace( 'mota' );
                </script>

                            <div class="col-md-12"> 
                                <center><button type="submit" name="sua_goi" class="btn btn-info">SỬA GÓI RANDOM</button></center>
                            </div>


</div>


                            </div>
                        </div>
                    </div>
</div>



</form>
