<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Question
 * @package App\Models
 * @version November 24, 2020, 2:21 am UTC
 *
 * @property \App\Models\Theme $theme
 * @property \Illuminate\Database\Eloquent\Collection $details
 * @property integer $theme_id
 * @property integer $number_question
 * @property string $question
 * @property string $answer
 */
class Question extends Model
{
    use SoftDeletes;

    public $table = 'questions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'theme_id',
        'number_question',
        'question',
        'answer'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'theme_id' => 'integer',
        'number_question' => 'integer',
        'question' => 'string',
        'answer' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'theme_id' => 'required|integer',
        'number_question' => 'required|integer',
        'question' => 'required|string|max:50',
        'answer' => 'required|string|max:50',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function theme()
    {
        return $this->belongsTo(\App\Models\Theme::class, 'theme_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function details()
    {
        return $this->hasMany(\App\Models\Detail::class, 'question_id');
    }
}
