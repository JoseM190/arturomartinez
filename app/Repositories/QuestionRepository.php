<?php

namespace App\Repositories;

use App\Models\Question;
use App\Repositories\BaseRepository;

/**
 * Class QuestionRepository
 * @package App\Repositories
 * @version November 24, 2020, 2:21 am UTC
*/

class QuestionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'theme_id',
        'number_question',
        'question',
        'answer'
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
        return Question::class;
    }
}
