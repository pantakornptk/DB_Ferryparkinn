<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="content-setting">
	<div class="setting-col">
		<div class="setting-box">
			<?php if(isset($message)) echo $message; ?>
			<h4><span class="label label-primary">แจ้งชำระ <?=$orderid?></span> <span class="label label-warning text-black"></span></h4>
			<hr>
			<?php if(!$paid): ?>
			<form method="post" action="" enctype="multipart/form-data">
				<div class="form-group">
					<label for=""><span class="label label-default">เลขที่ออเดอร์</span> :</label>
					<input type="text" class="form-control" name="orderid" value="<?=$orderid?>" readonly required>
				</div>
				<div class="form-group">
					<label for=""><span class="label label-default">จำนวนเงิน</span> :</label>
					<input type="number" class="form-control" name="amount" placeholder="จำนวนเงิน" min="0" required>
				</div>
				<div class="form-group">
					<label for=""><span class="label label-default">แนบหลักฐาน</span> :</label>
					<input type="file" class="form-control" name="file" required>
				</div>
				<div class="text-center">
					<button type="submit" class="btn btn-warning text-black"> แจ้งชำระเงิน</button>
				</div>
			</form>
			<div style="margin-top: 20px">
				<img src="/asset/img/bank-ac2.jpg" width="100%">
			</div>
			<div style="margin-top: 20px">
				<img src="/asset/img/bank-ac.jpg" width="100%">
			</div>
			<?php else: ?>
				<div class="well well-lg">
					<h3>แจ้งชำระเงินแล้ว</h3>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>