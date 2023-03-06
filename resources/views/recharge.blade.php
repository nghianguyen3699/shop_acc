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
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <input type="hidden" id="token" value="d7cdfffb61b5c35e31a5b049e923433c" required="">
                        <input type="hidden" id="modal-id" required="">
                        <input type="number" id="amount" onchange="totalRecharge()" onkeyup="totalRecharge()"
                            placeholder="Nhập số tiền bạn cần nạp vào hệ thống" class="form-control" required="">
                    </div>
                    <p>
                        <span class="float-left">Số tiền cần thanh toán<br><br><b id="payment"
                                style="color: blue;">0</b></span>
                        <span class="float-right">Số tiền nhận được<br><br><b id="received"
                                style="color: red;">0</b></span>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="button" id="btnDepositOrder" class="btn btn-primary">Tạo hoá đơn</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection