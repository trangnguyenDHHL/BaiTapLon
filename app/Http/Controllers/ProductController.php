<?php

namespace App\Http\Controllers;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    function getProductsbyID(Request $request){
        $search_id = $request->input('search_id');
        
        if ($search_id) {
            $products = ProductModel::where('p_id', $search_id)->get();
        } else {
            $products = ProductModel::all();
        }

        return view('admin.product.getProduct', ['products' => $products]);
    }
    function insertProduct(Request $request){
        $product = new ProductModel();
        $product->p_id = $request->p_id;
        $product->c_id = $request->c_id;
        $product->tittle = $request->tittle;
        $product->description = $request->description;
        $product->price = $request->price;
        if(isset($_FILES['img']) && $_FILES['img']['error']===UPLOAD_ERR_OK){
            $thumbnail = 'data:image/png;base64,'
            . base64_encode(file_get_contents($_FILES['img']['tmp_name']));
            $product->thumbnail=$thumbnail;
        }
        $product->save();
        return redirect('admin/product/insertProduct')
        ->with("Note", "Thêm thành công!");
    }
    function forminsertProduct(){
        return view('admin.product.insertProduct');
    }
    function deleteProduct($p_id){
        $product = ProductModel::where('p_id', $p_id)->first();
        $product->delete();
        return redirect('admin/product/getProduct')
        ->with("Note", "Xóa thành công!");

    }

    function editProduct($p_id){
        $product = ProductModel::where('p_id', $p_id)->first();
        return view('admin/product/updateProduct',['product'=>$product]);
    }
    function updateProduct(Request $request, $p_id){
        $product = ProductModel::where('p_id', $p_id)->first();
        $product->p_id = $request->p_id;
        $product->c_id = $request->c_id;
        $product->tittle = $request->tittle;
        $product->description = $request->description;
        $product->price = $request->price;
        if(isset($_FILES['img']) && $_FILES['img']['error']===UPLOAD_ERR_OK){
            $thumbnail = 'data:image/png;base64,'
            . base64_encode(file_get_contents($_FILES['img']['tmp_name']));
            $product->thumbnail=$thumbnail;
        }
        $product->save();
        return redirect('admin/product/updateProduct/'.$p_id)
        ->with("Note", "Sửa thành công!");

}
    public function getProductU() {
        $products = ProductModel::paginate(6);
        return view('user.product.allProduct', ['products' => $products]);
    }

}
