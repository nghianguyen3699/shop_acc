@extends('layouts.admin')

@section('content')
<style>
	.profile {
    /* width: 600px; */
	display: flex;
	justify-content: space-between;
	align-items: start;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0px 0px 5px #ccc;
}

.avatar_name {
	width: 33%;
}

.information {
	width: 67%;
}

.avatar {
    display: block;
    width: 150px;
    height: 150px;
    margin: 0 auto;
    border-radius: 50%;
}

.name {
    text-align: center;
    margin-top: 10px;
    margin-bottom: 0;
}

.bio {
    text-align: justify;
    margin-top: 10px;
}

.details {
    margin-top: 20px;
    list-style: none;
    padding: 0;
}

.details li {
    margin-bottom: 10px;
}

.details strong {
    margin-right: 5px;
}

</style>
<link href="{{ asset('plugins/jsgrid/jsgrid-theme.min.css') }}" rel="stylesheet">
<link href="{{ asset('plugins/jsgrid/jsgrid.min.css') }}" rel="stylesheet">
<div class="content-wrapper" style="min-height: 1302.12px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ $user->name }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">jsGrid</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Thông tin cá nhân</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div id="jsGrid1" class="jsgrid" style="position: relative; height: 100%; width: 100%;">
                    <div class="profile">
						<div class="avatar_name">
							<img class="avatar" src="https://via.placeholder.com/150x150" alt="User avatar">
							<h1 class="name">{{ $user->name }}<i class="fas fa-pencil-alt" style="font-size: 20px;"></i></i>
							</h1>
						</div>
						<div class="information">
							<ul class="details">
								<li><strong>Tên:</strong> {{ $user->name }}</li>
								<li><strong>Email:</strong> {{ $user->email }}</li>
								<li><strong>Số điện thoại:</strong> (123) 456-7890</li>
								<li><strong>Số dư:</strong> {{ $user->total_money }}₫</li>
							</ul>
						</div>
					</div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Thông tin nạp tiền</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div id="jsGrid1" class="jsgrid" style="position: relative; height: 100%; width: 100%;">
                    <div class="jsgrid-grid-header jsgrid-header-scrollbar" style="overflow-y: hidden">
                        <table class="jsgrid-table">
                            <tr class="jsgrid-header-row">
                                <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 100px;">Thời gian</th>
                                <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 200px;">Mã giao dịch</th>
                                <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable"
                                    style="width: 100px;">Ngân hàng</th>
                                <th class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable"
                                    style="width: 50px;">Số tiền</th>
                                {{-- <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable"
                                    style="width: 70px;">Số tiền</th> --}}
                            </tr>
                        </table>
                    </div>
                    <div class="jsgrid-grid-body" style="overflow-y: auto">
                        <table class="jsgrid-table">
                            <tbody>
                                <tr class="jsgrid-row">
                                    <td class="jsgrid-cell" style="width: 100px;"></td>
                                    <td class="jsgrid-cell" style="width: 200px;"></td>
                                    <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"></td>
                                    <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="jsgrid-pager-container">
						<div class="jsgrid-pager">
							{{-- {!! $users->links() !!} --}}
						</div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Thông tin mua sắm</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div id="jsGrid1" class="jsgrid" style="position: relative; height: 100%; width: 100%;">
                    <div class="jsgrid-grid-header jsgrid-header-scrollbar" style="overflow-y: hidden">
                        <table class="jsgrid-table">
                            <tr class="jsgrid-header-row">
                                <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 100px;">Thời gian</th>
                                <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 200px;">Đơn hàng</th>
                                <th class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable"
                                    style="width: 50px;">Số tiền</th>
                                {{-- <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable"
                                    style="width: 100px;">Ngân hàng</th> --}}
                                {{-- <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable"
                                    style="width: 70px;">Số tiền</th> --}}
                            </tr>
                        </table>
                    </div>
                    <div class="jsgrid-grid-body" style="overflow-y: auto">
                        <table class="jsgrid-table">
                            <tbody>
                                <tr class="jsgrid-row">
                                    <td class="jsgrid-cell" style="width: 100px;"></td>
                                    <td class="jsgrid-cell" style="width: 200px;"></td>
                                    <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;"></td>
                                    <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="jsgrid-pager-container">
						<div class="jsgrid-pager">
							{{-- {!! $users->links() !!} --}}
						</div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
@endsection