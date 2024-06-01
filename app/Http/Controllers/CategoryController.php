<?php

namespace App\Http\Controllers;
use App\Models\CategoryModel;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    function getCategory(Request $request){
            $categories = CategoryModel::all();
        return view('admin.category.getCategory', ['categories' => $categories]);
    }
    function insertCategory(Request $request){
        $category = new CategoryModel();
        $category->c_id = $request->c_id;
        $category->name = $request->name;
        $category->save();
        return redirect('admin/category/insertCategory')
        ->with("Note", "Thêm thành công!");
    }
    function forminsertCategory(){
        return view('admin.category.insertCategory');
    }
    function deleteCategory($c_id){
        $category = CategoryModel::where('c_id', $c_id)->first();
        $category->delete();
        return redirect('admin/category/getCategory')
        ->with("Note", "Xóa thành công!");

    }

    function editCategory($c_id){
        $category = CategoryModel::where('c_id', $c_id)->first();
        return view('admin/category/updateCategory',['category'=>$category]);
    }
    function updateCategory(Request $request, $c_id){
        $category = CategoryModel::where('c_id', $c_id)->first();
        $category->c_id = $request->c_id;
        $category->name = $request->name;
        $category->save();
        return redirect('admin/category/updateCategory/'.$c_id)
        ->with("Note", "Sửa thành công!");

}

}
