<?php

namespace App\Repositories;

use App\Models\Orders;
use App\Repositories\BaseRepository;

/**
 * Class OrdersRepository
 * @package App\Repositories
 * @version October 26, 2021, 9:43 am UTC
*/

class OrdersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'order_name',
        'address',
        'product_id',
        'quantity_order'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Orders::class;
    }
}
