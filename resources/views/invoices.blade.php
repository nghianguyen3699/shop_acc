@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/sweetalert2.min.css') }}">
<div style="padding-top:90px">
	<div class="content-page">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="alert bg-white alert-warning" role="alert">
						<div class="iq-alert-icon">
							<i class="ri-alert-line"></i>
						</div>
						<div class="iq-alert-text">Mỗi hoá đơn chỉ tồn tại trong 12 tiếng tính từ thời gian tạo, vui
							lòng thực hiện thanh toán sau khi tạo hoá đơn.</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header d-flex justify-content-between">
							<div class="header-title">
								<h4 class="card-title">Hoá Đơn Nạp</h4>
							</div>
						</div>
						<div class="card-body p-0">
							<div class="table-responsive">
								<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
									<div class="row">
										<div class="col-sm-12 col-md-6">
											<div class="dataTables_length" id="DataTables_Table_0_length"><label>Show
													<select name="DataTables_Table_0_length"
														aria-controls="DataTables_Table_0"
														class="custom-select custom-select-sm form-control form-control-sm">
														<option value="10">10</option>
														<option value="25">25</option>
														<option value="50">50</option>
														<option value="100">100</option>
													</select> entries</label></div>
										</div>
										<div class="col-sm-12 col-md-6">
											<div id="DataTables_Table_0_filter" class="dataTables_filter">
												<label>Search:<input type="search" class="form-control form-control-sm"
														placeholder="" aria-controls="DataTables_Table_0"></label>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<table class="table data-table table-striped mb-0 dataTable no-footer"
												id="DataTables_Table_0" role="grid"
												aria-describedby="DataTables_Table_0_info">
												<thead class="table-color-heading">
													<tr role="row">
														<th width="5%" class="sorting sorting_asc" tabindex="0"
															aria-controls="DataTables_Table_0" rowspan="1"
															colspan="1" aria-sort="ascending"
															aria-label="#: activate to sort column descending"
															style="width: 25px;">#</th>
														<th class="sorting" tabindex="0"
															aria-controls="DataTables_Table_0" rowspan="1"
															colspan="1"
															aria-label="Mã giao dịch: activate to sort column ascending"
															style="width: 167px;">Mã giao dịch</th>
														<th class="sorting" tabindex="0"
															aria-controls="DataTables_Table_0" rowspan="1"
															colspan="1"
															aria-label="Phương thức thanh toán: activate to sort column ascending"
															style="width: 200px;">Phương thức thanh toán</th>
														<th class="sorting" tabindex="0"
															aria-controls="DataTables_Table_0" rowspan="1"
															colspan="1"
															aria-label="Số lượng: activate to sort column ascending"
															style="width: 150px;">Số lượng</th>
														<th class="sorting" tabindex="0"
															aria-controls="DataTables_Table_0" rowspan="1"
															colspan="1"
															aria-label="Thanh toán: activate to sort column ascending"
															style="width: 150px;">Thanh toán</th>
														<th class="sorting" tabindex="0"
															aria-controls="DataTables_Table_0" rowspan="1"
															colspan="1"
															aria-label="Trạng thái: activate to sort column ascending"
															style="width: 150px;">Trạng thái</th>
														<th class="sorting" tabindex="0"
															aria-controls="DataTables_Table_0" rowspan="1"
															colspan="1"
															aria-label="Thời gian: activate to sort column ascending"
															style="">Thời gian</th>
														<th class="sorting" tabindex="0"
															aria-controls="DataTables_Table_0" rowspan="1"
															colspan="1"
															aria-label="Trạng Thái: activate to sort column ascending"
															style="width: 100px;">Lựa chọn</th>
													</tr>
												</thead>
												<tbody>
													@if (count($invoices) == 0)
														<tr class="odd">
															<td valign="top" colspan="8" class="dataTables_empty">No data
																available in table</td>
														</tr>
													@else
														@foreach ($invoices as $invoice)
														<tr class="odd" style="line-height: 10px">
															<td class="sorting_1">{{ $loop->index }}</td>
															<td style="color: blue;">
																<i class="fas fa-file-alt"></i>
																<span class="code-payment">{{ $invoice->code }}</span>
															</td>
															<td><b style="font-size:15px;">{{ $invoice->bank }}</b></td>
															<td><b style="color: red;">{{ $invoice->money }}đ</b></td>
															<td><b style="color: green;">{{ $invoice->money }}đ</b></td>
															<td>
																<p class="mb-0 text-danger font-weight-bold d-flex justify-content-start align-items-center">
																	@if ($invoice->status == $STATUS_PAYMENT_UNPAID)
																		<span style="color: green;">Chưa thanh toán</span>
																	@elseif ($invoice->status == $STATUS_PAYMENT_PAID)
																		<span style="color: gray;">Đã thanh toán</span>
																	@elseif ($invoice->status == $STATUS_PAYMENT_CANCELED)
																		<span style="color: red;">Đã hủy</span>
																	@else
																		<span>Đang chờ xử lý</span>
																	@endif
																</p>
															</td>
															<td>{{ $invoice->created_at }}</td>
															<td>
																@if ($invoice->status == $STATUS_PAYMENT_UNPAID)
																	<a href="/client/payment/{{ $invoice->code }}"><button type="button" class="btn btn-primary text-xs" style="line-height: 0.5rem; padding: 0.625rem 0.25rem">Chi tiết</button></a>
																	<button type="button" class="btn btn-primary btn-cancel text-xs" style="line-height: 0.5rem; padding: 0.625rem 0.25rem"">Hủy</button>
																@elseif ($invoice->status == $STATUS_PAYMENT_PAID)
																	<a href="/client/payment/{{ $invoice->code }}"><button type="button" class="btn btn-primary text-xs" style="line-height: 0.5rem; padding: 0.625rem 0.25rem">Chi tiết</button></a>
																@elseif ($invoice->status == $STATUS_PAYMENT_CANCELED)
																	<a href="/client/payment/{{ $invoice->code }}"><button type="button" class="btn btn-primary text-xs" style="line-height: 0.5rem; padding: 0.625rem 0.25rem">Chi tiết</button></a>
																@else
																@endif
															</td>
														</tr>
														@endforeach
													@endif
												</tbody>
											</table>
										</div>
									</div>
									<div class="py-2">
										{!! $invoices->links() !!}
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
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<script src="{{ asset('js/sweetalert2.min.js') }}"></script>
<script type="text/javascript">

	$('.btn-cancel').click(function() {
		Swal.fire({
        title: "Bạn chắc chứ?",
        text: "Bạn muốn hủy hóa đơn chưa thanh toán?",
        icon: "warning",
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		cancelButtonText: 'Hủy bỏ',
		confirmButtonText: 'Đồng ý'
		}).then((result) => {
			if (result.isConfirmed) {
				var code = $(this).parents('tr').find('.code-payment').text()
				var token = $('meta[name="csrf-token"]').attr('content');
				console.log(code);
				$.ajax({
					url: '/client/invoices/delete',
					type: 'DELETE',
					data: {_token: token, code: code},
					success: function(result) {
						Swal.fire("Đã hủy!", "Hóa đơn đã được hủy", "success").then(() => {
							window.location.reload();
						});
					},
					error: function() {
						Swal.fire("Lỗi!", "Đã có lỗi xảy ra trong quá trình xóa hóa đơn!", "error");
					}
				});
			}
		})
	})
</script>
@endsection
