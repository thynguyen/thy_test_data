@extends('admin.layouts.default')
@section('content')
<div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            <div class="col-sm-6"><h3 class="mb-0">{{ $title }}</h3></div>
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
                <div class="card card-primary card-outline mb-4">
                    <form action="{{ route('admin.user.save') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-3">
                                    <label class="form-label">Họ và tên</label>
                                    <input type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" 
                                        value="{{ old('full_name', @$user->full_name) }}"/>
                                    @if ($errors->has('full_name'))
                                    <div class="invalid-feedback">
                                    {{ $errors->first('full_name') }}
                                    </div>
                                    @endif
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Tài khoản</label>
                                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" 
                                        value="{{ old('username', @$user->username) }}" />
                                    @if ($errors->has('username'))
                                    <div class="invalid-feedback">
                                    {{ $errors->first('username') }}
                                    </div>
                                    @endif
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" 
                                        value="{{ old('email', @$user->email) }}" />
                                    @if ($errors->has('email'))
                                    <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                    </div>
                                    @endif
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">Nhóm</label>
                                    <select class="form-select @error('roles') is-invalid @enderror" name="roles">
                                        <option value="">Chọn nhóm</option>
                                        @foreach($roles as $role)
                                        <option {{ (old("roles", (!empty($user) ? @$user->roles->first()->id : NULL)) == $role->id ? "selected" : "") }} value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('roles'))
                                    <div class="invalid-feedback">
                                    {{ $errors->first('roles') }}
                                    </div>
                                    @endif
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"/>
                                    @if ($errors->has('password'))
                                    <div class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                    </div>
                                    @endif
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Confirm password</label>
                                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" />
                                    @if ($errors->has('password_confirmation'))
                                    <div class="invalid-feedback">
                                    {{ $errors->first('password_confirmation') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('admin.user.show') }}" class="btn btn-outline-dark">Danh sách</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <input type="hidden" name="admin_id" value="{{ @$user->id }}" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--end::Container-->
</div>
@stop
