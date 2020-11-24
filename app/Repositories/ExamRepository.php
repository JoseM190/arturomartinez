<?php

namespace App\Repositories;

use App\Models\Exam;
use App\Repositories\BaseRepository;

/**
 * Class ExamRepository
 * @package App\Repositories
 * @version November 24, 2020, 2:23 am UTC
*/

class ExamRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'description',
        'detail_id',
        'date_exam',
        'note_exam',
        'student2_id',
        'theme2_id'
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
        return Exam::class;
    }
}
