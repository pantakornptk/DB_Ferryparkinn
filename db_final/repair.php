<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="content-setting">
	<div class="setting-col">
		<div class="setting-box">
			<?php if(isset($message)) echo $message; ?>
			<h4><span class="label label-primary">การแจ้งซ่อม</span> <span class="label label-warning text-black"></span></h4>
			<hr>
			<?php if(empty($ordered)): ?>
			<form method="post" action="">
				<div class="form-group">
					<label for=""><span class="label label-default">เลขออเดอร์</span> :</label>
					<select class="form-control" name="order_id">
						<?php foreach($orders as $row){ ?>
						<option><?=$row["order_id"]?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label for=""><span class="label label-default">รายละเอียดที่ต้องการให้ซ่อม</span> :</label>
					<textarea class="form-control" rows="5" name="rdetail" required style="resize: vertical;"></textarea>
				</div>
				<div class="form-group">
					<label for=""><span class="label label-default">วันที่ต้องการให้ไปซ่อม</span> :</label>
					<input type="date" class="form-control" name="rdate" required>
				</div>
				<div class="text-center">
					<button type="submit" class="btn btn-warning text-black" name="register"> แจ้งซ่อม</button>
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