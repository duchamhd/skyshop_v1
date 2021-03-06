<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    protected $table = "product";
    public $timestamps = false;
    protected $primaryKey = 'Product_ID';
    const create_at = 'Product_Datetime';
    public function lienket_voi_cate()
    {
        return $this->belongsTo('App\Cate','Product_Cat','Cat_ID');
        
    }
}
