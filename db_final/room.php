<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
$tmp_p = str_replace("P0", "", $phase);
?>
<div class="container">
	<?php for($i=0;$i<count($phaseinfo);$i++):
			if($phaseinfo[$i]['p_type']=='SM'){
				$tmp = "ห้องเล็ก";
			}elseif($phaseinfo[$i]['p_type']=='NR'){
				$tmp = "ห้องใหม่";
			}else{
				$tmp = "ห้องใหญ่";
			}
	?>
	<button type="button" class="btn btn-info" onclick="phase_detail('<?=$phase?>','<?=$phaseinfo[$i]['p_type']?>')">รายละเอียดห้องพัก <span class="label label-danger"><?=$tmp?></span></button>
	<?php endfor; ?>
	<div class="room-col">
		<center>
		<div class="room-box-title text-center">
			<h3 id="phase-id"><?=$row['p_name']?></h3>
		</div>
		</center>
		<?php $tmp_fl = 0; foreach($row["room"] as $key => $val){ $tmp_fl++; ?>
		<div class="container">
			<h3><?=$key?></h3>
			<?php $j=0; foreach($val as $k => $room){ $tmp=$room; ?>
			<div class="container">
				<h5><?=$k?></h5>
				<?php for($i=$j;$i<$room+$j;$i++){ ?>
				<?php $no = $tmp_p.$tmp_fl.str_pad(($i+1), 2, '0', STR_PAD_LEFT); ?>
				<div class="room-box <?php if(in_array($no, $regis)){ echo "room-box-full"; }?>" onclick="md_regis(this)" id="<?=$no?>" data-roomtype="<?=$k?>">
					<i class="fa fa-hotel"></i>
					<div class="room-no text-center">
						<strong><?=$no?></strong>
					</div>
				</div>
				<?php  } $j=$tmp;  ?>
			</div>
			<hr>
			<?php } /*$j=$room;*/ ?>
		</div>
		<?php } ?>
	</div>
</div>
<div id="regis_room" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" id="md-title"><?=$row['p_name']?> ห้อง <span id="md-title-room"></span></h4>
      </div>
      <div class="modal-body">
			<input type="hidden" value="" id="order_room">
			<input type="hidden" value="<?=$row['p_id']?>" id="p_id">
			<div class="form-group">
			  <label for="">ชื่อ-สกุล:</label>
			  <input type="text" class="form-control" id="order_name" placeholder="ชื่อ-สกุลผู้จอง">
			</div>
			<!--<div class="form-group">
			  <label for="">วันที่ต้องการเข้าอยู่:</label>
			  <input type="date" class="form-control" id="order_date" min="<?=date("Y-m-d")?>" placeholder="เลือกวันที่จะเข้าอยู่">
			</div>-->
			<div class="form-group">
			  <label for="">Email:</label>
			  <input type="email" class="form-control" id="order_email" placeholder="อีเมลล์ของผู้จอง">
			</div>
			<!--<div class="form-group">
			  <label for="">ที่อยู่:</label>
			  <textarea class="form-control" rows="5" style="resize: vertical;" id="order_address"></textarea>
			</div>-->
			<div class="form-group">
			  <label for="">เบอร์โทรศัพท์ที่ติดต่อได้:</label>
			  <input type="text" class="form-control" id="order_phone" placeholder="เบอร์โทรศัพท์ที่ติดต่อได้">
			</div>
			<div class="form-group">
				<button type="button" class="btn btn-success" id="regis_confirm">ยืนยัน</button>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div id="phase_detail" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" id="phase_detail-title"></h4>
      </div>
      <div class="modal-body">
			<div class="phase-img-detail">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators" id="phase-img-detail-ol">
				</ol>
				<div class="carousel-inner" id="phase-img-detail-src">
				</div>
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				  <span class="glyphicon glyphicon-chevron-left"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
				  <span class="glyphicon glyphicon-chevron-right"></span>
				  <span class="sr-only">Next</span>
				</a>
			  </div>
			</div>
			<div class="table-responsive">          
			  <table class="table">
				<thead>
				  <tr>
					<th>ชั้น</th>
					<th>ราคา</th>
				  </tr>
				</thead>
				<tbody id="table-phase-info">
				  <tr>
					<td>1</td>
					<td>Anna</td>
				  </tr>
				</tbody>
			  </table>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
	function md_regis(e){
		$('#order_room').val(e.id);
		$('#md-title-room').html(e.id);
		location.replace('/order/'+e.id);
	}
	$('#regis_confirm').click(function(){
		var status=true;
		if($('#order_name').val()==""){
			status=false;
		}else if($('#order_date').val()==""){
			status=false;
		}else if($('#order_email').val()==""){
			status=false;
		}else if($('#order_address').val()==""){
			status=false;
		}else if($('#order_room').val()==""){
			status=false;
		}else if($('#p_id').val()==""){
			status=false;
		}
		
		if(status==false){
			$('#regis_room').modal('hide');
			$('#e_txt').html("กรอกข้อมูลให้ครบทุกช่อง");
			$('#error').modal('show');
			sleep(1500).then(() => {
				//location.reload();
			});
		}else{
			$.post("<?=base_url("/ajax/action_order")?>",
			{
				order_name: $('#order_name').val(),
				order_date: $('#order_date').val(),
				order_email: $('#order_email').val(),
				order_phone: $('#order_phone').val(),
				order_room: $('#order_room').val(),
				p_id: $('#p_id').val(),
				order: "ok"
			},function(data){
				/*$('#regis_room').modal('hide');
				if(data==true){
					$('#s_txt').html("จองสำเร็จ!<br>ใช้ Email และ เบอร์โทร<br>เป็นรหัสผ่านในการเข้าสู่ระบบ");
					$('#success').modal('show');
					$('#success').on('hidden.bs.modal', function () {
						location.reload();
					})
				}else{
					$('#e_txt').html("มีบางอย่างผิดพลาด");
					$('#error').modal('show');
					sleep(1500).then(() => {
						location.reload();
					});
				}*/
				alert(data)
				//console.log(data);
			});
		}
	});
	
	function phase_detail(pid, p){
		$('#phase-img-detail-src').html('');
		$('#phase-img-detail-ol').html('');
		$('#table-phase-info').html('');
		if(p=='SM'){
			room = 'ห้องเล็ก';
		}else if(p=='NR'){
			room = 'ห้องใหม่';
		}else{
			room = 'ห้องใหญ่';
		}
		
		$.get("<?=base_url("/action")?>",
		{
			pid: pid,
			get_detail: "ok"
		},function(data){
			
			var Obj = JSON.parse(data);
			
			for(i=0;i<Obj.length;i++){
				if(Obj[i].p_type==p){
					for(j=0;j<Obj[i].p_img_src.length;j++){
						var img;
						var ol;
						if(j==0){
							img = '<div class="item active"><img src="' + Obj[i].p_img_src[j] + '" Angeles" style="width:100%;"></div>';
							ol = '<li data-target="#myCarousel" data-slide-to="' + j + '" class="active"></li>';
						}else{
							img = '<div class="item"><img src="' + Obj[i].p_img_src[j] + '" Angeles" style="width:100%;"></div>';
							ol = '<li data-target="#myCarousel" data-slide-to="' + j + '" class=""></li>';
						}
						$('#phase-img-detail-src').append(img);
						$('#phase-img-detail-ol').append(ol);
					}
				}
			}
		});
		
		$.get("<?=base_url("/action")?>",
		{
			pid: pid,
			get_detail_info: "ok"
		},function(data2){
			var Obj2 = JSON.parse(data2);
			for(i=0;i<Obj2.length;i++){
				if(Obj2[i].p_type==p){
					var td;
					var nf = new Intl.NumberFormat();
					Obj2[i].p_price = nf.format(Obj2[i].p_price);
					td = '<tr><td>' + Obj2[i].p_floor + '</td><td>' + Obj2[i].p_price + ' บาท/เดือน</td></tr>';
					$('#table-phase-info').append(td);
				}
			}
		});
		
		$('#phase_detail-title').html('<?=$row['p_name']?>' + ' ' + room);
		$('#phase_detail').modal('show');
	}
</script>