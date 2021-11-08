<?php

namespace App\Repositories;

use App\Models\Sales_Details;
use App\Repositories\BaseRepository;

/**
 * Class Sales_DetailsRepository
 * @package App\Repositories
 * @version October 26, 2021, 9:44 am UTC
*/

class Sales_DetailsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'order_id',
        'product_id',
        'wholesale_stock',
        'Total_amount'
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
        return Sales_Details::class;
    }
}
