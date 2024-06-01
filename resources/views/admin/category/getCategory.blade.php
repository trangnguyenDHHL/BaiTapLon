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
    <title>Category Table</title>
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
        <h2 class="mb-4">Danh sách loại sản phẩm</h2>

        <table class="table table-bordered table-hover">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Loại sản phẩm</th>
                    <th>Chỉnh sửa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>{{$category->c_id}}</td>
                    <td>{{$category->name}}</td>
                    <td class="actions">
                        <a href="updateCategory/{{$category->c_id}}" class="btn btn-sm btn-warning">
                            <i class="fa fa-pencil fa-fw"></i>Chỉnh sửa
                        </a>
                    </td>
                    <td class="actions">
                        <a href="deleteCategory/{{$category->c_id}}" class="btn btn-sm btn-danger">
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
