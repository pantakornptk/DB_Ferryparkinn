<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="content-setting">
	<div class="setting-col">
		<div class="setting-box">
			<?php if(isset($message)) echo $message; ?>
			<h4><span class="label label-primary">รายการบิล</span> <span class="label label-warning text-black"></span></h4>
			<hr>
				<div class="form-group" id="order_id">
					<label for=""><span class="label label-default">เลขออเดอร์</span> :</label>
					<select class="form-control" name="order_id" onchange="get_info(this)">
						<option>Choose your bill...</option>
						<?php foreach($bills as $row){ ?>
						<option><?=$row["b_id"]?></option>
						<?php } ?>
					</select>
				</div>
				
				<?php if(!empty($info)): ?>
				<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th colspan="2" class="text-center">Ferry Park INN</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td colspan="2" class="text-center">ใบชำระหนี้</td>
							
						</tr>
						<tr>
							<td>เลขที่บิล</td>
							<td class="text-right"><?=$info["b_id"]?></td>
						</tr>
						<tr>
							<td>เลขห้อง</td>
							<td class="text-right"><?=$info["order_room"]?></td>
						</tr>
						<tr>
							<td>ชื่อ-นามสกุล</td>
							<td class="text-right"><?=$info["order_name"]?></td>
						</tr>
						<tr>
							<td>ค่าห้อง</td>
							<td class="text-right"><?=number_format($info["b_room"])?> บาท</td>
						</tr>
						<tr>
							<td>ค่าน้ำ</td>
							<td class="text-right"><?=number_format($info["b_water"])?> บาท</td>
						</tr>
						<tr>
							<td>ค่าไฟฟ้า</td>
							<td class="text-right"><?=number_format($info["b_elec"])?> บาท</td>
						</tr>
						<tr>
							<td>ค่าอื่นๆ</td>
							<td class="text-right"><?=number_format($info["b_other"])?> บาท</td>
						</tr>
						<tr>
							<td>วันที่ออกบิล</td>
							<td class="text-right"><?=$info["b_date"]?></td>
						</tr>
						<tr>
							<td>วันที่ครบกำหนด</td>
							<td class="text-right"><?=$info["b_due"]?></td>
						</tr>
						<tr>
							<td>รวมทั้งสิ้น</td>
							<td class="text-right"><?=number_format($info["b_room"]+$info["b_water"]+$info["b_elec"]+$info["b_other"])?> บาท</td>
						</tr>
					</tbody>
				</table>
				<div class="text-right">
					<span class="glyphicon glyphicon-print" style="font-size: 40px" onclick="$(this).hide();$('#order_id').hide();window.print();$(this).show();$('#order_id').show();"></span>
				</div>
				</div>
				<?php endif; ?>
		</div>
	</div>
</div>
<script>
	function get_info(e){
		location.replace('/main/bills/'+$(e).val());
	}
</script>