<?php

namespace App\Repositories;

use App\Models\Theme;
use App\Repositories\BaseRepository;

/**
 * Class ThemeRepository
 * @package App\Repositories
 * @version November 24, 2020, 2:14 am UTC
*/

class ThemeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title_theme',
        'subject_id'
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
        return Theme::class;
    }
}
