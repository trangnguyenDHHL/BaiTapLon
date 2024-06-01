<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "tbl_product";
    protected $primaryKey = "p_id";
    public $incrementing = false;
    protected $keyType = "string";
    public function belongstoCustomer(){
        return $this->belongsTo(CategoryModel::class, 'c_id', 'p_id');
    }
}
