<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Orders
 * @package App\Models
 * @version October 26, 2021, 9:43 am UTC
 *
 * @property \App\Models\Product $product
 * @property \Illuminate\Database\Eloquent\Collection $salesdetails
 * @property string $order_name
 * @property string $address
 * @property integer $product_id
 * @property integer $quantity_order
 */
class Orders extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'orders';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'order_name',
        'address',
        'product_id',
        'quantity_order'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'order_name' => 'string',
        'address' => 'string',
        'product_id' => 'integer',
        'quantity_order' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'order_name' => 'nullable|string|max:50',
        'address' => 'nullable|string|max:100',
        'product_id' => 'required',
        'quantity_order' => 'nullable|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function product()
    {
        return $this->belongsTo(\App\Models\Product::class, 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function salesdetails()
    {
        return $this->hasMany(\App\Models\Salesdetail::class, 'order_id');
    }
}
