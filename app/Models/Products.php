<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Products
 * @package App\Models
 * @version October 26, 2021, 9:41 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $orders
 * @property \Illuminate\Database\Eloquent\Collection $salesdetails
 * @property string $product_name
 * @property string $brandname
 * @property string $description
 * @property number $pricing
 * @property number $discount
 * @property integer $stock
 */
class Products extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'products';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'product_name',
        'brandname',
        'description',
        'pricing',
        'discount',
        'stock'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product_name' => 'string',
        'brandname' => 'string',
        'description' => 'string',
        'pricing' => 'decimal:2',
        'discount' => 'decimal:2',
        'stock' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_name' => 'nullable|string|max:50',
        'brandname' => 'nullable|string|max:50',
        'description' => 'required|string|max:500',
        'pricing' => 'nullable|numeric',
        'discount' => 'required|numeric',
        'stock' => 'nullable|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function orders()
    {
        return $this->hasMany(\App\Models\Order::class, 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function salesdetails()
    {
        return $this->hasMany(\App\Models\Salesdetail::class, 'product_id');
    }
}
