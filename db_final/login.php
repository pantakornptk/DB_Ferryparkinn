<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="content-setting">
	<div class="setting-col">
		<div class="setting-box">
			<?php if(isset($message)) echo $message; ?>
			<h4><span class="label label-primary">ลงชื่อเข้าใช้</span> <span class="label label-warning text-black"></span></h4>
			<hr>
			<form method="post" action="">
				<div class="form-group">
					<label for=""><span class="label label-default">ชื่อบัญชี/Email</span> :</label>
					<input type="text" class="form-control" name="username" id="username_r" placeholder="ชื่อบัญชี/Email" required>
				</div>
				<div class="form-group">
					<label for=""><span class="label label-default">รหัสผ่าน</span> :</label>
					<input type="password" class="form-control" name="password" placeholder="รหัสผ่าน" required>
				</div>
				<div class="text-center">
					<button type="submit" class="btn btn-warning text-black" name="register"> ลงชื่อเข้าใช้</button>
				</div>
			</form>
		</div>
	</div>
</div>