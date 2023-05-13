@extends('backend.layouts.master')
@section('main-content')
@section('title', 'LIST-EMPLOYEES')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="fw-semibold mb-4 text-center text-dark">Danh Sách Kho</h1>
                    <div class="row mb-5">
                        <div class="col-lg-8">

                        </div>
                        <div class="col-lg-4">
                            <a href="{{ route('warehouse.create') }}" class="btn btn-primary float-end">+ Thêm Mới</a>
                        </div>
                    </div>
                    <div class="table-responsive ">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="text-center">
                                    <th>STT</th>
                                    <th>Tên Kho Hàng </th>
                                    <th>Người Quản Lý</th>
                                    <th>Công Cụ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td>1</td>
                                    <td>Nước Giải Khát</td>
                                    <td>
                                        <p>
                                            Trần Quang Đạt
                                        </p>


                                    </td>
                                    <td>
                                        <span class="d-flex">
                                            <a href="" class="btn btn-primary text-white me-1">Danh Sách Sản
                                                Phẩm Có Trong Kho</a>
                                            <a href="" class="btn btn-success text-white me-1">Chỉnh Sửa</a>
                                            <a href="" class="btn btn-danger text-white">Xóa Kho</a>
                                        </span>

                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>2</td>
                                    <td>Thực Phẩm</td>
                                    <td>
                                        <p>
                                            Trần Quang Đạt
                                        </p>
                                        <p>
                                            Đặng Hồng Quân
                                        </p>

                                    </td>
                                    <td>
                                        <span class="d-flex">
                                            <a href="" class="btn btn-primary text-white me-1">Danh Sách Sản Phẩm
                                                Có
                                                Trong Kho</a>
                                            <a href="" class="btn btn-success text-white me-1">Chỉnh Sửa</a>
                                            <a href="" class="btn btn-danger text-white">Xóa Kho</a>
                                        </span>

                                    </td>
                                </tr>
                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endSection
