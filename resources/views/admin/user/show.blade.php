@extends('admin.layouts.default')
@section('content')
<div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            <div class="col-sm-6"><h3 class="mb-0">Danh sách thành viên</h3></div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.user.create') }}" class="btn btn-outline-success">Tạo mới</a>
                </li> 
            </ol>
            </div>
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>

<div class="app-content">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            
            <div class="col-md-12">
                @include('admin.includes.notification')
                <div class="card mb-2">

                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px;">No</th>
                                    <th>Họ và tên</th>
                                    <th>Tài khoản</th>
                                    <th>Email</th>
                                    <th>Nhóm</th>
                                    <th>Ngày tạo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($users->total())
                                @foreach ($users as $user)
                                <tr class="align-middle">
                                    <td>{{ ++$loop->index }}</td>
                                    <td>{{ $user->full_name }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        {{ @$user->roles->first()->name }}
                                    </td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>
                                        <a href="{{ route('admin.user.edit', ['id' => $user->id]) }}" class="btn del-schedule">
                                            <span class="bi bi-highlighter" style="color: green;"></span>
                                        </a>
                                        @if(auth()->user()->username === $user->username)

                                        @else
                                        <a href="javascript:void(0)" 
                                            data-bs-toggle="modal" data-bs-target="#confirm_modal" 
                                            data-bs-href="{{ route('admin.user.delete', ['id' => $user->id]) }}" class="btn mr-1 del-schedule">
                                            <span class="bi bi-trash" style="color: rgb(255, 0, 0);"></span>
                                        </a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr class="align-middle">
                                    <td colspan="6">Không tìm thấy dữ liệu</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>

                    <div class="card-footer clearfix">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Container-->
</div>
@stop
