@extends('backend.layouts.master')
@section('main-content')
@section('title', 'LIST-EMPLOYEES')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="fw-semibold mb-4 text-center text-dark">Danh Sách Nhân Viên</h1>
                    <div class="row mb-5">
                        <div class="col-lg-8">

                            <form action="">

                                <div class="d-flex">
                                    <input type="text" class="form-control"
                                        placeholder="Vui Lòng Nhập Từ Khóa Tìm Kiếm">

                                    <input type="submit" class="btn btn-success" value="Search">
                                    <select class="form-select" aria-label="Default select example"
                                        style="width: 300px">
                                        <option selected>Tìm Kiếm Theo</option>
                                        <option value="1">Tên</option>
                                        <option value="2">Só ĐT</option>
                                        <option value="3">CCCD</option>
                                    </select>
                                </div>
                            </form>


                        </div>
                        <div class="col-lg-4">
                            <a href="{{route('employee.create')}}" class="btn btn-primary float-end">+ Thêm Mới</a>
                        </div>
                    </div>
                    <div class="table-responsive ">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Họ Nhân Viên</th>
                                    <th>Tên Nhân Viên</th>
                                    <th>Số Điện Thoại</th>
                                    <th>Địa Chỉ</th>
                                    <th>Số CCCD</th>
                                    <th>Công Cụ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Trần Quang</td>
                                    <td>Đạt</td>
                                    <td>0823488817</td>
                                    <td>Quận 1, Thành Phố Hồ Chí Minh</td>
                                    <td>0494830803808</td>
                                    <td>
                                        <span class="d-flex">
                                            <a href="" class="btn btn-success text-white me-1">Edit</a>
                                            <a href="" class="btn btn-danger text-white">Delete</a>
                                        </span>

                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Đặng Hồng</td>
                                    <td>Quân</td>
                                    <td>0324234324</td>
                                    <td>Quận 1, Thành Phố Hồ Chí Minh</td>
                                    <td>732836368733</td>
                                    <td>
                                        <span class="d-flex">
                                            <a href="" class="btn btn-success text-white me-1">Edit</a>
                                            <a href="" class="btn btn-danger text-white">Delete</a>
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
