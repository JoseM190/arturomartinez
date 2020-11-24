<?php

namespace App\Repositories;

use App\Models\Subject;
use App\Repositories\BaseRepository;

/**
 * Class SubjectRepository
 * @package App\Repositories
 * @version November 24, 2020, 2:08 am UTC
*/

class SubjectRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name_subjects',
        'course',
        'parallel'
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
        return Subject::class;
    }
}
