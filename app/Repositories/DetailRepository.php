<?php

namespace App\Repositories;

use App\Models\Detail;
use App\Repositories\BaseRepository;

/**
 * Class DetailRepository
 * @package App\Repositories
 * @version November 24, 2020, 2:22 am UTC
*/

class DetailRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'student1_id',
        'theme1_id',
        'question_id',
        'answer_student',
        'score'
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
        return Detail::class;
    }
}
