<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Assistance
 * @package App\Models
 * @version November 24, 2020, 2:05 am UTC
 *
 * @property \App\Models\Student $student
 * @property string $date_assistances
 * @property integer $student_id
 */
class Assistance extends Model
{
    use SoftDeletes;

    public $table = 'assistances';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'date_assistances',
        'student_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'date_assistances' => 'datetime',
        'student_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'date_assistances' => 'required',
        'student_id' => 'required|integer|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function student()
    {
        return $this->belongsTo(\App\Models\Student::class, 'student_id');
    }
}
