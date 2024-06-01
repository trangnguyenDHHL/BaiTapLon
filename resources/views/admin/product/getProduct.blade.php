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
    <title>Workers Table</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .table thead th {
            background-color: #f8f9fa;
            text-align: left;
        }
        .table tbody tr:hover {
            background-color: #f1f1f1;
        }
        .table tbody td {
            vertical-align: middle;
        }
        .table .actions {
            display: flex;
            gap: 10px;
        }
        .table .actions i {
            margin-right: 5px;
        }
        .table img {
            width: 100px; /* Adjust the size as needed */
            height: auto;
            object-fit: cover;
        }
        .content-container {
            padding-top: 80px; /* Adjust this value according to the height of your fixed menu */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        @if(session('Note'))
        <div class="alert alert-success">
            {{ session('Note') }}
        </div>
        @endif
    </div>
    <div class="container content-container mt-5">
        <h2 class="mb-4">Danh sách sản phẩm</h2>
        
        <!-- Search Form -->
        <form action="{{ route('getProductsbyID') }}" method="GET" class="form-inline mb-4">
            <div class="form-group mr-2">
                <input type="text" name="search_id" class="form-control" placeholder="Nhập ID sản phẩm">
            </div>
            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
        </form>

        <table class="table table-bordered table-hover">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Loại sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Mô tả</th>
                    <th>Ảnh</th>
                    <th>Chỉnh sửa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{$product->p_id}}</td>
                    <td>{{$product->c_id}}</td>
                    <td>{{$product->tittle}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->description}}</td>
                    <td>
                        <img src={{$product->thumbnail}} alt="Product Image">
                    </td>
                    <td class="actions">
                        <a href="updateProduct/{{$product->p_id}}" class="btn btn-sm btn-warning">
                            <i class="fa fa-pencil fa-fw"></i>Chỉnh sửa
                        </a>
                    </td>
                    <td class="actions">
                        <a href="deleteProduct/{{$product->p_id}}" class="btn btn-sm btn-danger">
                            <i class="fa fa-trash-o fa-fw"></i>Xóa
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>

@endsection
