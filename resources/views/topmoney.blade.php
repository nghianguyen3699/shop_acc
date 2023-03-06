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
                                <h4 class="card-title">Bảng Xếp Hạng Nạp Tiền</h4>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead class="table-color-heading">
                                        <tr>
                                            <th class="text-center">Xếp Hạng</th>
                                            <th>Thành Viên</th>
                                            <th>Tổng Nạp</th>
                                            <th class="text-center">Vị Trí</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center"><b>1</b></td>
                                            <td><b>nha********</b></td>
                                            <td><b class="mr-1" style="color:blue;">213.078.000đ</b></td>
                                            <td class="text-center"><i
                                                    class="fas fa-long-arrow-alt-up text-success"></i></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><b>2</b></td>
                                            <td><b>hoa********</b></td>
                                            <td><b class="mr-1" style="color:blue;">206.672.000đ</b></td>
                                            <td class="text-center"><i
                                                    class="fas fa-long-arrow-alt-up text-success"></i></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><b>3</b></td>
                                            <td><b>hoa********</b></td>
                                            <td><b class="mr-1" style="color:blue;">183.585.000đ</b></td>
                                            <td class="text-center"><i
                                                    class="fas fa-long-arrow-alt-down text-danger"></i></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><b>4</b></td>
                                            <td><b>Ngu********</b></td>
                                            <td><b class="mr-1" style="color:blue;">180.808.000đ</b></td>
                                            <td class="text-center"><i
                                                    class="fas fa-long-arrow-alt-down text-danger"></i></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><b>5</b></td>
                                            <td><b>heh********</b></td>
                                            <td><b class="mr-1" style="color:blue;">157.415.000đ</b></td>
                                            <td class="text-center"><i
                                                    class="fas fa-long-arrow-alt-up text-success"></i></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><b>6</b></td>
                                            <td><b>don********</b></td>
                                            <td><b class="mr-1" style="color:blue;">99.672.100đ</b></td>
                                            <td class="text-center"><i
                                                    class="fas fa-long-arrow-alt-down text-danger"></i></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><b>7</b></td>
                                            <td><b>qua********</b></td>
                                            <td><b class="mr-1" style="color:blue;">99.283.100đ</b></td>
                                            <td class="text-center"><i
                                                    class="fas fa-long-arrow-alt-down text-danger"></i></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><b>8</b></td>
                                            <td><b>say********</b></td>
                                            <td><b class="mr-1" style="color:blue;">96.234.600đ</b></td>
                                            <td class="text-center"><i
                                                    class="fas fa-long-arrow-alt-down text-danger"></i></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><b>9</b></td>
                                            <td><b>ntt********</b></td>
                                            <td><b class="mr-1" style="color:blue;">75.770.000đ</b></td>
                                            <td class="text-center"><i
                                                    class="fas fa-long-arrow-alt-up text-success"></i></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><b>10</b></td>
                                            <td><b>tro********</b></td>
                                            <td><b class="mr-1" style="color:blue;">70.550.000đ</b></td>
                                            <td class="text-center"><i
                                                    class="fas fa-long-arrow-alt-down text-danger"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection