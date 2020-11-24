<?php

namespace App\Repositories;

use App\Models\Assistance;
use App\Repositories\BaseRepository;

/**
 * Class AssistanceRepository
 * @package App\Repositories
 * @version November 24, 2020, 2:05 am UTC
*/

class AssistanceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'date_assistances',
        'student_id'
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
        return Assistance::class;
    }
}
