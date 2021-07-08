<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="content-setting">
	<div class="setting-col" style="width:100%">
		<div class="setting-box">
			<?php if(isset($message)) echo $message; ?>
			<h4><span class="label label-primary">รายการแจ้งชำระ </span> <span class="label label-warning text-black"></span></h4>
			<hr>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>เลขที่ออเดอร์</th>
						<th>จำนวนที่แจ้งมา</th>
						<th>รูปที่แนบมา</th>
						<th>จำนวนที่ต้องจ่าย</th>
						<th>จัดการ</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($rows as $row){ ?>
					<tr>
						<td><?=$row["order_id"]?></td>
						<td><?=$row["amount"]?></td>
						<td>
							<span class="label label-success"><a class="link-noline txt-black" onclick="open_img('<?=base_url('/'.$row["img"])?>')">คลิกเพื่อดูรูป</a></span>
						</td>
						<td><?=$row["amount_n"]?></td>
						<td>
							<span class="label label-success"><a class="link-noline txt-black" href="/admin/confirm_payment/<?=$row["order_id"]?>">อนุมัติ</a></span>
							<span class="label label-danger"><a class="link-noline txt-black" href="/admin/cancle_payment/<?=$row["order_id"]?>">ไม่อนุมัติ</a></span>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- Modal -->
<div id="img_payment" class="modal fade" role="dialog" style="display: none">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <img src="" id="tmp_payment_img" width="100%">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script>
	function open_img(src1){
		$('#tmp_payment_img').attr("src", src1);
		$('#img_payment').modal('show');
	}
</script>