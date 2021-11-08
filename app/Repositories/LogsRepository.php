<?php

namespace App\Repositories;

use App\Models\Logs;
use App\Repositories\BaseRepository;

/**
 * Class LogsRepository
 * @package App\Repositories
 * @version November 7, 2021, 12:40 pm UTC
*/

class LogsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'log',
        'logdetails',
        'logtype'
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
        return Logs::class;
    }
}
