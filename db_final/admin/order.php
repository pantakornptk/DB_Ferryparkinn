<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="content-setting">
	<div class="setting-col" style="width:100%">
		<div class="setting-box">
			<?php if(isset($message)) echo $message; ?>
			<h4><span class="label label-primary"> รายการจอง</span> <span class="label label-warning text-black"></span></h4>
			<hr>
			<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>เลขออเดอร์</th>
						<th>ชื่อ</th>
						<th>Email</th>
						<th>เบอร์</th>
						<th>เลขที่ห้อง</th>
						<th>เฟส</th>
						<th>วันที่จอง</th>
						<th>หมดเวลาจอง</th>
						<th>จำนวน</th>
						<th>สถานะ</th>
						<!--<th>จัดการ</th>-->
					</tr>
				</thead>
				<tbody>
					<?php foreach($rows as $row){ ?>
					<tr>
						<td><?=$row["order_id"]?></td>
						<td><?=$row["order_name"]?></td>
						<td><?=$row["order_email"]?></td>
						<td><?=$row["order_phone"]?></td>
						<td><?=$row["order_room"]?></td>
						<td><?=$row["p_id"]?></td>
						<td><?=$row["order_date"]?></td>
						<td><?=$row["order_expire"]?></td>
						<td><?=$row["order_payment"]?> บาท</td>
						<td><?=$row["order_status"]?></td>
						<!--<?php if($row["order_status"]=="waiting"): ?>
						<td>
							<span class="label label-warning"><a class="link-noline txt-black" href="/main/payment/<?=$row["order_id"]?>">แจ้งชำระเงิน</a></span>
							<span class="label label-danger"><a class="link-noline txt-black" href="/main/cancle/<?=$row["order_id"]?>">ยกเลิกจอง</a></span>
						</td>
						<?php elseif($row["order_status"]=="success"): ?>
						<td>
							<span class="label label-success"><a class="link-noline txt-black" href="/main/payment/<?=$row["order_id"]?>">ทำสัญญาเช่า</a></span>
						</td>
						<?php elseif($row["order_status"]=="pending"): ?>
						<td>
							<span class="label label-danger"><a class="link-noline txt-black" href="/main/cancle_payment/<?=$row["order_id"]?>">ยกเลิกการแจ้งชำระ</a></span>
						</td>
						<?php endif; ?>-->
					</tr>
					<?php } ?>
				</tbody>
			</table>
			</div>
		</div>
	</div>
</div>