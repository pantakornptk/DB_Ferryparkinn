<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="content-setting">
	<div class="setting-col">
		<div class="setting-box">
			<?php if(isset($message)) echo $message; ?>
			<h4><span class="label label-primary">จองห้อง <?=$room?> เฟส <?=$phase?></span> <span class="label label-warning text-black"></span></h4>
			<hr>
			<?php if(empty($ordered)): ?>
			<form method="post" action="">
				<div class="form-group">
					<label for=""><span class="label label-default">ห้องที่ต้องการจอง</span> :</label>
					<input type="text" class="form-control" value="<?=$room?>" readonly required>
				</div>
				<div class="form-group">
					<label for=""><span class="label label-default">Email</span> :</label>
					<input type="email" class="form-control" name="order_email" value="<?=$user["username"]?>" placeholder="กรอกอีเมลล์ของคุณ" required>
				</div>
				<div class="form-group">
					<label for=""><span class="label label-default">ชื่อ-สกุล</span> :</label>
					<input type="text" class="form-control" name="order_name" value="<?=$user["name"]?>" placeholder="กรอกชื่อ-สกุลของคุณ" required>
				</div>
				<div class="form-group">
					<label for=""><span class="label label-default">เบอร์โทรศัพท์ที่สามารถติดต่อได้</span> :</label>
					<input type="text" class="form-control" name="order_phone" value="<?=$user["phone"]?>" placeholder="กรอกเบอร์โทรศัพท์ที่สามารถติดต่อได้" pattern=".{10,}" required>
				</div>
				<div class="form-group">
					<label for=""><span class="label label-default">วันที่ต้องการเข้าอยู่</span> :</label>
					<input type="date" class="form-control" name="order_doe" placeholder="วันที่ต้องการเข้าอยู่" min="<?=date("Y-m-d", strtotime(date('m', strtotime('+1 month')).'/01/'.date('Y').' 00:00:00'));?>" required>
				</div>
				<div class="text-center">
					<button type="submit" class="btn btn-warning text-black" name="register"> จอง</button>
				</div>
			</form>
			<?php else: ?>
				<div class="well well-lg">
					<a href="/main/myorder" class="btn btn-success">ไปหน้าออเดอร์ของฉัน</a>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>