<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="content-setting">
	<div class="setting-col">
		<div class="setting-box">
			<?php if(isset($message)) echo $message; ?>
			<h4><span class="label label-primary">เพิ่มบิล</span> <span class="label label-warning text-black"></span></h4>
			<hr>
			<form method="post" action="">
				<div class="form-group">
					<label for=""><span class="label label-default">เลขออเดอร์</span> :</label>
					<select class="form-control" name="order_id" onchange="get_room_number(this)">
						<option>เลือกเลขออเดอร์</option>
						<?php foreach($orders as $row){ ?>
						<option><?=$row["order_id"]?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label for=""><span class="label label-default">เลขที่ห้อง</span> :</label>
					<input type="text" class="form-control" name="" id="room_no" readonly>
				</div>
				<div class="form-group">
					<label for=""><span class="label label-default">ค่าห้อง</span> :</label>
					<input type="number" class="form-control" name="b_room" min="0" required>
				</div>
				<div class="form-group">
					<label for=""><span class="label label-default">ค่าไฟ</span> :</label>
					<input type="number" class="form-control" name="b_elec" min="0" required>
				</div>
				<div class="form-group">
					<label for=""><span class="label label-default">ค่าน้ำ</span> :</label>
					<input type="number" class="form-control" name="b_water" min="0" required>
				</div>
				<div class="form-group">
					<label for=""><span class="label label-default">ค่าอื่น ๆ</span> :</label>
					<input type="number" class="form-control" name="b_other" min="0" required>
				</div>
				<div class="form-group">
					<label for=""><span class="label label-default">วันออกบิล</span> :</label>
					<input type="date" class="form-control" name="b_date" min="0" required>
				</div>
				<div class="form-group">
					<label for=""><span class="label label-default">วันครบกำหนด</span> :</label>
					<input type="date" class="form-control" name="b_due" min="0" required>
				</div>
				<div class="text-center">
					<button type="submit" class="btn btn-warning text-black" name="register"> เพิ่มบิล</button>
				</div>
			</form>
		</div>
	</div>
</div>
<script>
	function get_room_number(e){
	$.post("/action",
	  {
		orderid: $(e).val(),
		getroom: "ok"
	  },
	  function(data, status){
		//alert(data);
		$("#room_no").val(data);
	  });
	}
</script>