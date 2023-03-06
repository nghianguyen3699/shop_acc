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
                                <h4 class="card-title">Biến động số dư</h4>
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
                                            <table class="table data-table table-hover mb-0 dataTable no-footer"
                                                id="DataTables_Table_0" role="grid"
                                                aria-describedby="DataTables_Table_0_info">
                                                <thead class="table-color-heading">
                                                    <tr role="row">
                                                        <th class="text-center sorting sorting_asc" width="5%"
                                                            tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                                            colspan="1" aria-sort="ascending"
                                                            aria-label="#: activate to sort column descending"
                                                            style="width: 25.75px;">#</th>
                                                        <th class="text-center sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                            aria-label="Số tiền trước: activate to sort column ascending"
                                                            style="width: 258.234px;">Số tiền trước</th>
                                                        <th class="text-center sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                            aria-label="Số tiền thay đổi: activate to sort column ascending"
                                                            style="width: 302.578px;">Số tiền thay đổi</th>
                                                        <th class="text-center sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                            aria-label="Số tiền hiện tại: activate to sort column ascending"
                                                            style="width: 289.156px;">Số tiền hiện tại</th>
                                                        <th class="text-center sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                            aria-label="Thời gian: activate to sort column ascending"
                                                            style="width: 200.984px;">Thời gian</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                            aria-label="Nội dung: activate to sort column ascending"
                                                            style="width: 194.297px;">Nội dung</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="odd">
                                                        <td valign="top" colspan="6" class="dataTables_empty">No data
                                                            available in table</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status"
                                                aria-live="polite">Showing 0 to 0 of 0 entries</div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                id="DataTables_Table_0_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled"
                                                        id="DataTables_Table_0_previous"><a href="#"
                                                            aria-controls="DataTables_Table_0" data-dt-idx="0"
                                                            tabindex="0" class="page-link">Previous</a></li>
                                                    <li class="paginate_button page-item next disabled"
                                                        id="DataTables_Table_0_next"><a href="#"
                                                            aria-controls="DataTables_Table_0" data-dt-idx="1"
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