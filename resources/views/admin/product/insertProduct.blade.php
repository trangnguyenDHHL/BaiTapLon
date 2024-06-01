@extends('layout.master')
@section('Content')

@if(session('Note'))
<div class="alert alert-success">
    {{session('Note')}}
</div>
@endif

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .content-container {
            padding-top: 80px; /* Adjust this value according to the height of your fixed header */
        }
    </style>
</head>
<body>
    @if(session('Note'))
    <div class="alert alert-success">
        {{session('Note')}}
    </div>
    @endif
    <div class="container content-container">
        <form method="post" action="insertProduct" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="p_id" class="form-label">ID</label>
                <input type="text" class="form-control" name="p_id" id="p_id" placeholder="">
            </div>
            <div class="mb-3">
                <label for="tittle" class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" name="tittle" id="tittle" placeholder="">
            </div>
            <div class="mb-3">
                <label for="c_id" class="form-label">Loại sản phẩm</label>
                <select class="form-select form-select-lg" name="c_id" id="c_id">
                    <option selected>Chọn một</option>
                    <option value="1">Áo</option>
                    <option value="2">Quần</option>
                    <option value="3">Chân váy</option>
                    <option value="4">Váy liền</option>
                    <option value="5">Giày</option>
                    <option value="6">Khăn</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Mô tả</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Giá</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="">
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Chọn Ảnh</label>
                <input type="file" class="form-control" name="img" id="img">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-info" name="btInsert">Thêm</button>
            </div>
        </form>
    </div>
</body>
</html>

@endsection
