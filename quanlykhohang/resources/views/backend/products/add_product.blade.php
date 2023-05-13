@extends('backend.layouts.master')
@section('main-content')
@section('title', 'ADD-PRODUCTS')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h1 class="fw-semibold mb-4 text-center text-dark">Phiếu Nhập Sản Phẩm Mới</h1>
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tên Sản Phẩm</label>
                                    <input type="text" class="form-control" id="tensp"
                                        aria-describedby="emailHelp" placeholder="Nhập Tên Sản Phẩm">
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <label for="exampleInputPassword1" class="form-label">NSX <span
                                                class="text-danger">(*)</span></label>
                                        <input type="date" class="form-control" id="nsx">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="exampleInputPassword1" class="form-label">HSD </label>
                                        <input type="date" class="form-control" id="nsx">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <label for="exampleInputPassword1" class="form-label">Đơn Giá/1 Sản Phẩm <span
                                                class="text-danger">(*)</span></label>
                                        <input type="text" class="form-control" id="dongia"
                                            placeholder="Nhập Giá Tiền">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="exampleInputPassword1" class="form-label"> Số Lượng </label>
                                        <input type="number" class="form-control" id="sl"
                                            placeholder="Nhập Số Lượng">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <label for="exampleInputPassword1" class="form-label">Đơn Vị: <span
                                                class="text-danger">(*)</span></label>
                                        <input type="text" class="form-control" id="donvi"
                                            placeholder="Nhập Đơn Vị Tính">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="exampleInputPassword1" class="form-label"> Chọn Kho Chứa <span
                                                class="text-danger">(*)</span></label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Kho Chứa Sản Phẩm</option>
                                            <option value="1">Thực Phẩm</option>
                                            <option value="2">Nước Giải Khát</option>
                                            <option value="3">Đồ Gia Dụng</option>
                                        </select>
                                    </div>
                                </div>
                                <h6 class="text-dark text-uppercase mb-4 mt-4 ">Thông Tin Về Khách Hàng <span
                                        class="text-danger">(*)</span> </h6>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tên Khách Hàng <span
                                            class="text-danger">(*)</span> </label>

                                    <input type="text" class="form-control" id="tensp"
                                        aria-describedby="emailHelp" placeholder="Nhập Tên Khách Hàng">
                                </div>

                                <div class="row mb-4">
                                    <div class="col-lg-6">
                                        <label for="exampleInputPassword1" class="form-label">Số Điện Thoại<span
                                                class="text-danger">(*)</span></label>
                                        <input type="text" class="form-control" id="donvi"
                                            placeholder="Nhập Đơn Vị Tính">
                                    </div>
                                    <div class="col-lg-6 align-content-center">
                                        <label for="exampleInputPassword1" class="form-label">Loại Khách Hàng <span
                                                class="text-danger">(*)</span></label>
                                        <div class="d-flex">
                                            <div class="form-check me-4">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault1" value="0">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Nhập
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault2" value="1" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Xuất
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Địa Chỉ Khách Hàng <span
                                            class="text-danger">(*)</span> </label>

                                    <input type="text" class="form-control" id="tensp"
                                        aria-describedby="emailHelp" placeholder="Nhập Địa Chỉ Khách Hàng">
                                </div>


                                <div class="text-center">

                                    <button type="submit" class="btn btn-primary">Thêm Vào Kho</button>
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
