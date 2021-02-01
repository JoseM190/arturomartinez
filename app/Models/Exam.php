<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Exam
 * @package App\Models
 * @version November 24, 2020, 2:23 am UTC
 *
 * @property \App\Models\Detail $detail
 * @property \App\Models\Student $student2
 * @property \App\Models\Theme $theme2
 * @property string $description
 * @property integer $detail_id
 * @property string $date_exam
 * @property number $note_exam
 * @property integer $student2_id
 * @property integer $theme2_id
 */
class Exam extends Model
{
    use SoftDeletes;

    public $table = 'exams';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'description',
        'detail_id',
        'date_exam',
        'note_exam',
        'student2_id',
        'theme2_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'description' => 'string',
        'detail_id' => 'integer',
        'date_exam' => 'datetime',
        'note_exam' => 'float',
        'student2_id' => 'integer',
        'theme2_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'description' => 'required|string|max:50',
        'detail_id' => 'required|integer|max:255',
        'date_exam' => 'required',
        'note_exam' => 'required|numeric',
        'student2_id' => 'required|integer|max:255',
        'theme2_id' => 'required|integer|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function detail()
    {
        return $this->belongsTo(\App\Models\Detail::class, 'detail_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function student2()
    {
        return $this->belongsTo(\App\Models\Student::class, 'student2_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function theme2()
    {
        return $this->belongsTo(\App\Models\Theme::class, 'theme2_id');
    }
}
