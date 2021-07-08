<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="content-setting">
	<div class="setting-col" style="width:100%">
		<div class="setting-box">
			<?php if(isset($message)) echo $message; ?>
			<h4><span class="label label-primary"> รายการแจ้งซ่อม</span> <span class="label label-warning text-black"></span></h4>
			<hr>
			<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>เลขแจ้งซ่อม</th>
						<th>วันแจ้ง</th>
						<th>วันที่ต้องการให้ไปซ่อม</th>
						<th>รายละเอียด</th>
						<th>เลขออเดอร์</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($rows as $row){ ?>
					<tr>
						<td><?=$row["rid"]?></td>
						<td><?=$row["rdate"]?></td>
						<td><?=$row["rdoe"]?></td>
						<td><?=$row["rdetail"]?></td>
						<td><?=$row["order_id"]?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			</div>
		</div>
	</div>
</div>