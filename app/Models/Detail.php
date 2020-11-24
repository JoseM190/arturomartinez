<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Detail
 * @package App\Models
 * @version November 24, 2020, 2:22 am UTC
 *
 * @property \App\Models\Question $question
 * @property \App\Models\Student $student1
 * @property \App\Models\Theme $theme1
 * @property \Illuminate\Database\Eloquent\Collection $exams
 * @property integer $student1_id
 * @property integer $theme1_id
 * @property integer $question_id
 * @property string $answer_student
 * @property number $score
 */
class Detail extends Model
{
    use SoftDeletes;

    public $table = 'details';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'student1_id',
        'theme1_id',
        'question_id',
        'answer_student',
        'score'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'student1_id' => 'integer',
        'theme1_id' => 'integer',
        'question_id' => 'integer',
        'answer_student' => 'string',
        'score' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'student1_id' => 'required|integer',
        'theme1_id' => 'required|integer',
        'question_id' => 'required|integer',
        'answer_student' => 'required|string|max:50',
        'score' => 'required|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function question()
    {
        return $this->belongsTo(\App\Models\Question::class, 'question_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function student1()
    {
        return $this->belongsTo(\App\Models\Student::class, 'student1_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function theme1()
    {
        return $this->belongsTo(\App\Models\Theme::class, 'theme1_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function exams()
    {
        return $this->hasMany(\App\Models\Exam::class, 'detail_id');
    }
}
