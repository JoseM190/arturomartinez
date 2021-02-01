<?php

namespace App\Repositories;

use App\Models\messages;
use App\Repositories\BaseRepository;

/**
 * Class messagesRepository
 * @package App\Repositories
 * @version February 1, 2021, 3:55 am UTC
*/

class messagesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
        return messages::class;
    }
}
