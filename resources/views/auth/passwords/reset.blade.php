@extends('layouts.app')

@section('content')
<div style="padding-top:90px">
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between pb-0">
                            <div class="header-title">
                                <h4 class="card-title mb-0">Thay đổi mật khẩu</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Mật khẩu hiện
                                        tại</label>
                                    <div class="col-lg-8 fv-row">
                                        <input type="password" id="password" class="form-control"
                                            placeholder="Vui lòng nhập mật khẩu hiện tại" required="">
                                        <input type="hidden" id="token" value="d7cdfffb61b5c35e31a5b049e923433c">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Mật khẩu mới</label>
                                    <div class="col-lg-8 fv-row">
                                        <input type="password" id="newpassword" class="form-control"
                                            placeholder="Vui lòng nhập mật khẩu mới" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Nhập lại mật khẩu
                                        mới</label>
                                    <div class="col-lg-8 fv-row">
                                        <input type="password" id="renewpassword" class="form-control"
                                            placeholder="Vui lòng nhập lại mật khẩu mới" required="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" id="btnSaveProfile" class="btn btn-primary">Lưu Thay Đổi</button>
                            <a type="button" href="https://sellclonemmo.com/" class="btn btn-danger">Đóng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection