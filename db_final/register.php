<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="content-setting">
	<div class="setting-col">
		<div class="setting-box">
			<?php if(isset($message)) echo $message; ?>
			<h4><span class="label label-primary">สมัครบัญชี</span> <span class="label label-warning text-black"></span></h4>
			<hr>
			<form method="post" action="">
				<div class="form-group">
					<label for=""><span class="label label-default">Email</span> :</label>
					<input type="email" class="form-control" name="username" id="username_r" placeholder="กรอกอีเมลล์ของคุณ" required>
				</div>
				<div class="form-group">
					<label for=""><span class="label label-default">ชื่อ-สกุล</span> :</label>
					<input type="text" class="form-control" name="name" placeholder="กรอกชื่อ-สกุลของคุณ" required>
				</div>
				<div class="form-group">
					<label for=""><span class="label label-default">เบอร์โทรศัพท์ที่สามารถติดต่อได้</span> :</label>
					<input type="text" class="form-control" name="phone" placeholder="กรอกเบอร์โทรศัพท์ที่สามารถติดต่อได้" pattern=".{10,}" required>
				</div>
				<div class="form-group">
					<label for=""><span class="label label-default">รหัสผ่าน</span> :</label>
					<input type="password" class="form-control" name="password" placeholder="กรอกรหัสผ่าน" required>
				</div>
				<div class="text-center">
					<button type="submit" class="btn btn-warning text-black" name="register"> สมัคร</button>
				</div>
			</form>
		</div>
	</div>
</div>