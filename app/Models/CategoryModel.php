<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "tbl_category";
    protected $primaryKey = "c_id";
    public $incrementing = false;
    protected $keyType = "string";
    public function hasOrderDetail(){
        return $this->hasMany(ProductModel::class, 'c_id', 'p_id');
    }
}
