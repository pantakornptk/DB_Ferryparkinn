<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="content-setting">
	<div class="setting-col">
		<div class="setting-box">
			<?php if(isset($message)) echo $message; ?>
			<h4><span class="label label-primary"> Bill</span></h4>
			<hr>
			<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th colspan="2" class="text-center">Ferry Park INN</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td colspan="2" class="text-center">ใบเสร็จ</td>
						
					</tr>
					<tr>
						<td>เลขออเดอร์</td>
						<td class="text-right"><?=$row[0]["order_id"]?></td>
					</tr>
					<tr>
						<td>เลขห้อง</td>
						<td class="text-right"><?=$row[0]["order_room"]?></td>
					</tr>
					<tr>
						<td>เฟส</td>
						<td class="text-right"><?=$row[0]["p_id"]?></td>
					</tr>
					<tr>
						<td>วันที่จอง</td>
						<td class="text-right"><?=$row[0]["order_date"]?></td>
					</tr>
					<tr>
						<td>ชื่อลูกค้า</td>
						<td class="text-right"><?=$row[0]["order_name"]?></td>
					</tr>
					<tr>
						<td>เบอร์โทร</td>
						<td class="text-right"><?=$row[0]["order_phone"]?></td>
					</tr>
					<tr>
						<td>อีเมล์</td>
						<td class="text-right"><?=$row[0]["order_email"]?></td>
					</tr>
					<tr>
						<td>จำนวนเงิน</td>
						<td class="text-right"><?=number_format($row[0]["order_payment"])?> บาท</td>
					</tr>
				</tbody>
			</table>
			<div class="text-right">
				<span class="glyphicon glyphicon-print" style="font-size: 40px" onclick="$(this).hide();window.print();$(this).show();"></span>
			</div>
			</div>
		</div>
	</div>
</div>