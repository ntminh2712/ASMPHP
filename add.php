<?php require_once ("database.php");
 ?>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<div style="margin-left: 500px;" class="span5">
    <h2>Thêm Thông tin Sinh Viên</h2>
    <form action="" method="POST">
    <label>tên</label>
    <input type="text" name="name" class="span5">
    <label>tuổi</label>
    <input type="text" name="age" class="span5">
    <label>địa chỉ</label>
    <input type="text" name="address" class="span5">
    
    <input type="submit" value="Lưu Sinh Viên" class="btn btn-primary pull-right">
    <div class="clearfix"></div>
    </form>
</div>