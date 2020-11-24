<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Theme
 * @package App\Models
 * @version November 24, 2020, 2:14 am UTC
 *
 * @property \App\Models\Subject $subject
 * @property \Illuminate\Database\Eloquent\Collection $details
 * @property \Illuminate\Database\Eloquent\Collection $exams
 * @property \Illuminate\Database\Eloquent\Collection $questions
 * @property string $title_theme
 * @property integer $subject_id
 */
class Theme extends Model
{
    use SoftDeletes;

    public $table = 'themes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title_theme',
        'subject_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title_theme' => 'string',
        'subject_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title_theme' => 'required|string|max:30',
        'subject_id' => 'required|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function subject()
    {
        return $this->belongsTo(\App\Models\Subject::class, 'subject_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function details()
    {
        return $this->hasMany(\App\Models\Detail::class, 'theme1_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function exams()
    {
        return $this->hasMany(\App\Models\Exam::class, 'theme2_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function questions()
    {
        return $this->hasMany(\App\Models\Question::class, 'theme_id');
    }
}
