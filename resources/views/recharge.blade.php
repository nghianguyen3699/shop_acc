@extends('layouts.app')

@section('content')
<div style="padding-top:90px">
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert bg-white alert-primary" role="alert">
                        <div class="iq-alert-icon">
                            <i class="ri-alert-line"></i>
                        </div>
                        <div class="iq-alert-text">
                            <ul>
                                <li><span style="font-size:18px"><strong>Nạp tự động&nbsp; <span
                                                style="color:#c0392b">24/7</span> , vui lòng <span
                                                style="color:#c0392b">quét mã QR</span> hoặc <span
                                                style="color:#c0392b">nhập đúng nội dung </span>để&nbsp;chuyển
                                            khoản.</strong></span></li>
                                <li>
                                    <p><strong><span style="font-size:18px">Chúng tôi cũng sẽ&nbsp;</span><span
                                                style="color:#c0392b; font-size:18px">KHÔNG</span><span
                                                style="font-size:18px">&nbsp;quy đổi cũng như không&nbsp;</span><span
                                                style="color:#c0392b; font-size:18px">hoàn trả</span><span
                                                style="font-size:18px">&nbsp;lại </span><span
                                                style="color:#c0392b; font-size:18px">số dư</span><span
                                                style="font-size:18px"> đã nạp vào hệ thống với&nbsp;</span><span
                                                style="color:#c0392b; font-size:18px">BẤT KỲ</span><span
                                                style="font-size:18px">&nbsp;lý do nào</span><span
                                                style="font-size:16px">.</span></strong></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Nạp tiền theo hoá đơn</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0 mb-3">
                                    <div type="button" onclick="openModalAmount(13)"
                                        class="blur-shadow p-4 shadow-showcase text-center">
                                        <img src="https://sellclonemmo.com/assets/storage/images/bank/9PJ.png"
                                            width="200px" height="100px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nhập số tiền cần nạp</h5>
                </div>
				<form id="create_recharge" action="{{ route('client.recharge.create') }}" method="POST">
					@csrf
					<div class="flex flex-column">
					<div class="modal-body">
						<div class="input-group mb-3">
							<input type="number" id="amount" name="amount"
								placeholder="Nhập số tiền bạn cần nạp vào hệ thống" class="form-control" required="" value="">
						</div>
						<p>
							<span class="float-left">Số tiền cần thanh toán<br><br><b id="payment"
									style="color: blue;">0</b></span>
							<span class="float-right">Số tiền nhận được<br><br><b id="received"
									style="color: red;">0</b></span>
						</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" onclick="closeModalAmount()">Đóng</button>
						<button type="submit" id="btnDepositOrder" class="btn btn-primary">Tạo hoá đơn</button>
					</div>
				</div>
				</form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<script type="text/javascript">
	function openModalAmount() {
		$("#exampleModal").addClass("show");
		$("#exampleModal").modal({
			showClose: false,
			fadeDuration: 100
		});
	}

	function closeModalAmount() {
		// $("#exampleModal").removeClass("show");
		$("#exampleModal").modal({
			show: false,
			showClose: false,
			fadeDuration: 100
		});
	}
</script>
<script type="text/javascript">
	// new ClipboardJS(".copy");
	
	function copy() {
		cuteToast({
			type: "success",
			message: "Đã sao chép vào bộ nhớ tạm",
			timer: 5000
		});
	}
	
	function totalRecharge() {
		$('#total').html('<i class="fa fa-spinner fa-spin"></i> Đang xử lý...');
		$.ajax({
			url: "https://sellclonemmo.vn/ajaxs/client/totalRecharge.php",
			method: "POST",
			data: {
				amount: $("#amount").val(),
				token: $("#token").val(),
			},
			success: function(data) {
				$("#received").html(data);
				$("#payment").html($("#amount").val().toString().replace(/(.)(?=(\d{3})+$)/g, '$1.'));
			},
			error: function() {
				cuteToast({
					type: "error",
					message: 'Không thể tính kết quả thanh toán',
					timer: 5000
				});
			}
		});
	}
	
	
	$("#create_recharge").submit(function(e) {
		// $('#btnDepositOrder').html('<i class="fa fa-spinner fa-spin"></i> Đang xử lý...').prop(
		// 	'disabled',
		// 	true);
		e.preventDefault();
		var form = $(this);
		var actionUrl = form.attr('action');
		const formData = new FormData(form[0]);
		$.ajax({
			url: actionUrl,
			method: form.attr('method'),
			dataType: "JSON",
			data: formData,
			async: false,
			cache: false,
			processData: false,
			contentType: false,
			enctype: 'multipart/form-data',
			success: function(responses) {
				document.location.href = "/client/payment/" + responses.data.code
			},
			error: function() {
				console.log('failed');
			}
	
		});
	});
	// $("#btnDepositOrder").on("click", function() {
	// 	$('#btnDepositOrder').html('<i class="fa fa-spinner fa-spin"></i> Đang xử lý...').prop(
	// 		'disabled',
	// 		true);
	// 	$.ajax({
	// 		url: "https://sellclonemmo.vn/ajaxs/client/deposit-order.php",
	// 		method: "POST",
	// 		dataType: "JSON",
	// 		data: {
	// 			type: $("#modal-id").val(),
	// 			amount: $("#amount").val(),
	// 			token: $("#token").val()
	// 		},
	// 		success: function(respone) {
	// 			if (respone.status == 'success') {
	// 				cuteToast({
	// 					type: "success",
	// 					message: respone.msg,
	// 					timer: 5000
	// 				});
	// 				//window.open("https://sellclonemmo.vn/client/payment/" + respone.trans_id + " ", '_blank');
	// 				setTimeout("location.href = 'https://sellclonemmo.vn/client/payment/" + respone.trans_id +
	// 					" ' ;", 500);
	
	// 			} else {
	// 				Swal.fire(
	// 					'Thất bại',
	// 					respone.msg,
	// 					'error'
	// 				);
	// 			}
	// 			$('#btnDepositOrder').html('Tạo hoá đơn').prop('disabled', false);
	// 		},
	// 		error: function() {
	// 			cuteToast({
	// 				type: "error",
	// 				message: 'Không thể xử lý',
	// 				timer: 5000
	// 			});
	// 			$('#btnDepositOrder').html('Tạo hoá đơn').prop('disabled', false);
	// 		}
	
	// 	});
	// });
	// $("#btnDepositOrder").on('click', function() {
	// 	var data = $('#amount').val();
	// 	e.preventDefault();
	// 	var form = $(this);
	// 	var actionUrl = form.attr('action');
	// 	const formData = new FormData(form[0]);
	// 	$.ajax({
	// 		url: '{{ route("test.gen") }}',
	// 		method: "POST",
	// 		dataType: "JSON",
	// 		data: {
	// 			data: data
	// 		},
	// 		success: function(respone) {
	// 			console.log(respone.data);
	// 			window.location.href = '/client/payment/';
	// 		},
	// 		error: function() {
	// 			console.log('123');
	// 		}
	
	// 	});
	// })
</script>
@endsection