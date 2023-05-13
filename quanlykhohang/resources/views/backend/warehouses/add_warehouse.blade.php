@extends('backend.layouts.master')
@section('main-content')
@section('title', 'ADD-WAREHOUSE')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h1 class="fw-semibold mb-4 text-center text-dark">Tạo Kho Hàng Mới</h1>
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="tenkho" class="form-label">Tên Kho <span class="text-danger">(*)</span></label>
                                    <input type="text" class="form-control" id="tenkho"
                                        aria-describedby="khohang" placeholder="Nhập Tên Kho Hàng">
                                </div>
                            
                                <div class="text-center">

                                    <button type="submit" class="btn btn-primary">Thêm Mới</button>
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
