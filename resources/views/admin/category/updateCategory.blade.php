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
        <form method="post" action={{$category->c_id}} enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="p_id" class="form-label">ID</label>
                <input type="text" class="form-control" name="c_id" id="c_id" placeholder="" value="{{$category->c_id}}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Loại sản phẩm</label>
                <input type="text" class="form-control" name="name" id="dname" placeholder="" value="{{$category->name}}">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-info" name="btUpdate">Chỉnh sửa</button>
            </div>
        </form>
    </div>
</body>
</html>

@endsection