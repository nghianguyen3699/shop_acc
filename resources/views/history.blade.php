@extends('layouts.app')

@section('content')
<div style="padding-top:90px">
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Nhật ký hoạt động</h4>
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
                                                        placeholder="" aria-controls="DataTables_Table_0"></label></div>
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
                                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                            aria-sort="ascending"
                                                            aria-label="#: activate to sort column descending"
                                                            style="width: 25.2812px;">#</th>
                                                        <th width="40%" class="sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                            aria-label="Hành động: activate to sort column ascending"
                                                            style="width: 564.625px;">Hành động</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                            aria-label="Thời gian: activate to sort column ascending"
                                                            style="width: 62.1094px;">Thời gian</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                            aria-label="Địa chỉ IP: activate to sort column ascending"
                                                            style="width: 335.062px;">Địa chỉ IP</th>
                                                        <th width="25%" class="sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                            aria-label="Thiết bị: activate to sort column ascending"
                                                            style="width: 337.922px;">Thiết bị</th>
                                                    </tr>
                                                </thead>
                                                <tbody>




                                                    <tr class="odd">
                                                        <td class="sorting_1">0</td>
                                                        <td>Đăng nhập thành công vào hệ thống</td>
                                                        <td>2023-02-09 20:55:39</td>
                                                        <td>116.110.80.242</td>
                                                        <td>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36
                                                            (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36</td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td class="sorting_1">1</td>
                                                        <td>Tạo hoá đơn nạp tiền #BPZ9Y</td>
                                                        <td>2023-02-07 22:51:53</td>
                                                        <td>2402:800:6205:ca3c:98b6:4d3f:3e52:beb</td>
                                                        <td>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36
                                                            (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36</td>
                                                    </tr>
                                                    <tr class="odd">
                                                        <td class="sorting_1">2</td>
                                                        <td>Tạo hoá đơn nạp tiền #N91Y2</td>
                                                        <td>2023-02-07 22:28:05</td>
                                                        <td>116.110.80.242</td>
                                                        <td>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36
                                                            (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36</td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td class="sorting_1">3</td>
                                                        <td>Thực hiện tạo tài khoản</td>
                                                        <td>2023-02-07 22:27:29</td>
                                                        <td>116.110.80.242</td>
                                                        <td>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36
                                                            (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status"
                                                aria-live="polite">Showing 1 to 4 of 4 entries</div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                id="DataTables_Table_0_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled"
                                                        id="DataTables_Table_0_previous"><a href="#"
                                                            aria-controls="DataTables_Table_0" data-dt-idx="0"
                                                            tabindex="0" class="page-link">Previous</a></li>
                                                    <li class="paginate_button page-item active"><a href="#"
                                                            aria-controls="DataTables_Table_0" data-dt-idx="1"
                                                            tabindex="0" class="page-link">1</a></li>
                                                    <li class="paginate_button page-item next disabled"
                                                        id="DataTables_Table_0_next"><a href="#"
                                                            aria-controls="DataTables_Table_0" data-dt-idx="2"
                                                            tabindex="0" class="page-link">Next</a></li>
                                                </ul>
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
    </div>
</div>
@endsection