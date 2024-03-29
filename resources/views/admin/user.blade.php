@extends('layouts.admin')

@section('content')
<link href="{{ asset('plugins/jsgrid/jsgrid-theme.min.css') }}" rel="stylesheet">
<link href="{{ asset('plugins/jsgrid/jsgrid.min.css') }}" rel="stylesheet">
<div class="content-wrapper" style="min-height: 1302.12px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Người dùng</h1>
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
                <h3 class="card-title">Quản lý</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div id="jsGrid1" class="jsgrid" style="position: relative; height: 100%; width: 100%;">
                    <div class="jsgrid-grid-header jsgrid-header-scrollbar" style="overflow-y: hidden">
                        <table class="jsgrid-table">
                            <tr class="jsgrid-header-row">
                                <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 100px;">Tên</th>
                                <th class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable"
                                    style="width: 50px;">Tổng nạp</th>
                                <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 200px;">Email</th>
                                <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable"
                                    style="width: 100px;">Mật khẩu</th>
                                <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable"
                                    style="width: 70px;">Tùy chọn</th>
                            </tr>
                        </table>
                    </div>
                    <div class="jsgrid-grid-body" style="overflow-y: auto">
                        <table class="jsgrid-table">
                            <tbody>
                                @foreach ($users as $user)
                                <tr class="jsgrid-row">
                                    <td class="jsgrid-cell" style="width: 100px;">{{ $user->name }}</td>
                                    <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">{{ $user->total_money }}</td>
                                    <td class="jsgrid-cell" style="width: 200px;">{{ $user->email }}</td>
                                    <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">secret</td>
                                    <td class="jsgrid-cell jsgrid-align-center" style="width: 70px;">
                                        <a href="/admin/user/{{ $user->id }}"><button type="button" class="btn btn-primary btn-xs btn-user">Chi tiết</button></a>
                                        <a href="/admin/message?id={{ $user->id }}"><<button type="button" class="btn btn-primary btn-xs btn-user" style="width: 55px;">Nhắn tin</button></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="jsgrid-pager-container">
						<div class="jsgrid-pager">
							{!! $users->links() !!}
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