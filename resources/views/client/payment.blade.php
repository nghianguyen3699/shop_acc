<link href="{{ asset('css/style.default.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/qr-code.css') }}" rel="stylesheet">
<link href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
<div id="page" style="">
	<nav class="navbar navbar-default hidden-xs">
		<div class="container-fluid" style="padding: 1px;padding: 1px;width: 45%;min-width: 800px;">
			<div class="navbar-header" style="position: relative">
				<div class="col-xs-12 col-sm-12 col-md-12 text-right" style="padding-right: 0px;">
					<img src="https://sellclonemmo.vn/public/faces/javax.faces.resource/images/hotline.svg" alt="logo-security" width="35">
					<span>{{ $phone_number }}</span>
					<img src="https://sellclonemmo.vn/public/faces/javax.faces.resource/images/email.svg" alt="logo-security" width="35">
					<a href="mailto:{{ $email }}"><span>{{ $email }}</span></a>
				</div>
			</div>
		</div>

	</nav>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-4 left" style="background-color: #030303">
				<div class="info-box">
					<div class="receipt">
						<img src="https://sellclonemmo.vn/assets/storage/images/logo_dark_W1Q.png" width="100%">
					</div>
					<div class="entry">
						<p><i class="fa fa-university" aria-hidden="true"></i>
							<span style="padding-left: 5px;">Nạp Tiền</span>
							<br>
							<span style="padding-left: 25px;word-break: keep-all;">{{ $bank }}</span>
						</p>
					</div>
					<div class="entry">
						<p><i class="fa fa-credit-card" aria-hidden="true"></i>
							<span style="padding-left: 5px;">Số tài khoản</span>
							<br>
							<b id="copyStk" style="padding-left: 25px;word-break: keep-all;color:greenyellow;">{{ $ACCOUNT_NUMBER }}</b>
							<i onclick="copy()" data-clipboard-target="#copyStk" class="fas fa-copy copy"></i>
						</p>
					</div>
					<div class="entry">
						<p><i class="fa fa-user" aria-hidden="true"></i>
							<span style="padding-left: 5px;">Chủ tài khoản</span>
							<br>
							<span style="padding-left: 25px;word-break: keep-all;">{{ $ACCOUNT_NAME }}</span>
						</p>
					</div>
					<div class="entry">
						<p><i class="fa fa-money-bill" aria-hidden="true"></i>
							<span style="padding-left: 5px;">Số tiền cần thanh toán</span>
							<br>
							<b style="padding-left: 25px;color:aqua;">{{ $amount }}</b>
						</p>
					</div>
					<div class="entry">
						<p><i class="fa fa-comment" aria-hidden="true"></i>
							<span style="padding-left: 5px;">Nội dung chuyển khoản</span>
							<br>
							<b id="copyNoiDung" style="padding-left: 25px;word-break: keep-all;color:yellow;">{{ $code }}</b>
							<i onclick="copy()" data-clipboard-target="#copyNoiDung" class="fas fa-copy copy"></i>
						</p>
					</div>
					<div class="entry">
						<p><i class="fa fa-barcode" aria-hidden="true"></i>
							<span style="padding-left: 5px;">Trạng thái 
							</span>
							<br>
							<span id="status_payment" style="padding-left: 25px;word-break: break-all;">
								<p class="mb-0 text-warning font-weight-bold d-flex justify-content-start align-items-center">
									@if ($status == $STATUS_PAYMENT_UNPAID)
										Đang chờ thanh toán
									@elseif ($status == $STATUS_PAYMENT_PAID)
										Đã thanh toán
									@elseif ($status == $STATUS_PAYMENT_CANCELED)
										Đã hủy
									@else
										Chưa xác định
									@endif
								</p>
							</span>
						</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 right">
				<div class="content">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="message" id="loginForm">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12">
										<div class="qr-code">
											<div class="payment-cta">
												<div>
													<h1>Quét mã QR để thanh toán</h1>
												</div>
												<a>Sử dụng <b> App Internet Banking </b> hoặc ứng dụng camera hỗ trợ QR code để quét mã</a>
											</div>
											<img src="https://api.vietqr.io/ACB/27375367/10000/HM9Y8/vietqr_net_2.jpg?accountName=DANG THI BICH HIEN" width="100%">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid hidden-xs">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="copyrights text-center">
					<p style="color: #737373;   font-size: 11pt; font-weight: bold;">
						<br>
						Vui lòng thanh toán vào thông tin tài khoản trên để hệ thống xử lý hoá đơn tự động.                        </p>
					<a href="https://sellclonemmo.vn/client/invoices">
						<i class="fa fa-arrow-left" aria-hidden="true"></i>
						<span>Quay Lại</span></a>
				</div>
			</div>
		</div>
	</div>
</div>
