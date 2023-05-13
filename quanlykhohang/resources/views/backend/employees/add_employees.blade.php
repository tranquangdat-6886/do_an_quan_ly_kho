@extends('backend.layouts.master')
@section('main-content')
@section('title', 'ADD-EMPLOYEES')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h1 class="fw-semibold mb-4 text-center text-dark">Thêm Nhân Viên Mới</h1>
                    <div class="card">
                        <div class="card-body">
                            <form>

                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <label for="honv" class="form-label">Họ<span
                                                class="text-danger">(*)</span></label>
                                        <input type="text" class="form-control" id="honv"
                                            placeholder="Nhập Họ Của Nhân Viên">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="tennv" class="form-label">Tên <span
                                                class="text-danger">(*)</span> </label>
                                        <input type="text" class="form-control" id="tennv"
                                            placeholder="Nhập Tên Của Nhân Viên">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Địa Chỉ <span
                                            class="text-danger">(*)</span> </label>

                                    <input type="text" class="form-control" id="tensp"
                                        aria-describedby="emailHelp" placeholder="Nhập Địa Chỉ Nhân Viên">
                                </div>

                                <div class="row mb-4">
                                    <div class="col-lg-6">
                                        <label for="exampleInputPassword1" class="form-label">Số Điện Thoại<span
                                                class="text-danger">(*)</span></label>
                                        <input type="number" class="form-control" id="sdt"
                                            placeholder="Nhập Số Điện Thoại Nhân Viên">
                                    </div>
                                    <div class="col-lg-6 align-content-center">
                                        <label for="exampleInputPassword1" class="form-label">CCCD<span
                                                class="text-danger">(*)</span></label>
                                        <input type="number" class="form-control" id="sdt"
                                            placeholder="Nhập Số Căn Cước Công Dân ">
                                    </div>

                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">UserName: <span
                                            class="text-danger">(*)</span> </label>

                                    <input type="text" class="form-control" id="username"
                                        aria-describedby="usernameHelp" placeholder="Tài Khoản Đăng Nhập">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password: <span
                                            class="text-danger">(*)</span> </label>

                                    <input type="password" class="form-control" id="password"
                                        aria-describedby="password" placeholder="Nhập PassWord">
                                </div>


                                <label for="role" class="form-label">Chọn Quyền <span
                                        class="text-danger">(*)</span></label>
                                <div class="form-check ">
                                    <input class="form-check-input" type="radio" name="role" id="role1"
                                        value="0">
                                    <label class="form-check-label" for="role1">
                                        Quyền User
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="role" id="role2"
                                        value="1">
                                    <label class="form-check-label" for="role2">
                                        Quyền Admin
                                    </label>
                                </div>




                                <div class="text-center">

                                    <button type="submit" class="btn btn-primary">Thêm Nhân Viên</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

@endSection
