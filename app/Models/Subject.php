<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Subject
 * @package App\Models
 * @version November 24, 2020, 2:08 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $themes
 * @property string $name_subjects
 * @property string $course
 * @property string $parallel
 */
class Subject extends Model
{
    use SoftDeletes;

    public $table = 'subjects';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name_subjects',
        'course',
        'parallel'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name_subjects' => 'string',
        'course' => 'string',
        'parallel' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name_subjects' => 'required|string|max:10',
        'course' => 'required|string|max:10',
        'parallel' => 'required|string|max:2',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function themes()
    {
        return $this->hasMany(\App\Models\Theme::class, 'subject_id');
    }
}
